<div class="drawer">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
    </div>
    <div class="drawer-side z-40">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="menu p-5">
            <div class="card w-80 h-[90vh] bg-base-100 shadow-xl">
                <div class="card-body max-h-28">
                    <div class="join items-center">
                        <img class="mask mask-squircle w-16" src="{{ asset('img/bsp-logo-png.png') }}" />
                        <a class="font-bold text-md capitalize cursor-pointer" href="#">Bakerie<br>Sumatera Plantations</a>
                    </div>
                </div>
                <hr class="border-none h-[.5px] bg-gradient-to-r from-base-100 via-base-300 to-base-100">
                <div class="card-body">
                    {{-- estate   --}}
                    <a href="{{ url('/estate') }}"
                        class="sidebar-button items-center flex font-bold {{ $active == 'estate' ? 'bg-primary' : '' }}">
                        <div class="ml-5 items-center flex text-sm">
                            <span class="material-symbols-outlined">
                                real_estate_agent
                            </span>
                            <span class="ml-3">
                                Estate
                            </span>
                        </div>
                    </a>
                    {{-- pupuk--}}
                    <a href="{{ url('/pupuk') }}"
                        class="sidebar-button items-center flex font-bold {{ $active == 'pupuk' ? 'bg-primary' : '' }}">
                        <div class="ml-5 items-center flex text-sm">
                            <span class="material-symbols-outlined">
                                warehouse
                            </span>
                            <span class="ml-3">
                                Pupuk
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        

    </div>
</div>