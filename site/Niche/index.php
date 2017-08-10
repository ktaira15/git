<html>
  <div class="HomeImage">
    <?php
    include ('config/init.php');

    /*you're going to have to make your series page and then the individual series look like this*/
      echo headerHTML('Niche Anthology');
    ?>
    <div class="HomeHeading">
      <p>escape your</p>
    <div class="Title">
      <p>NICHE</p>
    </div>
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

<div class="grid">
          <?php
          $allPreviewArray = previewAllPosts();
          for($i = 0; $i < sizeof($allPreviewArray); $i++){
            echo previewPost($i);
          }
          ?>

</div>
</html>
<?php
  echo footerHTML();
?>
