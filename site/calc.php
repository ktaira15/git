<?php
include('config/init.php');
function add($param1, $param2){
  return $param1 + $param2;
}
function subtract($param1, $param2){
  return $param1 - $param2;
}
function multiply($param1, $param2){
  return $param1 * $param2;
}
function divide($param1, $param2){
  return $param1 / $param2;
}

echo "
  <form action='' method='get'>
    <input name='param1' /> <br>
    <input type='radio' name='add' /> add <br>
    <input type='radio' name='subtract' /> subtract <br>
    <input type='radio' name='multiply' /> multiply <br>
    <input type='radio' name='divide' /> divide <br>
    <input name='param2' /> <br>
    <input name='submitForm' type='submit' />
    </form>
    ";
    if(isset($_REQUEST['add'])){
      echo "<h1>The answer is: ".add($_REQUEST['param1'],
      $_REQUEST['param2'])."</h1>";
    }
    elseif(isset($_REQUEST['subtract'])){
      echo "<h1>The answer is: ".subtract($_REQUEST['param1'],
      $_REQUEST['param2'])."</h1>";
    }
    elseif(isset($_REQUEST['multiply'])){
      echo "<h1>The answer is: ".multiply($_REQUEST['param1'],
      $_REQUEST['param2'])."</h1>";
    }
    else {
      echo "<h1>The answer is: ".divide($_REQUEST['param1'],
      $_REQUEST['param2'])."</h1>";
    }
?>
