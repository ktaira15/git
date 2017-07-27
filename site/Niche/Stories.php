<?php
include ('config/init.php');
echo headerHTML('Stories');
echo postFormat('stories');

/*can probably just echo previewPost() instead of huge ass list
in order to make this function work for all the other anthologies, i would somehow have to selectively pick parts of the array. is there a way to echo all of the array, is it just laving () blank? selectively echoing by putting in parameters for anthologies may not actually work..will have to revisit this.
 */
?>

    <div class="StoryPosts">
      <a href="alone.html">
        <img src="html/home/alone/alone.jpg">
        <div class="StoryPad">
          the importance of living alone
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="street.html">
        <img src="html/journey/meadows/camo.jpg">
        <div class="StoryPad">
          street wear naturalized
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="smush.html">
        <img src="html/inspo/inspo6.jpg">
        <div class="StoryPad">
          day trip
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/journey/windy/windy.jpg">
        <div class="StoryPad">
          windy city
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="Post3.html">
        <img src="html/journey/wasted/wasted.jpg">
        <div class="StoryPad">
          how to look good while wasted
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/convo/time/friends.jpg">
        <div class="StoryPad">
          friendship between continents
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="Post3.html">
        <img src="html/convo/boat/boat.jpg">
        <div class="StoryPad">
          boats and hoes: to be young and abroad with your best friends
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="Post3.html">
        <img src="html/desk/theater/theater.jpg">
        <div class="StoryPad">
          on futurism, the stage, and bouncy balls
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
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/journey/explore.jpg">
        <div class="StoryPad">
          queen of the castle
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/desk/blue/write.jpg">
        <div class="StoryPad">
          how to sneak an underage girl into a club and document it
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="friends.html">
        <img src="html/convo/convo.jpg">
        <div class="StoryPad">
          longview: 16 years and 6000 miles of friendship
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="sc.html">
        <img src="html/journey/sc/sc.jpg">
        <div class="StoryPad">
          you girls can't go to santa cruz
        </div>
      </a>
    </div>
    <div class="StoryPosts">
      <a href="Post3.html">
        <img src="html/convo/emo.jpg">
        <div class="StoryPad">
          help! my friends is emo
        </div>
      </a>
    </div>
<?php
echo footerHTML();
 ?>
