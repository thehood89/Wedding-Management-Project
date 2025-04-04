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
					
				<h2>Delete Entry from Table</h2>
					<form action="clientdelete.php" method="POST">	
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Client" id="Client">
                                    <option disabled="disabled" selected="selected">Client</option>
                                    <option value="clientsimple">Simple Client</option>
                                    <option value="clientdelux">Delux Client</option>
                                    <option value="clientluxury">Luxury Client</option>
                                    <option value="clientcombo">Combo Client</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                            </div>
                        </div>

						<div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name For delete" name="Name">
                        </div>
						
						<div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="Submit" value="delete">Delete </button>
                        </div>
						
                         <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="Deletion.php" type="exit">Cancel </button>
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
