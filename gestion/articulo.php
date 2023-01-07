<?PHP
include('fn/datos_articulo.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Psicologos - Articulos</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="index.html"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="index.html">
                <img src="assets/images/logo/logo.png">
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4 class="card-title">Novedades</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="fn/abm_inmuebles.php" method="GET">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput"><b>Titulo </b></label>
                                <input type="text" class="form-control" id='tituloNovedad' name='tituloNovedad' placeholder="Titulo" value='<?PHP echo $tituloNovedad; ?>' require>
                            </div>

                            <div class="form-group">
                                <label for="basicInput"><b>Fecha </b></label>
                                <input type="date" class="form-control" id='fechaNovedad' name='fechaNovedad' placeholder="Fecha" value='<?PHP echo $fechaNovedad; ?>' require>
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Detalle</b></label>
                                <textarea class="form-control" id='detalleNovedad' name='detalleNovedad' rows="3"><?PHP echo $detalleNovedad; ?></textarea>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>&nbsp;Copyright <b>&copy; Colegio Psicologos <script>
                                document.write(new Date().getFullYear());
                            </script></b></p>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script src="https://kit.fontawesome.com/1ffc2bde27.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>