<!--
    Contributors: Thomas Loudon and Daniel Knoll
    Date: 01/05/2022
    URL: https://tloudon.greenriverdev.com.greenriverdev.com/328/Cupcakes/
    GitHub: https://github.com/dknoll1/Cupcakes
    Description: Web form for cupcake ordering.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
</head>
<body>
    <?php

        //variable declarations
        $name = $_POST['name'];
        $cupcakes = $_POST['flavor'];
        $totalPrice = 0.0;

        //display name and Thank you message
        echo '<p>Thank you, ' . $name . ', for your order!</p>';

        //Order summary
        echo '<p>Order Summary:</p>';
        echo '<ul>';
        foreach ($cupcakes as $cupcake){
            echo '<li>'. $cupcake . '</li>';
            $totalPrice += 3.50;
        }
        echo '</ul>';

        //Display total price
        echo '<p>Order Total: '. $totalPrice . '</p>';


    ?>
</body>
</html>