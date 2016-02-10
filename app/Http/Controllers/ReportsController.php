<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;

class ReportsController extends Controller
{

    public function index() {
        $reports = Report::all();
        return $reports;
    }

    public function store(Request $request) {

        $report = Report::create($request->all());
        return $report;
    }

    public function update($id) {
        $report = Report::find($id);
        $report->done = Request::input('done');
        $report->save();

        return $report;
    }

    public function destroy($id) {
        Report::destroy($id);
    }
}
