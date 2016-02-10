<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patrimony;

class PatrimoniesController extends Controller
{
    public function index() {
        $patrimonies = Patrimony::all();
        return $patrimonies;
    }

    public function store(Request $request) {

        $patrimony = Patrimony::create($request->all());
        return $patrimony;
    }

    public function update($id) {
        $patrimony = Patrimony::find($id);
        $patrimony->done = Request::input('done');
        $patrimony->save();

        return $patrimony;
    }

    public function destroy($id) {
        Patrimony::destroy($id);
    }
}
