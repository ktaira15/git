<?php
function previewPost($postID){
  $postPreview = previewAllPosts();
echo "
<a href='".$postPreview[$postID]['link']."'>
<div>
    <img src='".$postPreview[$postID]['image']."'>
  </div>
  <div>
  <p>".
  $postPreview[$postID]['title'].
  "</p>
  <i>".
  $postPreview[$postID]['summary']."
  </i>
  </a>
</div>
  ";
}

function previewAllPosts(){
  $allPreviewArray = array(
    0 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'integrated',
      'image' => '/Niche/HTML/inspo/Inspo2.jpg',
      'summary' => 'A meditation on two lives colliding.<br><br>'
    ),
    1 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'golden state of mind',
      'image' => '/Niche/HTML/journey/sc/sc.jpg',
      'summary' => 'The thousand-mile trip up the coast of our home.<br><br>'
    ),
    2 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'giants',
      'image' => '/Niche/HTML/inspo/Inspo5.jpg',
      'summary' => 'A new way or looking at the world.<br><br>'
    ),
    3 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'day trip',
      'image' => '/Niche/HTML/inspo/inspo6.jpg',
      'summary' => 'The sounds and colors of your neighborhood, reexamined.<br><br>'
    ),
    4 => array(
      'link' => '/Niche/viewPost.php?postID=1',
      'title' => 'street wear naturalized',
      'image' => '/Niche/HTML/journey/meadows/camo.jpg',
      'summary' => 'LA fashion in the wilderness of Scotland.<br><br>'
    ),
    5 => array(
      'link' => '/Niche/viewPost.php?postID=2',
      'title' => 'on living alone',
      'image' => '/Niche/HTML/home/alone/alone.jpg',
      'summary' => 'To live abroad and live broadly.<br><br>'
    ),
    6 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'in the hills',
      'image' => '/Niche/HTML/journey/wasted/wasted.jpg',
      'summary' => 'Reclaiming adventure after a two-year lull.<br><br>'
    ),
  );
  return $allPreviewArray;
}
?>





<?php
/*AND JUST FOR NEW STUFF*/
function previewNewPost($postID){
  $postNewPreview = previewNewPosts();
echo "
<a href='".$postNewPreview[$postID]['link']."'>
<div>
    <img src='".$postNewPreview[$postID]['image']."'>
  </div>
  <div>
  <p>".
  $postNewPreview[$postID]['title'].
  "</p>
  <i>".
  $postNewPreview[$postID]['summary']."
  </i>
  </a>
  <br>
</div>
  ";
}

function previewNewPosts(){
  $newPreviewArray = array(
    0 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'day trip',
      'image' => '/Niche/HTML/inspo/inspo6.jpg',
      'summary' => 'The sounds and colors of your neighborhood, reexamined.<br><br>'
    ),
    1 => array(
      'link' => '/Niche/viewPost.php?postID=1',
      'title' => 'street wear naturalized',
      'image' => '/Niche/HTML/journey/meadows/camo.jpg',
      'summary' => 'LA fashion in the wilderness of Scotland.<br><br>'
    ),
    2 => array(
      'link' => '/Niche/viewPost.php?postID=2',
      'title' => 'on living alone',
      'image' => '/Niche/HTML/home/alone/alone.jpg',
      'summary' => 'To live abroad and live broadly.<br><br>'
    ),
    3 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'in the hills',
      'image' => '/Niche/HTML/journey/wasted/wasted.jpg',
      'summary' => 'Reclaiming adventure after a two-year lull.<br><br>'
    ),
  );
  return $newPreviewArray;
}
?>
