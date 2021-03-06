<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Invoicer 2 - Database Details</title>
    @include('install.partials.styles')

</head>
<body class="login-page">
<div class="container">
    <div class="login-logo">
        <b>Classic</b> Invoicer 2 Installation
    </div><!-- /.login-logo -->

    <div class="row">
        <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">

                <div class="box-body">
                    <div>
                        <div class="callout callout-info">
                            <h4>Database Details</h4>
                        </div>
                        @if (count($errors) > 0)
                        {!! form_errors($errors) !!}
                        @endif
                        @if (Session::has('flash_notification.message'))
                        {!! message() !!}
                        @endif

                        {!! Form::open(['url'=>'/install/database']) !!}

                        <div class="form-group">
                            {!! Form::label('hostname', 'Hostname') !!}
                            {!! Form::text('hostname', null, ['class' => 'form-control','required', 'placeholder' => 'hostname' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('database', 'Database') !!}
                            {!! Form::text('database', null, ['class' => 'form-control','required','placeholder' => 'Database' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('username', 'Username') !!}
                            {!! Form::text('username', null, ['class' => 'form-control','required','placeholder' => 'Username' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Password' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-flat btn-success']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
</div>

@include('install.partials.scripts')

</body>
</html>
