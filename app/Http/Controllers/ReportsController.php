<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Patrimony;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{

    public function index()
    {
        $me = Auth::user()->id;
        $myReports = Report::where('id_reported', $me)->get();
        foreach ($myReports as $key => $value) {
            $myReports[$key]['reported'] = Patrimony::find($myReports[$key]['id_reported']);
            $myReports[$key]['reporter'] = Patrimony::find($myReports[$key]['id_reporter']);
            if ($myReports[$key]['done'] === 1) {
                $myReports[$key]['done'] = 'done';
            } else {
                $myReports[$key]['done'] = 'pending';
            }
        }

        $iReported = Report::where('id_reporter', $me)->get();
        foreach ($iReported as $key => $value) {
            $iReported[$key]['reported'] = Patrimony::find($iReported[$key]['id_reported']);
            $iReported[$key]['reporter'] = Patrimony::find($iReported[$key]['id_reporter']);
            if ($iReported[$key]['done'] === 1) {
                $iReported[$key]['done'] = 'done';
            } else {
                $iReported[$key]['done'] = 'pending';
            }
        }

//        return ['myReports' => $myReports, 'iReported' => $iReported];
        return view('reports/index', ['myReports' => $myReports, 'iReported' => $iReported]);
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
        Report::create($request->all());
        header('location:javascript:history(-1)');
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
