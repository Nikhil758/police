<html>
    <body>
    <?php
include 'connect.php';
$cname = $_POST['cname'];
$ctype = $_POST['ctype'];
$cloc = $_POST['cloc'];
$cstatus = $_POST['cstatus'];
$cdesc = $_POST['cdesc'];
$gconn = $conn->prepare("insert into cases(CASE_NAME, CASE_TYPE, CASE_LOCATION, STATUS1, CASE_DESCRIPTION) 
values( ?, ?, ?, ?, ?)");
$gconn->bind_param("sssss", $cname, $ctype, $cloc, $cstatus, $cdesc);
$gconn->execute();
echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
header("Location:home.html");
$conn->close();
$gconn->close();
    ?>
    </body>
</html>