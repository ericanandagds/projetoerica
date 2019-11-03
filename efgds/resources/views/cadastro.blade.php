<html>
<head>
    <title>:: Pizza Delivery ::</title>
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  
</head>
<body>
    <style type="text/css">
      body {
        background-image: url('{{asset('assets/img/pizza-background.jpg')}}');
             
      }
  
    </style>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="home.html">Pagina Inicial</a>
    <a class="navbar-brand" href="pizzas.html">Cardápio</a>
    <a class="navbar-brand" href="contato.html">Contato</a>
</nav>
<section>  
<form action="home.html" method="POST" class="cadastro">
<h2>Cadastro</h2>
  <div class="form-row" name="cadastro">
    <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input name="cadastro" type="email" class="form-control" id="inputEmail4" onblur="validacaoEmail(cadastro.email)" placeholder="Email">
     </div>
    <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
            
    </div>
  </div>
    <div class="form-group">
          <div class="form-group col-md-12">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Rua A,Numero: 123">
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="inputAddress2">Complemento</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Complemento">
    </div>
    <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
      <div class="form-group col-md-4">
            <label for="inputState">Estado</label>
            <select id="inputState" name="estados" class="form-control">
              <option selected>Escolha...</option>
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP">SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
            </select>
          </div>
        <div class="form-group col-md-2">
            <label for="inputZip">CEP</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <button  type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
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