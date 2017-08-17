<?php
include ('config/init.php');
echo headerHTML('Anthologies');
echo postFormat('anthologies');
?>
    <center>
      <div class="grid">
      <a href='/Niche/AtHome.php'>
      <div>
          <img src='/Niche/HTML/home/bench/bench.jpg'>
        </div>
        <div>
        <p>at home</p>
        <i>stories that you inhabit<br><br>
        </i>
        </a>
      </div>

      <a href='/Niche/Work.php'>
      <div>
          <img src='/Niche/HTML/desk/theater/theater.jpg'>
        </div>
        <div>
        <p>from the desk of</p>
        <i>stories about your calling
        </i>
        </a>
      </div>

      <a href='/Niche/journey.php'>
      <div>
          <img src='/Niche/HTML/journey/windy/windy.jpg'>
        </div>
        <div>
        <p>journeys</p>
        <i>
        </i>
        </a>
      </div>

      <a href='/Niche/convo.php'>
      <div>
          <img src='/Niche/HTML/convo/boat/boat.jpg'>
        </div>
        <div>
        <p>conversations</p>
        <i>
        </i>
        </a>
      </div>

    </center>
    <?php
    echo footerHTML();
     ?>
