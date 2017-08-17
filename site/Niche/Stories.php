<?php
include ('config/init.php');
echo headerHTML('Stories');
echo postFormat('stories');

/*can probably just echo previewPost() instead of huge ass list
in order to make this function work for all the other anthologies, i would somehow have to selectively pick parts of the array. is there a way to echo all of the array, is it just laving () blank? selectively echoing by putting in parameters for anthologies may not actually work..will have to revisit this.
 */
?>
<div class="grid">
          <?php
          $allPreviewArray = previewAllPosts();
          for($i = 0; $i < sizeof($allPreviewArray); $i++){
            echo previewPost($i);
          }
          ?>
</div>
<div class="pad">
</div>
<?php
echo footerHTML();
 ?>
