<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>ageCalculator</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Custom styles for this template -->
        <style type="text/css">
            #this {
                padding-top: 25%;
            }
            #show {
                margin-bottom: 10px;
                text-align: center;
                color: #000;
            }
        </style>
    </head>
    <body>





        <div class="container"> 
            <div class="row">
                <div class="col-md-8 offset-md-2"> 
                    <div id="this"> 
                        <div id="show"> 
                            <h6> 
                                <?php echo '- To know your current age please pick your bithday below the input box -'; ?>
                            </h6>
                            <h4 style="color:var(--blue)"> 
                                 <?php 
                                    if(isset($_POST['submit'])) {
                                        // input birthday
                                        if ( !empty($_POST['birth']) ) {
                                            $input = $_POST['birth'];
                                             // create date by $input
                                            $bithDay = date_create($input);
                                            // $currentDate
                                            $currentDate  = date_create(date("d-m-Y"));
                                            // difference between date
                                            $diff = date_diff($bithDay,$currentDate);
                                            // $currentYear
                                            $currentAge = $diff->format("%yY %mM %dD %hH %mM %sS");
                                            // show $currentAge
                                            echo 'Your Current Age : ' . $currentAge;
                                        }
                                        else {
                                            echo 'Please Pick Your Bithday';
                                        }
                                    } 
                                ?>
                            </h4>
                        </div>
                        <form action="index.php" method="post" id="from">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-0" name="birth" placeholder="Pick Your Birthday" id="datepicker" autocomplete="off" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary rounded-0" name="submit">Submit</button>
                                </div>
                            </div>
                            <span style="color:#222;font-size:14px;"><var>You should datepick or type like this <strong>dd-mm-yy</strong> format.</var></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>
            $("#datepicker" ).datepicker({
                defaultDate: new Date(1991, 00, 00),
                dateFormat: 'dd-mm-yy',
                maxDate: new Date()
            });
        </script>
    </body>
</html>