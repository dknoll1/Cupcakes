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
        $cupcakes = array($_POST['flavor']);
        $totalPrice = 0.0;

        echo 'Thank you, ' . $name . 'for your order!';

        echo 'Order Summary';
        foreach ($cupcakes as $cupcake){
            echo $cupcake;
            $totalPrice += 3.50;
        }
        echo 'Order Total: '. $totalPrice;


    ?>
</body>
</html>