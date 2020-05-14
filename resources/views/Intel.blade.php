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
	"006" : {"id" : "006", "subid" : {}, "name" : "Intel core i3 9100", "price" : "11899"},
	"007" : {"id" : "007", "subid" : {}, "name" : "Intel core i5 9400", "price" : "18999"},
	"008" : {"id" : "008", "subid" : {}, "name" : "Intel core i7 9700K", "price" : "35599"},
	"009" : {"id" : "009", "subid" : {}, "name" : "Intel core i9 9900K", "price" : "45999"}
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="i3.png" wnameth="120" height="120">
  <div class="product-list">
    <details>
    <summary>Intel core i3 9100</summary>
	  <a> Сокет: 1151-v2, Ядер: 4, Частота: 3600 МГц, Кэшь: L3 - 6 МБ, TDP: 65 Вт</a>
	     </details>
      <span class="price">11899 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '006', priceList['006'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="i5.png" wnameth="120" height="120">
  <div class="product-list">
    <details>
    <summary>Intel core i5 9400 </summary>
	  <a> Сокет: 1151-v2, Ядер: 6, Частота: 2900 МГц, Кэшь: L3 - 9 МБ, TDP: 65 Вт</a>
      </details>
	  <span class="price">18999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '007', priceList['007'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="i7.png" wnameth="120" height="120">
  <div class="product-list">
    <details>
    <summary>Intel core i7 9700K</summary>
	  <a> Сокет: 1151-v2, Ядер: 8, Частота: 3600 МГц, Кэшь: L3 - 12 МБ, TDP: 95 Вт</a>    </details>
      <span class="price">35599 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '008', priceList['008'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="i9.png" wnameth="120" height="120">
  <div class="product-list">
    <details>
    <summary>Intel core i9 9900K</h3></summary>
	  <a> Сокет: 1151-v2, Ядер: 8, Частота: 3600 МГц, Кэшь: L3 - 16МБ, TDP: 95 ВТ</a>    </details>
      <span class="price">45999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '009', priceList['009'])">Купить</button>
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
