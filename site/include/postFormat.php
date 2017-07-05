<?php
function postFormat($postTitle){
  return "
      <div class='Padding'>
      </div>
      <div class='PostTitle'>
        $postTitle
      </div>";
}

function echoCreditText($words, $photo){
  return "
  <html>
    <head>
      <link rel='stylesheet' type='text/css' href='stylesheet.css'>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:300,400,600'>
    </head>
    <body>
      <div class='CreditText'>
        <p>words: $words</p>
        <p>photography: $photo</p>
      </div>
    </body>
  </html>";
}
/*okay, but what do i do with these once i make that huge array...*/
?>
