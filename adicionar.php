<?php
  //Header
  include_once 'includes/header.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Adicionar novo cliente</h3>
     
      <form action="action/create.php" method="POST">
        <div class="input-field col s12">
            <input type="text" id="nome" name="nome" required>
            <label class="active" for="nome">Nome</label>
        </div>
        
        <div class="input-field col s12">
            <input type="text" id="sobrenome" name="sobrenome" required>
            <label class="active" for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input type="email" id="email" name="email" required>
            <label class="active"  for="email">Email</label>
        </div>
        
        <div class="input-field col s12">
            <input type="number" id="idade" name="idade" required>
            <label class="active"  for="idade">Idade</label>
        </div>
        <button type="submit" name="btn_cadastrar" class="btn  blue lighten-2">Cadastrar</button>
        <a href="index.php" class="btn teal lighten-2">Lista de clientes</a> 
      </form>
    </div>  
  </div>

<?php
  //Footer
  include_once 'includes/footer.php';
?>