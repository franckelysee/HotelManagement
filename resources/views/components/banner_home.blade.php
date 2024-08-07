<div class="w-full py-5 ">
                <!-- Swiper -->
                    <swiper-container class="mySwiper " pagination="true" pagination-clickable="true" navigation="true" space-between="30"
                        centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                        <swiper-slide>
                            <div class="w-full  flex items-center justify-center">
                                <span class="w-full">
                                    <img src="{{ asset('images/banner1.png') }}" class="w-full h-[600px]" alt="">
                                </span>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="w-full  flex items-center justify-center">
                                <span class="w-full">
                                    <img src="{{ asset('images/banner2.png') }}" class="w-full h-[600px]" alt="">
                                </span>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="w-full  flex items-center justify-center">
                                <span class="w-full">
                                    <img src="{{ asset('images/banner3.png') }}" class="w-full h-[600px]" alt="">
                                </span>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="w-full  flex items-center justify-center">
                                <span class="w-full">
                                    <img src="{{ asset('images/banner4.png') }}" class="w-full h-[600px]" alt="">
                                </span>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="w-full  flex items-center justify-center">
                                <span class="w-full">
                                    <img src="{{ asset('images/banner5.png') }}" class="w-full h-[600px]" alt="">
                                </span>
                            </div>
                        </swiper-slide>
                        <div class="autoplay-progress" slot="container-end">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                        </div>
                    </swiper-container>

                    <!-- Swiper JS -->
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                        const progressCircle = document.querySelector(".autoplay-progress svg");
                        const progressContent = document.querySelector(".autoplay-progress span");

                        const swiperEl = document.querySelector("swiper-container");
                        swiperEl.addEventListener("autoplaytimeleft", (e) => {
                        const [swiper, time, progress] = e.detail;
                        progressCircle.style.setProperty("--progress", 1 - progress);
                        progressContent.textContent = `${Math.ceil(time / 2000)}s`;
                        });
                    </script>
            </div>
