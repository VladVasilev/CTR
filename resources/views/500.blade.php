<html lang="ru">
<head>
	<title>Wicart ver2.0</title>
	<link rel="stylesheet" href="css.css" type="text/css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../theme2.css" />
	<link rel="stylesheet" type="text/css" href="../wicart.css" />
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
	<!-- WI-JQ-HEADER -->
	<script src="../wicart2.js"  type="text/javascript" ></script>
	<!-- WI-HEADER -->
</head>
<body>
<script>
var priceList = {
	"039" : {"id" : "039", "subid" : {}, "name" : "FSP Group ATX-500PNR", "price" : "2500"},
	"040" : {"id" : "040", "subid" : {}, "name" : "Thermaltake Smart RGB", "price" : "3000"},
	"041" : {"id" : "041", "subid" : {}, "name" : "Chieftec CPS-400S", "price" : "3000"},
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src=".png" wnameth="120" height="120">
  <div class="product-list">
    <h3>FSP Group ATX-500PNR</h3>
      <span class="price">2500 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '039', priceList['039'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src=".png" wnameth="120" height="120">
  <div class="product-list">
    <h3>Thermaltake Smart RGB</h3>
      <span class="price">3000 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '040', priceList['040'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src=".png" wnameth="120" height="120">
  <div class="product-list">
		<h3>Chieftec CPS-400S</h3>
      <span class="price">3000 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '041', priceList['041'])">Купить</button>
  </div>
</div> 
<!---Форма для магазина-------------------------------->
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right">[закрыть]</a>
<h4>Введите ваши контактные данные</h4>

<form id="formToSend">
<input id="fio" type="text" placeholder="Ваши фамилия и имя"  class="" />
<input id="city" type="text" placeholder="Город"  class="text-input"/>
<input id="phone" type="text" placeholder="Контактный телефон" class="text-input"/>
<input id="email" type="text" placeholder="Электронная почта" class="" />
<br>
<textarea id="question" placeholder="Адрес"></textarea>
<br>
<b>Доставка:</b>
<br>
<select id="delivery">
<option value="-">-</option>
<option value="Почта РФ">Почта РФ</option>
<option value="EMS">EMS</option>
<option value="DHL">DHL</option>
<option value="TNT">TNT</option>
</select>
<br>
<input type="checkbox" value="V"> Предоплата
</form>
<button onclick="cart.sendOrder('formToSend,overflw,bsum');" href="#">Отправить заказ</button>
</div>
<!----------------------------------------------------->


<script>
var cart;
var config;
var wiNumInputPrefID;
/* WI-GLOBAL-VARS */
$(document).ready(function(){  
    cart = new WICard("cart");
    config = {'clearAfterSend':true, 'showAfterAdd':false};
    
    cart.init("basketwidjet", config);
    /* WI-MODULES */
    
    
});	
document.addEventListener('visibilitychange', function(e) {
cart.init("basketwidjet", config);
}, false);
</script>

</body>
</html>
