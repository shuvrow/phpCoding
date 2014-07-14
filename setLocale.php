<html>
<body>

<?php
echo setlocale(LC_ALL,"US");
echo "<br>";
//US standard time
echo strftime("%A %d %B %Y", mktime(0, 0, 0, 12, 22, 1978));
echo "<br>";
echo setlocale(LC_ALL,NULL);
?>
 
</body>
</html>