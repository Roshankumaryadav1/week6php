<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QNo11</title>
</head>
<body>
    <?php
    function RectangleArea($w, $l) {
        $area = $w * $l;
        return "A rectangle of length $l and width $w has an area of $area.";
      }
    $w = 5;
    $l = 10;
    $result = RectangleArea($w, $l);
    echo $result;
    ?>
</body>
</html>