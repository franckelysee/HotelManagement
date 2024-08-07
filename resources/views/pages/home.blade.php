@extends('app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <div class="home_container py-5 px-4">
        @include('layouts.navSearch')
        <div class="w-full">
            @include('components.banner_home')

            <div class="w-full">
                <div class="container_mgs h-[500px] w-full border rounded-[30px] p-5 flex flex-col justify-center">
                    <div class="msg_content bg-white w-[35%] p-4 rounded-[20px] font-sans flex flex-col gap-3">
                        <h1 class="text-[30px] font-bold">Prêt à vivre une expérience inoubliable ?</h1>
                        <p>
                            Réservez dès maintenant et profitez de nos offres exclusives ! Découvrez le confort et le luxe de nos chambres, ainsi que les services exceptionnels que nous offrons à nos invités. Cliquez sur le bouton ci-dessous pour garantir votre séjour de rêve.
                        </p>

                        <a href="{{ route('hotels') }}" class="btn bg-blue-700 text-white py-3 px-2 rounded-[10px] flex justify-center items-center">Réserver Dès Maintenant</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
