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
  
    <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{url('home')}}">Pagina Inicial</a>
                <a class="navbar-brand" href="{{url('pizza')}}">Cardápio</a>
                <a class="navbar-brand" href="{{url('contato')}}">Contato</a>
    </nav>
      
      <section>    
        <div class="container">
          <div class="row">
            <div class="col-sm">
              
              <div class="card" style="width: 18rem;"> 
                <img class="card-img-top" src="imagens/4queijos.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">4 Queijos</h5>
                  <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                  <a href="#" class="btn btn-primary">Adicionar</a>
                </div>
              </div>
            </div>
          
            <div class="col-sm"> 
            
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imagens/calabresa.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Pizza de Calabresa</h5>
                  <p class="card-text">Molho de tomate fresco, calabresa especial fatiada, rodelas de cebola, orégano e azeitonas pretas</p>
                  <a href="#" class="btn btn-primary">Adicionar</a>
                </div>
              </div>
            </div>
            <div class="col-sm">
            
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imagens/napolitana2.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Pizza Napolitana</h5>
                  <p class="card-text">Molho de tomate fresco, mussarela, tomate, queijo parmesão, orégano e azeitonas</p>
                  <a href="#" class="btn btn-primary">Adicionar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <p></p>
      <section>    
        <div class="container">
          <div class="row">
            <div class="col-sm">
              
              <div class="card" style="width: 18rem;"> 
                <img class="card-img-top" src="imagens/camarao.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Camarão</h5>
                  <p class="card-text">Molho, mussarela, camarão e orégano.</p>
                  <a href="#" class="btn btn-primary">Adicionar</a>
                </div>
              </div>
            </div>
          
            <div class="col-sm"> 
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imagens/marguerita.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Marguerita</h5>
                  <p class="card-text">Molho, mussarela, tomates em rodelas e manjericão. </p>
                  <a href="#" class="btn btn-primary">Adicionar</a>
                </div>
              </div>
            </div>
            <div class="col-sm">
              
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imagens/chocolatemorango.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Chocolate com Morango</h5>
                  <p class="card-text">Mussarela, chocolate ao leite e morango. </p>
                  <button type="submit" >Adicionar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <p></p> 
    <footer>
      
      <p>By: Erica Fernanda</p>
    <p>Contato: <a href="mailto:ericanadagds@gmail.com">
        ericanadagds@gmail.com</a></p>
    </footer>       
</body>
</html>