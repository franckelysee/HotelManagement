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
                            <div class="hotel_item w-[33%] flex flex-col p-5" >
                                <div class="images_container w-full  ">
                                    <div class="images_list flex ">
                                        <div class="image_item ">
                                            <img class="rounded-t-[20px]" src="{{ asset('images/hotels/hotel1.png') }}" alt="">
                                        </div>
                                        <div class="image_item hidden">
                                            <img src="{{ asset('images/hotels/hotel1.png') }}" alt="">
                                        </div>
                                        <div class="image_item hidden">
                                            <img src="{{ asset('images/hotels/hotel1.png') }}" alt="">
                                        </div>
                                        <div class="image_item hidden">
                                            <img src="{{ asset('images/hotels/hotel1.png') }}" alt="">
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

                                    <div class="hotel_btn_reserver">
                                        <a href="{{ route('hotel-search', ['start_date' => $start_date, 'end_date' => $end_date, 'destination' => $destination,'adults' => $adults, 'children' => $children, 'regionId' => $regionId]) }}"
                                            class="btn bg-blue-700 text-white py-3 px-2 rounded-[10px] flex justify-center items-center">
                                            Parcourir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
