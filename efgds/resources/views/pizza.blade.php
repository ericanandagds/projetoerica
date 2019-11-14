<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Pizza Delivery</title>
    <!-- JQUERY -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


</head>
<body>
<style type="text/css">
  body{
      background-image:  url(assets/img/pizza-background.jpg);;
  }
   </style>
    <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{url('home')}}">Pagina Inicial</a>
                <a class="navbar-brand" href="pizza">Cardápio</a>
                <a class="navbar-brand" href="{{url('contato')}}">Contato</a>
    </nav>
    
--> <footer>
      
      <p>By: Erica Fernanda</p>
    <p>Contato: <a href="mailto:ericanadagds@gmail.com">
        ericanadagds@gmail.com</a></p>
    </footer>       
</body>
</html>