<?php
$title = "My Page";
require 'header.php';

?>
    <h1>My Web Page</h1>
    <?php
	
	require_once 'util.php';
	
	$x = 10;
	$y = 20;
	swap($x, $y);
	echo "x: $x, y: $y";
	
	
    ?>
  </body>
</html>
