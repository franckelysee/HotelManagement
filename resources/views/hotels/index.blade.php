@extends('app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <div class="home_container py-5 px-4">
        <div class="w-full">

            <div class="w-full py-5">
                <div class="container_mgs h-[500px] w-full border rounded-[30px] flex ">
                    <div class="msg_content bg-[#44444463] w-[35%] p-4 rounded-[30px] font-sans flex flex-col gap-3">
                        <h1 class="text-[50px] font-bold text-white">Prêt à vivre une expérience inoubliable ?</h1>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navSearch')

        <div class="w-full mt-5">
            <div class="hotels_list_offers">
                <div class="hotels_container w-full flex flex-wrap">
                    @if (isset($hotels))
                        @foreach ($hotels as $hotel )
                        <div class="hotel_item w-[33%] " >
                            <form action=" {{ route('search-hotels') }}" method="get">

                                <div>
                                    <input type="text" name="ville" value="{{ $hotel->ville }}" id="" hidden>
                                </div>
                                <div class="w-full flex flex-col p-5">
                                    <div class="main_image_container w-full relative">
                                        <div class="hotel_images_container w-full overflow-auto">
                                            <div class="image_list flex w-full">
                                                @foreach ($hotel->image_hotels as $image)
                                                    <img class="images_item {{ $loop->first ? 'active' : 'hidden' }} rounded-t-[20px] px-1 w-full h-[250px]" src="{{ asset('storage/'.$image->image_path) }}" alt="">
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="left_arrow_right_arrow absolute top-1/2 -translate-y-1/2  w-full flex justify-between items-center">
                                            <div class="left border bg-gray-400 p-1 text-white cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="right  border bg-gray-400 p-1 text-white cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel_info  w-full p-2 flex flex-col gap-2">
                                        <div class="hotel_rating_note">
                                            <span class="bg-[#2431ac] text-[12px] text-white p-1 ">7.5</span>
                                            <span>Bien (152 avis)</span>
                                        </div>
                                        <div class="hotel_name ">
                                            <a href="#" class="flex flex-col">
                                                <span class="text-[18px] font-medium"> {{ $hotel->nom }} </span>
                                                <span class="text-[14px]">{{ $hotel->ville }}</span>
                                            </a>
                                        </div>
                                        <div class="hotel_details_link cursor-pointer w-[max-content]">
                                            <span class="text-[11px] text-[#13219e]">Détails de l'hotel ></span>
                                        </div>
                                        <div class="hotel_price flex justify-between items-center">
                                            <div>
                                                <span class="text-[20px] text-[#273add] font-medium " style="letter-spacing: 2px;">500€</span>
                                                <span class="text-[12px] font-bold">/ par nuit</span>
                                            </div>
                                            <span class="text-[14px] capitalize">taxe et frais compris</span>
                                        </div>
                                        @csrf
                                        <div class="hotel_btn_reserver w-full flex items-e">
                                            <button class="btn bg-blue-700 text-white py-3 px-2 rounded-[10px] flex justify-center items-center">Parcourir</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="module" src="{{ asset('js/hotels/hotels.js') }}"></script>

@endsection
