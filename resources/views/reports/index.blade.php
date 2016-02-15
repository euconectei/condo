@extends('layouts.app')
@section('content')

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
                            <select class="form-control"></select>
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
                            <input type='text' id="description" ng-model="report.report" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-2">
                            <button class="btn btn-primary">@lang('general.Add')</button>
                            <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                        </div>
                    </div>
                </div>
    		</div>
            <div class="col-md-6">
                <div google-chart chart="chartObject" style="height:200px; width:100%;"></div>
            </div>
    	</div>
    	<hr>
        <h2>@lang('report.Search')</h2>
    	<div class="row">
    		<div class="col-md-12">
                <div class="form-group">
                    @lang('general.SearchBy'):
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" ng-model="searchText" value="" class="form-control">
                        </div>
                    </div>
                </div>
    			<table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>@lang('report.Ok')</th>
                        <th>@lang('report.Description')</th>
                        <th>@lang('report.Reported')</th>
                        <th>@lang('report.Reporter')</th>
                        <th>@lang('report.Delete')</th>
                    </tr>
                    @forelse($reports as $report)
                        <tr onclick="javascript:location.href='reports/{{ $report->id }}'">
                            <td>{{ $report->id }}</td>
        					<td>{{ $report->done }}</td>
        					<td>{{ $report->report }}</td>
        					<td>{{ $report->id_reported }}</td>
        					<td>{{ $report->id_reporter }}</td>
        					<td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" ></span></button></td>
        				</tr>
                    @empty
                        <tr>
        					<td colspan="7">Nada</td>
        				</tr>
                    @endforelse
    				{{-- <tr ng-repeat='report in reports | filter:searchText'>
    					<td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="report.done" ng-change="updateReport(report)"></td>
    					<td><% report.report %></td>
    					<td><% report.id_reported %></td>
    					<td><% report.id_reporter %></td>
    					<td><% report.created_at %></td>
    					<td><% report.updated_at %></td>
    					<td><button class="btn btn-danger btn-xs" ng-click="deleteReport($index)">  <span class="glyphicon glyphicon-trash" ></span></button></td>
    				</tr> --}}
    			</table>
    		</div>
    	</div>
@endsection
