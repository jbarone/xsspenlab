<?php

include 'opendb.inc';

$query = "SELECT id, content FROM guestbook_comments ORDER BY id DESC LIMIT 1";
$results = $db->query($query) or die('<p><b>SQL Statement:</b>' . $query);
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pentesting Lab</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        <h1>Widgets.Co</h1>
        <h4>Latest Comment</h4>
        <hr/>
        <div class="row">
            <?php
                $result = $results->fetchArray();
                print $result[1];
            ?>
        </div>
        <hr/>
        <a href="comment.php">Leave a Comment</a></br>
    </div>
  </body>
</html>
