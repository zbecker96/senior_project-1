<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
  <head>
    <title>Category</title>
  </head>
  <body>
    <h1>Category Page</h1>
    <hr />
    <?php
      date_default_timezone_set('America/New_York');
      echo "<p>" . date('m/d/Y h:i:s a', time()) . "</p>\n";

      include "inc_user_connect.php";
      $conn = @mysqli_connect($localhost, $username, $password);
      if ($conn === FALSE) {
        echo "<p>Error connecting to database. " . mysqli_error() . "</p>\n";
      }
      else {
        echo "<hr />\n<h2>Threads</h2>\n<hr />\n";
	mysqli_select_db($conn, $database);
	$subjects = @mysqli_query($conn, "SELECT subject FROM thread");

	while ($row = mysqli_fetch_row($subjects)) {
	  echo "<hr />\n<h3>" . $row . "</h3>\n";
	}

	mysqli_close($conn);
      }
    ?>
  </body>
</html>
