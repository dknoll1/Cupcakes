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
        $isError = false;
        $totalPrice = 0;

        if(!empty($_POST['name'])) {
            $name = $_POST['name'];
        }else {
            echo "<p>You didn't enter your name.</p>";
            $isError = true;
        }
        $cupcakes = $_POST['flavor'];
        // so I will total the price before the order list is displayed so they will only see their order if they
        // did not make an error in selection
        foreach($cupcakes as $cupcake) {
            $totalPrice += 3.50;
        }
        if($totalPrice == 0) {
            echo "<p>You didn't select any cupcake.</p>";
            $isError = true;
        }

        if(!$isError) {
            //display name and Thank you message
            echo '<p>Thank you, ' . $name . ', for your order!</p>';

            //Order summary
            echo '<p>Order Summary:</p>';
            echo '<ul>';
            foreach ($cupcakes as $cupcake){
                echo '<li>'. $cupcake . '</li>';
            }
            echo '</ul>';

            //Display total price
            echo '<p>Order Total: '. $totalPrice . '</p>';
        }else{
            echo "Please go back <a href=index.php>here</a> to make a valid order.";
        }


    ?>
</body>
</html>