@extends('layout.main')
 @section('container')
     <div class="p-3 mb-2 bg-light rounded-3 ">
        <div class="container-fluid py-1 text-center">
            <img src="img/{{ $img }}" alt="{{ $name }}" class="img-thumbnail rounded-circle " width="300">
            <p class="text-primary" style="font-size: 25px;margin-bottom: -7px;font-weight: bold;margin-top: 4px"><small>10120787 - IF9</small></p>
            <h1 class="display-6 fw-bold mt-2 text-primary">Muhamad Zulfikar Nurdiana</h1>
            <p class="fs-4">Student | Programmer | Traveller</p>

            <a href="{{ $whatsapp }}"><i class="bi bi-whatsapp mx-3"></i></a>
            <a href="{{ $facebook }}"><i class="bi bi-facebook mx-3"></i></a>
            <a href="{{ $instagram }}"><i class="bi bi-instagram mx-3"></i></a>
        </div>
     </div>            
 @endsection
    
  