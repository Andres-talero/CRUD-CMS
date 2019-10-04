<?php if($_SESSION['user']->id_rol == 1){ ?>

<div class="container mt-5">
<div class="text-center fd">
<p class="display-4 mb-5" style="font-family: 'Lexend Deca', sans-serif;">Todas las publicaciones<p>
<button type="button" class="btn btn-outline-success col-md-12"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
</div>
</div>


<div class="container mt-5">
<div class="row">
    <?php foreach(parent::all() as $publi):  ?>
<div class="col-md-4 align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<div class="pd"  style="max-witch: 100px; min-witch:100px; height:200px; overflow:hidden;">
<img src="<?= $publi->image ?>" class="card-img-top" alt="..."  style="width: 100%; height:100%">
</div>
<div class="card-body">
<h5 class="card-title mb-2"><?= $publi->title ?></h5>
<div class="mt-4">
<button type="button" class="btn btn-success mb-2 mt-4 col-md-6" data-toggle="modal" data-target="#<?= $publi->important ?>">Ver mas</button>
<button type="button" class="btn btn-warning text-white mb-2 mt-4 col-md-6" data-toggle="modal" data-target="#al<?= $publi->important ?>">Modificar</button>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>


<?php foreach(parent::all() as $publi):  ?>

<div class="modal fade" id="<?= $publi->important ?>" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalScrollableTitle">Publicacion</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class=" align-self-center" >
          <img src="<?= $publi->image ?>"  class="img-fluid rounded mx-auto d-block mb-2"  style="max-height:250px" alt="Responsive image">
        </div>
       
        <div class=" text-right mb-3">
           <p class="text-center display-4"><?= $publi->title ?></p>
           <h3 class="text-muted"><?= $publi->user ?></h3>
           
          </div>
<div class="ow mt-4 border-bottom text-center mt-4">
<p class="h4 "><?= $publi->descripcion ?></p>
</div>

      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">

<button type="button" class="btn btn-success col-md-6" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
<a class="btn btn-danger col-md-6" href="?controller=publi&method=delete&id=<?= $publi->id ?>" role="button">Eliminar</a> 
</div>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear publicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" placeholder="Mi perro" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control"  placeholder="Lo mas genial de la vida" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link Image</label>
    <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
  </div>
  <input type="hidden" name="user" id="user" value="<?=$_SESSION['user']->name;?>">
  <input type="hidden" name="id_user" id="id_user" value="<?=$_SESSION['user']->id;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php foreach(parent::all() as $publi):  ?>

<div class="modal fade" id="al<?= $publi->important ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar publicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=publi&method=update" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" value="<?= $publi->title ?>" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?= $publi->descripcion ?>">
  </div>

  <input type="hidden" name="id" id="id" value="<?= $publi->id ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning col-md-6">Modificar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>



    <?php } ?>

  
  
<?php if($_SESSION['user']->id_rol == 2){ ?>

  <div class="container mt-5">
<div class="text-center fd">
<p class="display-4 mb-5" style="font-family: 'Lexend Deca', sans-serif;">Todas las publicaciones<p>
<button type="button" class="btn btn-outline-success col-md-12"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
</div>
</div>


<div class="container mt-5">
<div class="row">
    <?php foreach(parent::all() as $publi):  ?>
<div class="col-md-4 align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<div class="pd"  style="max-witch: 100px; min-witch:100px; height:200px; overflow:hidden;">
<img src="<?= $publi->image ?>" class="card-img-top" alt="..."  style="width: 100%; height:100%">
</div>
<div class="card-body">
<h5 class="card-title mb-2"><?= $publi->title ?></h5>
<div class="mt-4">
<button type="button" class="btn btn-success mb-2 mt-4 col-md-6" data-toggle="modal" data-target="#<?= $publi->important ?>">Ver mas</button>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>


<?php foreach(parent::all() as $publi):  ?>

<div class="modal fade" id="<?= $publi->important ?>" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalScrollableTitle">Publicacion</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class=" align-self-center" >
          <img src="<?= $publi->image ?>"  class="img-fluid rounded mx-auto d-block mb-2"  style="max-height:250px" alt="Responsive image">
        </div>
       
        <div class=" text-right mb-3">
           <p class="text-center display-4"><?= $publi->title ?></p>
           <h3 class="text-muted"><?= $publi->user ?></h3>
           
          </div>
<div class="ow mt-4 border-bottom text-center mt-4">
<p class="h4 "><?= $publi->descripcion ?></p>
</div>

      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">

<button type="button" class="btn btn-success col-md-12" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
</div>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear publicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" placeholder="Mi perro" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control"  placeholder="Lo mas genial de la vida" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link Image</label>
    <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
  </div>
  <input type="hidden" name="user" id="user" value="<?=$_SESSION['user']->name;?>">
  <input type="hidden" name="id_user" id="id_user" value="<?=$_SESSION['user']->id;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php } ?>