<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css">
    <style>
        p1 {
          background-color: rgb(255, 255, 255);
        }

        </style>

</head>
<body>
    <div  id="#main-header" style="background-color:rgb(166, 253, 4);"> 
        <h1>Quiz App </h1>
    

    
    <div id="#navbar" style="background-color:rgb(43, 211, 155);">
        <ul> Title |</ul>    
    </div>
    </div>


    <div id="showcase" background-image: url("showcase.jpg");>
        <h2>Mursalin Alam <br> ID:16-32497-2 </h2>
    </div>

    <div id="sidebar">
        <?php 
            echo "Score is=0";
        ?>

    </div>

    <h2></h2>

    <form>  
    1:  
    <input type="number" name="number1" /><br><br>  
    2:  
    <input type="number" name="number2" /><br><br>
    3:  
    <input type="number" name="number3" /><br><br>  
    4:  
    <input type="number" name="number4" /><br><br>
    <input  type="submit" name="submit" value="Submit">  
</form>

 
<?php      
    @$number1=$_POST['number1'];   
    @$number2=$_POST['number2'];
    @$number3=$_POST['number3'];
    @$number4=$_POST['number4'];         
    @$total= $number1+$number2+$number3+$number4;  


?>





    <div id="#main-footer">
        <p></p>

    </div>

    <div id="main-footer" style="background-color:black">Footer</div>












</body>
</html>