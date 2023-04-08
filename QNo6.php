<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QNo6</title>
</head>
<body>
    <form method="post" >
        <label for="city">City: </label>
        <input type="text" name="city" id="city" required>
        <br>
        <input type="submit" value="submit">
    </form>
    <?php
    if (isset ($_POST['city'])){
        $city = $_POST['city'];
        echo "<p>Your favourite city is $city.</p>"; 
    } else{
        echo "<p> form not submitted</p>"; 
    }
    ?>
</body>
</html>