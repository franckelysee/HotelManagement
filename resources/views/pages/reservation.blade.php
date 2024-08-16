@extends('app')
@section('styles')

<link rel="stylesheet" href="{{ asset('css/hotelsearch.css') }}">

@endsection
@section('content')
    <div class="w-full">
        @include('layouts.navSearch')

        <div class="w-full">
            <div class="w-full py-5">
                <div class="hotel_imagebanner w-full">
                    <div class="image_container w-full flex gap-1 h-[300px] ">
                        <div class="main_image w-[50%] border">
                            <img class="w-full h-full" src="{{ asset('images/hotels/hotel2.png') }}" alt="">
                        </div>
                        <div class="additionnal_images flex flex-wrap w-[50%] gap-1 h-full  ">
                            <img class="w-[48%] h-[49%]" src="{{ asset('images/hotels/chambre2.png') }}" alt="">
                            <img class="w-[48%] h-[49%]" src="{{ asset('images/hotels/chambre3.png') }}" alt="">
                            <img class="w-[48%] h-[49%]" src="{{ asset('images/hotels/chambre4.png') }}" alt="">
                            <img class="w-[48%] h-[49%]" src="{{ asset('images/hotels/chambre5.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <div class="w-full">
                        <div class="menu_hotel_informations w-full border-b ">
                            <div class="w-[max-content] menu_list flex gap-3">
                                <a href="#presentation" class="menuItem active" data-id = "presentation">
                                    <span>Présentation</span>
                                </a>
                                <a href="#equipements" class="menuItem" data-id = "equipements">
                                    <span>Équipements</span>
                                </a>
                                <a href="#chambres" class="menuItem" data-id = "chambres">
                                    <span>Chambres</span>
                                </a>
                            </div>
                        </div>

                        <div class="w-full ">
                            <div class="hotels_info p-3 flex flex-col gap-3">
                                <div id="presentation" class="w-full flex flex-col gap-3 pt-20">
                                    <div class="w-full flex gap-1 text-[14px] items-center" >
                                        <span class="hotel_type_for_vip bg-black text-white  p-1 rounded-[5px]">VIP Access</span>
                                        <span class="hotel_type_hote"> Hôtel Professionnel</span>
                                    </div>
                                    <div class="w-full">
                                        <div class="name text-[34px] font-serif uppercase font-bold">Revier Hotel - Dubai</div>
                                        <div class="stars flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#141414" class="size-4">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#141414" class="size-4">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#141414" class="size-4">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#141414" class="size-4">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="descript text-[#6f6f6f]">
                                            <span>Hôtel chic avec une piscine extérieure - Canal de Dubaï à 0,5 km</span>
                                        </div>
                                        <div class="avis flex items-center gap-2">
                                            <span class="avis_number bg-[#2431ac] text-white p-1 rounded-[5px]">8.8</span>
                                            <span class="mention_avis text-[rgb(16,76,151)] ">Excellent</span>
                                        </div>
                                        <div class="w-full">
                                            <div class="show_avis">
                                                <span class="text-[rgb(16,76,151)] text-[13px] hover:border-b hover:border-[rgb(16,76,151)] hover:cursor-pointer">Afficher les (10) avis ></span>
                                                <div class="avisModal">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="equipements" class="w-full flex flex-col gap-3 pt-20">
                                    <span class="title font-medium text-[18px]">Équipements populaires de l'hotel</span>
                                    <div class="w-full flex flex-col gap-2">
                                        <div class="liste_equipements w-[50%] grid grid-cols-2 gap-3 text-[14px]">

                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="room-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="room-description">Chambres communicantes disponibles</desc>
                                                    <path fill-rule="evenodd" d="M20 19h-1V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v15H4a1 1 0 0 0-1 1 1 1 0 0 0 1 1h9a1 1 0 0 0 1-1V6h3v14a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1 1 1 0 0 0-1-1zm-8-6h-2v-2h2v2z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Chambres communicantes disponibles</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="local_bar-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_bar-description">Bar</desc>
                                                    <path fill-rule="evenodd" d="M21 4.45c0-.8-.65-1.45-1.45-1.45H4.45a1.45 1.45 0 0 0-1.08 2.41L11 14v5H7a1 1 0 0 0-1 1 1 1 0 0 0 1 1h10a1 1 0 0 0 1-1 1 1 0 0 0-1-1h-4v-5l7.63-8.59c.24-.26.37-.61.37-.96zM7.43 7 5.66 5h12.69l-1.78 2H7.43z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Bar</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="local_laundry_service-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_laundry_service-description">Laverie</desc>
                                                    <path fill-rule="evenodd" d="M9.55 16.45c-.2.2-.21.55.02.73a4.01 4.01 0 0 0 5.61-5.61c-.18-.23-.53-.23-.73-.02l-4.9 4.9zM18 2.01 6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4c0-1.11-.89-1.99-2-1.99zM10 4a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zM7 4a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zm5 16a6 6 0 1 1 .01-12.01A6 6 0 0 1 12 20z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Laverie</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6"
                                                    aria-describedby="local_convenience_store-description" role="img"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_convenience_store-description">Réception 24&nbsp;h/24</desc>
                                                    <path fill-rule="evenodd" d="M19 7V4H5v3H2v13h8v-4h4v4h8V7h-3zM9 10v1h2v1H8V9h2V8H8V7h3v3H9zm6 2h1V7h-1v2h-1V7h-1v3h2v2z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Réception 24 h/24</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6"
                                                        aria-describedby="pool-description" role="img" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="pool-description">Piscine</desc>
                                                    <path fill-rule="evenodd" d="M6.11 5.52A1.24 1.24 0 0 1 5 4.31v-.1c0-.7.6-1.27 1.3-1.2 1.74.14 2.92.68 4.18 1.95l6.42 6.42-.41.23c-.37.24-.6.37-1.15.37-.55 0-.78-.14-1.15-.36a3.82 3.82 0 0 0-2.18-.65c-1.11 0-1.73.37-2.19.64a1.8 1.8 0 0 1-1.15.37 1.8 1.8 0 0 1-1.15-.36 5.42 5.42 0 0 0-.77-.4L10 7.97l-1-1a4.53 4.53 0 0 0-2.89-1.45zm15.24 13.39c.38.13.65.45.65.86v.12a.97.97 0 0 1-1.3.9c-.37-.12-.65-.3-.88-.43-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.07.64-2.18.64a3.8 3.8 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.08.64-2.19.64a3.8 3.8 0 0 1-2.18-.64c-.37-.23-.6-.36-1.15-.36-.55 0-.78.13-1.15.35-.24.14-.52.3-.89.44a.97.97 0 0 1-1.3-.91v-.12c0-.4.27-.73.65-.86.17-.06.32-.15.5-.27.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.23.59.36 1.15.36.56 0 .78-.13 1.15-.36.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.18.12.33.21.5.27zM3.11 16.34A.88.88 0 0 1 2 15.48v-.23c0-.4.27-.73.65-.86.17-.07.32-.16.5-.27a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.74.37 2.19.64.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.19-.64c1.1 0 1.73.37 2.18.64.19.11.34.2.5.26.38.14.65.46.65.86v.13a.98.98 0 0 1-1.31.9 4.75 4.75 0 0 1-.85-.42c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.08.64-2.19.64a3.83 3.83 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64a3.82 3.82 0 0 1-2.18-.64c-.38-.22-.6-.36-1.16-.36-.55 0-.78.13-1.15.36-.28.16-.62.36-1.09.49zM16.5 8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Piscine</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-3">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="fitness_center-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="fitness_center-description">Salle de sport</desc>
                                                    <path fill-rule="evenodd" d="m20.94 14.98.75-.75a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-2.98 2.99-8.95-8.95 2.99-2.98a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-.75.75-.75-.75c-.42-.41-1.08-.41-1.49 0L5.3 3.8l-.75-.76c-.42-.4-1.08-.4-1.5 0-.4.42-.4 1.08 0 1.5l.76.75-1.5 1.5a1.04 1.04 0 0 0 0 1.46l.76.75-.75.77a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l2.98-2.99 8.95 8.95-2.99 2.98a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l.75-.75.76.75a1.04 1.04 0 0 0 1.47 0l1.49-1.49.75.75c.42.41 1.08.41 1.5 0 .4-.41.4-1.07 0-1.49l-.76-.75 1.5-1.5a1.04 1.04 0 0 0 0-1.46l-.75-.77z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Salle de sport</span>
                                            </div>
                                        </div>

                                        <div class="w-full">
                                            <div class="services_equipements">
                                                <span class="text-[rgb(16,76,151)] text-[14px] hover:border-b hover:border-[rgb(16,76,151)] hover:cursor-pointer">
                                                    Afficher tous les services et equipements  >
                                                </span>
                                                <div class="ServiceEquipementModal">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="chambres" class="w-full flex flex-col gap-3 pt-20">
                                    <div class="w-full">
                                        <span class="text-[24px] font-medium tracking-[0.5px]">Choisissez votre chambre</span>
                                    </div>
                                    <div class="w-full py-3">
                                        @include('components/start_end_date')
                                    </div>
                                    <div class="filter_rooms w-full">
                                        <div class="filter_room_list flex gap-2">
                                            <div class="filterItem filter_roomItem active">
                                                <span>Toutes les chambres</span>
                                            </div>
                                            <div class="filterItem filter_roomItem">
                                                <span>1 lit</span>
                                            </div>
                                            <div class="filterItem filter_roomItem">
                                                <span>2 lits</span>
                                            </div>
                                            <div class="filterItem filter_roomItem">
                                                <span>3+ lits</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full  flex flex-wrap">
                                        @for ($i = 0; $i < 5; $i++)
                                        <div class="hotel_item w-[33%]  flex flex-col p-5 " >
                                            <div class="w-full border rounded-[20px] flex flex-col h-full">
                                                <div class="images_container w-full  " style="flex: 1">
                                                    <div class="images_list flex ">
                                                        <div class="image_item w-full">
                                                            <img class="rounded-t-[20px] w-full" src="{{ asset('images/hotels/chambre' . (string)($i+1) .'.png') }}" alt="">
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
                                                <div class="hotel_info  w-full p-2 flex flex-col gap-2 " style="flex: auto">
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
                                                    <div class="liste_equipement_service w-full py-3 text-[13px] text-[#2958f1e5] cursor-pointer">
                                                        <span>Détails sur la chambres   > </span>
                                                        <div id="liste_equipement_rooModal">

                                                        </div>
                                                    </div>
                                                    <div class="hotel_details_link cursor-pointer w-[max-content] flex flex-col">
                                                        @if ($i%2 == 0)
                                                        <span class="text-[14px] text-[#13661e]">
                                                            Entierement Remboursable
                                                        </span>
                                                        <span class="text-[14px] ">Avant le {{ date('d-m-Y') }}</span>
                                                        @else
                                                        <span class="text-[14px] text-[#831717]">
                                                            Non Remboursable
                                                        </span>
                                                        @endif
                                                    </div>
                                                    <div class="hotel_price flex justify-between items-center">
                                                        <div>
                                                            <span class="text-[20px] text-[#273add] font-medium " style="letter-spacing: 2px;">500€</span>
                                                            <span class="text-[12px] font-bold">/ par nuit</span>
                                                        </div>
                                                        <span class="text-[14px] capitalize">taxe et frais compris</span>
                                                    </div>

                                                    <div class="hotel_btn_reserver  flex w-full items-end" style="flex: 1">
                                                        <a href="{{ route('payement', ['hotid' => $hotelid]) }}"
                                                            class="btn w-full bg-blue-700 text-white py-3 px-2 rounded-[10px] flex justify-center items-center">
                                                            reserver
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
                </div>
            </div>
        </div>
    </div>
@endsection
