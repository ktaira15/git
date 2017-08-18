<?php
function getPost($postID){
  $allPosts = getAllPosts();
return headerHTML($allPosts[$postID]['title']).
postFormat($allPosts[$postID]['title']).
"<div class='StoryGrid'>
  <div>
    <img src='".$allPosts[$postID]['image1']."'>
  </div>
<div>".
$allPosts[$postID]['italics'].
$allPosts[$postID]['body1']."<p>".
wordCredit ($allPosts[$postID]['words']).
photoCredit ($allPosts[$postID]['photos']).
"</p></div>
<div>
  <img src='".$allPosts[$postID]['image2']."'>
</div>";
}

function getAllPosts(){
  $allPostsArray = array(
    0 => array(
      'title' => 'day trip',
      'italics' => '<i>A pointed summary of the article will go here, a few lines to make it look best.</i><hr>',
      'body1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'image1' => '/Niche/HTML/inspo/inspo6.jpg',
      'image2' => '/Niche/HTML/home/smush/surprise.jpg',
      'words' => 'katelyn taira',
      'photos' => 'katelyn taira and spencer tong'
    ),
    1 => array(
      'title' => 'street wear naturalized',
      'italics' => '<p><i>A pointed summary of the article will go here. This post is going to experiment in leaving image2 blank but body2 intact.</i></p><hr>',
      'body1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      'image1' => '/Niche/HTML/journey/meadows/sun.jpg',
      'image2' => '/Niche/HTML/journey/meadows/art.jpg',
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
