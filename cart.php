<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form class="form" action="cart.php" method="post">
          <input type="text" name="input" value="">
          <input type="submit" name="submit" value="">
        </form>
    </body>
</html>

<?php


session_start();

$_SESSION['Skateboard'] = 1;
$_SESSION['Skeelers'] = 2;
$_SESSION['BasketBal'] = 3;

if (isset($_POST['submit']))
{
  $input = $_POST['input'];
  foreach ($_SESSION as $value)
  {
    if ($value == $input)
    {
      echo "<h1> Gekozen item: #" . $value . "</h1>";
      return;
    }
  }
}

 ?>
