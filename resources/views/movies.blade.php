@extends('layout.main')
 @section('container')
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Daftar Movies</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-keyword" placeholder="Search Movie...">
                    <button class="btn btn-primary search-button" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
        <hr>

        <div class="row movie-container">
            
        </div>
    </div>

    <!-- Awal Modal  -->

        <div class="modal fade" id="movieDetailModal" tabindex="-1" aria-labelledby="movieDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="movieDetailModalLabel">Detail Movie</h5>
            </div>
            <div class="modal-body">
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

    <script>
   
    </script>    

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- JQuerry -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/movie.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 @endsection