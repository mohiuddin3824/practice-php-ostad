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
                            <h1 class="text-center">Even Odd Checker</h1><br><br>
                            
                            
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="number">Input a Number</label>
                                    <input class="form-control" type="number" name="number">
                                </div>
                                

                                <input class="btn btn-primary" type="submit" name="submit" value="Check">
                                
                            </form>

                            <div class="result">
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $number = $_POST["number"];
                                        

                                        if ($number%2==0) {
                                            echo "<span> Your Number is Even </span>";
                                            
                                        }else{
                                            echo "<span> Your Number is Odd </span>";
                                           
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