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
		body{
		    text-transform: uppercase;
		}
		input, textarea,button{
		    text-transform: uppercase;   
		}
		a:link{
		    text-decoration: none;
		}
		.title{
			padding-bottom: 30px;
		}
		.sidebar{
			position:fixed;
			border-right: 1px solid #e7e7e7;
			top:0;
			bottom:0;
			width:270px;
			background-color:#F8F8F8;
			overflow-x:hidden;
			overflow-y:auto;
			z-index: 2;
		}
		nav>.profile{
			padding-top:20px;
			text-align: center;
		}
		nav>.profile>.img{
			margin:0 auto;
			width: 80px;
			height: 80px;
			border-radius: 50%;
		}
		nav>.profile>.data{
			font-size: 10px;
			margin-top: 0;
			padding-top: 0; 
			margin-bottom: 0;
			padding-bottom: 0;
		}
		.navbar-default{
			border:none;
			background-color: #F8F8F8;
			margin:0;
		}

		.buttoms{
			position:relative;
			padding-left: 2px; 
			text-align: center;
			z-index: 4;
		}
		.buttoms>div{
			position:relative;
			display: inline-block;
		}
		.buttoms>div>ul{
			position: fixed !important;
			top:inherit;
			left: inherit;
			right: inherit;
			bottom: inherit;
			z-index:5 !important;
		}
		#div_menu{
			position: relative;
			border-top: 1px solid #e7e7e7;
			/*border-bottom: 1px solid black;*/
			padding:0;
			margin:0;
			z-index: 3;
		}
		.menu{
		    /*margin: 0 !important;*/
		    padding: 0 !important;
		    width: 270px !important;
		    /*border:1px solid black;*/
		} 
		.menu>li{
			list-style-type: none !important;
			/*width: 270px;*/
			border-bottom: 1px solid #e7e7e7;
			/*padding:0;*/
		}
		
		.menu>li>a{
		    display: block;
		    width: 240px;
		    color:#000000;
		    text-decoration: none;
		}
		.menu>li>ul{
			position: relative;
			list-style-type: none !important;
			width: 100%;
			padding: 0;
			border-top: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
		}
		.menu>li>ul>li{
		    padding: 15px;
		    border-top: 1px solid #ccc;
		    background-color:#F4F4F4;
		}
		.menu>li>ul>li:hover{
			background-color:#FFFFFF;		    
		}
		.menu>li>ul>li>a{
		    display: block;
		    color:#000000;
		    text-decoration: none;
		}
		.sub_menu_edit{
			float:right;
		}
		.wrapper{
			padding-left: 270px;
			padding-top: 10px;
			z-index: 1;
		}
		@media(max-width: 768px){
			.sidebar{
				position:relative;
				border-right:none;
				width: 100%;
				background-color:#F8F8F8;
				overflow-x:hidden;
				overflow-y: hidden;
			}
			nav>.profile{
				position: absolute;
				left:40%;
				padding-top:0px;
				text-align: center;
			}
			nav>.profile>.img{
				padding:0px;
				margin:0 auto;
				width: 15px;
				height: 15px;
				border-radius: 50%;
			}
			nav>.profile>.data{
				font-size: 7px;
				margin-top: 0;
				padding-top: 0; 
				margin-bottom: 0;
				padding-bottom: 0;
			}
			.title{
				position:absolute;
			}
			.menu{
			    margin: 0 !important;
			    padding: 0 !important;
			    width: 100% !important;
			} 
			.menu>li{
				list-style-type: none !important;
				width: 100%;
				border-bottom: 1px solid black;;
			}
			.menu>li>ul{
				list-style-type: none !important;
				width: 100%;
			}
			.wrapper{
				padding-top: 10px;
				padding-left: 0;
				z-index: 1;
			}
			.buttoms{
				position:absolute !important;
				padding-top: 48px !important; 
				padding-left: 2px !important; 
				text-align: center;
				z-index: 1000000!important;
			}
		}
	</style>
