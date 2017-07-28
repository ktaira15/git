<?php
include ('config/init.php');
$postID = $_REQUEST['postID'];
echo previewPost($postID);
echo footerHTML();
?>
