@extends('layouts.app')
@section('content')
    <div class="container" ng-app="reportApp" ng-controller="ReportController">
    	<h1>ReportApp index view <% report.reporter %></h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Reported</h2>
                <div class="form-horizontal" ng-controller="PatrimonyController">
                    {{-- TODO: Separar os blocos dos apartamentos na criação de notificações --}}
                    <div class="form-group">
                        <label for="block" class="col-md-4 control-label">Block/Number</label>
                        <div class="col-md-2">
                            <select class="form-control" ng-model="block" ng-options="p.number group by p.block for p in patrimonies | orderBy:'block' "></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<div class="row">
    		<div class="col-md-6">
                <h2>Report</h2>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-4">
                            <input type='text' id="description" ng-model="report.report" class="form-control">
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
    	<hr>
    	<div class="row">
    		<div class="col-md-12">
                <div class="form-group">
                    Search by:
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" ng-model="searchText" value="" class="form-control">
                        </div>
                    </div>
                </div>
    			<table class="table table-striped">
                    <tr>
                        <th>Ok</th>
                        <th>Report</th>
                        <th>ID Reported</th>
                        <th>Reporter</th>
                        <th>Delete</th>
                    </tr>
    				<tr ng-repeat='report in reports | filter:searchText'>
    					<td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="report.done" ng-change="updateReport(report)"></td>
    					<td><% report.report %></td>
    					<td><% report.id_reported %></td>
    					<td><% report.reporter %></td>
    					<td><button class="btn btn-danger btn-xs" ng-click="deleteReport($index)">  <span class="glyphicon glyphicon-trash" ></span></button></td>
    				</tr>
    			</table>
    		</div>
    	</div>
    </div>
@endsection
