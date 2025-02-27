<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per aver inviato il messaggio</title>
</head>

<body>

    <?php
    include "constants.php";

    if (!isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['address']) || !isset($_POST['pizza']) || !isset($_POST['quantity'])) {
        header('Location: index.php');
        exit;
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $ordered_pizza = $_POST['pizza'];
    $quantity = $_POST['quantity'];
    $prezzo = null;

    foreach ($pizze as $pizza) {
    if ($pizza['gusto'] === $ordered_pizza) {
        $prezzo = $pizza['prezzo'];
        break; 
    }
    }

    $total = $prezzo * $quantity;
    
    if (empty($fname) || empty($lname) || empty($address) || empty($pizza) || empty($quantity)) {
        echo 'Devi compilare il form';
        echo '<script>
                    setTimeout(()=>{
                        location.href = "index.php";
                    },5000)
                </script>';
        exit;
    }

    $file = __DIR__ . '/orders/.order.txt';

    $fileContent = "Customer: $fname $lname" . "\r\n" .
        "Address: $address" .
        "Order: \r\n" .
        "Pizza: $ordered_pizza" . "\r\n" .
        "Quantity: $quantity" . "\r\n";
        "Total amount: $total" . "\r\n";

    file_put_contents($file, $fileContent);

    echo "Dear $fname $lname,<br> 
          we're successfully received your order!<br> 
          <hr>
          Your order: <br> 
          Pizza: $ordered_pizza <br>
          Quantity: $quantity <br>
          Total : $total <br>";


  
