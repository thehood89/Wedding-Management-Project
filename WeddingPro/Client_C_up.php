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
                    <h2 class="title">Update Form For Combo Plan</h2>
                    <form method="POST" action="clientcomboup.php">
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" id="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Venue" name="venue" id="venue">
                        </div>

                        

                        
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Band_DJ" id="Band_DJ">
                                    <option disabled="disabled" selected="selected">Band_DJ</option>
                                    <option value="Bhimrao Bands">Bhimrao Bands</option>
                                    <option value="Mohan Bandwala">Mohan Bandwala</option>
                                    <option value="Viren DJ">Viren DJ</option>
                                    <option value="Pathai Bandwala">Pathai Bandwala</option>
                                    <option value="Mattu Bros">Mattu Bros</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                <select name="photographer" id="photographer">
                                    <option disabled="disabled" selected="selected">Photographer</option>
                                    <option value="Rajesh Photography">Rajesh Photography</option>
                                    <option value="Kale Photography">Kale Photography</option>
                                    <option value="Monty Photography">Monty Photography</option>
                                    <option value="Chanchu Photography">Chanchu Photography</option>
                                    <option value="Sutar Photography">Sutar Photography</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                <select name="Decorater" id="Decorater">
                                    <option disabled="disabled" selected="selected">Decorater</option>
                                    <option value="Shambhu Decorater">Shambhu Decorater</option>
                                    <option value="Kashyap Flowerist">Kashyap Flowerist</option>
                                    <option value="Kanetkar and Sons">Kanetkar and Sons</option>
                                    <option value="Sakshi and Company">Sakshi and Company</option>
                                    <option value="Patil Flowerist">Patil Flowerist</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                
                                <select name="Caterer" id="Caterer">
                                    <option disabled="disabled" selected="selected">Caterer</option>
                                    <option value="Annapurna Caterers">Annapurna Caterers</option>
                                    <option value="Mattani Caterers">Mattani Caterers</option>
                                    <option value="Chirag Caterers">Chirag Caterers</option>
                                    <option value="Mohite Brothers">Mohite Brothers</option>
                                    <option value="Karale Caterers">Karale Caterers</option>
                                 </select>
                                <div class="select-dropdown"></div>
                                
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" id="email">
                        </div>  
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" id="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Wedding Date" name="wedding_date" id="wedding_date">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="plan" name="plan" id="plan">
                        </div>
                        
                        

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" formaction="Insert.php" type="exit">Cancel </button>
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
