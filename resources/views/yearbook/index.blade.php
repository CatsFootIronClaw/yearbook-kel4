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
            <h1 class="text-white text-5xl">SMKN 1 KOTA BEKASI</h1>
            <h3 class="text-white text-3xl">Angkatan 25</h3>
            <br>
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
                   
                    padding: 12px;
                    display: flex;
                    justify-content:space-between;
                ">
                <div
                    style="
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        display: flex;
                        border-radius: 20px;
                    ">
                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
                </div>

                <div
                    style="
                        max-width: 50%;
                        padding: 12px;
                        text-align: right;
                        color: #4C2215;
                        font-size: 20px;
                    ">
                    <h2>Kepala Sekolah</h2>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit fugiat ex eius rem inventore atque nulla quae est itaque a sequi quibusdam, id provident libero natus dolores dolorem, adipisci voluptas?</p>
                    <p>Dr. Ir Raihanda Ndra M. Pd</p>
                </div>
            </div>


             <br>

            <div
                style="
                    min-height:100px;
                    width: 100%;
                    padding: 12px;
                    display: flex;
                    justify-content:space-between;
                    
                ">
                <div
                    style="
                    max-width: 50%;
                    padding: 12px;
                    text-align: left;
                    color: #4C2215;
                    font-size: 20px;
                ">
                    <h2>Kepala Sekolah</h2>
                    <p class="">“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled it to make”</p>
                    <p>Dr. Ir Raihanda Ndra M. Pd</p>
                </div>

                <br>
                <div
                    style="
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        display: flex;
                        justify-content: flex-end;
                        border-radius: 20px;
                        
                    ">
                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
                   
                </div>
            </div>
        </div>

        {{-- Halaman Profile --}}
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

            <div class="">
                <h1 class="text-5xl text-center">TEACHER PROFILE</h1>
            </div>
            
            <br>
            <div class="grid grid-cols-4 gap-4 place-content-center">

                <div
                    style="
                        background-image: url('{{ asset('gambar/border2.png') }}');
                        background-repeat: no-repeat;
                        padding: 12px;
                        display: flex;
                        width: 100%;
                        height: 250px;
                    ">

                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48 z-999">
                </div>

                <div
                style="
                background-image: url('{{ asset('gambar/border2.png') }}');
                    background-repeat: no-repeat;
                    padding: 12px;
                    display: flex;
                    border-radius: 20px;
                ">
                <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
            </div>

            <div
            style="
              background-image: url('{{ asset('gambar/border2.png') }}');
                background-repeat: no-repeat;
                padding: 12px;
                display: flex;
                border-radius: 20px;
            ">
            <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
        </div>

        <div
        style="
          background-image: url('{{ asset('gambar/border2.png') }}');
            background-repeat: no-repeat;
            padding: 12px;
            display: flex;
            border-radius: 20px;
        ">
        <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
    </div>

    <div
        style="
          background-image: url('{{ asset('gambar/border2.png') }}');
            background-repeat: no-repeat;
            padding: 12px;
            display: flex;
            border-radius: 20px;
        ">
        <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
    </div>

    <div
    style="
      background-image: url('{{ asset('gambar/border2.png') }}');
        background-repeat: no-repeat;
        padding: 12px;
        display: flex;
        border-radius: 20px;
    ">
    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
</div>

            </div>


            <br>

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
                    max-width: 50%;
                    border: 1px solid black;
                    padding: 12px;
                    text-align: left;
                    color: #4C2215;
                    font-size: 20px;
                ">
                    <h2>Kepala Sekolah</h2>
                    <p class="">“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled it to make”</p>
                    <p>Dr. Ir Raihanda Ndra M. Pd</p>
                </div>

                <br>
                <div
                    style="
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        display: flex;
                        justify-content: flex-end;
                        border-radius: 20px;
                        
                    ">
                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
                   
                </div>
            </div>
        </div>

    </section>
@endsection
