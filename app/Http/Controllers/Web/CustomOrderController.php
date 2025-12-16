<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CustomOrder;
use Illuminate\Http\Request;

class CustomOrderController extends Controller
{
    public function index()
    {
        return view("web.pages.custom-order");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"                  => "required|string",
            "mobile"                => "required|string",
            "address"               => "required|string",
            "unit"                  => "required|in:in,cm",
            "sleeves_from_shoulder" => "required|numeric",
            "sleeves_from_neck"     => "required|numeric",
            "sleeves_width"         => "required|numeric",
            "arms"                  => "required|numeric",
            "bust"                  => "required|numeric",
            "waist"                 => "required|numeric",
            "hip"                   => "required|numeric",
            "item_length"           => "required|numeric",
        ],[],[
            "item_length"           => "abaya length",
        ]);

        CustomOrder::create($request->all());

        return back()->with(["success" => "Your order submited successfully."]);
    }
}
