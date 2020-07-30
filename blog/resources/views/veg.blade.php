<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Veg</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @include('nav')

    <div class="mx-auto" style="width: 600px;">
      <div class="">
        <h1>This is the vegetables directory</h1>

      </div>

@forelse($farmers as $farmer)


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$farmer->name}}</h5>
    <p class="card-text">
      <li>{{$farmer->phone}}</li>
      <li>{{$farmer->address}}</li>
      <li>{{$farmer->email}}</li></p>
    <a href="#" class="btn btn-primary">Visit Farmer</a>
  </div>
</div>

  <li>{{$farmer->name}}</li>
  <li>{{$farmer->phone}}</li>
  <li>{{$farmer->address}}</li>
  <li>{{$farmer->email}}</li>

  @empty
  <li>No farmers in your area</li>

  @endforelse





    </div>




  </body>
</html>
