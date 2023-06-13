<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
              "*"=> "required",
              "email"=> "email",
              "phone_number" => "min:11"
        ]);
        Team::insert([
            "email" => $request->email,
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "message" => $request->message,
            "created_at"=>now(),
        ]);
        return back();
    }
}
