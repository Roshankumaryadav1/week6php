<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QNo3</title>
</head>
<body>
    <?php 
        $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'Fox');
        foreach ($a as $key => $value)
        {
           echo $key.' : '. $value.'<br/>';
        }
    ?>
</body>
</html>