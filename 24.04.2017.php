<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<form action="24.04.2017.php" method="post">

    <input type="text" name="Name"  placeholder="Name" /> <br/>

    <input type="tel" name="Tel"  maxlength="13" placeholder="Tel"/> <br/>

    <input type="email" name="email"  placeholder="email" /> <br/>



    <input type="submit"/>
</form>

<?php

$_POST = array(
    'Name'=>'name',
    'Tel'=>'tel',
    'email'=>'email'
);

print_r($_POST);

?>
</html>
