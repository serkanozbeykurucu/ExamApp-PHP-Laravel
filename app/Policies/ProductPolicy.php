<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;

class ProductPolicy
{
    public function create(User $user)
    {
        return true; 
    }
    public function update(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }
}
