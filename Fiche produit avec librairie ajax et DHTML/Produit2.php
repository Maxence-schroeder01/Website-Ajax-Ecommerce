<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
	<script type="text/javascript" src="js/external/mootools-1.2.4-core-yc.js"></script>
	<script type="text/javascript" src="js/external/mootools-more.js"></script>
	<script type="text/javascript" src="js/dg-picture-zoom.js"></script>
	<script type="text/javascript" src="js/dg-picture-zoom-autoload.js"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Boutique Maxence Schroeder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        #output {
            clear: both;
        }
        
        #checkoutdiv {
            display: none;
        }
        
        .footer {
            background-color: darkgrey;
            color: white;
        }
    </style>
</head>
<body>
<header class="header">
        <div class="hbot">
            <div class="container">
                <nav class="navbar navbar-full navbar-blue bg-inverse">
                    <button class="navbar-toggler light float-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#nvbar"></button>
                    <div id="nvbar" class="collapse navbar-toggleable-xs">
                        <ul class="nav navbar-nav float-sm-right ">
                            <li class="nav-item"><a class="nav-link" href="../index.PHP">Acceuil</a></li>
                            <div class="col-md-6 text-xs-right"> <span class="btn btn-success" data-toggle="modal" data-target="#cart">(<span class="items text-dark"></span>)<img alt="cadie" src="https://www.icone-png.com/png/14/13561.png" width="25" height="25" ></span></div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <br>
    <br>
<div class="content">
        <!-- content changes on each page -->
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Cable de charge</h3>
                            <h6 class="card-subtitle text-muted">$6.00</h6> <img src="images/cable.jpg?url=images/cable_big.jpg" class="dg-picture-zoom" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Vous avez vraiment crue que j'allais remplir une description  <a href="#" class="productItem btn btn-primary" data-name="Cable" data-s="1" data-price="600" data-id="8">Ajouter au panier</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../Footer.php";
    ?>