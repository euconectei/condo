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
                        {{-- TODO: i18n --}}
                        <label for="block" class="col-md-4 control-label">ID do Apto</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" value="{{ $report->id_reported }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">@lang('report.Description')</label>
                        <div class="col-md-4">
                            <input type='text' id="description" class="form-control" value="{{ $report->report }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="done" class="col-md-4 control-label">@lang('report.Done')</label>
                        <div class="col-md-4">
                            <input type="checkbox" id="done">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-2">
                            {{-- TODO: i18n --}}
                            <button class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    </div>
@endsection
