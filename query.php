<?php  
 $connect = mysqli_connect("localhost", "root", "", "crimes");  
 $sql = "SELECT O_NAME
 FROM officers
 WHERE CASE_ID IN (
   SELECT CASE_ID
   FROM criminal
   WHERE C_GENDER = 'M' AND C_PHONE = '5551234'
 );
 ";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Retrieve the names of all officers who have worked on cases that involved a male criminal with the phone number '555-1234':</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>OFFICER NAME</th>    
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["O_NAME"];?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "crimes");  
 $sql = "SELECT DISTINCT officers.O_NAME, officers.O_PHONE
 FROM officers
 INNER JOIN criminal ON officers.CASE_ID = criminal.CASE_ID
 WHERE criminal.C_GENDER = 'F';
 
 ";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Find the names of all the officers and their phone numbers who are assigned to cases that involve female criminals</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Officer Name</th>  
                               <th>Officer Phone</th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["O_NAME"];?></td>  
                               <td><?php echo $row["O_PHONE"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "crimes");  
 $sql = "SELECT cases.CASE_NAME
 FROM cases
 INNER JOIN criminal ON cases.CASE_ID = criminal.CASE_ID
 INNER JOIN officers ON cases.CASE_ID = officers.CASE_ID
 WHERE criminal.C_GENDER = 'M'
 AND officers.O_PHONE LIKE '555%';
 ";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Find the names of all the cases that involve male criminals and are assigned to officers whose phone numbers start with "555":</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Case Name</th>    
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["CASE_NAME"];?></td>   
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html> 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "crimes");  
 $sql = "SELECT O_NAME, C_NAME, CASE_NAME
 FROM officers
 INNER JOIN criminal ON officers.C_ID = criminal.C_ID
 INNER JOIN cases ON criminal.CASE_ID = cases.CASE_ID
 WHERE O_GENDER = 'F' AND CASE_TYPE = 'ROBBERY';
 
 

 
 ";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">This query joins the officers, criminal, and cases tables using the C_ID and CASE_ID columns. It then selects the O_NAME, C_NAME, and CASE_NAME columns where the officer's gender is female and the case type is robbery.</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Officer Name</th>  
                               <th>Criminal Name</th>  
                               <th>Case Name</th>
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["O_NAME"];?></td>  
                               <td><?php echo $row["C_NAME"]; ?></td>  
                               <td><?php echo $row["CASE_NAME"]; ?></td> 
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "crimes");  
 $sql = "SELECT C_NAME, C_PHONE
 FROM criminal
 WHERE CASE_ID IN (
     SELECT CASE_ID
     FROM cases
     WHERE STATUS1 = 'COMPLETED' AND CASE_TYPE IN ('CHILD ABUSE', 'RAPE')
 );
 ";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Retrieve the names and phone numbers of criminals who are assigned to cases that are closed and have a type of "CHILD ABUSE" or "RAPE":</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Criminal Name</th>  
                               <th>Criminal Phone</th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["C_NAME"];?></td>  
                               <td><?php echo $row["C_PHONE"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 
 