<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GRID</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src='jquery/jquery.min.js'></script>
	<script src='jquery/jquery-ui.min.js'></script>
	<script src='bootstrap/js/bootstrap.min.js'></script>
	<style>
		body,html{
			height: 100%;
		}
		a{
			text-decoration: none !important;
		}
		nav.sidebar, .main{
			-webkit-transition: margin 200ms ease-out;
			-moz-transition: margin 200ms ease-out;
			-o-transition: margin 200ms ease-out;
			transition: margin 200ms ease-out;
			border-radius: 0;
		}
		.main{
			padding: 10px 10px 0 10px;
		}
		@media (min-width: 765px) {
			.main{
				position: absolute;
				width: calc(100% - 40px); 
				margin-left: 40px;
				float: right;
			}
			nav.sidebar:hover + .main{
				margin-left: 200px;
			}
			nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
				margin-left: 0px;
			}
			nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
				text-align: center;
				width: 100%;
				margin-left: 0px;
			}
			nav.sidebar a{
				padding-right: 13px;
			}
			nav.sidebar .navbar-nav > li:first-child{
				border-top: 1px #e5e5e5 solid;
			}
			nav.sidebar .navbar-nav > li{
				border-bottom: 1px #e5e5e5 solid;
			}
			nav.sidebar .navbar-nav .open .dropdown-menu {
				position: static;
				float: none;
				width: auto;
				margin-top: 0;
				background-color: transparent;
				border: 0;
				-webkit-box-shadow: none;
				box-shadow: none;
			}
			nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
				padding: 0 0px 0 0px;
			}
			.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
				color: #777;
			}
			nav.sidebar{
				width: 200px;
				height: 100%;
				margin-left: -160px;
				float: left;
				margin-bottom: 0px;
			}
			nav.sidebar li {
				width: 100%;
			}
			nav.sidebar:hover{
				margin-left: 0px;
			}
			.forAnimate{
				opacity: 0;
			}
		}

		@media (min-width: 1330px) {
			.main{
				width: calc(100% - 200px);
				margin-left: 200px;
			}
			nav.sidebar{
				margin-left: 0px;
				float: left;
			}
			nav.sidebar .forAnimate{
				opacity: 1;
			}
		}

		nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
			color: #CCC;
			background-color: transparent;
		}
		nav:hover .forAnimate{
			opacity: 1;
		}
		section{
			padding-left: 15px;
		}
		/*SUBMENU*/
		div>ul>li>ul{
			padding-left: 3px;
			
		}
		div>ul>li>ul>li{
			list-style-type:none;
		}
		div>ul>li>ul>li>a{
			color:#777;
		}
		div>ul>li>ul>li>a:hover{
			color:#000000;
		}
		
	</style>
</head>
<body>
	<nav class="navbar navbar-default sidebar" role="navigation">
	    <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>      
	    </div>
	    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active" class="dropdown">
	          <a href="#" class="dropdown" data-toggle="collapse" data-target="#submenu1">SISTEMA DE USUARIOS GIGANTE CON CONFIGURACION<i class="caret"></i><i class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></i></a>
	          <ul class="collapse" id="submenu1">
	            <li><a href="">SISTEMA DE USUARIOS GIGANTE CON CONFIGURACION<i class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></i></a></li>
	            <li><a href="#">Modificar</a></li>
	            <li><a href="#">Reportar</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Informes</a></li>
	          </ul>
	        </li>          
	        <li ><a href="#">Libros<i style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></i></a></li>        
	        <li ><a href="#">Tags<i style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</body>
<script>
	function editar(ul,btn){
		//var ul = document.getElementById(id);
		
		$("#"+ul).sortable({
			opacity: 0.6,
			cursor: 'move',
			update: function(){
				var a=1;
				var aux = $("#"+ul+" li");
				//var aux = document.querySelector("#"+ul+">li");
				console.log(aux);

				$("#"+ul+">li").each(function(){
					//console.log(this);
					a++;
				});
			}
		});
		document.getElementById(btn).onclick = function(){
			$("#"+ul).sortable('disable');
		}
	}	
</script>
</html>