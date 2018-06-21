@extends ('babysitting.cangurs.templatecangur')
@section ('content')

<!--cos-->

<div class="d-flex flex-center flex-wrap">
<button type="button" id="boto1" class="btn btn-primary btn-lg btn-block" ><a class='text-light' href="{{ route('backendcangur.create') }}">ANUNCIA'T! PUBLICA EL TEU ANUNCI!</a></button>
</div>

 <img id="babysittingimatge" src="{{asset('imatges/nanny.jpg')}}">


 <div class="card text-center p-3 py-4">
  <div class="card-header">
    CONSELLS
  </div>
  <div class="card-body">
    <h5 class="card-title">Consells de com educar els teus fills</h5>
    <p class="card-text1" id="girar"></p>
    <a href="#" class="btn btn-primary">Consells de nannys!</a>
  </div>
  <div class="card-footer text-muted" id="girar1" id="radio5">
  </div> 
</div> 

 <!--Script de rotació de missatges-->
<script type="text/javascript">
    var index = 0;
    frases = new Array();
    frases[0] = "No apartis la vista dels nens\n\
             - Maria Pou";
    frases[1] = "Alimenta-ls be! \n\
             - Alba Gimenez ";
    frases[2] = "Que estiguin allunyats d'obejectes punjants o perjudicians\n\
             - Pau Hola";
   


    index = Math.random() * (frases.length);
    index = Math.floor(index);

    function girar() {
        if (index == frases.length) {
            index = 0;
        }
        document.getElementById("girar").innerHTML = frases[index];
        index++;
        setTimeout("girar();", 4000);
    }
</script>

<div id="girar" style="height:60px;margin:0px auto;"></div>
<script type="text/javascript">girar();</script>

<script type="text/javascript">
    var index1 = 0;
    hora = new Array();
    hora[0] = "2 segons abans";
    hora[1] = "3 hores abans";
    hora[2] = "24 hores abans";


    index1 = Math.random() * (hora.length);
    index1 = Math.floor(index1);

    function girar1() {
        if (index1 == hora.length) {
            index1 = 0;
        }
        document.getElementById("girar1").innerHTML = hora[index1];
        index1++;
        setTimeout("girar1();", 4000);
    }
</script>
<div id="girar" style="height:60px;margin:0px auto;"></div>
<script type="text/javascript">girar1();</script>

@stop