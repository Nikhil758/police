<html>
    <body>
    <?php
include 'connect.php';
$oname = $_POST['oname'];
$ogen = $_POST['ogen'];
$oph = $_POST['oph'];
$cid = $_POST['cid'];
$crid = $_POST['crid'];
$gconn = $conn->prepare("insert into officers(O_NAME, O_GENDER, O_PHONE, CASE_ID,C_ID) 
values( ?, ?, ?, ?, ?, ?)");
$gconn->bind_param("ssiii", $oname, $ogen, $oph, $cid, $crid);
$gconn->execute();
echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
$conn->close();
$gconn->close();
header("Location:home.html");
    ?>