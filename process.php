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

        $name = $_POST['name'];
        $cupcakes = $_POST['flavor'];
        $totalPrice = 0.0;

        echo '<p>Thank you, ' . $name . ', for your order!</p>';

        echo '<p>Order Summary:</p>';
        echo '<ul>';
        foreach ($cupcakes as $cupcake){
            echo '<li>'. $cupcake . '</li>';
            $totalPrice += 3.50;
        }
        echo '</ul>';
        echo '<p>Order Total: '. $totalPrice . '</p>';


    ?>
</body>
</html>