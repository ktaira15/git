<?php
function getPost($postID){
  $allPosts = getAllPosts();
return headerHTML($allPosts[$postID]['title']).
postFormat($allPosts[$postID]['title']).
"<div class='PostText'>
<div class='PostLeft'>
<div class='Zoom'>
  <img src='".$allPosts[$postID]['image1']."'>
</div>
</div>".
$allPosts[$postID]['italics'].
$allPosts[$postID]['body1']."</div>".
"<div class='PostText'>
<div class='PostRight'>
  <img src='".$allPosts[$postID]['image2']. "'
</div>".
$allPosts[$postID]['body2']."</div>".
wordCredit ($allPosts[$postID]['words']).
photoCredit ($allPosts[$postID]['photos']);
}

function getAllPosts(){
  $allPostsArray = array(
    0 => array(
      'title' => 'day trip',
      'italics' => '<p><i>A pointed summary of the article will go here.</i></p><hr>',
      'body1' => 'Example text goes here. Something just occurred to me--I cannot use apostrophes in any text here, because it will end the string and render everything else invalid. This can be a huge potential problem, but I think switching over to a database may mitigate this.',
      'body2' => 'Another issue is that I do not think I can add in my formatted photos without breaking up my body paragraphs. This is not a huge deal, sincee I essentially did this with divs in my HTML, but still a bit of a pain. I wonder if I do not have as many pictures or body text sections in other postIDs if it will mess up that formatting. I bet if I leave the string as blank, it will be fine. I should check on this at the office when I have vagrant set up.',
      'image1' => '/Niche/HTML/inspo/inspo6.jpg',
      'image2' => '',
      'words' => 'katelyn taira',
      'photos' => 'katelyn taira'
    ),
    1 => array(
      'title' => 'street wear naturalized',
      'italics' => '<p><i>A pointed summary of the article will go here. This post is going to experiment in leaving image2 blank but body2 intact.</i></p><hr>',
      'body1' => 'Example text goes here. Something just occurred to me--I cannot use apostrophes in any text here, because it will end the string and render everything else invalid. This can be a huge potential problem, but I think switching over to a database may mitigate this.',
      'body2' => 'Another issue is that I do not think I can add in my formatted photos without breaking up my body paragraphs. This is not a huge deal, sincee I essentially did this with divs in my HTML, but still a bit of a pain. I wonder if I do not have as many pictures or body text sections in other postIDs if it will mess up that formatting. I bet if I leave the string as blank, it will be fine. I should check on this at the office when I have vagrant set up.',
      'image1' => '/Niche/HTML/journey/meadows/sun.jpg',
      'image2' => '',
      'words' => 'katelyn taira',
      'photos' => 'katelyn taira',
    ),
    2 => array(
      'title' => 'on living alone',
      'italics' => '<p><i>A pointed summary of the article will go here in italics.</i></p><hr>',
      'body1' => 'Example text goes here. Actual articles will include more body text as well as more associated photographs. A zoom for the photos will also be programmed in with jQuery effects.',
      'body2' => '',
      'image1' => '/Niche/HTML/home/alone/alone.jpg',
      'image2' => '',
      'words' => 'katelyn taira',
      'photos' =>'kyle matthews'
    )
  );
  return $allPostsArray;
}
?>
