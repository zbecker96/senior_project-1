<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
  <title>Placeholder Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="styles/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  echo "<img src=\"/images/NetBoard_Logo.png\" />\n";
  echo "<div class=\"jumbotron text-center\">\n";
  echo "<h1> Anonymous Message Board  </h1>\n";
  echo "<p> Created by: students.net </p>\n";

  echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">\n";
  echo "<div class=\"collapse navbar-collapse\" id=\"navbarText\">\n";
  echo "<ul class=\"navbar-nav mr-auto\">\n";
  echo "<li class=\"nav-item active\">\n";
  echo "<a class=\"nav-link\" href=\"/index.php\">Home <span class=\"sr-only\">(current)</span></a>\n";
  echo "</li>\n";
  echo "<li class=\"nav-item\">\n";
  echo "<a class=\"nav-link\" href=\"/index.php\">Topic 1</a>\n";
  echo "</li>\n";
  echo "<li class=\"nav-item\">\n";
  echo "<a class=\"nav-link\" href=\"/index.php\">Topic 2</a>\n";
  echo "</li>\n";
  echo "<li class=\"nav-item\">\n";
  echo "<a class=\"nav-link\" href=\"/index.php\">Topic 3</a>\n";
  echo "</li>\n";
  echo "<li class=\"nav-item\">\n";
  echo "<a class=\"nav-link\" href=\"/index.php\">Topic 4</a>\n";
  echo "</li>\n";
  echo "<li class=\"nav-item\">\n";
  echo "<a class=\"nav-link\" href=\"/Help.html\">Help</a>\n";
  echo "</li>\n";
  echo "</ul>\n";
  echo "</div>\n";
  echo "</nav>\n";
  echo "</div>\n";

  echo "<div class=\"container\" style=\"width: 100%\">\n";

  echo "<div class=\"container-fluid\"  >\n";

  echo "<div class=\"jumbotron text-center\">\n";
  echo "<h1> Topic Name </h1>\n";
  echo "<p>Description</p>\n";
  echo "<hr>\n";
  echo "<button id=\"NewPostButton\" onclick=\"ShowNewPostForm()\">New Post</button>\n";
  echo "<div id=\"NewPostForm\" style=\"display:none; align-self: center; background: \">\n";
  echo "<form action=\"/InsertPost.php\" method=\"post\">\n";

  echo "<h3>Create New Post</h3>\n";

  echo "<p style=\"margin-bottom: 5px\" >Name:</p>\n";
  echo "<input style=\"width: 60%\" type=\"text\" name=\"Uname\" />\n";

  echo "<p style=\"margin-bottom: 5px\">Post Title:</p>\n";
  echo "<input style=\"width: 60%\"  type=\"text\" name=\"PostTitle\" />\n";

  echo "<br>\n";
  echo "<p style=\"margin-bottom:5px\">Comment Body: </p>\n";
  echo "<textarea class=\"form-control-middle\" rows=\"5\" id=\"comment\" style=\"width: 60%; align-self: center\"></textarea>\n";
  echo "<br>\n";

  echo "<input type=\"submit\" value=\"Submit Post\"/>\n";
  echo "</form>\n";
  echo "</div>\n";

  echo "<script>\n";
  echo "function ShowNewPostForm() {\n";
  echo "var x = document.getElementById(\"NewPostForm\");\n";
  echo "x.style.display = \"block\";\n";

  echo "var y = document.getElementById(\"NewPostButton\");\n";
  echo "y.style.display = \"none\";\n";
  echo "}\n";
  echo "</script>\n";

  echo "<hr>\n";
  echo "<p>announcements go here </p>\n";
  echo "<hr>\n";
  echo "</div>\n";
  echo "</div>\n";

  echo "<div class=\"container-fluid \"  >\n";
  echo "<ul class=\"list-unstyled\" >\n";
  echo "<li class=\"media\" style=\"border:2px solid #cecece; margin-bottom: 25px\">\n";

  echo "<figure class=\"figure\">\n";
  echo "<img src=\"https://upload.wikimedia.org/wikipedia/commons/8/83/Hedy_Lamarr_Publicity_Photo_for_The_Heavenly_Body_1944.jpg\" class=\"figure-img img-fluid rounded\" alt=\"A generic square placeholder image with rounded corners in a figure.\" style=\"width:80px; padding: 15px\">\n";
  echo "<figcaption class=\"figure-caption text-center\" >Hedy L.</figcaption>\n";
  echo "</figure>\n";

  echo "<div class=\"media-body\">\n";
  echo "<a href=\"index.php\"> <h6 class=\"mt-3 mb-1\">thread subject line/title</h6></a>\n";
  echo "<p>instead of index.php the above link should link to the posts html page, this will be a preview of text</p>\n";
  echo "</div>\n";
  echo "</li>\n";

  echo "</ul>\n";
  echo "</div>\n";
  echo "</div>\n";
?>   
</body>
</html>
