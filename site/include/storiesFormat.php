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
  <br><br><br><br>
</div>
  ";
}

function previewAllPosts(){
  $allPreviewArray = array(
    0 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'day trip',
      'image' => '/Niche/HTML/inspo/inspo6.jpg',
      'summary' => 'pointed summary here thanks and now it will be even longer to see how it actually functions with multiple lines'
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
  return $allPreviewArray;
}
?>
