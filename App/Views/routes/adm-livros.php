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
          <form method="POST" action="cadastra-livro" id="form-cadastro-livro" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Editora</label>
                <input type="text" name="editora" id="editora" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Imagem</label>
                <input type="file" name="img" id="img" class="form-control-file" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form-cadastro-livro">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary bt-cadastro" data-toggle="modal" data-target="#exampleModalCenter">
    Cadastrar livro
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
        <th scope="col">editora</th>
        <th scope="col">autor</th>
        <th scope="col">img_localizacao</th>
        <th scope="col">status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->view->dados['livros'] as $livro){ ?>
        <tr>
        <th scope="row"><?= $livro['id'] ?></th>
        <td><?= $livro['nome'] ?></td>
        <td><?= $livro['editora'] ?></td>
        <td><?= $livro['autor'] ?></td>
        <td><?= $livro['img_localizacao'] ?></td>
        <td><?php if($livro['status']==0){ echo "<span style='color:red;'>Indisponível</span>"; } else{ echo "<span style='color:green;'>Disponível</span>"; } ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>