</head>
<body>
	<div class="sidebar">
		<nav class="navbar navbar-default">
			<div class="title">
				<a class="navbar-brand" href="" title="ACERCA DE...">SISTEMA</a>
			</div>
			<div class="profile">
				<img src="Kukenan_Tepuy_at_Sunset.jpg" alt="IMAGEN DE PERFIL" class="img">
				<div class="data">
					<b>USUARIO</b><br>
					ADMINSITRADOR<br>
					CADUCIDAD DE CLAVE EN: 365 DIAS
				</div>
			</div>
			<div class="buttoms">
				<a href="" class="btn btn-default btn-sm" title="IR AL INICIO"><i class="fa fa-home"></i></a>
				<button type="button" id="btn_edit_menu" onclick="editar('ul_menu','btn_edit_menu');" class="btn btn-default btn-sm" title="HAGA CLICK PARA EDITAR EL ORDEN DEL MENU"><i class="glyphicon glyphicon-edit"></i></button>
				<a href="" class="btn btn-default btn-sm" title="AYUDA EN LINEA"><i class="fa fa-comment"></i></a>
				<div class="dropdow">
					<a href="" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="MANUALES"><i class="fa fa-caret-down"></i><i class="fa fa-book"></i></a>
					<ul class="dropdown-menu">
						<li><a href="">MANUAL DE USUARIO</a></li>
						<li><a href="">MANUAL DE SISTEMA</a></li>
					</ul>
				</div>
				<a href="" class="btn btn-default btn-sm" title="CERRAR SESION"><i class="fa fa-power-off"></i></a>

			</div>
			<br><br>
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#div_menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="row">
					<div class="collapse navbar-collapse" id="div_menu">
						<ul class="menu" id="ul_menu">
							<li><a href="#">CONFIGURACION DE SISTEMA MUY LARGO</a></li>
							<li>
								<a href="javascript:;" data-toggle="collapse" data-target="#sub-menu" class="collapse">LIBROS<i  class="caret"></i></a>
								<ul id="sub-menu" class="collapse">
									<li><a href="#">CONFIGURACION DE SISTEMA MUY LARGO</a><button type="button" id="btn-edit-menu" onclick="editar('sub-menu','btn-edit-menu');" class="sub_menu_edit btn btn-default btn-xs" title="HAGA CLICK PARA EDITAR ESTE SUB-MENU"><i class="glyphicon glyphicon-edit"></i></button></li>
									<li><a href="#">CONFIGURACION DE SISTEMA</a></li>
									<li><a href="#">SUB-MENU3</a></li>
									<li><a href="#">SUB-MENU4</a></li>
									<li><a href="#">SUB-MENU5</a></li>
								</ul>
							</li>
							<li><a href="#">AUTORES</a></li>
							<li><a href="javascript:;" data-toggle="collapse" data-target="#sub-menu2" class="collapse">EDITORIALES<i class="caret"></i></a>
								<ul id="sub-menu2" class="collapse">
									<li><a href="#">SUB-MENU1</a><button type="button" id="btn-edit-menu" onclick="editar('sub-menu2','btn-edit-menu');" class="sub_menu_edit btn btn-default btn-xs" title="HAGA CLICK PARA EDITAR ESTE SUB-MENU"><i class="glyphicon glyphicon-edit"></i></button></li>
									<li><a href="#">SUB-MENU2</a></li>
									<li><a href="#">SUB-MENU3</a></li>
									<li><a href="#">SUB-MENU4</a></li>
									<li><a href="#">SUB-MENU5</a></li>
								</ul>
							</li>
							<li><a href="#">MENU 5</a></li>
							<li><a href="#">MENU 6</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDo
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-warning">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-danger">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-warning">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
					<div class="panel panel-danger">
						<div class="panel-heading">
							TITULO
						</div>
						<div class="panel-body">
							HOLA MUNDO
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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