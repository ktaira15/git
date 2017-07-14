<?php
include ('config/init.php');
echo echoHeaderHTML('Anthologies');
echo postFormat('anthologies');
?>
    <center>
      <div class="Anth">
        <a href="athome.html">
          <img src="html/home/alone/alone.jpg">
          <div class="AnthPad">
            at home
          </div>
        </a>
        <a href="desk.html">
          <img src="html/desk/theater/theater.jpg">
          <div class="AnthPad">
            from the desk of
          </div>
        </a>
        <a href="journey.html">
          <img src="html/journey/explore.jpg">
          <div class="AnthPad">
            journeys
          </div>
        </a>
        <a href="convo.html">
          <img src="html/convo/convo.jpg">
          <div class="AnthPad">
            conversations
          </div>
        </a>
      </div>
    </center>
    <?php
    echo echoFooterHTML();
     ?>
