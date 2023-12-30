<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'crimes';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM login";
$sql1 = " SELECT * FROM cases";
$sql2 = " SELECT * FROM criminal";
$sql3 = " SELECT * FROM officers";
$sql4 = " SELECT * FROM vehicle";
$sql5 = " SELECT * FROM prison";

$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
$result4 = $mysqli->query($sql4);
$result5 = $mysqli->query($sql5);

$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Login</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['password'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <h1>Cases</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Case Id</th>
                <th>Case name</th>
                <th>Case Type</th>
                <th>Case Location</th>
                <th>Case Status</th>
                <th>Case Description</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result1->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['CASE_ID'];?></td>
                <td><?php echo $rows['CASE_NAME'];?></td>
                <td><?php echo $rows['CASE_TYPE'];?></td>
                <td><?php echo $rows['CASE_LOCATION'];?></td>
                <td><?php echo $rows['STATUS1'];?></td>
                <td><?php echo $rows['CASE_DESCRIPTION'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <h1>Criminals</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Criminal Name</th>
                <th>Criminal Id</th>
                <th>Criminal Gender</th>
                <th>Criminal Phone</th>
                <th>Case Id</th>
                <th>Date Of Crime</th>
                <th>Month</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result2->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['C_NAME'];?></td>
                <td><?php echo $rows['C_ID'];?></td>
                <td><?php echo $rows['C_GENDER'];?></td>
                <td><?php echo $rows['C_PHONE'];?></td>
                <td><?php echo $rows['CASE_ID'];?></td>
                <td><?php echo $rows['DOC'];?></td>
                <td><?php echo $rows['MONTH'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <h1>Officers</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Officer Name</th>
                <th>Officer Id</th>
                <th>Office Gender</th>
                <th>Office Phone</th>
                <th>Case Id</th>
                <th>Criminal Id</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result3->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['O_NAME'];?></td>
                <td><?php echo $rows['O_ID'];?></td>
                <td><?php echo $rows['O_GENDER'];?></td>
                <td><?php echo $rows['O_PHONE'];?></td>
                <td><?php echo $rows['CASE_ID'];?></td>
                <td><?php echo $rows['C_ID'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <h1>Vehicles</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Vehicle Number</th>
                <th>Vehicle Status</th>
                <th>Office Id</th>   
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result4->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['V_NUM'];?></td>
                <td><?php echo $rows['STATUS'];?></td>
                <td><?php echo $rows['O_ID'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <h1>Prison</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Prison Id</th>
                <th>Criminal Id</th>
                <th>Capacity</th>
                <th>Status</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result5->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['P_ID'];?></td>
                <td><?php echo $rows['C_ID'];?></td>
                <td><?php echo $rows['CAPACITY'];?></td>
                <td><?php echo $rows['STATUS'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>