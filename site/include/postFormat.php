<?php
function postFormat($title){
  return "
      <div class='Padding'>
      </div>
      <div class='PostTitle'>
        $title

      </div>";
}

function wordCredit($words){
  return "
  <br>
    <div class='CreditText'>
      <p>words: $words</p>
  ";
}

function photoCredit($photos){
  return "
    <p>photography: $photos</p>
    </div>
  ";
}
?>
