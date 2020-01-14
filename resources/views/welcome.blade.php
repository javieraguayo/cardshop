<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  {{--   <div class="container">

            {!! Form::text('email', 'example@gmail.com'); !!}
            
            {!! Form::label('email', 'E-Mail Address'); !!}
            
             <div class="row col-md-12">
            {!! Form::password('password', ['class' => 'awesome']); !!}
            </div>
            <div class="row col-md-3 text-center text-center">
            {!! Form::date('name', \Carbon\Carbon::now()); !!}
            </div>

            <div class=" row col-md-3 text-center text-center">
                {!! Form::file('image'); !!}
            </div>

            <div class="row col-md-3 text-center text-center">
                 {!! Form::select('size', array('L' => 'Large', 'S' => 'Small'), null, array('class'=>'form-control','style'=>'' )) !!}
            </div>
        
    
        
    </div> --}}
   
        
     <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Producto</h1>
              {{-- <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p> --}}
            </div>
          </div>

          {!! Form::open(['url' => './Product']) !!}
          <div class="row align-items-center">
            <div class="col mt-4">
                {!! Form::text('name','',['class' => 'form-control','placeholder' => 'Ingrese Nombre']); !!}
              {{-- <input type="text" class="form-control" placeholder="Company Name"> --}}
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
                {!! Form::number('price', '',['class' => 'form-control','placeholder' => 'Ingrese Precio', 'id' => 'price']); !!}

              {{-- <input type="text" class="form-control" placeholder="Company Name"> --}}
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
                {!! Form::text('url_img','',['class' => 'form-control','placeholder' => 'Ingrese URL']); !!}
              {{-- <input type="text" class="form-control" placeholder="Company Name"> --}}
            </div>
          </div>
         

           {!! Form::submit('Agregar!'); !!}

           {!! Form::close() !!}
        </div>
      </div>
    </div>

   

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        //  function addCommas(nStr) {
        //     nStr += '';
        //     var x = nStr.split('.');
        //     var x1 = x[0];
        //     var x2 = x.length > 1 ? '.' + x[1] : '';
        //     var rgx = /(\d+)(\d{3})/;
        //     while (rgx.test(x1)) {
        //         x1 = x1.replace(rgx, '$1' + '.' + '$2');
        //     }
        //     return x1 + x2;
        // }


        // $('input.price').keyup(function(event) {

        //       // skip for arrow keys
        //       if(event.which >= 37 && event.which <= 40){
        //        event.preventDefault();
        //       }

        //       $(this).val(function(index, value) {
        //           value = value.replace(/,/g,'');
        //           return numberWithCommas(value);
        //       });
        //     });

        //     function numberWithCommas(x) {
        //         var parts = x.toString().split(".");
        //         parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        //         return parts.join(".");
        //     }

        //  function addCommas(nStr) {
        //     nStr += '';
        //     var x = nStr.split('.');
        //     var x1 = x[0];
        //     var x2 = x.length > 1 ? '.' + x[1] : '';
        //     var rgx = /(\d+)(\d{3})/;
        //     while (rgx.test(x1)) {
        //         x1 = x1.replace(rgx, '$1' + '.' + '$2');
        //     }
        //     return x1 + x2;
        // }

    // const input = 300000;
    // // console.log(new Intl.NumberFormat('es-CL', {currency: 'CLP', style: 'currency'}).format(input));
    // var numberformat = new Intl.NumberFormat('es-CL', {currency: 'CLP', style: 'currency'}).format(input);
    // console.log(numberformat)
    // document.getElementById(input_id).setAttribute('value', val);

    // $('#price').keyup(function(event) {
    //     var numberformat = new Intl.NumberFormat('es-CL', {style: 'currency'}).format(this.value);
    //     document.getElementById('price').value = numberformat;
    //     console.log(numberformat);
    // });
    </script>
  </body>
</html>