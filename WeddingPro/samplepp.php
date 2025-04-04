<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="reg.php">
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
                                    <option value="Viren DJ">Viren DJ</option>
                                    <option value="Raghu DJ">Raghu DJ</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                <select name="photographer" id="photographer">
                                    <option disabled="disabled" selected="selected">Photographer</option>
                                    <option value="Monty Photography">Monty Photography</option>
                                    <option value="Madhu Photography">Madhu Photography</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                <select name="Decorater" id="Decorater">
                                    <option disabled="disabled" selected="selected">Decorater</option>
                                    <option value="Kanetkar and Sons">Kanetkar and Sons</option>
                                    <option value="Dalal Decorater">Dalal Decorater</option>
                                </select>
                                <div class="select-dropdown"></div>
                                
                                
                                <select name="Caterer" id="Caterer">
                                    <option disabled="disabled" selected="selected">Caterer</option>
                                    <option value="Chirag Caterers">Chirag Caterers</option>
                                    <option value="Khan Caterer">Khan Caterer</option>
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
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Wedding Date" name="wedding_date">
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