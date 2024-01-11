@extends('layout.content-layout')
@section('content')
    <section>
        <div
            style="
                background-image: url('{{ asset('gambar/pixel.png') }}');
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            ">
           <img src="{{ asset('gambar/smk1.png')}}" alt="">
        </div>
        <div>
          
        </div>
    </section>
@endsection
