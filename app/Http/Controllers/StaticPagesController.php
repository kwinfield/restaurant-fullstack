<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;

class StaticPagesController extends Controller
{
    public function home(){
        
        return view('home');
    }
    public function menu(){
        return view('menu/index');
    }
    public function singleMenu(){
        return view('menu/single-menu');
    }
    public function about(){
        return view('pages/about');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['string'],
            'phone_number' => ['string'],
            'guest_total' => ['required', 'string'],
            'time' => ['required', 'string'],
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();


        return redirect('/confirmed');
    }
    public function reservationConfirmed(){
        return view('pages/confirmed');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }
    public function offersThankYou(){
        return view('pages/thank-you');
    }
}

