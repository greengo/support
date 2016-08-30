@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kvittering</div>

                <div class="panel-body">
                    <p>Tak fordi du har givet os adgang til din(e) elmåler(e).</p>

                    <p>
                      <b>Key:</b><br/>
                      {{$tp_key}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
