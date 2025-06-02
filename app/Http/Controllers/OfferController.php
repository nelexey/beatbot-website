<?php

namespace App\Http\Controllers;

use App\Models\BeatBotUser;
use Illuminate\Http\Request;


class OfferController extends Controller
{
    public  function index()
    {
        return view('offer.index');
    }
}
