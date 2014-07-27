<?php
	require_once("aglima.badwords.class.php");
	$BadWords = new AglimaBadWords;
	
	$BadWords->add("lol");
	$BadWords->add("test");
	$BadWords->add("dislike");

	if($BadWords->isBadWord("lol")) {
		echo "'lol' is a badword.";
	}
	
	$BadWords->dump();
	
	echo $BadWords->getCount().' badwords found.';
?>
