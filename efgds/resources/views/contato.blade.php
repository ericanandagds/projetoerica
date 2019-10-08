<html>
<head>
    <title>:: Pizza Delivery ::</title>
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

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

<section>
<form class="contato" name="contato" method="POST" onsubmit="return validaForm(this);">

  <h2>Contato</h2>
  <div class="form-group">    
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
  </div>
  <div class="form-group">   
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="seunome@email.com">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Telefone">  
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Digite seu texto aqui">
  </div>
  <button  type="submit" class="btn btn-primary">Enviar</button>
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
</form> 
</section>
</body>
</html>