@extends ('babysitting.pares.templatepare')
@section ('content')




<!--cos-->
<button type="button" class="btn btn-primary btn-lg btn-block" ><a class='text-light' href="{{ route('backendcangur.index') }}">Llistat de cangurs!</a></button>

<button type="button" class="btn btn-info dropdown-toggle btn-lg btn-block" ><a class='text-light' href="">Els meus cangurs preferits!</a></button>


 <div style="float:left;width:300px;"></div>
 <img src="{{asset('imatges/happy-family.jpg')}}" width="1347px" height="500px">

 

<div class="card text-center p-3 py-4">
  <div class="card-header">
    CONSELLS
  </div>
  <div class="card-body">
    <h5 class="card-title">Vull una cangur que:</h5>
    <p class="card-text1" id="rotando"></p>
    <a href="#" class="btn btn-primary">Desitjos de pares!</a>
  </div>
  <div class="card-footer text-muted" id="rotando1" id="radio5">
  </div> 
</div> 

 <!--Script de rotació de missatges-->
<script type="text/javascript">
var indice = 0;
frases = new Array();
frases[0] = "Sigui educada, que no fumi, que parli anglès, que tingui horari fexible\n\
             - Yolanda Carpio(Encarregada de la secció de PAE d'ISERN Electrodomèstics)";
frases[1] = "Que parli anglès, que tingui cotxe.\n\
             - Yaiza Rodriguez(Dependenta de la secció de Post Venda d'ISERN Electrodomèstics";
frases[2] = "Que tingui entre uns 22 i 30 anys. Que sugui educada\n\
             - Olga Prims(Fisiotrapeuta del centre FisioCat)";
frases[3] = "Que a els meus nens els hi agradi\n\
             - Àngels Aliguer(Autònoma esteticista al centre d'estètica Osona Wellness)";


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