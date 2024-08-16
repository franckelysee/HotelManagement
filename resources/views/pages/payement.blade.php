@extends('app')


@section('content')
<div class="w-full bg-white">
    <div class="hotel_name px-8 py-2">
        <div class="name text-[34px] font-serif uppercase font-bold">Revier Hotel - Dubai</div>
    </div>
    <div class="w-full flex">
        <section class="content_information_steps py-2 w-[70%]">
            <form action="" method="get" class="flex flex-col gap-5">
                @csrf
                <div class="steps_container">
                    <div class="w-full flex flex-col gap-3">
                        <div class="step_item border rounded-[8px]">
                            <div class="step ">
                                <div class="step_title w-full flex items-center gap-2 border-b-2  py-2 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-[22px] font-semibold"> Étape 1 - Vos coordonnées</span>
                                </div>
                                <div class="step_content w-full p-5">
                                    <span class="text-[12px] text-gray-600"><samp class="text-red-700">*</samp> champs obligatoires</span>
                                    <div class="personal_infos flex flex-col gap-2">
                                        <div class="info flex flex-col gap-3">
                                            <label for="prenom" class="label font-bold">Prénom <span class="text-red-700">*</span></label>
                                            <input type="text" name="prenom" id="prenom" class="input " placeholder="John">
                                        </div>

                                        <div class="info flex flex-col gap-3">
                                            <label for="nom" class="label font-bold">Nom <span class="text-red-700 ">*</span></label>
                                            <input type="text" name="nom" id="nom" class="input " placeholder="Doe">
                                        </div>

                                        <div class="info flex flex-col gap-3">
                                            <label for="email" class="label font-bold">Adresse e-mail <span class="text-red-700">*</span></label>
                                            <input type="email" name="email" id="email" class="input " placeholder="kCfYH@example.com">
                                        </div>

                                        <div class="info flex flex-col gap-3">
                                            <label for="phone" class="label font-bold">Numéro de mobile <span class="text-red-700">*</span></label>
                                            <input type="text" name="phone" id="phone" class="input " placeholder="06 00 00 00 00">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="step_item border rounded-[8px]">
                            <div class="step ">
                                <div class="step_title w-full flex items-center gap-2 border-b-2  py-2 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
                                        <path fill-rule="evenodd" d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="text-[22px] font-semibold"> Étape 2 - Informations sur l’hébergement</span>
                                </div>
                                <div class="step_content w-full p-5">
                                    <div class="liste_equipements w-[50%] flex flex-col  gap-3 text-[14px]">
                                        <div class="w-full">
                                            <span class="font-bold text-[20px]">Services disponibles</span>
                                        </div>
                                        <div class="w-full flex gap-3">
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="room-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="room-description">Chambres communicantes disponibles</desc>
                                                    <path fill-rule="evenodd" d="M20 19h-1V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v15H4a1 1 0 0 0-1 1 1 1 0 0 0 1 1h9a1 1 0 0 0 1-1V6h3v14a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1 1 1 0 0 0-1-1zm-8-6h-2v-2h2v2z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Chambres communicantes disponibles</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="local_bar-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_bar-description">Bar</desc>
                                                    <path fill-rule="evenodd" d="M21 4.45c0-.8-.65-1.45-1.45-1.45H4.45a1.45 1.45 0 0 0-1.08 2.41L11 14v5H7a1 1 0 0 0-1 1 1 1 0 0 0 1 1h10a1 1 0 0 0 1-1 1 1 0 0 0-1-1h-4v-5l7.63-8.59c.24-.26.37-.61.37-.96zM7.43 7 5.66 5h12.69l-1.78 2H7.43z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Bar</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="local_laundry_service-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_laundry_service-description">Laverie</desc>
                                                    <path fill-rule="evenodd" d="M9.55 16.45c-.2.2-.21.55.02.73a4.01 4.01 0 0 0 5.61-5.61c-.18-.23-.53-.23-.73-.02l-4.9 4.9zM18 2.01 6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4c0-1.11-.89-1.99-2-1.99zM10 4a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zM7 4a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zm5 16a6 6 0 1 1 .01-12.01A6 6 0 0 1 12 20z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Laverie</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6"
                                                    aria-describedby="local_convenience_store-description" role="img"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="local_convenience_store-description">Réception 24&nbsp;h/24</desc>
                                                    <path fill-rule="evenodd" d="M19 7V4H5v3H2v13h8v-4h4v4h8V7h-3zM9 10v1h2v1H8V9h2V8H8V7h3v3H9zm6 2h1V7h-1v2h-1V7h-1v3h2v2z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Réception 24 h/24</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6"
                                                        aria-describedby="pool-description" role="img" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="pool-description">Piscine</desc>
                                                    <path fill-rule="evenodd" d="M6.11 5.52A1.24 1.24 0 0 1 5 4.31v-.1c0-.7.6-1.27 1.3-1.2 1.74.14 2.92.68 4.18 1.95l6.42 6.42-.41.23c-.37.24-.6.37-1.15.37-.55 0-.78-.14-1.15-.36a3.82 3.82 0 0 0-2.18-.65c-1.11 0-1.73.37-2.19.64a1.8 1.8 0 0 1-1.15.37 1.8 1.8 0 0 1-1.15-.36 5.42 5.42 0 0 0-.77-.4L10 7.97l-1-1a4.53 4.53 0 0 0-2.89-1.45zm15.24 13.39c.38.13.65.45.65.86v.12a.97.97 0 0 1-1.3.9c-.37-.12-.65-.3-.88-.43-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.07.64-2.18.64a3.8 3.8 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.08.64-2.19.64a3.8 3.8 0 0 1-2.18-.64c-.37-.23-.6-.36-1.15-.36-.55 0-.78.13-1.15.35-.24.14-.52.3-.89.44a.97.97 0 0 1-1.3-.91v-.12c0-.4.27-.73.65-.86.17-.06.32-.15.5-.27.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.23.59.36 1.15.36.56 0 .78-.13 1.15-.36.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.18.12.33.21.5.27zM3.11 16.34A.88.88 0 0 1 2 15.48v-.23c0-.4.27-.73.65-.86.17-.07.32-.16.5-.27a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.74.37 2.19.64.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.19-.64c1.1 0 1.73.37 2.18.64.19.11.34.2.5.26.38.14.65.46.65.86v.13a.98.98 0 0 1-1.31.9 4.75 4.75 0 0 1-.85-.42c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.08.64-2.19.64a3.83 3.83 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64a3.82 3.82 0 0 1-2.18-.64c-.38-.22-.6-.36-1.16-.36-.55 0-.78.13-1.15.36-.28.16-.62.36-1.09.49zM16.5 8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Piscine</span>
                                            </div>
                                            <div class="equipement_item flex items-center gap-1">
                                                <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="fitness_center-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <desc id="fitness_center-description">Salle de sport</desc>
                                                    <path fill-rule="evenodd" d="m20.94 14.98.75-.75a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-2.98 2.99-8.95-8.95 2.99-2.98a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-.75.75-.75-.75c-.42-.41-1.08-.41-1.49 0L5.3 3.8l-.75-.76c-.42-.4-1.08-.4-1.5 0-.4.42-.4 1.08 0 1.5l.76.75-1.5 1.5a1.04 1.04 0 0 0 0 1.46l.76.75-.75.77a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l2.98-2.99 8.95 8.95-2.99 2.98a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l.75-.75.76.75a1.04 1.04 0 0 0 1.47 0l1.49-1.49.75.75c.42.41 1.08.41 1.5 0 .4-.41.4-1.07 0-1.49l-.76-.75 1.5-1.5a1.04 1.04 0 0 0 0-1.46l-.75-.77z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="w-[max-content]">Salle de sport</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <p class="text-[18px] font-medium">Chambre De Luxe</p>
                                        <div class="w-full p-2 border rounded-[5px] border-gray-500 bg-gray-200 flex flex-col gap-3">
                                            <span class="font-medium">Compris dans votre chambre:</span>
                                            <div class="flex  gap-4">
                                                <div class="equipement_item flex items-center gap-1 text-green-500">
                                                    <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6"
                                                            aria-describedby="pool-description" role="img" viewBox="0 0 24 24" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <desc id="pool-description">Piscine</desc>
                                                        <path fill-rule="evenodd" d="M6.11 5.52A1.24 1.24 0 0 1 5 4.31v-.1c0-.7.6-1.27 1.3-1.2 1.74.14 2.92.68 4.18 1.95l6.42 6.42-.41.23c-.37.24-.6.37-1.15.37-.55 0-.78-.14-1.15-.36a3.82 3.82 0 0 0-2.18-.65c-1.11 0-1.73.37-2.19.64a1.8 1.8 0 0 1-1.15.37 1.8 1.8 0 0 1-1.15-.36 5.42 5.42 0 0 0-.77-.4L10 7.97l-1-1a4.53 4.53 0 0 0-2.89-1.45zm15.24 13.39c.38.13.65.45.65.86v.12a.97.97 0 0 1-1.3.9c-.37-.12-.65-.3-.88-.43-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.07.64-2.18.64a3.8 3.8 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.46.27-1.08.64-2.19.64a3.8 3.8 0 0 1-2.18-.64c-.37-.23-.6-.36-1.15-.36-.55 0-.78.13-1.15.35-.24.14-.52.3-.89.44a.97.97 0 0 1-1.3-.91v-.12c0-.4.27-.73.65-.86.17-.06.32-.15.5-.27.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.23.59.36 1.15.36.56 0 .78-.13 1.15-.36.46-.27 1.08-.64 2.19-.64 1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.18.12.33.21.5.27zM3.11 16.34A.88.88 0 0 1 2 15.48v-.23c0-.4.27-.73.65-.86.17-.07.32-.16.5-.27a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.74.37 2.19.64.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.18-.64c1.11 0 1.73.37 2.18.64.37.22.6.36 1.15.36.55 0 .78-.13 1.15-.36a3.82 3.82 0 0 1 2.19-.64c1.1 0 1.73.37 2.18.64.19.11.34.2.5.26.38.14.65.46.65.86v.13a.98.98 0 0 1-1.31.9 4.75 4.75 0 0 1-.85-.42c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.08.64-2.19.64a3.83 3.83 0 0 1-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64a3.82 3.82 0 0 1-2.18-.64c-.38-.22-.6-.36-1.16-.36-.55 0-.78.13-1.15.36-.28.16-.62.36-1.09.49zM16.5 8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="w-[max-content]">Piscine</span>
                                                </div>
                                                <div class="equipement_item flex items-center gap-1">
                                                    <svg class="uitk-icon uitk-spacing uitk-spacing-padding-inlineend-two uitk-layout-flex-item size-6" aria-describedby="fitness_center-description" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <desc id="fitness_center-description">Salle de sport</desc>
                                                        <path fill-rule="evenodd" d="m20.94 14.98.75-.75a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-2.98 2.99-8.95-8.95 2.99-2.98a1.04 1.04 0 0 0 0-1.47l-.02-.02a1.04 1.04 0 0 0-1.47 0l-.75.75-.75-.75c-.42-.41-1.08-.41-1.49 0L5.3 3.8l-.75-.76c-.42-.4-1.08-.4-1.5 0-.4.42-.4 1.08 0 1.5l.76.75-1.5 1.5a1.04 1.04 0 0 0 0 1.46l.76.75-.75.77a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l2.98-2.99 8.95 8.95-2.99 2.98a1.04 1.04 0 0 0 0 1.47l.02.02a1.04 1.04 0 0 0 1.47 0l.75-.75.76.75a1.04 1.04 0 0 0 1.47 0l1.49-1.49.75.75c.42.41 1.08.41 1.5 0 .4-.41.4-1.07 0-1.49l-.76-.75 1.5-1.5a1.04 1.04 0 0 0 0-1.46l-.75-.77z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="w-[max-content]">Salle de sport</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step_item border rounded-[8px]">
                            <div class="step ">
                                <div class="step_title w-full flex items-center gap-2 border-b-2  py-2 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="text-[22px] font-semibold">Étape 3 - Détails de paiement</span>
                                </div>
                                <div class="step_content w-full p-5 flex flex-col gap-5">
                                    <div class="payement_methods flex flex-col ">
                                        <div data-id="card_bank" class="payement_method flex gap-3 items-center border p-3">
                                            <input type="radio" name="card" id="visa">
                                            <img  src="{{ asset('images/credit_card/visa.png') }}" class="w-[50px] h-[30px]" alt="">
                                            <label for="visa">Carte de Crédit</label>
                                        </div>

                                        <div data-id="paypal" class="payement_method flex gap-3 items-center border p-3">
                                            <input type="radio" name="card" id="paypal">
                                            <img src="{{ asset('images/credit_card/paypal.png') }}" class="w-[50px] h-[30px]" alt="">
                                            <label for="paypal">Paypal</label>
                                        </div>
                                    </div>

                                    <div class="w-full flex items-center">
                                        <div class="w-[50%]">
                                            <div id="card_bank">
                                                <p class="flex gap-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#31c48d" class="size-6">
                                                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                                    </svg>
                                                    <label for="">Nous ne facturons <strong>jamais</strong> de frais de carte</label>
                                                </p>
                                                <div class="step_content w-full p-5">
                                                    <span class="text-[12px] text-gray-600"><samp class="text-red-700">*</samp> champs obligatoires</span>
                                                    <div class="personal_infos flex flex-col gap-2">
                                                        <div class="info flex flex-col gap-3">
                                                            <label for="prenom" class="label font-bold">Prénom <span class="text-red-700">*</span></label>
                                                            <input type="text" name="prenom" id="prenom" class="input " placeholder="John">
                                                        </div>

                                                        <div class="info flex flex-col gap-3">
                                                            <label for="nom" class="label font-bold">Nom <span class="text-red-700 ">*</span></label>
                                                            <input type="text" name="nom" id="nom" class="input " placeholder="Doe">
                                                        </div>

                                                        <div class="info flex flex-col gap-3">
                                                            <label for="card_number" class="label font-bold">Numéro de carte<span class="text-red-700">*</span></label>
                                                            <input type="text" name="card_number" id="card_number" class="input " placeholder="0000 0000 0000 0000">
                                                        </div>

                                                        <div class="info flex flex-col gap-3">
                                                            <label for="phone" class="label font-bold">Date d'expiration<span class="text-red-700">*</span></label>
                                                            <div class="w-full">
                                                                <input type="text" class="w-[55px]" name="expire_month" id="expire_month" placeholder="MM">
                                                                <strong>/</strong>
                                                                <input type="text" class="w-[55px]" name="expire_year" id="expire_year" placeholder="AA">
                                                            </div>
                                                        </div>
                                                        <div class="info flex flex-col gap-3">
                                                            <label for="cryptogramme" class="label font-bold ">Cryptogramme<span class="text-red-700">*</span></label>
                                                            <input type="number" class="w-[100px]" max="999" min="000" name="cryptogramme"  id="cryptogramme" class="input " placeholder="000">
                                                        </div>

                                                        <div class="info flex  gap-3 items-center">
                                                            <input type="checkbox"  checked  name="register_card_info"  id="register_card_info" class="input " placeholder="000">
                                                            <label for="register_card_info" class="label font-bold ">Enregistrer cette carte<span class="text-red-700">*</span></label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div id="paypal" class="px-5 flex gap-2 items-center text-[14px]">
                                                <img class="w-[100px] border" src="{{ asset("images/credit_card/paypal.png") }}" alt="" srcset="">
                                                <span>Vous serez redirigé vers le site sécurisé de PayPal pour finaliser votre payement.</span>
                                            </div>
                                        </div>
                                        <div class="w-[50%] px-5 flex flex-col gap-3">
                                            <span class="font-bold tex-[20px]">Nous acceptons les modes de paiement suivants</span>
                                            <div class=" flex gap-1">
                                                <img class="w-[50px] border" src="{{ asset("images/credit_card/visa.png") }}" alt="" srcset="">
                                                <img class="w-[50px] border" src="{{ asset("images/credit_card/paypal.png") }}" alt="" srcset="">
                                                <img class="w-[50px] border" src="{{ asset("images/credit_card/paypal.png") }}" alt="" srcset="">
                                            </div>
                                            <div class="w-full p-3 border rounded-[5px] border-gray-400">
                                                <span class="font-bold tex-[20px] ">Comptez sur nous</span>
                                                <div class="flex py-2 items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#31c48d" class="size-6">
                                                        <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Nous utilisons une transmission sécurisée</span>
                                                </div>
                                                <div class="flex py-2 items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#31c48d" class="size-6">
                                                        <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Nous protégeons vos informations personnelles</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Validation du payement-->
                <div class="confirmation_zone w-full border rounded-[8px] p-5">
                    <div class="w-full py-3 border-b border-gray-500 text-[15px] flex flex-col gap-2">
                        <div class="date_arrivee flex gap-5">
                            <span > Arrivée</span>
                            <span class="font-bold"> Vendredi 23 août 2024 <samp class="font-normal">(15 h 00)</samp></span>
                        </div>
                        <div class="date_depart flex gap-5">
                            <span > Départ</span>
                            <span class="font-bold">dimanche 25 août 2024<samp class="font-normal">(12 h 00)</samp></span>
                        </div>
                        <div class="nombre_jours border rounded-[5px] border-gray-300 w-[max-content] ">
                            <span class="p-1"> 2 nuits, 1 chambres</samp></span>
                        </div>
                    </div>
                    <div class="py-5 w-full">
                        <strong> Conditions de réservation </strong>
                        <p class="text-[14px]"> En cliquant sur « Confirmer et payer maintenant », vous confirmez avoir lu et accepté nos conditions d’utilisation , la politique de confidentialité et les conseils aux voyageurs du ministère des Affaires étrangères .</p>
                        <div class="w-full flex justify-end ">
                            <button type="submit" class="p-2 flex justify-end gap-2 rounded-[5px] font-bold text-white bg-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                </svg>
                                <span > Confirmer et payer maintenant</span>
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </section>

        <section class="hotel_confirmed_info p-3 ">
            <div class="w-full px-3 py-2 border-2 ">
                <div class="name text-[34px] font-serif uppercase font-bold">Comming Soon</div>
            </div>

        </section>
    </div>
</div>
@endsection
