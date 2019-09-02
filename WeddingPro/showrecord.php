            <!DOCTYPE html>
<html lang="en">

<head>



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
            <div class="card card-3">
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
					 
				
                             <form  name="showrecord" method="post">
                         
                                <h2>Record of Clients</h2>

                     &nbsp; &nbsp; &nbsp; &nbsp;
                     
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                         

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="clientrecord.php" type="submit">  Show Simple Client Record </button>
                        </div>

                            
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;


                         

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="clientdrecord.php" type="submit">  Show Delux Client Record </button>
                        </div>

                            
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;


                         

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="clientlrecord.php" type="submit">  Show Luxury Client Record </button>
                        </div>

                            
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;


                         

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="clientcrecord.php" type="submit">  Show Combo Client Record </button>
                        </div>

                            
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                            <!-- <h2>Record of Venues of Clients</h2><br><br><br>
                            <table border="3" cellpadding="10" cellspacing="10" align="center">
                            <form name="showrecord" method="post">
                            

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="Venuerecord.php" type="submit">  show </button>
                        </div>
                            </form>
                      -->
                 
        
					<br>	
				</div>


                </div>
                


                    </form>
                </div>
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
