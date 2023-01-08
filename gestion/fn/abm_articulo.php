<?PHP session_start();
include('conexion.php');
include('process.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
$fecha = date("Y-m-d H:i:s");

if ($_REQUEST['abm'] == 'a') {

    $query = "INSERT INTO novedad (
    `tituloNovedad`,
    `fechaNovedad`,
    `detalleNovedad`,
    `tipoNovedad`,
    `archivoNovedad`
    )VALUES(
    '$_REQUEST[tituloNovedad]',
    '$_REQUEST[fechaNovedad]',
    '$_REQUEST[detalleNovedad]',
    '$_REQUEST[tipoNovedad]', 
    '$_REQUEST[archivoNovedad]')";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {

        $queryctrl = "SELECT * FROM novedad WHERE baja != '1' ORDER BY idNovedad DESC LIMIT 1";
        $rtsctrl = mysqli_query($conexion, $queryctrl);
        $ctrl = mysqli_fetch_assoc($rtsctrl);
        $idNovedad = $ctrl['idInmueble'];
?>
        <script>
            //location.replace("../inmueble_abm_img.php?idNovedad=<?PHP echo $idNovedad; ?>");
            location.replace("../index.php");
        </script>
    <?PHP } else { ?>
        <script>
            alert("Ocurrio un Error a guardar en la Base de Datos!!");
        </script>
<?PHP }
} ?>

<!-- Activar de Inmueble -->
<?PHP
if ($_REQUEST['abm'] == 'm') {
    $query = "UPDATE novedad  SET
    tituloNovedad='$_REQUEST[tituloNovedad]',
    fechaNovedad='$_REQUEST[fechaNovedad]',
    detalleNovedad='$_REQUEST[detalleNovedad]',
    tipoNovedad='$_REQUEST[tipoNovedad]' WHERE idNovedad = '$_REQUEST[idNovedad]' ";
} ?>

<!-- Baja de Inmueble -->
<?PHP
if ($_REQUEST['abm'] == 'b') {
    $query = "UPDATE novedad SET baja='1' WHERE idNovedad ='$_REQUEST[idNovedad]'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {     ?>
        <script>
            alert("Inmueble Eliminado correctamente");
            location.replace("../index.php");
        </script>
    <?PHP } else { ?>
        <script>
            alert("Ocurrio un Error!!");
            location.replace("../index.php");
        </script>
    <?PHP }; ?>
<?PHP }; ?>

<!-- Activar de Inmueble -->
<?PHP
if ($_REQUEST['abm'] == 'r') {
    $query = "UPDATE novedad SET baja='0' WHERE idNovedad ='$_REQUEST[idNovedad]'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {     ?>
        <script>
            alert("Inmueble Activado correctamente");
            location.replace("../index.php");
        </script>
    <?PHP } else { ?>
        <script>
            alert("Ocurrio un Error!!");
            location.replace("../index.php");
        </script>
    <?PHP }; ?>
<?PHP }; ?>