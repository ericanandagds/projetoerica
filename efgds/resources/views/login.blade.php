<html>
<head>
    <title>:: Pizza Delivery ::</title>
    <!-- JQUERY -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="home.html">Pagina Inicial</a>
            <a class="navbar-brand" href="pizzas.html">Cardápio</a>
            <a class="navbar-brand" href="contato.html">Contato</a>
</nav>

<form action="{{url('logar')}}" method="POST" onsubmit="return validaForm(validacaoEmail);">
  @csrf
        <div class="form-group" name="f1">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" name="email" onblur="validacaoEmail(f1.email)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <div id="msgemail"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
         <button  type="submit" class="btn btn-primary">Enviar</button>

  </form>
  <script language="Javascript">
      function validacaoEmail(field) {
      usuario = field.value.substring(0, field.value.indexOf("@"));
      dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
      if ((usuario.length >=1) &&
          (dominio.length >=3) && 
          (usuario.search("@")==-1) && 
          (dominio.search("@")==-1) &&
          (usuario.search(" ")==-1) && 
          (dominio.search(" ")==-1) &&
          (dominio.search(".")!=-1) &&      
          (dominio.indexOf(".") >=1)&& 
          (dominio.lastIndexOf(".") < dominio.length - 1)) {
      document.getElementById("msgemail").innerHTML="E-mail válido";
      alert("email valido");
      }
      else{
      document.getElementById("msgemail").innerHTML="<font color='red'>Email inválido </font>";
      alert("E-mail invalido");
      }
      }
      </script>
</body>
</html>