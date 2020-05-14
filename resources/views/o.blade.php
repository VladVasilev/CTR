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
	"033" : {"id" : "033", "subid" : {}, "name" : "Cooler Master MasterAir MA410P", "price" : "2700"},
	"034" : {"id" : "034", "subid" : {}, "name" : "Deepcool NEPTWIN V2", "price" : "3200"},
	"035" : {"id" : "035", "subid" : {}, "name" : "Arctic Freezer 33 eSports ONE", "price" : "3500"},
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
    <h3>Cooler Master MasterAir MA410P</h3>
      <span class="price">2700 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '033', priceList['033'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src=".png" wnameth="120" height="120">
  <div class="product-list">
    <h3>Deepcool NEPTWIN V2</h3>
      <span class="price">3200 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '034', priceList['034'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src=".png" wnameth="120" height="120">
  <div class="product-list">
		<h3>Arctic Freezer 33 eSports ONE</h3>
      <span class="price">3500 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '035', priceList['035'])">Купить</button>
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
