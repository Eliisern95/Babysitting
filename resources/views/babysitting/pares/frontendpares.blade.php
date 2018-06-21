@extends ('babysitting.pares.templatepare')
@section ('content')




<!--cos-->
<a class='text-light' href="{{ route('backendpare') }}"><button type="button" class="btn btn-primary btn-lg btn-block" >Llistat de cangurs!</button></a>

<div class="btn-group w-100">

    <button type="button" class="btn btn-info dropdown-toggle btn-lg btn-block" data-toggle="dropdown" ><a class='text-light' href="">Els meus cangurs preferits!</a></button>

    <ul class="dropdown-menu text-center" role="menu" id="cangurstop">
        <div class="row align-items-center justify-content-center display-flex">
            <div class="col-sm-6 p-6">

                <li><h1>#Top 1</h1></li>
                <li><div>Maria Pou</div></li>
                <li><div>Cangur a qui li agrada cuidar nens</div></li>
                <li><i class="fa fa-thumbs-o-up"></i>30</li>
            </div>
        </div>
        
        <div class="d-flex align-items-center justify-content-center display-flex">
            <div class="col-sm-6 p-6 align-items-center justify-content-center">
                <li><h1>#Top 2</h1></li>
                <div>Alba Gimenez</div>
                <div>Cangur a qui li agrada cuidar nens</div>
                <li><i class="fa fa-thumbs-o-up"></i>20</li>
            </div>
        </div>
        
           <div class="row align-items-center justify-content-center display-flex">
            <div class="col-sm-6 p-6">
                <li><h1>#Top 3</h1></li>
                <div>Alba Gimenez</div>
                <div>Cangur a qui li agrada cuidar nens</div>
                <li><i class="fa fa-thumbs-o-up"></i>10</li>
            </div>
        </div>
        <!--
        <div class="container">
          <div class="row">
            <div class="col">
              First, but unordered
            </div>
            <div class="col order-12">
              Second, but last
            </div>
            <div class="col order-1">
              Third, but first
            </div>
          </div>
        </div>-->

    </ul>

</div>


<img id="babysittingimatge" src="{{asset('imatges/happy-family.jpg')}}">



<div class="card text-center p-3 py-4">
    <div class="card-header">
        CONSELLS
    </div>
    <div class="card-body">
        <h5 class="card-title">Vull una cangur que:</h5>
        <p class="card-text1" id="girar"></p>
        <a href="#" class="btn btn-primary">Desitjos de pares!</a>
    </div>
    <div class="card-footer text-muted" id="girar1" id="radio5">
    </div> 
</div> 

<!--Script de rotació de missatges-->
<script type="text/javascript">
    var index = 0;
   
    
    var frases = new Array( @foreach ($consells as $consell)"{{$consell->consell}} - {{$consell->pare}}", @endforeach);
  
    for (var i = 0; i < frases.length; i++) {
    frases[i] ; 
}


    index = Math.random() * (frases.length);
    index = Math.floor(index);

    function girar() {
        if (index == frases.length) {
            index = 0;
        }
        document.getElementById("girar").innerHTML = frases[index];
        index++;
        setTimeout("girar()", 4000);
    }
</script>
<div id="girar" style="height:60px;margin:0px auto;"></div>
<script type="text/javascript">girar()</script>

<script type="text/javascript">
    var index1 = 0;
    hora = new Array();
    hora[0] = "2 segons abans";
    hora[1] = "3 hores abans";
    hora[2] = "24 hores abans";
    hora[3] = "11/06/18";
    hora[4] = "48 hores abans";


    index1 = Math.random() * (hora.length);
    index1 = Math.floor(index1);

    function girar1() {
        if (index1 == hora.length) {
            index1 = 0;
        }
        document.getElementById("girar1").innerHTML = hora[index1];
        index1++;
        setTimeout("girar1()", 4000);
    }
</script>
<div id="girar" style="height:60px; margin:0px auto;"></div>
<script type="text/javascript">girar1()</script>



@stop