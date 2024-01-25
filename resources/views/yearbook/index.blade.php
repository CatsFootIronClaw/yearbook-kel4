@extends('layout.content-layout')
@section('content')
    <section>

        {{-- cover --}}
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
                justify-content: center; ">
            <img src="{{ asset('gambar/smk1.png') }}" alt="">
        </div>

        {{-- sambutan --}}
        <div 
            style="
                background-image: url('{{ asset('gambar/layered-steps-haikei (20).png') }}');
                background-repeat: no-repeat;
                background-size: contain;
                background-color: #fff;
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                padding: 20vh 68px 0 68px; 
                ">
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
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        display: flex;
                        width: 50%;
                    ">

                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">

                    <div
                        style="
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        width: 50px;
                        height: 20px;
                    ">

                    </div>
                </div>



                <div
                    style="
                        max-width: 50%;
                        border: 1px solid black;
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
                        width: 50%
                    ">
                    <img src=" {{ asset('gambar/pak_kepsek.png') }}" alt="" class="w-48 h-48">
                    <div
                        style="
                        background-repeat: no-repeat;
                        border: 1px solid black;
                        padding: 12px;
                        width: 50px;
                        height: 20px;
                ">

                        <div 
                        style="
                        background-image: url('{{ asset('gambar/layered-steps-haikei (30
                        ).png') }}');
                        "
                        ></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- visi misi --}}
        <div
            style="
                background-image: url('{{ asset('gambar/layered-steps-haikei (20).png') }}');
                background-repeat: no-repeat;
                background-size: contain;
                background-color: #fff;
                width: 100%;
                min-height: 200vh;
                padding: 18vw 10vw 0;
                display: flex;
                flex-direction: column;
                gap: 26px;
            "
        >
            <div
                style="
                    display: flex;
                    justify-content: space-between;
                    gap: 12px
                "
            >
                <div
                    style="
                        width: 35%;
                        text-align: center;
                    "
                >
                    <h1 style="font-size: 5rem">Visi</h1>
                </div>
                <div
                    style="
                        width: 65%;
                        text-align: center;
                    "
                >
                   <p style="font-size: 3rem">“Menjadi SMK yang menghasilkan SDM kompeten, berkarakter, dan ihsan”</p> 
                </div>
            </div>

            <div
                style="
                    display: flex;
                    justify-content: space-between;
                    gap: 12px
                "
            >
                <div
                    style="
                        width: 65%;
                    "
                >
                    <ol class="list-decimal" style="font-size: 3rem">
                        <li>Melaksanakan Sistem Manajemen Mutu ISO 9001 : 2015</li>
                        <li>Membudayakan pengamalan nilai-nilai agama dalam setiap aspek kehidupan seluruh warga sekolah. </li>
                        <li>Meningkatkan kualitas tenaga pendidik dan kependidikan sesuai kualifikasi dan kompetensi standar.</li>
                    </ol>
                </div>
                <div
                    style="
                        width: 35%;
                        text-align: center;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                >
                    <h1 style="font-size: 5rem">Misi</h1>
                </div>
            </div>
        </div>

    </section>
@endsection
