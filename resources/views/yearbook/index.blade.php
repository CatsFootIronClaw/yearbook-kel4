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
            <img src="{{ asset('gambar/smk1.png') }}" alt="">
        </div>
        <div style="
                background-image: url('{{ asset('gambar/layered-steps-haikei (20).png') }}');
                background-repeat: no-repeat;
                background-size: contain;
                background-color: #fff;
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                padding: 20vh 68px 0 68px;
            "
            class="">
            <div
                style="
                    min-height:100px;
                    width: 100%;
                    border: 1px solid black;
                    padding: 12px;
                    display: flex;
                    justify-content:space-between;
                ">
                <div
                    style="
                        background-image: url('{{ asset('gambar/Bingkai (1).png') }}');
                        background-repeat: no-repeat;
                        height:200px;
                        width: 300px;
                        border: 1px solid black;
                        padding: 12px
                    ">
                    

                </div>
                <div
                    style="
                        max-width: 50%;
                        border: 1px solid black;
                        padding: 12px;
                        text-align: right;
                    ">
                    <h2>Kepala Sekolah</h2>
                    <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make”</p>
                    <p>Dr. Ir Raihanda Ndra M. Pd</p>
                </div>
            </div>
        </div>
    </section>
@endsection
