<div class="drawer">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
    </div>
    <div class="drawer-side">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="menu p-5">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="join items-center">
                        <img class="mask mask-squircle w-16" src="{{ asset('img/bsp-logo-png.png') }}" />
                        <a class="font-bold text-lg capitalize cursor-pointer" href="#">Bakerie Sumatera Plantations</a>
                    </div>
                </div>
                <hr class="border-none h-[.5px] bg-gradient-to-r from-base-100 via-base-300 to-base-100">
                <div class="card-body">
                    <div class="btn-group">
                        <button class="btn btn-active">Button</button>
                        <button class="btn">Button</button>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul> --}}
    </div>
</div>