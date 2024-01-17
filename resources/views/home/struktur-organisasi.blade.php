<!-- component -->
<div class="flex flex-col justify-center items-center my-5 card glass py-3 px-4 ">
    <h1 class="text-2xl ">Struktur Organisasi</h1>
    <h2 class="text-3xl">BSP Kabupaten Asahan</h2>
    <div class="container mx-auto text-center scale-[55%]">
        <div class="items-center justify-center flex">
            <div class="text-center">
                <div class="flex flex-col justify-center items-center">

                    <div class="text-gray-600">
                        <p class="font-bold">GM Sumut 1</p>
                        <p>Ahmad Nelson Samosir</p>
                    </div>
                </div>
                <ul class="flex flex-row mt-10 justify-center">
                    <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>
                    <li class="relative p-6">
                        {{-- <div class="border-t-2 absolute h-8 border-gray-400 top-0" style="left: 50%; right: 0px;"></div> --}}
                        <div class="relative flex justify-center">
                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                            <div class="text-center">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="text-gray-600">
                                        <p class="font-bold">AM Sumut 1</p>
                                        <p>Mesdy</p>
                                    </div>
                                </div>
                                <ul class="flex flex-row mt-10 justify-center">
                                    <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>
                                    @include('home.struktur-organisasi.Infrastructure-workshop')
                                    @include('home.struktur-organisasi.HumanResourece')
                                    @include('home.struktur-organisasi.QHSE')
                                    @include('home.struktur-organisasi.security')
                                    @include('home.struktur-organisasi.ThirdPartyPurchase')

                                    <li class="relative p-6">
                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                            style="left: 0px; right: 0px;"></div>
                                        <div class="relative flex justify-center">
                                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                            </div>
                                            <div class="text-center">
                                                <div class="flex flex-col justify-center items-center">
                                                </div>
                                                <ul class="flex flex-row mt-10 justify-center">
                                                    <div class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                    </div>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 50%; right: 0px;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="flex flex-col justify-center items-center">
                                                                    <div class="text-gray-600">
                                                                        <p class="font-bold">Procurement
                                                                        </p>
                                                                        <p>Procurement Officer</p>
                                                                        <p class="font-semibold">Randang Astono</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 0px; right: 50%;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="flex flex-col justify-center items-center">
                                                                    <div class="text-gray-600">
                                                                        <p class="font-bold">Estate Data
                                                                        </p>
                                                                        <p>Estate Data Officer</p>
                                                                        <p class="font-semibold">Ginta Marlina</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @include('home.struktur-organisasi.FinanceandAccounting')

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
