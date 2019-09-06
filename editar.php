<?php
//Conexão
include_once 'action/db_connect.php';
  //Header
  include_once 'includes/header.php';

  //select
  if(isset($_GET['id'])){
      $id = mysqli_escape_string($connect,$_GET['id']);
      $sql = "SELECT * FROM clientes WHERE id = '$id'";
      $resultado = mysqli_query($connect,$sql);
      $dados = mysqli_fetch_array($resultado);
      mysqli_close($connect);
  }
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Editar cliente</h3>
     
    
    <form action="action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
            <input type="text" id="nome" name="nome" value="<?php echo $dados['nome']; ?>" required>
            <label class="active" for="nome">Nome</label>
        </div>
        
        <div class="input-field col s12">
            <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" required>
            <label class="active" for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input type="email" id="email" name="email" value="<?php echo $dados['email'];?>" required>
            <label class="active"  for="email">Email</label>
        </div>
        
        <div class="input-field col s12">
            <input type="number" id="idade" name="idade" value="<?php echo $dados['idade'];?>" required>
            <label class="active"  for="idade">Idade</label>
        </div>
        <button type="submit" name="btn_editar" class="btn  blue lighten-2">Confirmar</button>
        <a href="index.php" class="btn teal lighten-2">Lista de clientes</a> 
      </form>
    </div>  
  </div>

<?php
  //Footer
  include_once 'includes/footer.php';
?>