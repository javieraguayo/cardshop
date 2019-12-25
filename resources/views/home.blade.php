@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 px-3 mx-3">
           <div class="card" style="width: 18rem;">
              <img src="https://optcg.com/2-product_default/shoki-el-cazador-l.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SHOKI EL CAZADOR L</h5>
                <p class="card-text">Descripcion</p>
                <strong class="card-text">$3.500</strong>
                <hr>
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir al carro</a>
                <a href="#" class="btn btn-primary"><i class="far fa-heart"></i> Favoritos</a>
              </div>
            </div>
        </div>
        <div class="col-md-3 px-3 mx-3">
           <div class="card" style="width: 18rem;">
              <img src="https://optcg.com/2-product_default/shoki-el-cazador-l.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SHOKI EL CAZADOR L</h5>
                <p class="card-text">Descripcion</p>
                <strong class="card-text">$3.500</strong>
                <hr>
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir al carro</a>
                <a href="#" class="btn btn-primary"><i class="far fa-heart"></i> Favoritos</a>
              </div>
            </div>
        </div>

        <div class="col-md-3 px-3 mx-3">
           <div class="card" style="width: 18rem;">
              <img src="https://optcg.com/2-product_default/shoki-el-cazador-l.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SHOKI EL CAZADOR L</h5>
                <p class="card-text">Descripcion</p>
                <strong class="card-text">$3.500</strong>
                <hr>
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir al carro</a>
                <a href="#" class="btn btn-primary"><i class="far fa-heart"></i> Favoritos</a>
              </div>
            </div>
        </div>

        

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
             <cart-component> </cart-component>
            </div>
          </div>
        </div> 
    </div>
</div>
@endsection
