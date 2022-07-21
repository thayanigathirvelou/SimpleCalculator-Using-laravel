<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style> 
        input[type=text] {
        width: 25%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid blue;
        }

        p {
        /*color: blue;
        text-indent: 40px;
        font-weight:600;
        font-size:30px;
        font-family: Arial, Helvetica, sans-serif;*/
        
            width: 10%;
            padding: 10px 10px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color: Yellow;
      
    
        }

        .answer{
            color:red;
            font-family: Arial, Helvetica, sans-serif;
            font-size:17px;
            width: 5%;
            padding: 10px 10px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color:Lightblue;
      
        }

        button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 150px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      select {
            width: 20%;
            padding: 10px 15px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color: orange;
         }
</style>
</head>
<body background="https://th.bing.com/th/id/R.d5bd934c91c620df06e911ac6599c479?rik=l1Tzfkv%2bevd%2b3g&pid=ImgRaw&r=0&sres=1&sresct=1">
    <form action="calculator" method="get">
        <h1 align="center">Welcome to Thayani's simple calculator</h1>
        <h3 align="center">Start your calculation with joy 😄</h3>
        <div align="center">
            <div class="form-group">
                <input type="text" name="num1" placeholder="Enter First Number"><br/><br/>
                <input type="text" name="num2" placeholder="Enter Second Number" class="form-control"><br/><br/>
            </div>
        <select name="operator" id="">
            <option value="None">Select the operator</option>
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
            <option value="Module">Module</option>
        </select>
        <br><br/>
        <button name="submit" value="submit" type="submit" >Calculate</button>
        <div>
    </form>
    <br/><br/><br/><br/>
    <p>The answer is</p>
<div class="answer">
<?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator){
            case "None":
                echo "You need to select a method!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
            case"Module":
                echo $result1 % $result2;
            break;
        }
    }

?>
</div>
</body>
</html>