
<?php
$str1 = "Is your name O'reilly?";
$str2 = "Is your name O|reilly?";
$str3 = "Is your name O\reilly?";
$str4 = "Is your name O\freilly?";

// Outputs: Is your name O\'reilly?
echo addslashes($str1);
echo "<br/>";
echo addslashes($str2);
echo "<br/>";
echo addslashes($str3);
echo "<br/>";
echo addslashes($str4);

?>
