<?php
function getPost($postID){
  $allPosts = getAllPosts();

  /*$array = array(0=>"a", 1=>"b", 2=>"c");
  you define literal whole content in here dude
  said to also make a link to external stylesheet in one of my includes*/
return headerHTML($allPosts[$postID]['title']).
postFormat($allPosts[$postID]['title']).
"<div class='PostText'>
<div class='PostLeft'>
  <img src='".$allPosts[$postID]['image1']. "'
</div>".
$allPosts[$postID]['italics'].
$allPosts[$postID]['body']."</div>".
wordCredit ($allPosts[$postID]['words']).
photoCredit ($allPosts[$postID]['photos']);
}

function getAllPosts(){
  $allPostsArray = array(
    0 => array(
      'postID' => 0,
      'title' => 'day trip',
      'italics' => '<p><i>have you ever listened to "kubla khan" in the middle of the afternoon with all your colors moving? then this is for you</i></p>
      <hr>',
      'body' => 'this is a test my dude', /*how do i get body to format as i want to? is it all part of the include thing?*/
      'image1' => '/Niche/HTML/inspo/inspo6.jpg',
      'words' => 'katelyn taira',
      'photos' => 'katelyn taira and spencer tong'
    ),
    1 => array(
      'postID' => 1,
      'title' => 'street wear naturalized',
      'body' => 'and anotha one my guy'
    )
  );
  return $allPostsArray;
}
?>
