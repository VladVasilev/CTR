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
	"022" : {"id" : "022", "subid" : {}, "name" : "MSI Z390 MEG GODLIKE", "price" : "51099"},
	"023" : {"id" : "023", "subid" : {}, "name" : "GIGABYTE B365M D2V", "price" : "6699"},
	"024" : {"id" : "024", "subid" : {}, "name" : "GIGABYTE summary10N 2.0", "price" : "7199"},
	"025" : {"id" : "025", "subid" : {}, "name" : "GIGABYTE Z390 GAMING SLI", "price" : "15399"},
	"026" : {"id" : "026", "subid" : {}, "name" : "ASRock Z390 Phantom Gaming 4S", "price" : "10799"},
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="E-ATX.png" wnameth="120" height="120">
  <div class="product-list">
  <details>
    <summary>MSI Z390 MEG <br>GODLIKE</summary>
	  <a> Форм-фактор: E-ATX, Сокет: 1151-v2, Чипсет: Z390, Кол-во слотов памяти: 4, Слоты расширения: 4</a></details>
      <span class="price">51099 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '022', priceList['022'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="micro-atx.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>GIGABYTE B365M <br>D2V</summary>
	  <a> Форм-фактор: mini-ATX, Сокет: 1151-v2, Чипсет: B365, Кол-во слотов памяти: 2, Слоты расширения: 2</a></details>
      <span class="price">6699 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '023', priceList['023'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="mini-atx.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>GIGABYTE summary10N 2.0</summary>
	  <a> Форм-фактор: mini-ATX, Сокет: 1151-v2, Чипсет: summary10, Кол-во слотов памяти: 2, Слоты расширения: 1</a></details>
      <span class="price">7199 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '024', priceList['024'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="ATXG.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>GIGABYTE Z390 GAMING SLI</summary>
	  <a> Форм-фактор: ATX, Сокет: 1151-v2, Чипсет: Z390, Кол-во слотов памяти: 4, Слоты расширения: 3</a></details>
      <span class="price">15399 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '025', priceList['025'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="ATX.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>ASRock Z390 Phantom Gaming 4S</summary>
	  <a> Форм-фактор: ATX, Сокет: 1151-v2, Чипсет: Z390, Кол-во слотов памяти: 4, Слоты расширения: 3</a></details>
      <span class="price">10799 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '026', priceList['026'])">Купить</button>
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
<?php



?>