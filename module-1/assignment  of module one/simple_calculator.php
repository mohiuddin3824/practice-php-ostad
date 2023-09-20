<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .result span {
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            padding: 7px;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }
        .result .grade {
            background: brown;
        }
        .result .point {
            background: green;
        }
    </style>
</head>
<body>
    <div class="container login_form">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mt-3">
               <div class="card">
                    <div class="card-body">
                        <div class="temperature">
                            <h1 class="text-center">Simple Calculator</h1><br><br>
                            
                            
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="num1">Number One</label>
                                    <input class="form-control" id="num1" type="number" name="num1">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="num2">Number Two</label>
                                    <input class="form-control" id="num2" type="number" name="num2">
                                </div>

                                <div class="form-group mb-3">
                                    <select class="form-control" name="operation" id="">
                                        <option disabled selected>Select</option>
                                        <option value="add">Addition</option>
                                        <option value="subtract">Subtraction</option>
                                        <option value="multiply">Multiplication</option>
                                        <option value="divide">Division</option>
                                        <option value="modulus">Modulus</option>
                                    </select>
                                </div>

                                <input class="btn btn-primary" type="submit" name="submit" value="Calculate">
                                
                            </form>

                            <div class="result">
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $num1 = $_POST["num1"];
                                        $num2 = $_POST["num2"];
                                        $operation = $_POST["operation"];
                                        
                                        if ($operation == "add") {
                                            $result = $num1 + $num2;
                                            echo "The Result is: $num1 + $num2 = <strong>{$result}</strong>";
                                        }elseif($operation == "subtract"){
                                            $result = $num1 - $num2;
                                            echo "The Result is: $num1 - $num2 = <strong>{$result}</strong>";
                                        }elseif($operation == "multiply"){
                                            $result = $num1 * $num2;
                                            echo "The Result is: $num1 * $num2 = <strong>{$result}</strong>";
                                        }elseif($operation == "divide"){
                                            $result = $num1 / $num2;
                                            echo "The Result is: $num1 / $num2 = <strong>{$result}</strong>";
                                        }elseif($operation == "modulus"){
                                            $result = $num1 % $num2;
                                            echo "The Result is: $num1 % $num2 = <strong>{$result}</strong>";
                                        }else{
                                            echo "Please Select an Operator";
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