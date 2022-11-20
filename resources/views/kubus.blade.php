<x-kalkulasi-layout>
<div class="bg-blue-200 flex">
    <div class="flex-col flex ml-auto mr-auto items-center w-full lg:w-2/3 md:w-3/5">
        <h1 class="font-bold text-2xl my-10 text-white"> Perhitungan luas kubus </h1>
        <form action="{{route('kalkulasi')}}" class="mt-2 flex flex-col lg:w-1/2 w-8/12" method="get">
            <div
                class="flex flex-wrap items-stretch w-full mb-4 relative h-15 bg-white items-center rounded mb-6 pr-10">
                <div class="flex -mr-px justify-center w-15 p-4">
                    <span
                        class="flex items-center leading-normal bg-white px-3 border-0 rounded rounded-r-none text-2xl text-gray-600">
                        <i class="fas fa-user-circle"></i>
                    </span>
                </div>
                <input type="text"
                    class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border-0 h-10 border-grey-light rounded rounded-l-none px-3 self-center relative  font-roboto text-xl outline-none"
                    placeholder="Panjang" name="panjang" />
            </div>
            <div class="flex flex-wrap items-stretch w-full relative h-15 bg-white items-center rounded mb-4">
                <div class="flex -mr-px">
                    <span
                        class="flex items-center leading-normal bg-white rounded rounded-l-none border-0 px-3 whitespace-no-wrap text-gray-600">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>
            </div>
            <button class="bg-blue-400 py-4 text-center px-17 md:px-12 md:py-4 text-white rounded leading-tight text-xl md:text-base font-sans mt-4 mb-20">
                Hitung
            </button>
            <h1 class="py-2 text-center text-2xl">Hasil</h1>
            <p class="py-2 text-center text-2xl">{{$hasil}}</p>
        </form>
    </div>

</x-kalkulasi-layout>