<div class="add-module">
	<span style="margin:auto;color:green;">
		<i class="fas fa-plus-circle fa-5x" data-toggle="modal" data-target="#modal-create"></i>
    </span>
    <span style="margin:auto;color:blue;">
		<i class="fas fa-edit fa-5x" data-toggle="modal" data-target="#modal-update"></i>
    </span>
    <span style="margin:auto;color:red;">
		<i class="fas fa-minus-circle fa-5x" data-toggle="modal" data-target="#modal-delete"></i>
    </span>
</div>
<div class="modules">
<?php foreach ($this->view->dados['modules'] as $module) { ?>
	<div class="module" id="module_<?= $module['module_id'] ?>" onclick="window.location='<?= $module['module_view'] ?>';">
		<h1 class="module-title"><?= $module['module_name'] ?></h1>
	</div>
<?php } ?>
</div>

<!-- Modal create modules -->
<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="ampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Criar novo módulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="module-create" id="module-create">
          <div class="form-group">
            <!--<div>
              <label>Nome do módulo</label>
              <input type="text" class="form-control" id="module_name" name="module_name" required>
            </div>
            <div>
              <label>Nome na url</label>
              <input type="text" class="form-control" id="module_view" name="module_view" required>
            </div>-->
            <h1>Em desenvolvimento!</h1>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" form="module-create">Criar</button>-->
      </div>
    </div>
  </div>
</div>

<!-- Modal update models -->
<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="ampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Atualizar módulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="slide-show-update" enctype="multipart/form-data">
          <div class="form-group">
            <h1>Em desenvolvimento!</h1>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-- Modal delete modules -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="ampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Deletar módulos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="module-delete" id="module-delete">
        	<div class="modal-div">
        		<table class="table table-striped">
    				<thead>
    				    <tr>
    				    	<th scope="col">module_name</th>
    				    	<th scope="col">module_view</th>
    				    	<th scope="col">Excluir</th>
    				    </tr>
    				</thead>
    				<tbody>
    				    <?php foreach($this->view->dados['modules'] as $module){ ?>
    				    <tr id="<?= 'delete_module_'.$module['module_id'] ?>">
    				    	<td><?= $module['module_name'] ?></td>
    				    	<td><?= $module['module_view'] ?></td>
    				    	<td><input type="checkbox" id="<?= 'checkbox_'.$module['module_id'] ?>" name="<?= 'checkbox_'.$module['module_id'] ?>" onclick="changeColor1('<?= 'delete_module_'.$module['module_id'] ?>','<?= 'checkbox_'.$module['module_id'] ?>')" value="<?= $module['module_id'] ?>"></td>
    				    </tr>
    				    <?php } ?>
    				</tbody>
    			</table>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" form="module-delete">Excluir</button>
      </div>
    </div>
  </div>
</div>