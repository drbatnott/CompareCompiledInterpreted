<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Demo Interpreted</title>
    <?php
        $fileName = "products.csv";
        $myFile = fopen($fileName,"r");
        while(!feof($myFile)){
            $input = fgets($myFile);
            echo "Line is " .$input. "<br/>";
            $parts = explode(",",$input);
            if(count($parts)>3){
                echo "Town is $parts[0] part is $parts[1] cost is £";
                for($i = 2; $i < count($parts)-1;$i++){
                    echo  "$parts[$i],";
                }
                $last = count($parts)- 1;
                echo "$parts[$last] <br/>";
            }
            else{
                echo "Town is $parts[0] part is $parts[1] cost is £$parts[2]<br/>"; 
            }
        }
    ?>
</head>
<body>

</body>
</html>