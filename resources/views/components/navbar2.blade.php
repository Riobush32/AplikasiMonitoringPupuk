
    <div class="navbar bg-base-100 shadow-lg w-[98vw] rounded-lg mx-auto z-30">
        <div class="flex-none">
            <label for="my-drawer-4" class="btn btn-square btn-ghost drawer-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>
        </div>
        <div class="flex-1 hidden md:flex ml-9">
            <img class="mask mask-squircle w-12" src="{{ asset('img/bsp-logo-png.png') }}" />
            <a class="btn btn-ghost normal-case text-xl ">Bakerie Sumatera Plantations</a>
        </div>
        <div class="flex-1 md:hidden ">
                    <img class="mask mask-squircle w-12" src="{{ asset('img/bsp-logo-png.png') }}" />
                    <a class="btn btn-ghost normal-case text-xl md:hidden">BSP</a>
        </div>
        
        <div class="dropdown dropdown-bottom dropdown-end">
            <div tabindex="12" role="button" class="btn btn-sm btn-ghost m-1">
                <span class="material-symbols-outlined">
                    burst_mode
                </span>
            </div>
                <ul tabindex="12" class="dropdown-content p-2 shadow-2xl bg-base-300 rounded-box w-52 z-40">
                    <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                            aria-label="cmyk" value="cmyk" data-set-theme="cmyk" data-act-class="ACTIVECLASS"/></li>
                    <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                            aria-label="cupcake" value="cupcake" data-set-theme="cupcake" data-act-class="ACTIVECLASS"/></li>
                    <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                            aria-label="emerald" value="emerald" data-set-theme="emerald" data-act-class="ACTIVECLASS"/></li>
                    <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                            aria-label="garden" value="garden" data-set-theme="garden" data-act-class="ACTIVECLASS"/></li>
                    <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                            aria-label="lemonade" value="lemonade" data-set-theme="lemonade" data-act-class="ACTIVECLASS"/></li>
                </ul>
        </div>
        
    </div>



