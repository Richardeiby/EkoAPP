<?php include '../template/header.php' ?>


<div class="container pt-5">
    <div class="card text-start">
        <div class="card-header">
            <p class="text-start fs-4 fw-bold m-0">Iniciar Sesion:</p>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="POST" action="">
                    <div class="mb-3 row text-center ">
                        <label for="inputName" class="col-xs-4 col-form-label">Usuario</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <label for="inputName" class="col-xs-4 col-form-label">Constraseña</label>
                        <div class="col-xs-8">
                            <input type="tel" class="form-control" name="identificacion" id="identificacion" placeholder="Identificacion" required pattern="\d+">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-grid">
                            <button type="submit" class="btn btn-success">Iniciar Sesion</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include '../template/footer.php' ?>