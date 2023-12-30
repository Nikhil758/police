<html>
    <body>
    <?php
include 'connect.php';
$crname = $_POST['crname'];
$crgen = $_POST['crgen'];
$crph = $_POST['crph'];
$cid = $_POST['cid'];
$doc = $_POST['doc'];
$datee=$_POST['datee'];
$gconn = $conn->prepare("insert into criminal(C_NAME, C_GENDER, C_PHONE, CASE_ID,DOC,MONTH) 
values( ?, ?, ?, ?, ?,?)");
$gconn->bind_param("ssiiss", $crname, $crgen, $crph,$cid,$doc,$datee);
$gconn->execute();
echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
$conn->close();
$gconn->close();
header("Location:home.html")
    ?>
    </body>
</html>