<?php
function previewPost($postID){
  $postPreview = previewAllPosts();
echo "
<div>
  <a href='".$postPreview[$postID]['link']."'>
    <img src='".$postPreview[$postID]['image']."'>
    <p>".
      $postPreview[$postID]['title'].
    "</p>
  </a>
  </div>";
}

function previewAllPosts(){
  $allPreviewArray = array(
    0 => array(
      'link' => '/Niche/viewPost.php?postID=0',
      'title' => 'day trip',
      'image' => '/Niche/HTML/inspo/inspo6.jpg'
    ),
    1 => array(
      'link' => '/Niche/viewPost.php?postID=1',
      'title' => 'street wear naturalized',
      'image' => '/Niche/HTML/journey/meadows/camo.jpg'
    ),
    2 => array(
      'link' => '/Niche/viewPost.php?postID=2',
      'title' => 'on living alone',
      'image' => '/Niche/HTML/home/alone/alone.jpg'
    )
  );
  return $allPreviewArray;
}
?>
