<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>
    <?php
    $pizze = [
        [
            'gusto' => 'Margherita',
            'prezzo' => 5
        ],
        [
            'gusto' => 'Diavola',
            'prezzo' => 1
        ],
        [
            'gusto' => 'Marinara',
            'prezzo' => 4
        ],
        [
            'gusto' => 'Ortolana',
            'prezzo' => 6
        ],
    ];
    ?>
    <form action="output.php" method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name"><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" placeholder="Enter your address"><br>
            <input type="submit" value="Submit">
        </fieldset>

        <label for="pizza">Pizza</label>

        <?php
        echo '<select name="pizza" id="pizza">';
        foreach ($pizze as $pizza) {
            echo '<option value="' . $pizza['gusto'] . $pizza['prezzo'] . '">' . $pizza['gusto'] . ' (' . $pizza['prezzo'] . '€)</option>';
        }
        echo '</select>';
        ?>

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" value="1">

        <button>Order</button>

    </form>
</body>

</html>