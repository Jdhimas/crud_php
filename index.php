<?php
//Conexão
  include_once 'action/db_connect.php';

  //Header
  include_once 'includes/header.php';

  //Mensagem de confirmação de cadastro
  include_once 'includes/message.php';
?>
  <div class="row">
    <div class="col s12 m6 push-m3">
    <h2 class="light">Clientes</h2>
      <table class="striped">
        <thead>
          <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Email</td>
            <td>Idade</td>
            <td>Editar</td>
            <td>Excluir</td>
          </tr>
        </thead>
        
        <tbody>
        <?php
        //Listagem dos clientes
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
        while($dados = mysqli_fetch_array($resultado)):
        ?>
          <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['idade']; ?></td>
            <td><a href="editar.php?id=<?php echo $dados['id']?>" class="btn-floating blue lighten-2"><i class="material-icons">edit</i></a></td>
            
            <td><a href="#modal1<?php echo $dados['id']?>"class="btn-floating red lighten-2 modal-trigger"><i class="material-icons">delete</i></a></td>
        
            <!-- Estrutura do modal -->
            <div id="modal1<?php echo $dados['id']?>" class="modal">
              <div class="modal-content">
                <h4>Excluir</h4>
                <p>Você deseja excluir este registro?</p>
              </div>
        
            <div class="modal-footer">
              <form action="action/delete.php" method = "POST">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <button class="btn red lighten-2" name="btn_deletar">Sim, quero excluir</button>
              </form>
            </div>
           
           </div>
        </tr>
        <?php endwhile;
           else:?>
              <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              </tr>
        <?php endif;?>
        </tbody>
      </table>
      
      <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>  
  </div>

<?php
  //Footer
  include_once 'includes/footer.php';
?>