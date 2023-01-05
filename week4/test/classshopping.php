<?php
class ShoppingCart
{
    private $name; // Name of shopper
    private $items; // Items in our shopping cart

    public function ShoppingCart($inputname)
    {
        $this->name = $inputname;
    }

    public function additem($artnr, $num)
    {
        $this->items[$artnr] += $num;
    }

    public function removeltem($artnr, $num)
    {
        if ($this->items[$artnr] > $num) {
            $this->items[$artnr] -= $num;
            return true;
        } elseif ($this->items[$artnr] == $num) {
            unset($this->itemsi[$artnr]);
            return true;
        } else {
            return false;
        }
    }
}
?>
<?php

$mycart["nop"] = new ShoppingCart("Nopphagaw");
$mycartl[] = new ShoppingCart();
$mycart[5] = new ShoppingCart();
$mycart[] = new ShoppingCart();
$mycart{"nop"}->additem("Sony SmartTV 50",1 );
$mycart{"nop"}->additem("Sony SmartTV 50",5 );
$mycart{"nop"}->removeltem("Sony SmartTV",2 );
$mycart{"nop"}->removeltem("Sony SmartTV 50",2 );
?>
<?php
echo "<pre>"; 
print_r($mycart);
echo "</pre>";
?>
