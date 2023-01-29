<?php
session_start();
class shop{
    public function getuser($id,$name){
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
    }

    public function getproduct($cart){
        $_SESSION["cart"][] = $cart;
 
    }
    public function delproduct(){
        $getlast=count($_SESSION["cart"]);
        unset($_SESSION["cart"][$getlast-1]);
        echo $getlast;
    }

}
$setuser= new shop();

if(isset($_POST["setuser"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $setuser->getuser($id,$name); 
    header( "refresh:1;url=mall.php" );

}



if (isset($_POST["submit"])) {
   $addordelcheck= $_POST["addordel"];
    if ($addordelcheck=='add') {

        $product = $_POST["product"];
        $qty = $_POST["qty"];
        $cart = array($product, $qty);
        $setuser->getproduct($cart);
        header("refresh:1;url=mall.php");
    }


   else  if ($addordelcheck=='del') {
        $setuser->delproduct();
        header("refresh:1;url=mall.php");
       
    }
    else{
        header("refresh:1;url=mall.php");
        echo"error1";
    }
  
}



if(isset($_POST["exit"])){
    
    session_destroy();
    header( "refresh:1;url=init.php" );

}
?>
