<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Products;
use App\Wishlists;
use File;


class ApiController extends Controller
{

    function savewishlist(Request $request) {
        $validation = Validator::make($request->all(),[
            'product_id' => 'required|numeric',
            'user_id' => 'required|numeric'
            ],
            [
            'product_id.required' => 'Please select product',
            'product_id.numeric' => 'Product value must be numeric',
            'user_id.required' => 'Please select user',
            'user_id.numeric' => 'User value must be numeric'
        ]);
        if($validation->fails()){
            return response()->json(['errors' => $validation->errors()->all()]);
        }else {
            $forms = new Wishlists();
            $forms->product_id=$request->get('product_id');
            $forms->user_id=$request->get('user_id');
            $forms->created_at = date('Y-m-d h:i:s');
            $forms->save();
        }

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data successfully submitted',
            'values' => $request->all()
        ]);
    }

    function saveproduct(Request $request) {
        $validation = Validator::make($request->all(),[
            'product_name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'status' => 'required'
            ],
            [
            'product_name.required' => 'Please enter product name',
            'description.required' => 'Please enter description',
            'amount.required' => 'Please enter amount',
            'status.required' => 'Please select status'
        ]);
        if($validation->fails()){
            return response()->json(['errors' => $validation->errors()->all()]);
        }else {
            $forms = new Products();
            $forms->product_name=$request->get('product_name');
            $forms->description=$request->get('description');
            $forms->status=$request->get('status');
            $forms->amount=$request->get('amount');
            $forms->created_at = date('Y-m-d h:i:s');
            $forms->save();
        }

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data successfully submitted',
            'values' => $request->all()
        ]);
    }

    function getProducts() {
        $products = Products::all();
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data successfully submitted',
            'values' => $products
        ]);
    }
}
