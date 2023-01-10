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
    `tipoNovedad`    
    )VALUES(
    '$_REQUEST[tituloNovedad]',
    '$_REQUEST[fechaNovedad]',
    '$_REQUEST[detalleNovedad]',
    '$_REQUEST[tipoNovedad]')";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {

        $queryctrl = "SELECT * FROM novedad WHERE baja != '1' ORDER BY idNovedad DESC LIMIT 1";
        $rtsctrl = mysqli_query($conexion, $queryctrl);
        $ctrl = mysqli_fetch_assoc($rtsctrl);
        $idNovedad = $ctrl['idNovedad'];

        if (!isset($_FILES['archivo'])) ?>

        <script>
            alert("Debe seleccionar una imagen!");
            window.history.back();
        </script>

        <?PHP } else {

        // Recibo los datos del Archivo 
        $inombre = $_FILES['archivo']['name'];
        $tipo    = $_FILES['archivo']['type'];
        $tamano  = $_FILES['archivo']['size'];
        $tmp_nn  = $_FILES['archivo']['tmp_name'];
        $error   = $_FILES['archivo']['error'];

        switch ($tipo) {
            case 'application/pdf':
                $qtipo = "pdf";
                break;
            case 'image/jpeg':
                $qtipo = "jpeg";
                break;
            case 'image/jpg':
                $qtipo = "jpg";
                break;
            case 'image/png':
                $qtipo = "png";
                break;
            case 'image/gif':
                $qtipo = "gif";
                break;
        };

        $nombre = str_pad($idNovedad, 6, "0", STR_PAD_LEFT) . "." . $qtipo;
        $directorio = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['sesionc_Path'] . '/web/images/novedades/';

        $fullpath = $directorio . $nombre;
        echo "Nombre: " . $nombre;
        echo "<BR> tipo: " . $qtipo;
        echo "<BR> ID: " . $idNovedad;
        echo "<BR> URL: " . $directorio;
        echo "<BR> URL FULL: " . $fullpath;
        echo "<BR> ARCHIVO: " . $nombre;
        echo "<BR> TMP: " . $tmp_nn;
        echo "<BR> Error: " . $error;

        if (move_uploaded_file($_FILES['archivoNovedad']['tmp_name'], $fullpath)) {

            $queryfile = "UPDATE novedad  SET archivoNovedad='$nombre' WHERE idNovedad = '$idNovedad' ";
            $resultfile = mysqli_query($conexion, $queryfile);
            if (mysqli_affected_rows($conexion) > 0) { ?>
                <script>
                    alert("Archivo subido correctamente!");
                </script>
            <?PHP } else { ?>
                <script>
                    alert("Ocurrio un Error a guardar en la Base de Datos!!");
                </script>
            <?PHP }
        } else {
            echo "<BR>Error en la subida de ficheros!\n"; ?>
            <script>
                alert("Ocurrio un Error!!");
            </script>
    <?PHP }
    }  ?>
    <script>
        //location.replace("../index.php");
    </script>
<?PHP } else { ?>
    <script>
        alert("Ocurrio un Error a guardar en la Base de Datos!!");
    </script>
<?PHP }  ?>

<!-- Activar de Inmueble -->
<?PHP
if ($_REQUEST['abm'] == 'm') {
    $query = "UPDATE novedad  SET
    tituloNovedad='$_REQUEST[tituloNovedad]',
    fechaNovedad='$_REQUEST[fechaNovedad]',
    detalleNovedad='$_REQUEST[detalleNovedad]',
    tipoNovedad='$_REQUEST[tipoNovedad]' WHERE idNovedad = '$_REQUEST[idNovedad]' ";
} ?>

<!-- Baja de Articulo -->
<?PHP
if ($_REQUEST['abm'] == 'b') {
    $query = "UPDATE novedad SET baja='1' WHERE idNovedad ='$_REQUEST[idNovedad]'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {     ?>
        <script>
            alert("Articulo Eliminado correctamente");
            location.replace("../index.php");
        </script>
    <?PHP } else { ?>
        <script>
            alert("Ocurrio un Error!!");
            location.replace("../index.php");
        </script>
    <?PHP }; ?>
<?PHP }; ?>

<!-- Activar de Articulo -->
<?PHP
if ($_REQUEST['abm'] == 'r') {
    $query = "UPDATE novedad SET baja='0' WHERE idNovedad ='$_REQUEST[idNovedad]'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion) > 0) {     ?>
        <script>
            alert("Articulo Activado correctamente");
            location.replace("../index.php");
        </script>
    <?PHP } else { ?>
        <script>
            alert("Ocurrio un Error!!");
            location.replace("../index.php");
        </script>
    <?PHP }; ?>
<?PHP }; ?>