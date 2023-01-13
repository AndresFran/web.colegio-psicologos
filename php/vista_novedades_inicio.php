<?PHP
include('conexion.php');
$querynovedades = "SELECT * FROM novedad WHERE baja = 0 ORDER BY fechaNovedad DESC LIMIT 3";
$rtsnovedades = mysqli_query($conexion, $querynovedades);

$novedades .= "<div class='row'>";

while ($novedad = mysqli_fetch_assoc($rtsnovedades)) {

    //$preview = $novedad['archivoNovedad'];

    if ($novedad['tipoNovedad'] == 'IMG') {
        $preview = $novedad['archivoNovedad'];
    }

    if ($novedad['tipoNovedad'] == 'VID' or $novedad['archivoNovedad'] == 'VYT') {
        $preview = "video.png";
    }

    if ($novedad['tipoNovedad'] == 'PDF') {
        $preview = "pdf.png";
    }

    if ($novedad['tipooNovedad'] == 'TXT') {
        $preview = "txt.png";
    }

    $novedades .= "<div class='col-sm-6 col-lg-4 mx-auto'>";
    $novedades .= "<div class='box'>";
    $novedades .= "<div class='img-box'>";
    $novedades .= "<a href='articulo.php?id=" . $novedad['idNovedad'] . "'><img src='images/novedades/" . $preview . "' alt=''></a>";
    $novedades .= "</div>";
    $novedades .= "<div class='detail-box'>";
    $novedades .= "<h6>";
    $novedades .= $novedad['tituloNovedad'];
    $novedades .= "</h6>";
    $novedades .= "<h6 class=''>";
    $novedades .= date('d/m/Y', strtotime($novedad['fechaNovedad']));
    $novedades .= "</h6>";
    $novedades .= "</div>";
    $novedades .= "</div>";
    $novedades .= "</div>";
}

$novedades .= "</div>";
