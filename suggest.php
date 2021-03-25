<?php
$produit[] ="iphone";
$produit[] ="robot";
$produit[] ="android";
$produit[] ="cyberpunk";
$produit[] ="souris";
$produit[] ="cable";
$produit[] ="m-audio";
$produit[] ="canard";
$produit[] ="RTX3090";
$produit[] ="RTX3080";
$produit[] ="RTX3070";
$produit[] ="RTX3060ti";
$produit[] ="RTX3050";
$produit[] ="RT6800xt";
$produit[] ="RT6900xt";
$produit[] ="RT6800";
$produit[] ="RT6700XT";
$produit[] ="RT6700";
$produit[] ="Baguette";
$produit[] ="pomme";
$produit[] ="zilophone";
$produit[] ="style";
$produit[] ="clavier";
$produit[] ="desk";
$produit[] ="credit card";
$produit[] ="SSD";
$produit[] ="duck";
$produit[] ="Chips Ahoy";
$produit[] ="geforce";
$produit[] ="Intel core i9900k";

$q = $_REQUEST['q'];

$suggestion = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($produit as $futur){
        if (stristr($q, substr($futur,0,$len))) {
            if ($suggestion === "") {
                $suggestion = $futur;
                # code...
            }else{
                $suggestion.=", $futur";
            }
            # code...
        }
    }
    # code...
}
echo $suggestion === "" ? "Aucune Proposition" : $suggestion;

?>