<div class="header_container w-full border shadow bg-white">
    <div class="header_content  py-5 px-2 ">
        <div class="w-full flex justify-between items-center">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <span class="text-[#FF2D20] uppercase font-serif text-[24px]">Hotels</span>
                </a>
            </div>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            <div class="nav-menu">
                <div class="menulist_container w-full">
                    <div class="menuItem">
                        <a href="#" class="hover:text-[#312fa8]">
                            <span>Connexion</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

