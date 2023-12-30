<html>
    <body>
    <?php
include 'connect.php';
$crid = $_POST['crid'];
$cap = $_POST['cap'];
$pstat = $_POST['pstat'];
$gconn = $conn->prepare("insert into prison( C_ID, CAPACITY, STATUS) 
values( ?, ?, ?)");
$gconn->bind_param("iis",  $crid, $cap, $pstat);
$gconn->execute();
echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
$conn->close();
$gconn->close();
header("Location:home.html")
    ?>