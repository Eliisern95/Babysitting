@extends ('babysitting.cangurs.templatecangur')
@section ('content')

<!--cos-->


<button type="button" id="boto1" class="btn btn-primary btn-lg btn-block" ><a class='text-light' href="{{ route('backendcangur.create') }}">ANUNCIA'T! PUBLICA EL TEU ANUNCI!</a></button>

<button type="button" id="boto2" class="btn btn-primary btn-lg btn-block" ><a class='text-light' href="{{ route('anuncis-cangurs') }}">OFERTES!</a></button>

<div style="float:left;width:300px;"></div>
 <img src="{{asset('imatges/nanny.jpg')}}" width="1347px" height="500px">


 <div class="card text-center p-3 py-4">
  <div class="card-header">
    CONSELLS
  </div>
  <div class="card-body">
    <h5 class="card-title">Consells de com educar els teus fills</h5>
    <p class="card-text1" id="rotando"></p>
    <a href="#" class="btn btn-primary">Consells de nannys!</a>
  </div>
  <div class="card-footer text-muted" id="rotando1" id="radio5">
  </div> 
</div> 

 <!--Script de rotació de missatges-->
<script type="text/javascript">
var indice = 0;
frases = new Array();
frases[0] = "Educa-ls bé";
frases[1] = "Alimenta-ls bé";
frases[2] = "Estimal's";
frases[3] = "Fes que fasin esport";
frases[4] = "Fes que llegeixin molt";


indice = Math.random()*(frases.length);
indice = Math.floor(indice);

function rotar() {
if (indice == frases.length) {indice = 0;}
document.getElementById("rotando").innerHTML = frases[indice];
indice++;
setTimeout("rotar();",4000);
}
</script>
<div id="rotando" style="height:60px;margin:0px auto;"></div>
<script type="text/javascript">rotar();</script>

<script type="text/javascript">
var indice1 = 0;
hora = new Array();
hora[0] = "2 segons abans";
hora[1] = "3 hores abans";
hora[2] = "24 hores abans";
hora[3] = "11/06/18";
hora[4] = "48 hores abans";


indice1 = Math.random()*(hora.length);
indice1 = Math.floor(indice1);

function rotando1() {
if (indice1 == hora.length) {indice1 = 0;}
document.getElementById("rotando1").innerHTML = hora[indice1];
indice1++;
setTimeout("rotando1();",4000);
}
</script>
<div id="rotando" style="height:60px;margin:0px auto;"></div>
<script type="text/javascript">rotando1();</script>


@stop