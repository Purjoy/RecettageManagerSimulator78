@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel-default panel">
                    <div class="panel-heading">Envoyez nous un message</div>
                    <div class="panel-body">

                        <div class="form-group">
                            {!! Form::label('mail', 'Mail') !!}
                            {!! Form::text('mail', '', ['class'=>'form-control', 'placeholder'=>'Mon mail']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Message') !!}
                            {!! Form::textarea('content', '', ['class'=>'form-control', 'placeholder'=>'Mon contenu']) !!}
                        </div>
                        {!! Form::submit('Envoyer mon message', ['class' =>'btn btn-primary']) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
