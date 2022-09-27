<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Ramsey/Uuidを利用
use Ramsey\Uuid\Uuid;
// Activationモデルを利用
use App\Models\Activation;
// Mailを利用
use Illuminate\Support\Facades\Mail;

use App\Mail\ActivationCreated;

class RegisterController extends Controller {
    public function register(Request $request) {
        $activation = new Activation;
        $activation->email = $request->email;
        $activation->code = UUid::uuid4();
        $activation->save();
        Mail::to($activation->email)->send(new ActivationCreated($activation));
    }
}
