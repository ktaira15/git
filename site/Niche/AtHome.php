<?php
  include ('config/init.php');
  echo headerHTML('Anthologies');
  echo postFormat('at home');
?>
<center>
    <div class="StoryPosts">
      <a href="alone.html">
        <img src="html/home/alone/alone.jpg">
        <div class="StoryPad">
          on living alone
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/home/bench/bench.jpg">
        <div class="StoryPad">
          swinging life away
        </div>
      </a>
    </div>
    <?php
  echo footerHTML();
    ?>
