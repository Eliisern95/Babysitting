@extends ('babysitting.template')
@section ('content')

<!--Cos-->

<table>
    <tr>
        <td>
            <div style="float:left;width:300px;"></div>
            <img src="{{asset('imatges/2.2.jpg')}}" width="1347px" height="500px">
        </td>
    </tr>
</table>


<!--Afecta card-->
<div class="d-flex p-4">
    <div class="col-sm-4">
        <div class="card bg-info text-white text-center">
            <div class="card-body"><!--Posar icono de rellotge-->
                <i class="fa fa-clock-o fa-2x fa-lg text-center"></i>
                <h5 class="card-title text-center">Servei 24 hores</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-info text-white text-center">
            <div class="card-body"><!--Posar icono de persona-->
                <i class="fa fa-child fa-2x fa-lg text-center"></i>
                <h5 class="card-title text-center">De 0 a 14 anys</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-info text-white text-center">
            <div class="card-body"><!--Posar icono de euro-->
                <i class="fa fa-map-marker fa-2x fa-lg text-center"></i>
                <h5 class="card-title text-center">Zona de tot Catalunya</h5>
            </div>
        </div>
    </div> 
</div>

<!--Efecte Collapse Pares-->
<div class="text-center">      
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Som una Familia</a>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Sóc un/a cangur</a>
    </p>
</div>

<div class="d-flex p-3">
    <div class="col-md-6 col-md-offset-3">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <p>COM FUNCIONA?</p>
                <p>Busques a una <b>cangur</b> o a una <b>cangur compartida</b>? Estem aquí per ajudar-te!</p>
                <p>A babysitting milers de persones s'ofereixen per a cuidar nens i nenes!</p>
                <!--Efecte collapse-->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-red"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Quin tipus d'atencció escullir? Necessito ajuda!
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            No saps per on tirar? T'entanem! A vegades és dificl trobar el que busques. Per ajudar-te
                            hem preparat una breu guia en la que presentem les diferents opcions
                            per el cuidado de nens. Entendràs en que consisteix, incluit les diferencias en els costos
                            i les possibles ajudes a les que pots accedir.
                            
                            Així que ja saps, visita la nostra "Guia de tipus d'atenció infentil"
                            </div>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Puc confiar?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                               Sabem que els teus fills són el més preciat d'aquest món. Només tú pots decidir disposar de la confiança d'algu
                               a la hora de cuidar-los.
                               Babysitting és un lloc d'anuncis i no et substitueix a la hora de contactar una cangur o de 
                               realitzar les comprovacións necessaries.
                               <b>Tot i així disposem de moltes eines a la web per ajudar-te:</b>
                               referencias, identitats validades, correus electrònics, números de telèfon, inclus les seves xarxes socials.
                               Tot això farà que augmenti la teva confiança.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    La web és gratuita?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                I tan! No tenim cap comisió per el manteniment dels teus fills i el contace a través de missatgeria
                                a la web és totalment gratuit. Inclus pots planejar una entrevista personal a través d'ella.
                                L'accés a els números de telèfon de contacte requereix una petita contrivució a els gastos de la web en froma de pase.
                                Si t'agrada aquest lloc web això pot fer que segueix existint.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Qui contracte a el/la cangur?
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Babysitting no és una agencia i la formació del contracte de teball es realitza directament entre vostès i la cangur. Sou vosaltres que decidiu lliurement i d'acord amb la cangur la 
                                indemnització i les diferents condicions del servei.
                            </div>
                        </div>
                    </div>
                    
                     <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   Cataleg de cangurs
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                Visita el nostra <b>Cataleg de cangurs</b>!  
                            </div>
                        </div>
                         <input class="btn btn-danger" type="submit" value="EM REGISTRO!">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!--Cangurs-->
<div class="d-flex p-3">
    <div class="col-md-6 col-md-offset-3">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <p>COM FUNCIONA?</p>
               <p>Babysitting és <b>una de les millors web per a cangurs a Internt</b></p>
               <p>Aquí pots oferir els teus serveis de manera gratuita a milers
                de famílies que s'inscriuen cada setmana</p>
                <!--Efecte collapse-->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-red"  data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                               La web és gratuïta per a cangurs?                                
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion">
                            <div class="card-body">
                            I tan! De <b>manera gratuïta pots fer:</b>
                            publicar un anunci.
                            posar-te en contacte amb les famílies a tavés de la web.
                            concertar una cita per a què els coneguis.
                            <b>Les opcions de pagament</b> et permeten resaltar el teu perfil 
                            o beneficiar-te d'altres formes de contacte.
                            </div>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                  No tinc formació especifica, puc oferir els meus serveis?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
                            <div class="card-body">
                               Només el cuidado de diferents nens a la teva casa o treballar en una guarderia
                          requereixen certificació obligatoria.
                          Si desitges cuidar nens, la formació no és obligatoria.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingThree3">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                    La web és gratuita?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion">
                            <div class="card-body">
                                I tan! No tenim cap comisió per el manteniment dels teus fills i el contace a través de missatgeria
                                a la web és totalment gratuit. Inclus pots planejar una entrevista personal a través d'ella.
                                L'accés a els números de telèfon de contacte requereix una petita contrivució a els gastos de la web en froma de pase.
                                Si t'agrada aquest lloc web això pot fer que segueix existint.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour">
                                    Qui contracte a el/la cangur?
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseFour4" class="collapse" aria-labelledby="headingFour4" data-parent="#accordion">
                            <div class="card-body">
                                Babysitting no és una agencia i la formació del contracte de teball es realitza directament entre vostès i la cangur. Sou vosaltres que decidiu lliurement i d'acord amb la cangur la 
                                indemnització i les diferents condicions del servei.
                            </div>
                        </div>
                    </div>
                    
                     <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive">
                                   Cataleg de cangurs
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFive5" class="collapse" aria-labelledby="headingFive5" data-parent="#accordion">
                            <div class="card-body">
                                Visita el nostra <b>Cataleg e cangurs</b>!  
                            </div>
                        </div>
                           <button type="submit" class="btn btn-danger">
                                    {{ __('EM REGISTRO!') }}
                                </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

@stop