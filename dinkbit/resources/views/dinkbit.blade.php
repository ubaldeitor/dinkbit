<!DOCTYPE html>
<html lang="en" data-ng-app="DinkabitApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}" />
	<title>Reto Dinkbit</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/dinkbit.css') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/dinkabit.js') !!}
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <!--<div class="navbar-wrapper">
        <div class="container"> -->
            <nav class="navbar navbar-default navbar-fixed-top menu-dinkabit">
		<div class="container">	
                    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                        <a class="navbar-brand" href="."><img src="assets/images/logos/logo.png" alt="Dinkbit"></a>
			</div>
                        <div class="navbar-collapse collapse" id="header-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">QUIENES SOMOS</a></li>
                                <li><a href="#">NUESTROS SERVICIOS</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contacto">CONTACTO</a></li>
                                <li><a class="btn-default menu-button" href="cotizador" role="button">COTIZA TU PRESTAMO</a></li>
                            </ul>
                        </div>	
                    </div>
                </nav>
           <!-- </div>
        </div> -->
	@yield('content')
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 menu-footer-dinkbit">
                <a href="#">QUIENES SOMOS</a> 
                <a href="#">NUESTROS SERVICIOS</a> 
                <a href="#">FAQ</a> 
                <a href="#">CONTACTO</a> 
                <a href="#">COTIZA TU PRESTAMO</a>
                    <p>2015 Dinkbit S.A de C.V. Todos los derechos reservados 
                    <a href="#">Aviso de privacidad</a> | <a href="#">Términos y condiciones de promociones</a>
                    </p>
                </div>
        
            </div>
        </div>
        <div class="contact-footer-dinkbit container">
            <div class="row">
                <div class="col-lg-6">
                    <p>¿Preguntas? FAQ@loremipsum.com 52520052</p>
                </div>
                <div class="col-lg-6">
                    <p>SIGUENOS EN:</p>
                </div>
            </div>
            
        </div>
	
    	
</body>
</html>