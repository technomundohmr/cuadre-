<div class="container">
    <div class="row">
        <div class="col-md-4 offset-4">
            <div class="card text-center p-5 m-3">
                <h1><?= $nombre ?></h1>
            </div>
            <?php
            if (isset($_SESSION['mensaje'])) {
            ?>
                <div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                session_unset();
            }
            ?>
            <form action="crear.php" method="POST">
                <input type="text" name="empleado" value="<?= $nombre ?>" class="d-none">
                <div class="form-group">
                    <input id="my-input" class="form-control" type="text" name="cliente" placeholder="Cliente">
                </div>
                <div class="input-group">
                    <span class="input-group-text">$ </span><input id="my-input" class="form-control" type="text" name="valor" placeholder="Valor">
                </div>
                <button type="submit" class="btn btn-success btn-block mt-3" name="sumar">Sumar</button>
            </form>
        </div>
    </div>
</div>
<hr>