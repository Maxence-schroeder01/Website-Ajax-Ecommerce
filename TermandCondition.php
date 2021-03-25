<?php
include "Heading.php";
?>

<script>
    function showSuggestion(str){
        if (str.lenght == 0) {
            document.getElementById('output').innerHTML = '';
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
</script>

<div class="container">
<h1>Vous rechercher nos meilleurs futur produit les voici</h1>
<form>
Rechercher nos meilleurs futur produit:<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
</form>
<p>Suggestion de produit:<span id="output" style="font-weight: bold;"></span></p>


</div>
<br><br><br><br><br><br>
<p style="center">Pour plus d'info aller icite <a href="https://maxence-schroeder.xyz/" rel="external nofollow noopener" target="_blank">https://maxence-schroeder.xyz/</a></p>
</li>
</ul>
<br>
<?php
include "Footer.php";
?>