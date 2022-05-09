<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;

class MessageApartmentController extends Controller
{

    public function send(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Message::Create($data);

        return response('Message Sent', 204);
    }
}
