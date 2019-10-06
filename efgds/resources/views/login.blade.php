<html>
<head>
    <title>:: Pizza Delivery ::</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="home.html">Pagina Inicial</a>
            <a class="navbar-brand" href="pizzas.html">Cardápio</a>
            <a class="navbar-brand" href="contato.html">Contato</a>
</nav>
<form class="login" method="POST" onsubmit="return validaForm(validacaoEmail);">
        <div class="form-group" name="f1">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" name="email" onblur="validacaoEmail(f1.email)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <div id="msgemail"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
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