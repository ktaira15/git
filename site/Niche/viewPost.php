<?php
include ('config/init.php');
$postID = $_REQUEST['postID'];
echo getPost($postID);
echo footerHTML();
?>
