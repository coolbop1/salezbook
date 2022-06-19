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
            'category' => 'required'
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        info("validator ".json_encode($validator ));

        if($validator->fails()) {
            $errors = $validator->errors();
            return  response($errors, 400);
        }
        $validated = $validator->validated();
        
        $saved = Store::firstOrCreate([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'category' => $validated['category']
        ]);

        if($saved) {
            return  response("Store created successfully", 200);
        }
    }
}
