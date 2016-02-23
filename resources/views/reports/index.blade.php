@extends('layouts.app')
@section('content')
    <h1>@lang('report.Search')</h1>
    {{-- TODO: i18n --}}
    <h2>Eu Denunciei</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <tr>
                    <th>@lang('report.Reported')</th>
                    <th>@lang('report.Description')</th>
                    {{--<th>@lang('report.Reporter')</th>--}}
                    <th>@lang('report.Done')</th>
                </tr>
                @forelse($iReported as $reported)
                    <tr onclick="location.href='reports/{{ $reported->id }}'">
                        <td>@lang('report.Block') {{ $reported['reported']['block'] }}
                            - @lang('report.Number') {{ $reported['reported']['number'] }}</td>
                        <td>{{ $reported->report }}</td>
                        {{--                        <td>@lang('report.Block') {{ $reported['reporter']['block'] }} - @lang('report.Number') {{ $reported['reporter']['number'] }}</td>--}}
                        <td>@lang('report.'.$reported->done )</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nada</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
    {{-- TODO: i18n --}}
    <h2>Fui Denunciado</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <tr>
                    {{--                    <th>@lang('report.Reported')</th>--}}
                    <th>@lang('report.Reporter')</th>
                    <th>@lang('report.Description')</th>
                    <th>@lang('report.Done')</th>
                </tr>
                @forelse($myReports as $report)
                    <tr onclick="location.href='reports/{{ $report->id }}'">
                        {{--                        <td>@lang('report.Block') {{ $report['reported']['block'] }} - @lang('report.Number') {{ $report['reported']['number'] }}</td>--}}
                        <td>@lang('report.Block') {{ $report['reporter']['block'] }}
                            - @lang('report.Number') {{ $report['reporter']['number'] }}</td>
                        <td>{{ $report->report }}</td>
                        <td>@lang('report.'.$report->done )</td>
                    </tr>
                @empty
                    <tr>
                        {{-- TODO: i18n --}}
                        <td colspan="7">Nada</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
