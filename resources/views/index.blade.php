<html>
<head>
<link rel="stylesheet" href="yes.css" type="text/css">
<title>CRT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="p/css.css" type="text/css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme1.css" />
	<link rel="stylesheet" type="text/css" href="wicart.css" />
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
	<!-- WI-JQ-HEADER -->
	<script src="wicart.js"  type="text/javascript" ></script>
	<!-- WI-HEADER -->
<style>
form {
  position: relative;
  width: 300px;
  margin: 0 auto;
  left: -10%;
  top: -7%
}
.input, .button {
  outline: none;
  background: transparent;
}
.input {
  width: 100%;
  height: 42px;
  padding-left: 15px;
  border: 3px solid #ae86b0;
}
.button {
  border: none;
  height: 42px;
  width: 42px;
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
}
.button:before {
  content: "\f002";
  font-family: FontAwesome;
  font-size: 16px;
  color: #F9F0DA;
}
.input:focus {
  border-color: #a53dfa ;
}
.button1 {
  background: #a53dfa;
  color: white;
  text-transform: uppercase;
  font-size: 12px;
  line-height: 28px;
}

</style>
</head>
<body>

	
<div class="cart" title="глюкнутая корзина перезагрузити страницу">
<div class="price"><a  href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a></div>

<div style="text-align: center"></div>
</div>
<nav class="dws-menu">
<ul>
<li><a href="index.html" target="frame">&#127968 </a></li>
<li><a href="#">Меню</a>
<ul>
<li><a href="#">процессоры</a>
<ul>
<li><a href = "AMD" target = "frame">AMD</a></li>
<li><a href = "Intel" target="frame">Intel</a></li>
</li>
</ul>
<li><a href="#">Видео карты</a>
<ul>
<li><a href = "AMDG" target="frame">AMD</a></li>
<li><a href = "Nvidia" target="frame">Nvidia</a></li>
</li>
</ul>
<li><a href="#">материнские платы</a>
<ul>
<li><a href = "AMDm" target="frame">для AMD</a></li>
<li><a href = "Intelm" target="frame">для Intel</a></li>
</li>
</ul>
<li><a href="#">Охлождение</a>
<ul>
<li><a href = "o" target="frame">Воздушное</a></li>
<li><a href = "w" target="frame">Жидкостное</a></li>
</ul>
</li>
<li><a href="#">Блоки питания</a>
<ul>
<li><a href = "500" target="frame">меньше 500В</a></li>
<li><a href = "500+" target="frame">больше 500В</a></li>
</li>
</ul>
<li><a href="#">ОЗУ</a>
<ul>
<li><a href = "Gskill" target="frame">G.skill</a></li>
<li><a href = "Patriot" target="frame">Patriot</a></li>
</li>
</ul>
<li><a href="#">накопители</a>
<ul class="submenu">
<li><a href="#">SSD</a>
<ul>
<li><a href = "SSD" target="frame">SSD</a></li>
<li><a href = "SSDM2" target="frame">SSD m2</a></li>
</li>
</ul>
<li><a href = "HDD" target="frame">HDD</a></li>
</li>
</ul>
</li>
</ul>
<li><a href="com" target="frame">Отзывы</a></li>
<li><a href="#">Контакты</a><ul>
<li><a href="#">ВК</a>
<li><a href = "#">Дискорд</a></li>
<li><a href = "#">Gmail</a></li>
</ul></li>
<li><a href="help" target="frame">Помощь</a></li>
</ul>
</nav>
<form>
  <input type="text" placeholder="Искать здесь..." class="input">
  <button type="submit" class="button"></button>
</form>



<!---Форма для магазина-------------------------------->
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right">[закрыть]</a>
<h4>Введите ваши контактные данные</h4>

<form id="formToSend">
<input id="city" type="text" placeholder="Город"  class="text-input"/>
<input id="phone" type="text" placeholder="Контактный телефон" class="text-input"/>
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
var list = $('#list');

</script>
<iframe width= "100%" height="90%" src = "index.html" name="frame" scrolling="no">
</body>

</html>