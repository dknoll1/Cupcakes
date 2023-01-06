/*
    Contributors: Thomas Loudon and Daniel Knoll
    Date: 01/05/2022
    URL: https://tloudon.greenriverdev.com.greenriverdev.com/328/Cupcakes/
    GitHub: https://github.com/dknoll1/Cupcakes
    Description: Web form for cupcake ordering.
*/
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick a Cupcake</title>
</head>
<body>
    <h1>Cupcake Fundraiser Form!</h1>
    <form action="process.php" method="POST">
        <label>Your name: </label>
            <input type="text" name="name" id="name"><br>
        <label>The Grasshopper<input type="checkbox" value="The Grasshopper" name="flavor[]"></label><br>
        <label>Whiskey Maple Bacon<input type="checkbox" value="Whiskey Maple Bacon" name="flavor[]"></label><br>
        <label>Carrot Walnut<input type="checkbox" value="Carrot Walnut" name="flavor[]"></label><br>
        <label>Salted Caramel Cupcake<input type="checkbox" value="Salted Caramel Cupcake" name="flavor[]"></label><br>
        <label>Red Velvet<input type="checkbox" value="Red Velvet" name="flavor[]"></label><br>
        <label>Lemon Drop<input type="checkbox" value="Lemon Drop" name="flavor[]"></label><br>
        <label>Tiramisu<input type="checkbox" value="Tiramisu" name="flavor[]"></label><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
