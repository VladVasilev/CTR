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
	"017" : {"id" : "017", "subid" : {}, "name" : "RX 580 ARMOR 8G OC", "price" : "14999"},
	"018" : {"id" : "018", "subid" : {}, "name" : "RX 590 ARMOR 8G OC", "price" : "16999"},
	"019" : {"id" : "019", "subid" : {}, "name" : "RX 5500 XT GAMING 8G OC", "price" : "20499"},
	"020" : {"id" : "020", "subid" : {}, "name" : "RX 5600 XT GAMING X", "price" : "26999"},
	"021" : {"id" : "021", "subid" : {}, "name" : "RX 5700 XT GAMING", "price" : "38999"},
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="RX580.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RX 580<br>ARMOR 8G OC</summary>
	  <a> Частота: 1366 МГц, Видеопамять: 8Гб, Тип памяти: GDDR5, Разрядность шины: 256 Бит, Интерфейс: DVI-D, DisplayPort(2), HDMI(2)</a></details>
      <span class="price">14999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '017', priceList['017'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="RX590.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RX 590<br>ARMOR 8G OC</summary>
	  <a> Частота: 1565 МГц, Видеопамять: 8Гб, Тип памяти: GDDR5, Разрядность шины: 256 Бит, Интерфейс: DVI-D, DisplayPort(2), HDMI(2)</a></details>
      <span class="price">16999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '018', priceList['018'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RX5500.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RX 5500 XT<br>GAMING 8G OC</summary>
	  <a> Частота: 1845 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 128 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">20499 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '019', priceList['019'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RX5600.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RX 5600 XT<br>GAMING X</summary>
	  <a> Частота: 1750 МГц, Видеопамять: 6Гб, Тип памяти: GDDR6, Разрядность шины: 192 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">26999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '020', priceList['020'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RX5700.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RX 5700 XT<br>GAMING </summary>
	  <a> Частота: 1905 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">38999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '021', priceList['021'])">Купить</button>
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
