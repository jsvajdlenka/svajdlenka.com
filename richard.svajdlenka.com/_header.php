<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stránky Toxica</title>

        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <div class="container-fluid" style="background-color: #d9edf7"> 
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <img src="images/bstheme/header.png" class="img-responsive" />
                    </div>                    
                </div>                    
            </div>                    
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="container-fluid">

                        <div class="row" >
                            <div class="page-header">
                                <h1>Toxico - <small><?php echo $subtitle; ?></small>
                                </h1>
                            </div>
                        </div>
                        <?php
                        include './_menu.php';
                        ?>
                        <div class="row text-center" >
