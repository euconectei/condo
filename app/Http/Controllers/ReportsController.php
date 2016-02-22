<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;

use App\Patrimony;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{

    public function index()
    {
        $reports = Report::all();
        foreach ($reports as $key => $value) {
            $reports[$key]['reported'] = Patrimony::find($reports[$key]['id_reported']);
        }
//        return $reports;
        return view('reports/index', ['reports' => $reports]);
    }

    public function create()
    {
        $patrimonies = Patrimony::all();
//        return $patrimonies;
        return view('reports/create', ['patrimonies' => $patrimonies]);
//        return view('reports/create');
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('reports/edit', ['report' => $report]);
    }

    public function store(Request $request)
    {
        $request['id_reporter'] = Auth::user()->id;
        $report = Report::create($request->all());
        return $report;
    }

    public function update($id)
    {
        $report = Report::find($id);
        $report->done = Request::input('done');
        $report->save();

        return $report;
    }

    public function destroy($id)
    {
        Report::destroy($id);
    }
}
