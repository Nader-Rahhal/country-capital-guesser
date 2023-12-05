<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
return Http::get("https://reqres.in/api/users?page=2");

class UserController extends Controller
{
    function index()
    {
        return Http::get("https://reqres.in/api/users?page=2");
        function post()
        {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://reqres.in/api/users', [
                'name' => 'morpheus',
                'job' => 'leader',
            ]);
            return $response;
        }
    }

}
