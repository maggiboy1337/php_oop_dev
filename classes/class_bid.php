<?php

class Bid
{
    private $minBid = 5;
    private $bidAmount;

    public function setBidAmount($amount)
    {
        if($amount < $this->minBid) {

            $this->bidAmount = $this->minBid;

            return;

        }

        $this->bidAmount = $amount;
 
    }

    public function getBidAmount()
    {

        return $this->bidAmount;

    }
}

?>