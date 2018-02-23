<?php
	include "cabecalho.php";  
?>
<!-- cabecalho-->


 <?php
  include "tabacaria.php";
  session_start();

   
   if(isset($_POST["codigoadmin"]))
{asdasdqsdadasdasdad
  $codigoadmin=$_REQUEST["codigoadmin"];
  $loginadmin=$_REQUEST["loginadmin"];
  $senhaadmin=$_REQUEST["senhaadmin"];
  	  
  $cadastrar=mysqli_query($conexao,"insert into cliente (codigoadmin,loginadmin,senhaadmin)values('$codigoadmin',$loginadmin','$senhaadmin')");
  
  if(!$codigoadmin)
  {
    echo"<script>alert('Login efetuado com sucesso')
    location.href='loginadm.php'</script>";
  }
  else
  {
    echo"<script>alert('Erro ao Cadastrar')
    location.href='loginadm.php'</script>";
  } 
}




 ?>












    <div class="container-fluid" id="fundo">
      <div class="container" id="cadastro">
      	<h3 class="titulo">Cadastro de Administradores</h3>	
      	<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 
      	 <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Codigo para Administrador</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Codigo" name="codigoadmin" maxlength="1" size="1" >
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email de administrador" name="loginadmin" maxlength="30" size="30">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="senhaadmin" maxlength="15" size="15">
          </div>
        </div>

        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Cadastrar Admistrador</button>
            <button type="reset" class="btn btn-default">Limpar</button>


          </div>
        </div>
    </form>
    </div>
  </div>










<!-- Rodape -->
<?php 
 include "rodape.php"
?>