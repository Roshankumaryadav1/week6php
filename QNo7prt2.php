<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QNo7prt2</title>
</head>
<body>
    <?php
     $day = $_POST['day'];
     if($day=="Monday"){
        echo "Laugh on $day, laugh for danger."; 
     }
     elseif($day=="Tuesday"){
        echo "Laugh on $day, smile at stranger."; 
     }
     elseif($day=="Wednesday"){
        echo "Laugh on $day, laugh for a letter."; 
     }
     elseif($day=="Thursday"){
        echo "Laugh on $day, something better."; 
     }
     elseif($day=="Friday"){
        echo "Laugh on $day, laugh for sorrow."; 
     }
     elseif($day=="Saturday"){
        echo "Laugh on $day, joy tomorrow."; 
     }
     elseif($day=="Sunday"){
        echo "no line in poem"; 
     }
    ?>
</body>
</html>