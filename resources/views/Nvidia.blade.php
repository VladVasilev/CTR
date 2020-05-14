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
	"010" : {"id" : "010", "subid" : {}, "name" : "RTX2060 GAMING Z 6G", "price" : "35499"},
	"011" : {"id" : "011", "subid" : {}, "name" : "RTX2060 SUPER GAMING X", "price" : "39999"},
	"012" : {"id" : "012", "subid" : {}, "name" : "RTX2070 ARMOR 8G OC", "price" : "40899"},
	"013" : {"id" : "013", "subid" : {}, "name" : "RTX2070 SUPER GAMING TRIO", "price" : "35599"},
	"014" : {"id" : "014", "subid" : {}, "name" : "RTX 2080 SEA HAWK EK X", "price" : "73299"},
	"015" : {"id" : "015", "subid" : {}, "name" : "RTX 2080 SUPER VENTUS XS OC", "price" : "64999"},
	"016" : {"id" : "016", "subid" : {}, "name" : "RTX 2080 TI GAMING X TRIO", "price" : "109999"}
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="RTX2060.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX2060<br>GAMING Z 6G</summary>
	  <a> Частота: 1830 МГц, Видеопамять: 6Гб, Тип памяти: GDDR6, Разрядность шины: 192 Бит, Интерфейс:DisplayPort(3), HDMI</a></details>
      <span class="price">35499 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '010', priceList['010'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="RTX2060S.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX2060 SUPER<br>GAMING X</summary>
	  <a> Частота: 1695 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">39999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '011', priceList['011'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RTX2070.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX2070<br>ARMOR 8G OC</summary>
	  <a> Частота: 1710 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI, USB-C</a></details>
      <span class="price">40899 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '012', priceList['012'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RTX2070S.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX2070 SUPER<br>GAMING TRIO</summary>
	  <a> Частота: 1770 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">52999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '013', priceList['013'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RTX2080.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX 2080<br>SEA HAWK EK X</summary>
	  <a> Частота: 1860 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI, USB-C</a></details>
      <span class="price">73299 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '014', priceList['014'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="RTX2080s.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX 2080 SUPER<br>VENTUS XS OC</summary>
	  <a> Частота: 1830 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">64999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '015', priceList['015'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="RTX2080ti.png" wnameth="120" height="120">
  <div class="product-list">
    <details><summary>RTX 2080 TI<br>GAMING X TRIO</summary>
	  <a> Частота: 1755 МГц, Видеопамять: 8Гб, Тип памяти: GDDR6, Разрядность шины: 256 Бит, Интерфейс: DisplayPort(3), HDMI</a></details>
      <span class="price">109999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '016', priceList['016'])">Купить</button>
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
