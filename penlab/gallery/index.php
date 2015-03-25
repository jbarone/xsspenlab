<!DOCTYPE html>
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

    <style>
    .fileinput-button {
        position: relative;
        overflow: hidden;
    }
    .fileinput-button input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        opacity: 0;
        filter: alpha(opacity=0);
        transform: translate(-300px, 0) scale(4);
        font-size: 23px;
        direction: ltr;
        cursor: pointer;
    }
    </style>
  </head>

  <body>

    <div class="container">
        <h1>Photo Gallery</h1>

        <div class="row">
            <div class="col-md-6">
                <h4>We Know You Loves Da Cats!!</h4>
            </div>
            <div class="col-md-6 text-right">
                <form method="POST" action="upload.php" id="image-upload" enctype="multipart/form-data">
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add file</span>
                        <input id="image" type="file" name="image" onchange="this.form.submit();" />
                    </span>
                </form>
            </div>
        </div>

        <div class="row">
            <?php
                foreach(array_diff(scandir('images'), array('..', '.')) as $file) {
                    echo '<div class="col-xs-6 col-md-3">';
                    echo '<a href="view.php?image='.$file.'" class="thumbnail"><img src="images/'.$file.'" /></a>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
  </body>
</html>
