<?php
function postFormat($title){
  return "
      <div class='Padding'>
      </div>
      <div class='PostTitle'>
        $title
      </div>
      </div>
      </div>";
}

function wordCredit($words){
  return "
  <html>
    <div class='CreditText'>
      <p>words: $words</p>
  </html>";
}

function photoCredit($photos){
  return "
  <html>
    <p>photography: $photos</p>
    </div>
    <div class='EndBuffer'>
    </div>
    </div>
    </div>
  </html>";
}
/*okay, but what do i do with these once i make that huge array...*/
?>
