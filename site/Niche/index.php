<html>
  <div class="HomeImage">
    <?php
    include ('config/init.php');

    /*you're going to have to make your series page and then the individual series look like this*/
      echo headerHTML('Niche Anthology');
    ?>
    <div class="HomeHeading">
      <p>explore your</p>
    <div class="Title">
      <p>NICHE</p>
    </div>
  </div>
</div>
    <div class="HomePullQuote">
      A consciousness of place, an awareness of your own element. Find what makes you. <br>Explore your niche.
    </div>
    <div class="StoryPad">
    </div>
    <div class="Collection">
      new in the collection
    </div>

<div class="grid">
          <?php
          $newPreviewArray = previewNewPosts();
          for($i = 0; $i < sizeof($newPreviewArray); $i++){
            echo previewNewPost($i);
          }
          ?>
</div>
<div class="Pad">
</div>
</html>
<?php
  echo footerHTML();
?>
