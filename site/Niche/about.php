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
    <div class="Pad">
    </div>
    <div class="InspoText">
      <div class="Pad">
      </div>
      <?php
      echo postFormat('about niche');
      ?>
      <p>Niche is about exploring environments and understanding that where we live intrisically affects who we are.</p>
      <p>Niche borrows from the Japanese concept of <i>ma</i>, which understands that place is personal--it is constructed in our imagination and lived out in our subjective experience. In capturing how people view, relate to, and live in their unique and intimate spaces, we're one step closer to uncovering what it means to exist in our complicated world.</p>
      <p>Enjoy learning about our niches. Escape yours for a bit to come live in ours.</p>
    </div>
    <?php
    echo footerHTML();
    ?>
