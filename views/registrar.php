<?php include '../template/header.php' ?>


<header class="container-fluid color-btn fixed-top">
    <div class="row size-orange">
        <div class="col-11 text-light d-flex">
              <a class="nav-link link-light" href="../"><i class=" bi bi-x-lg fs-4"></i></a>
            <p class="pt-2 px-4 fs-4">Nuevo Usuario</p>
        </div>
    </div>
</header>



<div class="container pt-10">
    <div class="card text-start">
        <div class="card-body">
            <div class="container">
                <form method="POST" action="/Class/DatosBasicos.php">
                    <div class="mb-3 row">
                        <label for="inputName" class="col-xs-4 col-form-label">Nombre</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <label for="inputName" class="col-xs-4 col-form-label">Identificacion</label>
                        <div class="col-xs-8">
                            <input type="tel" class="form-control" name="identificacion" id="identificacion" placeholder="Identificacion" required pattern="\d+">
                        </div>
                        <label for="inputName" class="col-xs-4 col-form-label">Direccion</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>
                        </div>
                        <label for="inputName" class="col-xs-4 col-form-label">Correo</label>
                        <div class="col-xs-8">
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                        </div>
                        <label for="inputName" class="col-xs-4 col-form-label">Contacto Celular</label>
                        <div class="col-xs-8">
                            <input type="tel" class="form-control" name="contacto" id="contacto" placeholder="Contacto" required pattern="3.........">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="" class="form-label">Tipo de Usuario</label>
                            <select class="form-control" name="" id="">
                                <option>Cliente</option>
                                <option>Colaborador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-grid">
                            <button type="submit" class="btn btn-warning color-btn">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include '../template/footer.php' ?>