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
                            <h1>Weather Checker</h1><br><br>
                            
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                <input type="number" name="temperature">
                                
                                
                                <input type="submit" name="submit" value="Check">
                            </form>

                            <div class="result">
                                <?php
                                    if(isset($_POST['submit'])){
                                        $temperature=$_POST['temperature'];
                                        

                                        //$temperature = 19;

                                        if ($temperature>=30) {
                                            echo "Temperature {$temperature} degree Celcius, <span class=\"text-danger\">It's Warm</span>";
                                        }elseif($temperature>=20 && $temperature<30){
                                            echo "Temperature {$temperature} degree Celcius, <span class=\"text-danger\">It's Cool</span>";
                                        }else{
                                            echo "Temperature {$temperature} degree Celcius, <span class=\"text-danger\">It's Freezing!</span>";
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