@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Manuals</div>

                <div class="panel-body">
                    Find manuals for devices installed by GreenGo in your PV Plant on this page.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Inverters</div>

          <div class="panel-body">
            <ul>
              <li>Danfoss DLX</li>
              <li>Danfoss TLX</li>
              <li>PowerOne</li>
              <li>Fronius</li>
              <li>Etc.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">Loggers</div>

          <div class="panel-body">
            Solarlog
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">Meters</div>

          <div class="panel-body">
            Schneider
          </div>
        </div>
      </div>
    </div>


</div>
@endsection
