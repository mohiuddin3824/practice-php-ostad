<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container login_form">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mt-3">
               <div class="card">
                    <div class="card-body">
                        <div class="temperature">
                            <h1>Temperature Converter</h1><br><br>
                            <h3>Enter the temperature in the box and select its type...</h3>
                            
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                <input type="number" name="temperature">
                                <input type="radio" name="units" value="C">Celcius
                                <input type="radio" name="units" value="F">Farenheit <br><br>
                                <input type="submit" name="submit" value="CONVERT"><br><br>
                            </form>

                            <div class="result">
                                <?php
                                    if(isset($_POST['submit'])){
                                        $temperature=$_POST['temperature'];
                                        $units=$_POST['units'];

                                        if($units=="C"){
                                            $result=$temperature*9/5+32;
                                            echo "$temperature degree Celcius = " .$result . " degree Farenheit";
                                        }
                                        else {
                                            $result=($temperature-32)*5/9;
                                            echo "$temperature degree Farenheit = " .$result . " degree Celcius";
                                        }
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>