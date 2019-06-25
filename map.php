<<<<<<< HEAD
<html>
<head>

<title>Algoritmo Dijkstra</title>
<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />

</head>
<body>
<header>
<center>
	<h1>
	<br>
		<strong>
		Algoritmo del camino mas corto (Dijkstra)
		</strong>
	</br>
	</h1>
</center>
</header> 
<center><img src="Grafo.jpg"  usemap="#routes" border="0">
</center>

<center>
<form name="form1"  action="calPath.php" method="post" >

De :
<input type="text" size ="3" name="fromClass"/>

Hacia :
<input type="text" size= "3" name="toClass"/>
<input name=b1 type=submit value="Calcular">

</form>
	

</center>

<script src="js/jquery.js"></script>
<script src="js/bootstra.min.js"></script>

</body>
</html>
=======
<html>
<head>
<title>Algoritmo Dijkstra</title>

<script>

function clickMap(classID)
{
    if (document.form1.fromClass.value.length == 0)
    {
        document.form1.fromClass.value = classID;
    }
    else
    {
        document.form1.toClass.value = classID;
    }
}

</script>
</head>
<body>
<header>
<center>
	<h1>
	<br>
		<strong>
		Algoritmo del camino mas corto (Dijkstra)
		</strong>
	</br>
	</h1>
</center>
</header> 
<center><img src="Grafo.jpg"  usemap="#routes" border="0">
</center>

<center>
<form name="form1"  action="calPath.php" method="post" >

De :
<input type="text" size ="3" name="fromClass"/>

Hacia :
<input type="text" size= "3" name="toClass"/>
<input name=b1 type=submit value="Calcular">

</form>
	

</center>

<br></body></html>
>>>>>>> f07f67a99b1ce3bfbd69f6dee1a4a0d42e789a18
