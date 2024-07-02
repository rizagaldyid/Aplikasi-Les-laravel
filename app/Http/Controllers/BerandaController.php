<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProductPurchase;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    

    public function index()
    {
        $hour = Carbon::now()->format('H');
        $message = $this->getGreetingMessage($hour);

        return view('landing.beranda', ['message' => $message]);
    }

    private function getGreetingMessage($hour)
    {
        $hour = Carbon::now()->format('H');

        if ($hour >= 5 && $hour < 12) {
            return 'Selamat Pagi';
        } elseif ($hour >= 12 && $hour < 15) {
            return 'Selamat Siang';
        } elseif ($hour >= 15 && $hour < 18) {
            return 'Selamat Sore';
        } else {
            return 'Selamat Malam';
        }
    }





    public function home()
    {
        return view('landing.landing');
    }
}
