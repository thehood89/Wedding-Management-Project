

<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
    table {
   border-collapse: collapse;
   width: 100%;
   height: 100%;
   color: #588c7e;
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
                                    <th>Name </th> <br>
                                    <th>Organizer </th>
                                    <th>Wedding Date </th>
                                    <th>Email </th>
                                    <th>Manager </th>
                                    <th>Location </th>
                                    <th>AC/Non-AC </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","weddingn") or die("Failed to query database ".mysql_error());
                            $result = mysqli_query($con,"select name,organizer,wdate,email,manager,location,type from venue");

                              if( $result -> num_rows ==0 ){
                                echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                              }else{
                                while( $row = $result->fetch_assoc() ){
                                  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["organizer"] . "</td><td>" . $row["wdate"] . "</td><td>" . $row["email"] . "</td><td>" . $row["manager"] . "</td><td>" . $row["location"] . "</td><td>" . $row["type"] . "</td></tr>";
                                }
                                echo "</table>";
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
