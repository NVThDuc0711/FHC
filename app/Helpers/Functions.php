<?php

use App\Models\Users;
function getAllProducts()
{
    $products = new Users;
    return $products ->getAllProducts();
}
