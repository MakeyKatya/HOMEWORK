<?php

class PriceOfTrip{
    public $days_of_trip;
    public $discount;
    public $add_price;
    public $total_price;

    public function count_price(){
        $price = $this->days_of_trip * 400;
        $price_discount = $price * $this->discount;
        $this->total_price = $price - $price_discount + $price*$this->add_price/100;
        return $this->total_price;
    }
}
