<div class="container mt-5 mb-4">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center">
<a class="btn btn-success btn-lg" href="?controller=user&method=create" role="button">Crear</a>
</div>
<div class="col-md-10">
<p class="display-4" >Lista de usuarios</p>
</div>
</div>
<br>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

