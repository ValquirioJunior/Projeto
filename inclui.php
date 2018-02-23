<?php
	include "cabecalho.php";  
?>
<!-- cabecalho-->

 <?php
  include "tabacaria.php";
  session_start();

  

   if(isset($_POST["loginadmin"]))
{

  
  $loginadmin=$_REQUEST["loginadmin"];
  $senhaadmin=$_REQUEST["senhaadmin"];
  
  
  $logaradm=mysqli_query($conexao,"select * FROM admin WHERE loginadmin='$loginadmin' and senhaadmin='$senhaadmin'");
  

  
  if($logaradm)
  {
    echo"<script>alert('Login efetuado com sucesso')
    location.href='paginicial.php'</script>";
  }
  else
  {
    echo"<script>alert('Erro ao tentar logar')
    location.href='paginicial.php'</script>";
  }

}


 ?>



    <div class="container-fluid" id="fundo">
      <div class="container" id="cadastro">
      	<h3 class="titulo">Login de Administradores</h3>	
      	<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email de administrador" name="loginadmin" maxlength="20" size="20">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="senhaadmin" maxlength="10" size="10">
          </div>
        </div>

        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Entrar</button>
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