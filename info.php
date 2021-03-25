<?php
include "Heading.php";
?>
<style>
* {
  box-sizing: border-box;
  font-family: sans-serif;
}

html {
    font-size: 1em;
}

body {
  background: $bg-main-color;
  line-height: 1.625;
}

h3, p, div {
  text-align: center;
}

h3 {
  text-transform: capitalize;
  span {
    text-transform: none;
  }
}

button {
  display: block;
  margin: 15px auto;
}

#bio {
  max-width: 70%;
  margin: 15px auto;
  padding: 10px;
}


</style>

<p>Les donnes vienne tous de cette page <a href="https://fr.wikipedia.org/wiki/Amazon" target="_blank">Wikipedia</a></p>
<div>
  <img src="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/06/shopping-online.jpg" width="600" height="400" alt="Maxence">
  <br>
  <input id="request" type="image" name="submit" src="https://images.emojiterra.com/openmoji/v12.2/512px/2b07.png" border="0" alt="Submit" style="width: 50px;" />
  <div id="bio"></div>
</div>

<script>
(function() {
  
  'use strict';
    
  // find the desired selectors
  var btn = document.getElementById('request');
  var bio = document.getElementById('bio');
  
  // set up a request
  var request = new XMLHttpRequest();
  
  // keep track of the request
  request.onreadystatechange = function() {
    // check if the response data send back to us 
    if(request.readyState === 4) {
      // add a border
      bio.style.border = '1px solid #e8e8e8';
      // uncomment the line below to see the request
      // console.log(request);
      // check if the request is successful
      if(request.status === 200) {
        // update the HTML of the element
        bio.innerHTML = request.responseText;        
      } else {
        // otherwise display an error message
        bio.innerHTML = 'Ya eu un probleme chef: ' +  request.status + ' ' + request.statusText;
      }
    }
  }

  // specify the type of request
  request.open('Get', 'Bio.txt');

  // register an event
  btn.addEventListener('click', function() {
    // hide the button
    this.style.display = 'none';
    // send the request
    request.send();
  });
  
})();

</script>

<?php
include "Footer.php";
?>