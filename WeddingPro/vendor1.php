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
					
				<h2>Insertion form for Vendor</h2>
					 &nbsp; &nbsp; &nbsp; &nbsp;
					 
					 <form method="GET" action="vendor.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" id="name">
                        </div>             
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" id="email">
                        </div>
						  <div class="input-group">
                            <input class="input--style-3" type="textarea" placeholder="Manager" name="manager" id="manager">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="textarea" placeholder="Address" name="address" id="address">
                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">  Insert </button>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="Insert.php" type="exit">Cancel</button>
                        </div>
                    </form>
                
					 
              
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
