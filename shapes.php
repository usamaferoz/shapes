<?php
//echo '10';

function draw_triangle($size){
    $string = "";
    $m=1;
    for($i=1; $i<=$size; $i++) { // iterates over number of rows
        for($j=$i; $j<=($size-1); $j++) {
           $string .= "&nbsp;";
        }
        for($k=1; $k<=$m; $k++)  {
            $string .= "*";
        }
        for($c=$m; $c>1; $c--) {
            $string .= "*";
        }
        $string .=  "<br>";
        $m++;
    }

    return $string;
}

function draw_pyramid($size){
    $string2= "";
    for($i=0;$i<=$size;$i++){
        for ($d=($size+1)-$i; $d > 0; $d--)  {
            $string2 .= "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i;$j++){
            $string2 .= "&nbsp;*&nbsp;";
        }
        $string2 .= "<br>";
    }
    for($i=($size-1);$i>=1;$i--){
        for ($d=0; $d <= $size-$i; $d++)  {
            $string2 .=  "&nbsp;&nbsp;";
        }
        for($j=$i;$j>=1;$j--){
            $string2 .= "&nbsp;*&nbsp;";
        }
        $string2 .= "<br>";
    }
    return $string2;
}

function draw_square($size){
    $string_square = '';
    for ($row = 1; $row <= $size; $row++)
    {
        for ($col = 1; $col <= $size; $col++)
        {
            $string_square.= ' * ';
        }
        $string_square.= "</br>";
    }
    return $string_square;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Malik</title>
    <style type="text/css">
        body{
            margin:0;
            padding:0;
            color:#000;
            font:normal 0.9em/150% 'Arimo', "Trebuchet MS", arial, verdana, sans-serif;
            text-shadow: 0px 0px 1px transparent;
        }
        #container{

            width:960px;
            min-height: 300px;
            background:#FFFFFF;
            margin:30px auto 30px auto;
            padding:10px;
            border:1px solid #ccc;
        }
    </style>

</head>
<body>
<div id="container">
    <div class="rules">
        <h1>Creating different shapes using PHP</h1>
        <p>
            Enter a number from 1-15 and this program will create different shapes.
        </p>
    </div>
    <div class="result">
        <form action="tree.php" method="post">
            <input class="section_number" type="text" name="number" maxlength="2" pattern= "[0-9]{1,2}" autocomplete="off" title="use only numbers" />
            <input type="submit" value="Create"/>
        </form>
        <div class="egle">
            <?php

            if(isset($_POST['number']))
            {
                $num = $_POST['number'];
                if($num < 3)
                {
                    echo '<b style="color:red;">Number is too small! The minimum is 1!</b>';
                }
                elseif($num > 3 && $num <16)
                {
                    echo draw_triangle($num);
                    echo '<br/><br/><br/>';
                    echo draw_pyramid($num);
                    echo '<br/><br/><br/>';
                    echo draw_square($num);
                }
                else
                {
                    echo '<b style="color:red;">Number is too big! The maximum is 15!</b>';
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>