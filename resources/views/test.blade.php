
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-12 bg-primary">

        <button class="btn btn-primary" id="btn">Primary</button>
    </div>


    <h1>Title</h1> <br>

    <h2>Subtitle</h2> <br>


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
       Debitis error minus, quibusdam molestiae atque itaque sint officiis earum odio cumque aut at nulla nesciunt alias, est illo explicabo neque quia!</p>


      <i>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Eveniet voluptates est, provident beatae voluptas nesciunt dolore fugiat numquam iure error architecto ullam perspiciatis qui maxime molestiae dicta at suscipit velit!
      </i>

      <br><br>


      <form action="" class="form p-3 my-5">
        <!-- Form Name -->
      
         <h2 class="form-title">Form Title</h2>
      
         <br>
         <input class="form-control my-1" type="text" name="" id="">

         <input class="form-control my-1" type="text" name="" id="">

         <button type="submit " class="btn btn-primary  my-3">Enviar</button>
  <br><br>
      </form>



    <script>

      $('#btn').click(function(){
         console.log(Date())
      })

    </script>

</div>    
@endsection
