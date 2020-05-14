<html lang="ru">
<head>
	<link rel="stylesheet" href="com.css" type="text/css">
    <title>фв</title>
    <script type="text/javascript">
    <!--
    window.onload = function(){
         
        document.getElementById('add').onclick = startKomm;
    }
 
       function startKomm(){
         
        var text = document.getElementById('txt').value;
        var komm = document.createElement('p');
        var newText = document.createTextNode(text);
		var img = document.createElement('IMG');
		img.src = "com.png";
		var bov = document.createElement('div');
		bov.innerHTML = "<div class='thumb'><div id='komments2' class='item'></div><div id='komments' class='item'></div></div>";

        komm.appendChild(newText);
		
         
		document.getElementById('cos').appendChild(bov);
        document.getElementById('komments').appendChild(komm);
		document.getElementById('komments2').appendChild(img);
        return true;
       }
    -->   
    </script>
</head>
 
<body>
 
 <form>
 <input id="txt" placeholder="Коментарий" class="input"><br />
 <input type="button" class="button" value="Отпарвить" id="add">
 </form>
<div id="cos" ></div>
</body>
</html>
