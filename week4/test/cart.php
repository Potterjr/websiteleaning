<?php
class ShoppingCart{
private $name;
private $item;
public function __construct ($name="Guest"){
$this->name - $name;
}
public function gettlane(){ return $this->name; }

public function additem($Product_name, $Qty){
    
if(isset ($this->item[$Product_name]))
$this->item[$Product_name] += $Qty;
else{
$this->item[$Product_name] = $Qty;
}
}
public function removeItem($Product_name, $Qty){
    if(isset($this->item[$Product_name])){
    if($this->item[$Product_name]> $Qty){
    $this->item[$Product_name] -= $Qty;
    return true;
    }
    else if($this->item[$Product_name] == $Qty){
    unset ($this->item[$Product_name]);
    return true;}
    else{
    echo "Error Morethan process abort<brs";
    return false;
    }
    }
    else{
    echo "Error process abortcbr>";
    return false;
    }
    }
}

?>
