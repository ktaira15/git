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
      'title' => 'day trip',
      'image' => '/Niche/HTML/inspo/inspo6.jpg',
      'summary' => 'pointed summary here thanks and now it will be even longer to see how it actually functions with multiple lines<br><br>'
    ),
    1 => array(
      'link' => '/Niche/viewPost.php?postID=1',
      'title' => 'street wear naturalized',
      'image' => '/Niche/HTML/journey/meadows/camo.jpg',
      'summary' => ''
    ),
    2 => array(
      'link' => '/Niche/viewPost.php?postID=2',
      'title' => 'on living alone',
      'image' => '/Niche/HTML/home/alone/alone.jpg',
      'summary' => ''
    ),
    3 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'the hills are alive',
      'image' => '/Niche/HTML/journey/wasted/wasted.jpg',
      'summary' => ''
    ),
    4 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'glasgow',
      'image' => '/Niche/HTML/inspo/Inspo2.jpg',
      'summary' => ''
    ),
    5 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'golden state of mind',
      'image' => '/Niche/HTML/journey/sc/sc.jpg',
      'summary' => ''
    ),
    6 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'giants',
      'image' => '/Niche/HTML/inspo/Inspo5.jpg',
      'summary' => ''
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
      'summary' => 'pointed summary here thanks and now it will be even longer to see how it actually functions with multiple lines<br><br>'
    ),
    1 => array(
      'link' => '/Niche/viewPost.php?postID=1',
      'title' => 'street wear naturalized',
      'image' => '/Niche/HTML/journey/meadows/camo.jpg',
      'summary' => ''
    ),
    2 => array(
      'link' => '/Niche/viewPost.php?postID=2',
      'title' => 'on living alone',
      'image' => '/Niche/HTML/home/alone/alone.jpg',
      'summary' => ''
    ),
    3 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'the hills are alive',
      'image' => '/Niche/HTML/journey/wasted/wasted.jpg',
      'summary' => ''
    ),
  );
  return $newPreviewArray;
}
?>
