<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QNo2</title>
</head>
<body>
  <?php
        function isPalindrome($str){
            $reversestr = strrev($str);
            if($str === $reversestr) { 
                return true; 
              } else {
                return false; 
              }
        }
        $input = "madam";
        $inputwithoutspace = str_replace(' ', '', $input);
        if(isPalindrome($inputwithoutspace)) {
        echo "$input is a palindrome!";
        } else {
        echo "$input is not a palindrome.";
        }
    ?>
</body>
</html>