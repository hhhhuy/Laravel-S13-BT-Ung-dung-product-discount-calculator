<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function calculator(Request $request)
    {
        $des = $request->description;
        $price = $request->price;
        $discountPercent = $request->discount_percent;
        $discountAmount = $price - ($price * $discountPercent * 0.01);
        $discountPrice = $price - $discountAmount;
        return view('display', compact('des',
            'price',
            'discountPercent',
            'discountAmount',
            'discountPrice'));
    }
}
