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
    <!-- <nav class="navbar navbar-light">
        <div class="container d-block">
            <a class="navbar-brand ms-4" href="index.php">
                <img src="assets/images/logo/logo.png">
            </a>
        </div>
    </nav> -->

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4 class="card-title">Novedades</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <form action="fn/abm_articulo.php" method="POST" enctype="multipart/form-data">
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

                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"><b>Tipo de Archivo</b></label>
                                    <select class="form-select" id="tipoNovedadd" name="tipoNovedad">
                                        <?PHP if ($_REQUEST['abm'] == 'a') { ?>
                                            <option selected value="IMG">Imagen</option>
                                            <option value="VID">Video</option>
                                            <option value="PDF">PDF</option>
                                        <?PHP } else { ?>
                                            <option selected value="<?PHP echo $tipoNovedad ?>">* <?PHP echo $nomTipoNovedad ?></option>
                                            <option value="IMG">Imagen</option>
                                            <option value="VID">Video</option>
                                            <option value="PDF">PDF</option>
                                            <option value="TXT">Solo Texto</option>
                                        <?PHP } ?>

                                    </select>
                                </div>

                                <?PHP if (!empty($archivoNovedad)) { ?>
                                    <?PHP echo $imagen; ?>
                                    <a href="fn/abm_articulo.php?archivoNovedad=<?PHP echo $archivoNovedad; ?>&idNovedad=<?PHP echo $_REQUEST['idNovedad']; ?>&abm=x" class="btn btn-danger me-1 mb-1"><i class="fa-solid fa-trash-can"'></i></i> Eliminar Archivo</a>
                                    <br>&nbsp;</br>
                                <?PHP } else { ?>
                                    <?PHP if ($_REQUEST['abm'] == 'a') { ?>
                                        <div class="form-group mb-3">
                                            <label>Subir Archivo</label><br>
                                            <input type="file" name="archivo" id="archivo">
                                        </div>
                                    <?PHP } else { ?>
                                        <form action="fn/abm_articulo.php" method="POST" enctypes="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label>Subir Archivo</label><br>
                                                <input type="file" name="archivo" id="archivo">
                                            </div>    
                                            <div class="buttons">
                                                <!--input type="hidden" id="tipoNovedad" name="tipoNovedad" value="<?PHP echo $tipoNovedad ?>" /--> 
                                                <input type="hidden" id="idNovedad" name="idNovedad" value="<?PHP echo $idNovedad; ?>" />
                                                <input type="hidden" id="abm" name="abmi" value="i" />
                                                <button type="submit" class="btn btn-info me-1 mb-1">Subir Archivo</button>
                                            </div>
                                        </form>
                                    <?PHP } ?>

                                <?PHP } ?>                            
                        
                            <div class="buttons">
                                <!--input type="hidden" id="tipoNovedad" name="tipoNovedad" value="<?PHP echo $tipoNovedad ?>" /--> 
                                <input type="hidden" id="idNovedad" name="idNovedad" value="<?PHP echo $idNovedad; ?>" />
                                <input type="hidden" id="abm" name="abm" value="<?PHP echo $_REQUEST['abm']; ?>" />
                                <button type="submit" class="btn btn-success me-1 mb-1">Guardar</button>
                                <a href="index.php" class="btn btn-warning me-1 mb-1">Cancelar</a>
                            </div>                            
                        </div>
                    </form>
                    </div>    
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
        let table1 = document.querySelector(' #table1'); let dataTable=new simpleDatatables.DataTable(table1); </script>

                                            <script src="https://kit.fontawesome.com/1ffc2bde27.js" crossorigin="anonymous"></script>
                                            <script src="assets/js/main.js"></script>
</body>

</html>