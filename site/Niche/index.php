<html>
  <div class="HomeImage">
    <?php
      include ('config/init.php');
      echo echoHeaderHTML('Niche Anthology');
    ?>
    <div class="HomeHeading">
      <p>escape your</p>
    </div>
    <div class="Title">
      <p>NICHE</p>
    </div>
  </div>
    <div class="HomePullQuote">
      "Pull quote here--something inspiring and pithy that encapsulates project's vibe. Maybe something bordering contrived, because it needs to conform enough to audience's expectations."
    </div>
    <div class="StoryPad">
    </div>
    <div class="PostTitle">
      new in the collection
  </div>
  <div class="StoryPosts">
  <a href="/Niche/viewPost.php?postID=0">
    <img src="HTML/inspo/inspo6.jpg">
    <div class="StoryPad">
      day trip
    </div>
  </a>
  </div>
  <div class="StoryPosts">
  <a href="Post3.html">
    <img src="HTML/desk/theater/theater.jpg">
    <div class="StoryPad">
      on futurism, the stage, and bouncy balls
    </div>
  </a>
  </div>
  <div class="StoryPosts">
  <a href="Post3.html">
    <img src="HTML/convo/emo.jpg">
    <div class="StoryPad">
      help! my friends is emo
    </div>
  </a>
  </div>
  <div class="StoryPosts">
  <a href="street.html">
    <img src="HTML/journey/meadows/camo.jpg">
    <div class="StoryPad">
      street wear naturalized
    </div>
  </a>
  </div>
</html>
<?php
  echo echoFooterHTML();
?>
