<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <style>
        * {
  box-sizing: border-box;
}
 
html,
body {
  font-family: 'Montserrat', sans-serif;
  display: flex;
  width: 100%;
  height: 100%;
  background: #f4f4f4;
  justify-content: center;
  align-items: center;
}

.checkout-panel {
  display: flex;
  flex-direction: column;
  width: 900px;
  height: 700px;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
}

.panel-body {
  padding: 45px 80px 0;
  flex: 1;
}
 
.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #000;
}

.progress-bar {
  display: flex;
  margin-bottom: 50px;
  justify-content: space-between;
}
 
.step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #aaa;
}
 
.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 225px;
  height: 6px;
  content: '';
  background-color: #aaa;
}
 
.step:before {
  color: #2e2e2e;
  position: absolute;
  top: 40px;
}
 
.step:last-child:after {
  content: none;
}
 
.step.active {
  background-color: #20dbc2;
}
.step.active:after {
  background-color: #20dbc2;
}
.step.active:before {
  color: #20dbc2;
}
.step.active + .step {
  background-color: #20dbc2;
}
.step.active + .step:before {
  color: #20dbc2;
}
 
.step:nth-child(1):before {
  content: 'Login';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'Buy Now';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'Payment';
}
.step:nth-child(4):before {
  right: 0;
  content: 'Finish';
}

.payment-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}
 
.method {
  display: flex;
  flex-direction: column;
  width: 382px;
  height: 122px;
  padding-top: 20px;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: rgb(249, 249, 249);
  justify-content: center;
  align-items: center;
}
 
.card-logos {
  display: flex;
  width: 150px;
  justify-content: space-between;
  align-items: center;
}
 
.radio-input {
  margin-top: 20px;
}
 
input[type='radio'] {
  display: inline-block;
}

.input-fields {
  display: flex;
  justify-content: space-between;
}
 
.input-fields label {
  display: block;
  margin-bottom: 10px;
  color: #767676;
}
 
.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #767676;
}
 
div[class*='column'] {
  width: 382px;
}
 
input[type='text'],
input[type='password'] {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
}
 
input[type='text']:focus,
input[type='password']:focus {
  border-color: rgb(119, 219, 119);
}
 
#date { background: url(img/icons_calendar_black.png) no-repeat 95%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 95%; }
 
.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
 
.small-inputs div {
  width: 182px;
}

.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: rgb(239, 239, 239);
  justify-content: space-between;
  align-items: center;
}

.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}
 
.back-btn {
  color: #fff;
  background: #20dbc2;
}
 
.next-btn {
  color: #fff;
  background: #20dbc2;
  font-family:Sans-serif
}
 
.btn:focus {
  outline: none;
}
 
.btn:hover {
  transform: scale(1.1);
}

.blue-border {
  border: 1px solid rgb(110, 178, 251);
}


        </style>
</head>

<body>
<div class="checkout-panel">

  <div class="panel-body">
    <h2 class="title">Checkout</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="source/Visa_Logo.png" height='50' width='50'/>
          <img src="source/mastercard.png" height='50' width='50'/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Get Discounts of 20% with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="source/paypal.png" height='50' weight='50'/>
        <div class="radio-input">
         <input id="paypal" type="radio" name="payment">
           Get Discounts of 20% with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Cardholder's Name</label>
        <input type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid thru</label>
            <input type="text" id="date" placeholder="MM / YY" />
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <form action='T1.php'>
    <button class="btn back-btn">Back</button>
    </form>
    <form action='index.php'>
    <button class="btn next-btn">Finish</button>
</form>
  </div>

</div>

<script>
    var $cardInput = $('.input-fields input');
 
 $('.next-btn').on('click', function(e) {
  
   $cardInput.removeClass('warning');
  
   $cardInput.each(function() {    
      var $this = $(this);
      if (!$this.val()) {
        $this.addClass('warning');
      }
   })
 });
</script>
</body>
</html>