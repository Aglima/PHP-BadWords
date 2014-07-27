BadWords
===========
<b>Functions</b>
<ul>
  <li>add(word);</li>
  <li>remove(word);</li>
  <li>isBadWord(word);</li>
  <li>getCount();</li>
  <li>dump();</li>
</ul>
<b>Example</b>

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
