<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/426912640f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/index.css">
    <style>
        .heading{
            color:Black;
            font-family: Arial, Helvetica, sans-serif;
            font-size:17px;
            width: 50%;
            padding: 10px 10px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color:Lightblue;
            text-align: center;
        }

        .para{
            color:Green;
            font-family: Arial, Helvetica, sans-serif;
            font-weight:20%;
        }

        
    </style>
    <!-- Plugins -->
</head>

<body background="https://th.bing.com/th/id/R.c66044cfe859c1aaf41115edb826cb57?rik=PPIUXMLOWhN4kA&pid=ImgRaw&r=0&sres=1&sresct=1">

   
        <div class="container">
  
              <b><h2 class="heading">"I'm always crunching numbers, so my calculator watch is a must."</h2></b>
            
        </div>
    


    <section class="jumbotron py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h1 class="jumbotron-heading">Laravel Calculator</h1>
                    <b><p class="para">This is a simple Laravel calculator capable of using arithmetic operations.</p></b>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Start Now!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light text-dark pt-5 pb-5">
        <!-- LEFT COLUMN -->
        <div class="container pb-5 ">
            <div class="row text-center justify-content-sm-center no-gutters">
                <div class="col-10 col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <i class="bi bi-calculator fa-8x"></i>
                            <h2>Operations in this calculator</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Addition</li>
                                <li class="list-group-item">Subtraction</li>
                                <li class="list-group-item">Multiplication</li>
                                <li class="list-group-item">Division</li>
                                <li class="list-group-item">Modulo operation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-4    ">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <!-- CALCULATOR MAIN -->
                            <h2 id="scrollspyHeading1" style="font-size:50px">Calculator</h2>

                            <br>
                            <!-- main form -->


                            <form class="row g-3 needs-validation">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname" placeholder="Enter First Number" id="num1" name="num1" required><br/>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                    <br>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter Second Number" id="num2" name="num2" required><br/>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <select class="form-select form-control lg" aria-label=".form-select-sm example" id="selectOperator" name="selectOperator" value>
                                    <option selected>Choose an Operation</option>
                                    <option value="Addition">Addition</option>
                                    <option value="Subtraction">Subtraction</option>
                                    <option value="Multiplication">Multiplication</option>
                                    <option value="Division">Division</option>
                                    <option value="Modulus">Modulus</option>
                                </select>
                                <!-- end of main form --><br/>
                                <div class="col-12">
                                    <br/>
                                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button><br/>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <button class="btn btn-danger" type="reset" name="reset" value="reset">Reset</button>
                                </div>
                                <?php
                                // CHECK IF SUBMIT BUTTON IS PRESSED AND PERFORMS THE COMPUTATION
                                if (isset($_GET['submit'])) {
                                    $operator = $_REQUEST['selectOperator'];
                                    $num1 = $_GET['num1'];
                                    $num2 = $_GET['num2'];
                                    // SWITCH STATEMENT TO CHECK THE OPERATION TO BE USED AND COMPUTE THE 2 NUMBERS
                                    switch ($operator) {
                                        case "Addition":
                                            $value = $num1 + $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Subtraction":
                                            $value = $num1 - $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Multiplication":
                                            $value = $num1 * $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Division":
                                            $value = $num1 / $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;

                                        case "Modulus":
                                            $value = $num1 % $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Choose an Operation":
                                            $value = "Choose an Operation";
                                            echo '<div class="alert alert-warning" role="alert">';
                                            echo $value;
                                            echo '</div>';
                                    }
                                } 
                                // RESETS THE SUBMITTED VALUES
                                if (isset($_GET['reset'])) {
                                    $value = "N/A";
                                    echo '<div class="alert alert-secondary" role="alert">';
                                    echo $value;
                                    echo '</div>';
                                }
                                ?>


                            </form>

                            <!-- END OF CALCULATOR -->
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-10 col-md-4    ">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <i class="bi bi-person-circle fa-8x"></i>
                            <h2>About Me</h2>
                            <p>Hi! I am Thayani Gathirvelou <br><br> 3rd year computer science student! <br> <br> I love programming❤</p>
                            <div class="col-12">
                                <a href="https://github.com/thayanigathirvelou" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fab fa-github fa-lg text-white"></i>
                                        Github
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>


</body>

</html>