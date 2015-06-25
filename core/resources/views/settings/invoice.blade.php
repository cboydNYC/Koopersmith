@extends('app')@section('content')<div class="col-md-12 content-header" >    <h1><i class="fa fa-file-pdf-o"></i> Invoice Settings</h1></div><section class="content">    <div class="row">        <div class="col-md-3">            @include('settings.partials._menu')        </div>        <div class="col-md-9">            <div class="box box-primary">                <div class="box-body">                    @if (count($errors) > 0)                    {!! form_errors($errors) !!}                    @endif                    @if (Session::has('flash_notification.message'))                    {!! message() !!}                    @endif                    @if($setting)                    {!! Form::model($setting, ['route' => ['settings.invoice.update', $setting->id], 'method'=>'PATCH', 'files'=>true]) !!}                    @else                    {!! Form::open(['route' => ['settings.invoice.store'], 'files'=>true]) !!}                    @endif                    <div class="form-group">                        {!! Form::label('start_number', 'Number Invoice Starting') !!}                        {!! Form::text('start_number', '001', ['class' => "form-control"]) !!}                    </div>                    <div class="form-group">                        {!! Form::label('terms', 'Invoice Terms') !!}                        {!! Form::textarea('terms', null, ['class' => "form-control", 'id'=>'invoice_terms']) !!}                    </div>                    <div class="form-group">                        {!! Form::label('logo', 'Logo (width: 200)') !!}                        @if($setting && $setting->logo != '')                        {!! HTML::image(asset('assets/img/'.$setting->logo), 'logo', array('class' => 'thumbnail')) !!}                        @endif                        {!! Form::file('logo', ['class'=>"form-control"]) !!}                    </div>                    <div class="form-group ">                        {!! Form::label('due_days', 'Due After') !!}                        <div class="input-group  col-md-2">                        {!! Form::input('number','due_days', null, ['class' => "form-control", 'min'=>'0']) !!}                            <span class="input-group-btn ">                                <button class="btn btn-default">Days</button>                            </span>                        </div>                    </div>                    <div class="form-group">                        {!! Form::submit('Save Settings', ['class="btn btn-info"']) !!}                    </div>                    {!! Form::close() !!}                </div>            </div>        </div>    </div></section>@endsection@section('scripts')<script>    $('#invoice_terms').wysihtml5({image:false,link:false});</script>@endsection