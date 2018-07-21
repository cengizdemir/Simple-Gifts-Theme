<?php
ini_set('display_errors',0);
//ne olur ne olmaz :D
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Gifts HTML Theme</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--Core CSS -->
    <?php
      $a = "<link href=\"css/style-color-first.css\" rel=\"stylesheet\">";
      $b = "<link href=\"css/style-color-second.css\" rel=\"stylesheet\">";
      $c = "<link href=\"css/style-color-third.css\" rel=\"stylesheet\">";
      $d = "<link href=\"css/style.css\" rel=\"stylesheet\">";
          $page=@$_GET['page'];
            if($page=='color-first.html'){
                print_r ($a);
            }
            elseif ($page=='color-second.html'){
                print_r ($b);
            }
            elseif ($page=='color-third.html'){
                print_r ($c);
            }
            else {
              print_r ($d);
            }
        ?>

    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
