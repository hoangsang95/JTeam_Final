<?php

namespace App;


class Cart 
{
   public $item = null;
   public $totalQty = 0;
   public $totalPrice = 0;

   public function __construct($oldCart)
   {
	   	if($oldCart)
	   	{
	   		$this->item = $oldCart->item;
	   		$this->totalQty = $oldCart->totalQty;
	   		$this->totalPrice = $oldCart->totalPrice;
	   		
	   	}
   }

   public function Add($item, $id)
   {
   		$storedItem = ['qty'=>0, 'price'=>$item->Product_Price, 'item'=>$item];
   		if($this->item)
   		{
   			if(array_key_exists($id, $this->item))
   			{
   				$storedItem = $this->item[$id];
   			}
   		}
   		$storedItem['qty']++;
   		$storedItem['price'] = $item->Product_Price*$storedItem['qty'];
   		$this->item[$id] = $storedItem;
   		$this->totalQty++;
   		$this->totalPrice += $item->Product_Price;
   		
   }

   public function remove($id)
   {
      $this->totalQty -= $this->item[$id]['qty'];
      $this->totalPrice -= $this->item[$id]['price'];
      unset($this->item[$id]);

   }
    public function Qtygiam($id)
   {
      $this->item[$id]['qty']--;
      $this->item[$id]['price'] -= $this->item[$id]['item']['Product_Price'];

      $this->totalQty--;
      $this->totalPrice -= $this->item[$id]['item']['Product_Price'];
      if($this->item[$id]['qty']<=0)
      {
         unset($this->item[$id]);
      }
      
      
   }
    public function Qtytang($id)
   {
      $this->item[$id]['qty']++;
      $this->item[$id]['price'] += $this->item[$id]['item']['Product_Price'];

      $this->totalQty++;
      $this->totalPrice += $this->item[$id]['item']['Product_Price'];
     
   }
}


