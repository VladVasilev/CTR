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
	"001" : {"id" : "001", "subid" : {}, "name" : "AMD ryzen 3 3200g", "price" : "8799"},
	"002" : {"id" : "002", "subid" : {}, "name" : "AMD ryzen 5 3600", "price" : "17699"},
	"003" : {"id" : "003", "subid" : {}, "name" : "AMD ryzen 7 3700X", "price" : "29999"},
	"004" : {"id" : "004", "subid" : {}, "name" : "AMD ryzen 9 3900X", "price" : "48999"},
	"005" : {"id" : "005", "subid" : {}, "name" : "AMD ryzen Threadripper 3990X", "price" : "399999"}
	};
</script>	

<div class="cart">
<div class="price"><a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<!-- WI-BASKET -->


<div class="product-item">
  <img src="r3.png" wnameth="120" height="120">
  <div class="product-list">
    <details>
    <summary>AMD ryzen 3 <br>3200g </summary>
	  <a> Сокет: AM4, Ядер: 4, Частота: 3600 МГц, Кэшь: L3 - 4 МБ, Графика: Radeon Vega 8, TDP: 65 Вт</a>    </details>
      <span class="price">8799 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '001', priceList['001'])">Купить</button>
  </div>
</div> 


<div class="product-item">
  <img src="r5.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>AMD ryzen 5 <br>3600</summary>
	  <a> Сокет: AM4, Ядер: 6, Частота: 3600 МГц, Кэшь: L3 - 32 МБ,<br> TDP: 65 Вт</a>    </details>
      <span class="price">17699 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '002', priceList['002'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="r7.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>AMD ryzen 7 <br>3700X</summary>
	  <a> Сокет: AM4, Ядер: 8, Частота: 3600 МГц, Кэшь: L3 - 32 МБ,<br> TDP: 65 Вт</a>    </details>
      <span class="price">29999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '003', priceList['003'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="r9.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>AMD ryzen 9 <br>3900X 
    </summary>
	  <a> Сокет: AM4, Ядер: 12, Частота: 3800 МГц, Кэшь: L3 - 64МБ,<br> TDP: 105 ВТ</a>    </details>
      <span class="price">48999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '004', priceList['004'])">Купить</button>
  </div>
</div> 

<div class="product-item">
  <img src="T.png" wnameth="120" height="120">
  <div class="product-list">
        <details>
    <summary>AMD ryzen Threadripper 3990X
    </summary>
	  <a> Сокет: sTRX4, Ядер: 64, Частота: 2900 МГц, Кэшь: L3 - 256МБ, TDP: 280 ВТ</a>    </details>
      <span class="price">399999 руб.</span>
      <button class="button" onclick="cart.addToCart(this, '005', priceList['005'])">Купить</button>
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
