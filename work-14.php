<?php
    $discount = 50;
    function applyDiscount($price, $discount) {
        $finalPrice = $price - $discount;
        return $finalPrice;
    }
    echo applyDiscount (500, $discount);
    ?>