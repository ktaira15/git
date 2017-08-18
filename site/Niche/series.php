<?php
include ('config/init.php');
echo headerHTML('collections');
echo postFormat('collections');
?>
    <center>
      <div class="grid">
      <a href='/Niche/AtHome.php'>
      <div>
          <img src='/Niche/HTML/home/bench/bench.jpg'>
        </div>
        <div>
        <p>at home</p>
        <i>home is where the heart is.<br><br>
        </i>
        </a>
      </div>

      <a href='/Niche/Work.php'>
      <div>
          <img src='/Niche/HTML/desk/theater/theater.jpg'>
        </div>
        <div>
        <p>from the desk of</p>
        <i>stories that spring from your work and passion.<br><br>
        </i>
        </a>
      </div>

      <a href='/Niche/journey.php'>
      <div>
          <img src='/Niche/HTML/journey/windy/windy.jpg'>
        </div>
        <div>
        <p>journeys</p>
        <i>to discover yourself in a new place.<br><br>
        </i>
        </a>
      </div>

      <a href='/Niche/convo.php'>
      <div>
          <img src='/Niche/HTML/convo/boat/boat.jpg'>
        </div>
        <div>
        <p>conversations</p>
        <i>chats in co-habitated space--people and place.<br><br>
        </i>
        </a>
      </div>

    </center>
    <div class="Pad">
    </div>
    <?php
    echo footerHTML();
     ?>
