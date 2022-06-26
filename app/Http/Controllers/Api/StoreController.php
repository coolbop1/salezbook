<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'category_id' => 'required|int'
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);

        if($validator->fails()) {
            $errors = $validator->errors();
            return  response()->json($errors, 400);
        }
        $validated = $validator->validated();
        
        $saved = Store::firstOrCreate([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'category_id' => $validated['category_id']
        ]);

        if($saved) {
            $data['message'] = "Store created successfully";
            $data['data'] = $saved;
            return  response()->json($data, 200);
        }
    }

    public function view(Request $request) {
        $store = Store::with('categories')->find($request->id);
        if($store) {
            $data['message'] = "Store fetched successfully";
            $data['data'] =  $store;
            return  response()->json($data, 200);
        } else {
            $data['message'] = "Store not found";
            $data['data'] =  $store;
            return  response()->json($data, 404);
        }
    }
}
