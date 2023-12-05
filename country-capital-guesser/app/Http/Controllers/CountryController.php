<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{

    public function countryAndCapitalGenerator()
    {   
        $listOfAll = Http::get('https://countriesnow.space/api/v0.1/countries/capital')->json()['data'];
        $randomNumber = rand(0, count($listOfAll) - 1);
        $set = ['country' => $listOfAll[$randomNumber]['name'], 'capital' => $listOfAll[$randomNumber]['capital']];
        return view('main', compact('set'));
    }
    


}
