<?php
	include "cabecalho.php";  
?>
<!-- cabecalho-->

<?php

  include "tabacaria.php";
  session_start();

    if(isset($_POST["nome_produto"]))
{
  $nome_produto=$_REQUEST["nome_produto"];
  $preco=$_REQUEST["preco"];
  $descricao=$_REQUEST["descricao"];
  $estoque=$_REQUEST["estoque"];
    
  $cadastrar=mysqli_query($conexao,"insert into cliente (nome_produto,preco,descricao,estoque)values('$nome_produto','preco','$descricao','estoque','cep')");
  
  if(!$nome_produto)
  {
    echo"<script>alert('Produto não cadastrado')
    location.href='cadastroprodutos.php'</script>";
  }
  else
  {
    echo"<script>alert('Produto Cadastrado com Sucesso')
    location.href='cadastroprodutos.php'</script>";
  } 
}



  ?>  
  







    <div class="container-fluid" id="fundo">
      <div class="container" id="cadastro">
      	<h3 class="titulo">Cadastro de Produtos</h3>	
      	<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nome do Produto</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nome do Produto" name="nome_produto">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Preço</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Preço" name="preco">
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Estoque</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Estoque" name="estoque">
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Descrição</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Descrição" name="descricao">
          </div>
        </div>

        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-outline-warning">Cadastrar Produto</button>
            <button type="reset" class="btn btn-outline-warning">Limpar</button>


          </div>
        </div>
    </form>
    </div>
  </div>



<!-- Rodape -->
<?php 
 include "rodape.php"
?>