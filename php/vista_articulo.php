<?PHP
include('conexion.php');
$queryarticulo = "SELECT * FROM novedad WHERE idNovedad = '$_REQUEST[id]'";
$rtsarticulo = mysqli_query($conexion, $queryarticulo);

$novedad = "<div class='row'>";

$articulo = mysqli_fetch_assoc($rtsarticulo);

$novedad .= "<div class='col-md-6'>";
$novedad .= "<div class='img-box'>";
$novedad .= "<a href='#modal'><img src='images/novedades/" . $articulo['archivoNovedad'] . "' alt=''></a>";
$novedad .= "</div>";
$novedad .= "</div>";
$novedad .= "<div class='col-md-6'>";
$novedad .= "<div class='detail-box'>";
$novedad .= "<div class='heading_container'>";
$novedad .= "<h2>";
$novedad .= $articulo['tituloNovedad'];
$novedad .= "</h2>";
$novedad .= "</div>";
$novedad .= "<p><b>";
$novedad .= date('d/m/Y', strtotime($articulo['fechaNovedad']));
$novedad .= "</b></p>";
$novedad .= "<p>";
$novedad .= $articulo['textoNovedad'];
$novedad .= "</p>";
$novedad .= "<a href='javascript:history.back()'>Volver</a>";
$novedad .= "</div>";
$novedad .= "</div>";
$novedad .= "<div id='modal'>";
$novedad .= "<a href='#cerrar'></a>";
$novedad .= "<div id='modalContent'>";
$novedad .= "<a href='#cerrar'>X</a>";
$novedad .= "<h1 style='color: #f7be68; text-align:center;'>" . $articulo['tituloNovedad'] . "</h1>";
$novedad .= "<p style='text-align:center;''>" . date('d/m/Y', strtotime($articulo['fechaNovedad'])) . "</p>";
$novedad .= "<img src='images/novedades/" . $articulo['archivoNovedad'] . "' alt=''></a>";
$novedad .= "</div>";
$novedad .= "</div>";

$novedad .= "</div>";
