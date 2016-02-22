@extends('layouts.app')
@section('content')

    <h1>@lang('report.Search')</h1>
    <div class="row">
        <div class="col-md-12">
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
                        <td>{{ $report->id_reported }} - {{ $report['reported']['block'] }} - {{ $report['reported']['number'] }}</td>
                        <td>{{ $report->id_reporter }}</td>
                        <td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" ></span></button></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nada</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
