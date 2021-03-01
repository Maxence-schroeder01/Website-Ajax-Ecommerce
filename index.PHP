<?php
include "Heading.php";
?>
<br>
    <div class="content">
        <!-- content changes on each page -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title"><a href="zoomlib/Produit1.php">IPhone</h3>
                            <h6 class="card-subtitle text-muted">$500.00</h6> <img src="zoomlib/images/iphone.jpg" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Cliquer sur le nom du produit pour voir sa page  <a href="#" class="card-link productItem btn btn-primary" data-name="iPhone" data-s="black" data-price="50000" data-id="1">Ajouter au panier</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title"><a href="zoomlib/Produit2.php">Cable de charge</a></h3>
                            <h6 class="card-subtitle text-muted">$6.00</h6> <img src="zoomlib/images/cable.jpg" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Cliquer sur le nom du produit pour voir sa page <a href="#" class="productItem btn btn-primary" data-name="Cable" data-s="1" data-price="600" data-id="8">Ajouter au panier</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php
include "Footer.php";
?>