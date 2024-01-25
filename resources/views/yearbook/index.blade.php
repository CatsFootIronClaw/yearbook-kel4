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
        <div
            style="
                background-image: url('{{ asset('gambar/layered-steps-haikei (18).png') }}');
                background-repeat: no-repeat;
                background-size: contain;
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            " class="px">
            <h1>SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
    </section>
@endsection
