<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Boutique Maxence Schroeder - Checkout</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="parent">
  <div class="child">
    <div class="container">
      <div id="credit-card">
        <div id="credit-card-body">
          <div id="card-front">
            <img src="http://assets.stickpng.com/images/58482363cef1014c0b5e49c1.png" width="70" height="50" alt="visa card" class="card-logo" />
            <div class="card-chip">
              <div class="component-1"></div>
              <div class="component-2"></div>
              <div class="component-3"></div>
              <div class="component-4"></div>
              <div class="component-5"></div>
            </div>
            <div id="card_no"></div>
            <div class="card-labels card-holder-label">Titulaire de la carte</div>
            <div class="card-labels">Expire</div>
            <div id="card_name"></div>
            <div id="card_expiry_date"></div>
          </div>
          <div id="card-back">
            <div id="magnetic_stripe"></div>
            <div id="signature"></div>
            <div id="card_cvv"></div>
            <div id="disclaimer">
              Sed augue lacus viverra vitae congue eu consequat ac felis. Quam
              quisque id diam vel. Quis risus sed vulputate odio ut enim
              blandit. Viverra justo nec ultrices dui sapien eget mi proin sed.
              Amet justo donec enim diam vulputate. Vestibulum morbi blandit
              cursus risus at ultrices mi. Condimentum vitae sapien pellentesque
              habitant. Leo duis ut diam quam. Cras sed felis eget velit aliquet
              sagittis. Viverra vitae congue eu consequat ac felis donec et.
              Hendrerit gravida rutrum quisque non tellus orci ac.
            </div>
          </div>
        </div>
      </div>
      <form action="" id="credit-card-form">
        <div class="form-group">
          <label for="card_no_input">Nmr de la carte</label>
          <input type="text" id="card_no_input" maxlength="19" />
          <label for="card_name_input">Nom</label>
          <input type="text" id="card_name_input" maxlength="20" />
          <label for="card_expiry_date_input">Date d'expiration</label>
          <input type="text" id="card_expiry_date_input" maxlength="5" />
          <label for="card_cvv_input">CVC</label>
          <input type="text" id="card_cvv_input" />
          <br>
          <a href="../index.PHP">Retour</a>
          <a href="../index.PHP">Continue</a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js'></script><script  src="./script.js"></script>

</body>
</html>
