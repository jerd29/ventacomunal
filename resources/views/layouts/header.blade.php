<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #3EDBF0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #111111;
  display: block;
  transition: 0.3s;
margin-top: 10%;

}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
	margin-top: 10%;

  /* top: 0; */
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
margin-top: 10%;
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;
margin-top: 10%;
  
  }
  .sidenav a {font-size: 18px;}
}



/* HEADER @@@@@@@@@@@@@@@@@@@@@@@@ */

#main-header {
	background: #333;
	color: white;
	height: 7%;
	
	width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
	left: 0; /* Posicionamos la cabecera al lado izquierdo */
	top: 0; /* Posicionamos la cabecera pegada arriba */
	position: fixed; /* Hacemos que la cabecera tenga una posición fija */
     z-index: 9999;
	 

}

#main-header {
	background: #04009A;
	color: white;
	height: 80px;
	
}	
	#main-header a {
		color: white;
	}

/*
 * Logo
 */

 #botonside {
	float: left;
	padding: 15px 0 0 20px;

 }

#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	

</style>
        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>
<body>
	{{-- COLOR HUNT
		https://colorhunt.co/palette/04009a77acf13edbf0f0ebcc
		--}}
	<div class="row">
    <header id="main-header">

        <span id="botonside" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

		<a id="logo-header" href="#">
			<span class="site-name">Comuna Martin Mosqueda</span>
			<span class="site-desc">Administracion de Ventas Comunal</span>
		</a> <!-- / #logo-header -->

	</header><!-- / #main-header -->
</div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ route('jornada') }}">Jornadas</a>
        <a href="{{ route('combo') }}">Combos</a>
        <a href="{{ route('cambio') }}">Cambio</a>
        <a href="{{ route('consejocomunal') }}">Consejos Comunales</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>

	  <div class="row">
		<div id="main">
      
      
