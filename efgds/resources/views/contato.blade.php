<!DOCTYPE html>
<head>
    <meta charset="utf-8">
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
<style type="text/css">
  form{
    text-align:center;
    width: 70%;
    height: 100%;
    padding: 10px;  
  }
  body{
      background-image: url(assets/img/pizza-background.jpg);
  }
  .contato{
    background-color: white;
    opacity: initial;
    width: 40%;
    height: 53%;
    margin-left: 30%;
    padding-right: 30px;
    margin-right: 25%;
    margin-bottom: 60%;
  }

</style>
<section>
    <form class="contato" name="contato" method="POST" >
      <h2>Contato</h2>
      <div class="form-group">    
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome" name="nome">
      </div>
      <div class="form-group">   
        <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="seunome@email.com">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" name="telefone" placeholder="Telefone">  
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" name="texto" placeholder="Digite seu texto aqui">
      </div>
      <button  type="submit" class="btn btn-primary">Enviar</button>
      </form> 
  </section>
</body>
</html>