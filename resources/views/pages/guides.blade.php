@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Instructional Guides</div>

                <div class="panel-body">
                    <h3>public guides for customers</h3>
                    <ul>
                      <li>Errors &amp; Issues</li>
                      <li>How to check production</li>
                      <li>iPad Monitor</li>
                    </ul>

                    <h3>General GreenGo</h3>
                    <ul>
                      <li>New Employees(calendar, email, google drive, dropbox, printer, etc.)</li>
                      <li>IT Support (contact person per category)</li>
                      <li>Office Service Troubleshooting (printer, laptop issues, etc.)</li>
                      <li>Dustin information</li>
                      <li>Company Car ( how to book etc.)</li>
                      <li>GGOE Templates (PPT, DOC, etc)</li>
                      <li>HOW TO USE SLACK!!</li>
                    </ul>

                    <h3>Internal Service Documentation</h3>
                    <ul>
                      <li>INVERTERS</li>
<li>Fronius/Danfoss/ABB (separated)</li>
<li> -Setup</li>
 <li>-Replacement (including info about new order and warehouse)</li>
<li> -Interface, LEDs, status indicators</li>
 <li>-Cables</li>
 <li>-Physical damage/errors</li>
 <li>-Error codes</li>
 <li>-Tips (i.e. how to find inverter without knowing the IP on network)</li>
<li>METERS</li>
<li>Schneider/(others?!)</li>
 <li>-Setup</li>
 <li>-?</li>
<li>PANELS</li>
<li> -Damage types and how to correspond</li>
<li> -Replacement (including info about the new order)</li>
<li>MAINBOARD (switches, fuses, etc.)</li>
<li> -replacement</li>
<li> -Position and status of switches</li>
<li>CONTROLROOM (service section and service tickets)</li>
<li> -Navigation (Api keys, plant details, faults, etc.)</li>
 <li>-Service ticket "how to"</li>
<li>ROUTERS & SIMCARDS</li>
<li> -Setup</li>
<li> -Order</li>
<li> -Keeping track (and finding lost on network router)</li>
<li>MONITORS & iPAD (teamviewer etc. included)</li>
<li>DUSTIN</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
