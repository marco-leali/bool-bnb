<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageApartmentController extends Controller
{

    public function send(Request $request)
    {

        $data = $request->all();
        Message::Create($data);
        
        return response()->json($data);
    }
}
