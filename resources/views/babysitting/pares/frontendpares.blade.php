@extends ('babysitting.pares.templatepare')
@section ('content')




<!--cos-->
<button type="button" class="btn btn-primary btn-lg btn-block" ><a class='text-light' href="{{ route('anuncis-cangurs') }}">Llistat de cangurs!</a></button>

<button type="button" class="btn btn-info btn-lg btn-block" ><a class='text-light' href="{{ route('anuncis-cangurs') }}">Els meus cangurs preferits!</a></button>


 <div style="float:left;width:300px;"></div>
 <img src="{{asset('imatges/happy-family.jpg')}}" width="1347px" height="500px">

 
<!--
<div class="container">
<br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr>

<div class="row">
	<aside class="col-sm-4">
<p>Collapse - list group</p>


<div class="list-group filter-wrap">
	<article class="list-group-item">
		<header class="filter-header">
			<a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" class="">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Some heading </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse1" style="">			
			<form class="py-2">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search">
			  <div class="input-group-append">
			    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
			  </div>
			</div>
			</form>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt deserunt mollit anim id est laborum.	</p>
		</div> <!-- collapse -filter-content  .// 
	</article>
	<article class="list-group-item">
		<header class="filter-header">
			<a href="#" data-toggle="collapse" data-target="#collapse2">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Second heading </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse2">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt deserunt mollit anim id est laborum.	</p>
		</div>
	</article>
	<article class="list-group-item">
		<header class="filter-header">
			<a href="#" data-toggle="collapse" data-target="#collapse3">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Another title </h6>
			</a>
		</header>
		<div class="filter-content collapse" id="collapse3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt deserunt mollit anim id est laborum.	</p>
		</div>
	</article>
</div> <!-- card.//




	</aside>  col -->

 






 
 
 <div class="card text-center">
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


<!--Valoracions-->
<form>
  <p class="clasificacion" id="calificacio">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </p>
</form>
@stop