<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
  <head>
    <title>Insert Category</title>
  </head>
  <body>
    <?php
      if (isset($_POST['insert_category'])) {
	if (strcmp($_POST['name'], "")  === 0|| strcmp($_POST['description'], "") === 0) {
	  echo "<p>Form has not been fully submitted. Go back to the form creation " .
	       "<a href=\"http://" . $_SERVER['HTTP_HOST'] . "/create_category/index.html\">" .
               "page</a> and fully enter all fields.</p>\n";
	}
	else {
	  echo "<p>Category has been submitted to the database.</p>\n";
	}
      }
      else {
        echo "<p>Category has not been submitted to the database.</p>\n";
      }
    ?>
  </body>
</html>
