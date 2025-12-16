<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomOrder;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.pages.login.index');
    }

    public function orders()
    {
        return view("admin.pages.orders.index", [
            "orders" => CustomOrder::latest()->get(),
        ]);
    }

    public function orderView($id)
    {
        return view("admin.pages.orders.view", [
            "order" => CustomOrder::find($id),
        ]);
    }

    public function changeStatus(Request $request, $id)
    {
        $request->validate([
            "status" => "required",
        ]);
        CustomOrder::find($id)->update([
            "status" => trim(strtolower($request->status)),
        ]);

        return back()->with(["success" => "Order status changed successfully."]);
    }
}
