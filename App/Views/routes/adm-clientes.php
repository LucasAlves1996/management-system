<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="cadastra-cliente" id="form-cadastro-cliente">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form-cadastro-cliente">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary bt-cadastro" data-toggle="modal" data-target="#exampleModalCenter">
    Cadastrar cliente
  </button>

  <form method="POST">
    <div class="form-group">
      <label>Pesquisar</label>
      <input type="text" name="pesquisar" id="pesquisar" class="form-control">
    </div>
    <div class="form-group">
      <input type="submit" name="submit-pesquisar" id="submit-pesquisar" class="btn btn-primary" value="Pesquisar" required>
    </div>
  </form>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">email</th>
        <th scope="col">telefone</th>
        <th scope="col">cpf</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($this->view->dados['clientes'] as $cliente){ ?>
      <tr>
        <th scope="row"><?= $cliente['id'] ?></th>
        <td><?= $cliente['nome'] ?></td>
        <td><?= $cliente['email'] ?></td>
        <td><?= $cliente['telefone'] ?></td>
        <td><?= $cliente['cpf'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>