<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<form action="24.04.2017(serialize).php" method="get">

    <input type="text" name="Name"   value="" /> <br/>

    <input type="tel" name="Tel"  maxlength="13" value=""/> <br/>

    <input type="text" name="message"  value="" /> <br/>

    <input type="submit"/>
</form>

<?php


echo "<br>" ;

$value = array(name => "Vit",tel => 38095, mes => "" )  ;

serialize($value);

$a = 'hello';
$str = "This is some $aworld"; // we got notice since $aworld is undefined
$str1 = "This is some $a world"; // thats ok, but not quite fine
$str2 = "This is some {$a} world"; // thats cool

echo $str2; // oops

?>
</html>
