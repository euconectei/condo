@extends('layouts.app')
@section('content')
    <div class="container">
    	<h1>@lang('report.Title')</h1>
        <h2>@lang('report.Create')</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>@lang('report.Reported')</h3>
                <div class="form-horizontal">
                    {{-- TODO: Separar os blocos dos apartamentos na criação de notificações --}}
                    <div class="form-group">
                        <label for="block" class="col-md-4 control-label">@lang('report.BlockNumber')</label>
                        <div class="col-md-2">
                            <input type="text" name="BlockNumber" value="{{ $report->id_reported }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<div class="row">
    		<div class="col-md-6">
                <h3>@lang('report.Report')</h3>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">@lang('report.Description')</label>
                        <div class="col-md-4">
                            <input type='text' id="description" ng-model="report.report" class="form-control" value="{{ $report->report }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-2">
                            <button class="btn btn-primary"  ng-click="addReport()">Add</button>
                            <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                        </div>
                    </div>
                </div>
    		</div>
            <div class="col-md-6">
                <div google-chart chart="chartObject" style="height:200px; width:100%;"></div>
            </div>
    	</div>
    </div>
@endsection
