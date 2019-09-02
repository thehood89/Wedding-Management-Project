<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
    table {
   border-collapse: collapse;
   border-color: green; 
   width: 100%;
   height: 100%;
   color: black;
   font-family: Times New Roman;
   font-size: 25px;
   text-align: center;
     } 
</style>


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            
                <div class="card-heading"></div>
                <div class="card-body">
                    <h1 class="title">Wedding Management</h1>
                    <form method="POST">

                        
                 <table id="test" width="950" height="40" border="0" align="center">
                    <tr>
                            
                    <td align="center"><a class="btn btn--pill btn--green" href="Home.php">Home</a></td>
                    <td align="center"><a class="btn btn--pill btn--green" href="Insert.php">Insert</a></td>
                    <td align="center"><a class="btn btn--pill btn--green" href="Update.php">Update</a></td>
                    <td align="center"><a class="btn btn--pill btn--green" href="Deletion.php">Delete</a></td>
                    <td align="center"><a class="btn btn--pill btn--green" href="showrecord.php">Records</a></td>
                    </tr>
                    </table>
                <div>
                <div class="wrapper wrapper--w780">

                 
                     &nbsp; &nbsp; &nbsp; &nbsp;
                    
                
                     &nbsp; &nbsp; &nbsp; &nbsp;

                        <h1>Simple Client Record</h1>


                        <div class="input-group">
                            
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">  show </button>
                        </div>


                        <table>
                            <col width="130">
                            <col width="130">
                            <col width="130">
                            <col width="130">
                            <col width="130">
                            <col width="130">
                            <col width="130">
                            <thead>
                                <tr>
                                    <th>Name     </th> 
                                    <th>Venue    </th> 
                                    <th>Band     </th> 
                                    <th>Photographer    </th> 
                                    <th>Decorator        </th> 
                                    <th>Caterer      </th> 
                                    <th>
                                    Email    </th>
                                    <th>Phone   </th>
                                    <th>Date    </th>
                                    <th>Plan    </th> 


                                    </tr>
                            </thead>
                            <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());
                            $result = mysqli_query($con,"select * from clientsimple");

                              if(  $result -> num_rows ==0 ){
                                echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                              }else{
                                while( $row = $result->fetch_assoc() ){
                                  echo "<tr><td>" . $row['name'] . "</td><td>" . $row['venue'] . "</td><td>" . $row['band'] . "</td><td>" . $row['photographer'] . "</td><td>" . $row['decorator'] . "</td><td>" . $row['caterer'] . "</td><td>" .$row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['wdate'] . "</td><td>" .$row['plan'] . "</td></tr>";
                                }

                               
                                echo "</table>";
                                mysqli_close($con);

                              }
                            ?>
                            </tbody>

                        </table>
        
					
                


                    </form>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>