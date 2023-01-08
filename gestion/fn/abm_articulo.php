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
}
