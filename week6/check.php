
<?php
$input = "qwe";

if(strpos($input, "'") !== false || strpos($input, '"') !== false){
    echo "Invalid input: Character ' or \" not allowed";
}else{
    echo"yes";
  
}

?>