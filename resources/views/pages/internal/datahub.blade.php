@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Energinet Datahub Information</div>

                <div class="panel-body">
                    <p>For at anmode kunder om fuldmagt til data skal du anvende link som beskrevet i ovenstående vejledning tilføjet ThirdPartyID. Da systemet implementeres sammen med Engrosmodellen, vil denne proces først fungere fra den 1. april 2016.</p>
                    <p>Dit ThirdPartyID er:<br/>
                      <b>65541c50-48f4-40bc-ad31-7fe2451c802f</b>
                    </p>

                    <p>Har du spørgsmål til løsningen eller dine muligheder og ansvar som tredjepart er du velkommen til at skrive til <a href="mailto:markedsdrift@energinet.dk?Subject=Tredjepartsadgang">markedsdrift@energinet.dk</a>. Mærk venligst emnefeltet: Tredjepartsadgang.</p>

                    <p><b>Test URL:</b><br/>
                      <a href="https://tredjepart.eloverblik.dk/register?thirdPartyId=65541c50-48f4-40bc-ad31-7fe2451c802f&thirdPartyKey=4321&returnurl=http://support.greengo.energy">https://tredjepart.eloverblik.dk/register?thirdPartyId=65541c50-48f4-40bc-ad31-7fe2451c802f&thirdPartyKey=4321&returnurl=http://support.greengo.energy</a>
                    </p>
                    <!--
                    https://tredjepart.eloverblik.dk/register?thirdPartyId=b2ce4073-89d2-4d3c-80a5-0cf70e143cf2&thirdPartyKey=4321

                    https://tredjepart.eloverblik.dk/register?thirdPartyId=65541c50-48f4-40bc-ad31-7fe2451c802f&thirdPartyKey=roks1982&returnurl=http://support.greengo.energy
                    -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
