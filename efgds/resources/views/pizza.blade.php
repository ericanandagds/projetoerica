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
      background-image:  url(assets/img/pizza-background.jpg);
  }
   </style>
    <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{url('home')}}">Pagina Inicial</a>
                <a class="navbar-brand" href="pizza">Cardápio</a>
                <a class="navbar-brand" href="{{url('contato')}}">Contato</a>
    </nav>
    <form action="{{ url('pizza') }}">
    @csrf
        <h2>Cadastro</h2>
        <div class="form-group col-md-2">
                <label for="inputZip">Nome </label>
                <input type="text" class="form-control" id="inputZip" nome="nome">
            </div>
            <div class="form-group col-md-4">
                    <label for="inputState">Tamanho da Pizza</label>
                    <select id="inputState" name="tamanho" class="form-control">
                        <option selected>Escolha...</option>
                        <option value="pequena">Pequena</option>
                        <option value="media">Media</option>
                        <option value="grande">Grande</option>
                      </select>
            </div> 
             <div class="form-group col-md-4">
                    <label for="inputState">Sabor escolhido</label>
                    <select id="inputState" name="sabor" class="form-control">
                        <option selected>Escolha...</option>
                        <option value="1">Frango Com Catupiry</option>
                        <option value="2">Calabresa</option>
                        <option value="3">Portuguesa</option>
                        <option value="4">Quatro queijos</option>
                        <option value="5">Napolitana</option>
                        <option value="6">Brigadeiro</option>
                      </select>
                </div>
                <div class="form-group col-md-4">
                        <label for="inputState">Forma de pagamento</label>
                        <select id="inputState" name="pagamento" class="form-control">
                            <option selected>Escolha...</option>
                            <option value="dinheiro">Dinheiro</option>
                            <option value="debito">Cartao Debito</option>
                            <option value="credito">Cartao Credito</option>
                          </select>
                </div>
             
                <button  type="submit" class="btn btn-primary">Cadastrar Pedido</button>
           </div>           
    </section>
            
    </form>
      
</body>
</html>