<?php
$text1 = 'salut ';
$text2 = 'Cédric ';
function ConcatenationString($string1, $string2){
  $result = $string1 . $string2;
  return $result ;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>php part4 ex3</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?= ConcatenationString($text1 , $text2); ?>
  </body>
</html>
