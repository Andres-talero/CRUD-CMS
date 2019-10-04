
<div class="container mt-5">
<div class="text-center fd">
<p class="display-4 " style="font-family: 'Lexend Deca', sans-serif;">Todas las publicaciones<p>
</div>
</div>
</div>
<div class="container mt-5">
<div class="row">
    <?php foreach(parent::all() as $index):  ?>
<div class="col-md-4 align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<div class="pd"  style="max-witch: 100px; min-witch:100px; height:200px; overflow:hidden;">
<img src="<?= $index->image ?>" class="card-img-top" alt="..."  style="width: 100%; height:100%">
</div>
<div class="card-body">
<h5 class="card-title mb-2"><?= $index->title ?></h5>
<div class="mt-4">
<p class="card-text"><?= $index->descripcion ?></p>
<div class="mt-4">
<button type="button" class="btn btn-success ml-2 my-2 my-sm-0 mt-4" data-toggle="modal" data-target="#<?= $index->important ?>">Ver mas</button>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>


<?php foreach(parent::all() as $index):  ?>

<div class="modal fade" id="<?= $index->important ?>" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
          <img src="<?= $index->image ?>"  class="img-fluid rounded mx-auto d-block mb-2"  style="max-height:250px" alt="Responsive image">
        </div>
       
        <div class=" text-right mb-3">
           <p class="text-center display-4"><?= $index->title ?></p>
           <h3 class="text-muted"><?= $index->user ?></h3>
           
          </div>
<div class="ow mt-4 border-bottom text-center mt-4">
<p class="h4 "><?= $index->descripcion ?></p>
</div>

      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">
        <button type="button" class="btn btn-danger col-md-12" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>
