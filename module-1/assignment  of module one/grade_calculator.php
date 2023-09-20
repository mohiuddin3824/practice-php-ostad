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
                            <h1 class="text-center">Grade Calculator</h1><br><br>
                            
                            
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="bangla">Bangla</label>
                                    <input class="form-control" type="number" name="bangla">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="bangla">English</label>
                                    <input class="form-control" type="number" name="english">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="bangla">Business Math</label>
                                    <input class="form-control" type="number" name="math">
                                </div>

                                <input class="btn btn-primary" type="submit" name="submit" value="Calculate">
                                
                            </form>

                            <div class="result">
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $bangla = $_POST["bangla"];
                                        $english = $_POST["english"];
                                        $math = $_POST["math"];

                                        $total_mark = $bangla + $english + $math;

                                        $grade = $total_mark / 3;

                                        if ($grade>=70) {
                                            echo "<span class=\"grade\"> Your Grade <br> A </span>";
                                            echo "<span class=\"point\"> Your Point <br> 4.00 </span>";
                                            
                                        }elseif($grade>=50 && $grade<59){
                                            echo "<span class=\"grade\"> Your Grade <br> B </span>";
                                            echo "<span class=\"point\"> Your Point <br> 3.00 </span>";
                                            
                                        }elseif($grade>=40 && $grade<49){
                                            echo "<span class=\"grade\"> Your Grade <br> C </span>";
                                            echo "<span class=\"point\"> Your Point <br> 2.00 </span>";
                                            
                                        }elseif($grade>=33 && $grade<39){
                                            echo "<span class=\"grade\"> Your Grade <br> D </span>";
                                            echo "<span class=\"point\"> Your Point <br> 1.00 </span>";
                                            
                                        }else{
                                            echo "<span class=\"grade\"> Your Grade <br> F </span>";
                                            echo "<span class=\"point\"> Your Point <br> 0.00 </span>";
                                           
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