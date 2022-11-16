<!doctype html>

<html lang="en">
  <head>
    <title>HTML Template</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php
foreach (glob("*.php") as $filename) {
	if($filename != "index.php"){
		echo "<a href=\"$filename\">$filename</a><br/>";
	}
}
?>

  </body>
</html>
