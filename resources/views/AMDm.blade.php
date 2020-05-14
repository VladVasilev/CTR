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
	"027" : {"id" : "027", "subid" : {}, "name" : "GIGABYTE B450 AORUS M", "price" : "8899"},
	"028" : {"id" : "028", "subid" : {}, "name" : "GIGABYTE B450 AORUS PRO", "price" : "11099"},
	"029" : {"id" : "029", "subid" : {}, "name" : "GIGABYTE X470 AORUS ULTRA GAMING", "price" : "12199"},
	"030" : {"id" : "030", "subid" : {}, "name" : "GIGABYTE X570 I AORUS PRO WIFI", "price" : "19999"},
	"031" : {"id" : "031", "subid" : {}, "name" : "ASRock Z390 Phantom Gaming 4S", "price" : "26699"},
	"032" : {"id" : "032", "subid" : {}, "name" : "ASUS PRIME TRX40-PRO", "price" : "41899"}
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="AM4B450m.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>GIGABYTE B450 <br>AORUS M </summary>
	  <a> Форм-фактор: Micro-ATX, Сокет: AM4, Чипсет: B450, Кол-во слотов памяти: 4, Слоты расширения: 2</a></details>
      <span class="price">8899 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '027', priceList['027'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="AM4B450.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>GIGABYTE B450 <br> AORUS PRO </summary>
	  <a> Форм-фактор: ATX, Сокет: AM4, Чипсет: B450, Кол-во слотов памяти: 4, Слоты расширения: 3</a>    </details>
      <span class="price">11099 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '028', priceList['028'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="AM4X470.png" wnameth="120" height="120">
  <div class="product-list">
		<details><summary>GIGABYTE X470 AORUS ULTRA GAMING</summary>
	  <a> Форм-фактор: ATX, Сокет: AM4, Чипсет: X470, Кол-во слотов памяти: 4, Слоты расширения: 3</a>        </details>
      <span class="price">12199 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '029', priceList['029'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="AM4X570.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>GIGABYTE X570 I AORUS PRO WIFI</summary>
	  <a> Форм-фактор: ATX, Сокет: AM4, Чипсет: X570, Кол-во слотов памяти: 4, Слоты расширения: 3</a>    </details>
      <span class="price">19999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '030', priceList['030'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="AM4X570m.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>GIGABYTE X570 AORUS PRO</summary>
	  <a> Форм-фактор: ATX, Сокет: AM4, Чипсет: X570, Кол-во слотов памяти: 4, Слоты расширения: 3</a>    </details>
      <span class="price">26699 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '031', priceList['031'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="TRX40.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>ASUS PRIME TRX40<br>PRO</summary>
	  <a> Форм-фактор: ATX, Сокет: sTRX4, Чипсет: TRX40, Кол-во слотов памяти: 8, Слоты расширения: 3</a>    </details>
      <span class="price">41899 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '032', priceList['032'])">Купить</button>
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
