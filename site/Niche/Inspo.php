<?php
  include ('config/init.php');
  echo headerHTML('Inspiration');
?>
    <div class="Inspo">
      <img src="html/inspo/Inspo5.jpg">
      <img src="html/inspo/Inspo2.jpg">
      <img src="html/inspo/Inspo3.jpg">
      <img src="html/inspo/Inspo6.jpg">
      <img src="html/inspo/Inspo4.jpg">
    </div>
    <div class="InspoText">
      <?php
      echo postFormat('inspiration');
      ?>
      <p>Some pithy nonsense on this line</p>
      <p>Put actual elaboration here</p>
      <p>Provide snapshots, glimpses into people's lives you otherwise would know nothing about, get an interior look into the places that shape and are shaped by them</p>
      <p>End with more pithy stuff</p>
    </div>
    <?php
    echo footerHTML();
    ?>
