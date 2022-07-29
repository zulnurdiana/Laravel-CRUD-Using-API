@extends('layout.main')
 @section('container')
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
      .temp {
    border-radius: 10px;
    background-color: #012443; 
    color: rgb(211, 211, 211); 
    display: inline-block; 
    padding: 8px 10px;
    }

    </style>
  </head>
  <body>


    <div class="container">

        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <h1 class="text-center">Check Weather</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by city / country ..." id="cari">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="tombol">Search</button>
                    </div>
                </div>
            </div>
        </div> 

        <hr>

        <div class="row justify-content-center">
          <div class="col-md-12">
              <div id="waktu">

              </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div id="hasil" class="text-center">
                  
                </div>
            </div>
            <div class="col-md-8">
                <div id='map' style='width: 100%; height: 430px;'>

                </div>
            </div>
          </div>

          <hr>
    </div>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
  <script type="text/javascript" src="{{ URL::asset('js/cuaca.js') }}"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></s>
  </body>
</html>





 @endsection
    