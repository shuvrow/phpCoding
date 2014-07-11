
<?php
$str = "A 'quote' is <i>bold</i>";
$str1= "I'll \"walk\" the <b>dog</b> now";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo "<br/>";
echo htmlentities($str1);

?>
