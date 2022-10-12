<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar
    </button>

    <!-- Modal -->
    <form action="./servidor/insertar.php" method="post">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre"  placeholder="Nombre" require>
            <label for="marca">Marca</label>
            <input class="form-control" type="text"name="marca"  id="marca"  placeholder="Marca" require>
            <label for="precio">Precio</label>
            <input class="form-control" type="text" name="precio" id="precio"  placeholder="Precio" require>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button  class="btn btn-primary">Insertar</button>
        </div>
        </div>
    </div>
    </div>
    </form>