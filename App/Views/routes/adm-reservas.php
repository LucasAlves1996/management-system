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
          <form method="POST" action="efetua-reserva" id="form-efetua-reserva" enctype="multipart/form-data">
            <div class="form-group">
                <label>Data de retirada</label>
                <input type="date" name="data_retirada" id="data_retirada" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Data de devolucão</label>
                <input type="date" name="data_devolucao" id="data_devolucao" class="form-control" required>
            </div>

            <div class="form-group">
                <select class="form-control" id="id_cliente" name="id_cliente" required>
                  <option value="">Selecionar cliente</option>
                  <?php foreach ($this->view->dados['clientes'] as $cliente) { ?>
                    <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
                  <?php } ?>
                </select>
              </div>

            <div class="form-group">
                <select class="form-control" id="id_livro" name="id_livro" required>
                  <option value="">Selecionar livro</option>
                  <?php foreach ($this->view->dados['livros'] as $livro) { ?>
                    <option value="<?= $livro['id'] ?>"><?= $livro['nome'] ?></option>
                  <?php } ?>
                </select>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form-efetua-reserva">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary bt-cadastro" data-toggle="modal" data-target="#exampleModalCenter">
    Efetuar reserva
    </button>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">data_retirada</th>
        <th scope="col">data_devolucao</th>
        <th scope="col">cliente</th>
        <th scope="col">livro</th>
        <th scope="col">status</th>
        <th scope="col">Dar baixa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->view->dados['reservas'] as $reserva){ ?>
        <tr>
        <th scope="row"><?= $reserva['id'] ?></th>
        <td><?= $reserva['data_retirada'] ?></td>
        <td><?= $reserva['data_devolucao'] ?></td>
        <td><?= $reserva['nome_cliente'] ?></td>
        <td><?= $reserva['nome_livro'] ?></td>
        <td><?php if($reserva['status']==0){ echo "<span style='color:green;'>Devolvido</span>"; } else{ echo "<span style='color:red;'>Reservado</span>"; } ?></td>
        <td>
          <form method="POST">
            <input type="hidden" id="id" name="id" value="<?= $reserva['id'] ?>">
            <input type="hidden" id="id_livro" name="id_livro" value="<?= $reserva['id_livro'] ?>">
            <input type="submit" class="btn btn-primary" value="Finalizar">
          </form>
        </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>