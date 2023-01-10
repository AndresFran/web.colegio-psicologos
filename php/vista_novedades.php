<?PHP
include('conexion.php');
$querynovedades = "SELECT * FROM novedad WHERE baja = 0 ORDER BY fechaNovedad DESC";
$rtsnovedades = mysqli_query($conexion, $querynovedades);

$novedades .= "<div class='row'>";

while ($novedad = mysqli_fetch_assoc($rtsnovedades)) {


    $novedades .= "<div class='col-sm-6 col-lg-4 mx-auto'>";
    $novedades .= "<div class='box'>";
    $novedades .= "<div class='img-box'>";
    $novedades .= "<a href='articulo.php?id=" . $novedad['idNovedad'] . "'><img class='zoom' src='images/novedades/" . $novedad['archivoNovedad'] . "' alt=''></a>";
    $novedades .= "</div>";
    $novedades .= "<div class='detail-box'>";
    $novedades .= "<h5>";
    $novedades .= $novedad['tituloNovedad'];
    $novedades .= "</h5>";
    $novedades .= "<h6 class=''>";
    $novedades .= date('d/m/Y', strtotime($novedad['fechaNovedad']));
    $novedades .= "</h6>";
    $novedades .= "</div>";
    $novedades .= "</div>";
    $novedades .= "</div>";
}

$novedades .= "</div>";
