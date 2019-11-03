<!DOCTYPE html >
<head>
  <meta charset="utf-8">
  <title>:: Pizza Delivery ::</title>
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
      background-image: url(assets/img/pizza-background.jpg);
  }
  #login{
      color: white;
			position: absolute;
			top: 25%;
			left: 25%;
			width: 60%;
    }
  /*section{
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
  }*/
  .navbarnavbar-lightbg-light {
      width: 70%;
      height: 30%;
      padding-left: 20px;
      padding-left: 20%;
      
   }
   .btnbtn-primary{
   width: 30%;
   height: 20%;
    
  }
  </style> 

<div id="login">
  <form action="{{url('logar')}}" method="POST" >
    @csrf
          <div class="form-group" name="f1">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <div id="msgemail"></div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input name="senha" type="password" class="form-control" id="exampleInputPassword1"  placeholder="Senha">
          </div>
          <button  type="submit" class="btn btn-primary">Entrar</button>
          <p></p>
          <li><a href="cadastro">Cadastre-se aqui! </a></li>

  </form>
</div>
</body>
</html>
