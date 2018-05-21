@extends ('babysitting.template')
@section ('content')

<!--Cos-->

        <table>
<tr>
    <td>
       <div style="float:left;width:300px;">Babysitting, cangurs a domicili</div>
        <img src="{{asset('imatges/2.jpg')}}" width="1348px" height="500px">

    </td>
</tr>
        </table>


<!--Afecta card-->
<div class="row p-3">
  <div class="col-sm-4">
    <div class="card bg-info text-white">
      <div class="card-body"><!--Posar icono de rellotge-->
        <h5 class="card-title text-center">Servei 24 hores</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card bg-info text-white">
      <div class="card-body"><!--Posar icono de persona-->
        <h5 class="card-title text-center">De 0 a 14 anys</h5>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card bg-info text-white">
      <div class="card-body"><!--Posar icono de euro-->
        <h5 class="card-title text-center">Preus assequibles</h5>
      </div>
    </div>
  </div> 
</div>

<!--Efecte Collapse-->
      
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Som una Familia</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Sóc una Cangur</button>
</p>
<div class="row p-3">
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

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
              
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Qui contracte a el/la cangur?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>                        
      </div>
    </div>
    </div>
  </div>
</div>
    
    <div id="accordion2">
    <div class="card2">
    <div class="card-header2" id="headingOne2">
      <h5 class="mb-0">
        <button class="btn btn-link text-red"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Testimonis
        </button>
      </h5>
    </div>
    </div>
  </div>
</div>
    
    
    
<div class="col-md-6 col-md-offset-3">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
       <p>COM FUNCIONA?</p>
          <p>Buscas a una <b>cangur</b> o a una <b>cangur compartida</b>? Estem aquí per ajudar-te!</p>
          <p>A babysitting milers de persones s'ofereixen per a cuidar nens i nenes!</p>
          <!--Efecta collapse-->
           <div id="accordion">
    <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-red"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Quin tipus d'atencció escullir? Necessito ajuda!
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
              
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Qui contracte a el/la cangur?
        </button>
      </h5>
    </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
         </div>
       </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

        
        
        <p>t non mattis lacus, ut egestas dui. Cras congue aliquet luctus. Praesent et elit sed diam aliquet iaculis ut id leo. Phasellus convallis vel augue ac pulvinar. Aenean ultricies, tellus sit amet imperdiet convallis, felis felis sollicitudin ipsum, sit amet eleifend lectus urna sit amet erat. Praesent et est sit amet leo ultricies ultricies. Curabitur lacinia libero quis velit placerat mattis. Donec lobortis condimentum tortor sagittis tincidunt.

Quisque in nisi mauris. Maecenas iaculis rutrum posuere. Curabitur egestas sollicitudin orci non gravida. Praesent luctus leo mauris, sit amet posuere massa vehicula eget. Nunc varius, arcu vitae rutrum pretium, ante sem laoreet risus, et aliquam nibh lorem non velit. Maecenas elementum interdum mauris et bibendum. Vestibulum sit amet vehicula lacus, ut mollis massa. Sed sit amet orci porttitor lectus mollis fringilla. Ut eleifend porttitor consectetur.

Etiam volutpat viverra urna quis tempor. Nunc sit amet facilisis odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi at ante nulla. Mauris porta ultricies nisl. Ut rutrum congue nisi, ac sagittis dolor euismod quis. Nulla molestie velit sit amet nibh ornare tincidunt ac at neque. Proin imperdiet dapibus enim, quis laoreet purus laoreet eget. Vivamus consectetur sapien et scelerisque feugiat. Curabitur eget iaculis nisl. Duis ut libero id enim molestie egestas. Phasellus a mattis ante. Pellentesque habitant.</p>

@stop