@extends('app')
@section('styles')

<link rel="stylesheet" href="{{ asset('css/hotelsearch.css') }}">

@endsection
@section('content')

<div class="w-full">
    <div class="w-full">
        @include('layouts.navSearch')
    </div>
    <div class="w-full py-5 flex gap-8 relative">
        <aside class="w-[20%]">
            <div class="w-full sticky  top-[10%]">
                <div class="filters w-full flex flex-col gap-3">
                    <h1 class="font-bold text-[20px] ">Filtrer par</h1>
                    <div class="filterscontainer w-full flex flex-col gap-3">
                        <div class="filterItem">
                            <span class="filterTitle"><h2>Marque d'hotels</h2></span>
                            <div class="filterListModal">

                            </div>
                        </div>

                        <div class="filterItem">
                            <span class="filterTitle"><h2>Prix</h2></span>
                            <div class="filterListModal">

                            </div>
                        </div>

                        <div class="filterItem">
                            <span class="filterTitle w-[max-content]"><h2>Services et installations</h2></span>
                            <div class="filterListModal">

                            </div>
                        </div>

                        <div class="filterItem">
                            <span class="filterTitle"><h2>Nombre d'étoiles</h2></span>
                            <div class="filterListModal">

                            </div>
                        </div>

                        <div class="filterItem">
                            <span class="filterTitle"><h2>Tous les filtres</h2></span>
                            <div class="filterListModal">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="search_contain w-full ">
            <div class="w-full  py-5 px-3  flex  flex-col gap-3">

                <div class="sort_by w-full  bg-white sticky top-[7%]">
                    <div class="w-full">
                        <span class="font-medium text-[15px]">Trier par</span>
                        <div class="w-full">
                            <select name="" id="">
                                <option value="" >Select</option>
                                <option value="">Distance</option>
                                <option value="">Prix (croissant)</option>
                                <option value="">Prix (décroissant)</option>
                                <option value="">Nombre d'etoiles</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="w-full  flex flex-wrap">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="hotel_item w-[33%]  flex flex-col p-5" >
                        <div class="w-full border rounded-[20px]">
                            <div class="images_container w-full  ">
                                <div class="images_list flex ">
                                    <div class="image_item ">
                                        <img class="rounded-t-[20px]" src="{{ asset('images/hotels/hotel' . (string)($i+1) .'.png') }}" alt="">
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
                                        <span class="text-[18px] font-medium">Dormero Hotel Frankfurt Messe </span>
                                        <span class="text-[14px]">Francfort</span>
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
                                    <a href="{{ route('reservation', ['hotid' => $hotelid]) }}"
                                        class="btn bg-blue-700 text-white py-3 px-2 rounded-[10px] flex justify-center items-center">
                                        reserver une chambre
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
