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
      <div class="col-md-10 col-md-offset-1">
        
          <!-- Nav tabs category -->
          <ul class="nav nav-tabs faq-cat-tabs">
              <li class="active"><a href="#faq-cat-1" data-toggle="tab">Inverters</a></li>
              <li><a href="#faq-cat-2" data-toggle="tab">Loggers</a></li>
              <li><a href="#faq-cat-3" data-toggle="tab">Meters</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content faq-cat-content">
              <div class="tab-pane active in fade" id="faq-cat-1">
                  <div class="panel-group" id="accordion-cat-1">
                      <div class="panel panel-default panel-faq">
                          <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                  <h4 class="panel-title">
                                      Danfoss DLX
                                      <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                  </h4>
                              </a>
                          </div>
                          <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <ul>
                                    <li>Manual</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default panel-faq">
                          <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                                  <h4 class="panel-title">
                                      Danfoss TLX
                                      <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                  </h4>
                              </a>
                          </div>
                          <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                  <li>Manual</li>
                                </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="faq-cat-2">
                  <div class="panel-group" id="accordion-cat-2">
                      <div class="panel panel-default panel-faq">
                          <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                  <h4 class="panel-title">
                                      Solarlog
                                      <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                  </h4>
                              </a>
                          </div>
                          <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                  <li>Manual</li>
                                </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="faq-cat-3">
                  <div class="panel-group" id="accordion-cat-3">
                      <div class="panel panel-default panel-faq">
                          <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                  <h4 class="panel-title">
                                      Schneider
                                      <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                  </h4>
                              </a>
                          </div>
                          <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                  <li>Manual</li>
                                </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>



      <!--
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
    -->
    </div>


</div>
@endsection
