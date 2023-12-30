<html>
    <body>
    <?php
include 'connect.php';
$vnum = $_POST['vnum'];
$vstat = $_POST['vstat'];
$oid = $_POST['oid'];
$gconn = $conn->prepare("insert into vehicle(V_NUM, STATUS, O_ID) 
values( ?, ?, ?)");
$gconn->bind_param("ssi", $vnum, $vstat, $oid);
$gconn->execute();
echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
$conn->close();
$gconn->close();
header("Location:home.html")
    ?>