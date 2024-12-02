@extends('layouts.main')

@section('container')
    <div class="bg-[#00abe4]">
        <div class="container mx-auto text-[13px]  text-white py-[9px] flex justify-between items-center">
            <div>
                <p>English</p>
            </div>
            <div class="flex gap-[20px]">
                <a href="#">About JasaKu</a>
                <a href="#">JasaKu Partner</a>
                <a href="#">JasaKu Care</a>
                <a href="#">Partner Education</a>
            </div>
        </div>
    </div>
    @include('components.navbar2')
    <div class="hero border py-[20px]">
        <div class="banner container mx-auto">
            <div class="content flex flex-col w-[500px] gap-[20px] p-[13px] rounded-[3px] text-center py-[34px]"
                id="bg-content">
                <p class="text-center text-[35px] font-medium text-white leading-[43px]">Find the right
                    freelance<br>service, right away
                </p>
                {{-- <div class="bg-white flex items-center p-[4px] gap-[5px] pl-[10px] rounded-[3px]">
                    <img src="{{ asset('assets/icons/search-interface-symbol.png') }}" class="w-[20px]">
                    <input type="search" name="search" id="search"
                        class="w-full py-[5px] outline-none text-[14px] pl-[10px]" placeholder="Search here...">
                    <button type="submit"
                        class="text-[13px] text-white px-[15px] py-[8px] rounded-[3px] bg-[#00ABE4]">Search</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="categories py-[10px]">
        <div class="row container mx-auto grid grid-cols-8 gap-[10px]">
            <div class="col">
                <img src="assets/icons/cat (1).png" alt="">
                <p>Bussiness</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (2).png" alt="">
                <p>Consulting</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (3).png" alt="">
                <p>Digital Marketing</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (4).png" alt="">
                <p>Grapics and Design</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (5).png" alt="">
                <p>Music and Audio</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (6).png" alt="">
                <p>Programming and Tech</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (7).png" alt="">
                <p>Video and Animation</p>
            </div>
            <div class="col">
                <img src="assets/icons/cat (8).png" alt="">
                <p>Writing and Translation</p>
            </div>
        </div>
    </div>
    <div class="services mt-[30px]">
        <div>
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-[23px] font-semibold text-[#200000]">Explore the best services</p>
                <a href="#" class="border px-[18px] text-[14px] py-[4px] rounded-[3px]">See all</a>
            </div>
            <div class="row container mx-auto py-[14px] flex gap-[10px] overflow-x-scroll overflow-hidden flex-nowrap">
                @foreach ($products as $product)
                    <a href="/service/productDetail/{{ $product['_id'] }}">
                        <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                            <img src="{{ asset('storage/' . $product['image']) }}" alt=""
                                class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                            <div class="p-[7px] mt-[5px]">
                                <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                    {{ $product['project_name'] }}</p>
                                <div class="flex items-center my-[1px] gap-[5px]">
                                    <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                    <div>
                                        <label class="text-[11px]">4.8</label>
                                        <label class="text-[11px]">(140)</label>
                                    </div>
                                </div>
                                </p>
                                <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                    Rp.{{ $product['project_cost'] }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="mt-[20px]">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-[23px] font-semibold">Finance</p>
                <a href="#" class="border px-[18px] text-[14px] py-[4px] rounded-[3px]">See all</a>
            </div>
            <div class="row container mx-auto py-[14px] flex gap-[10px] overflow-x-scroll overflow-hidden flex-nowrap">
                @foreach ($finances as $finance)
                    <a href="/service/productDetail/{{ $finance['_id'] }}">
                        <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                            <img src="{{ asset('storage/' . $finance['image']) }}" alt=""
                                class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                            <div class="p-[7px] mt-[5px]">
                                <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                    {{ $finance['project_name'] }}</p>
                                <div class="flex items-center my-[1px] gap-[5px]">
                                    <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                    <div>
                                        <label class="text-[11px]">4.8</label>
                                        <label class="text-[11px]">(140)</label>
                                    </div>
                                </div>
                                </p>
                                <p class="text-[14px] font-semibold mt-[5px]">From Rp.{{ $finance['project_cost'] }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="mt-[20px]">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-[23px] font-semibold text-[#200000]">Programming & Tech</p>
                <a href="#" class="border px-[18px] text-[14px] py-[4px] rounded-[3px]">See all</a>
            </div>
            <div class="row container mx-auto py-[14px] flex gap-[10px] overflow-x-scroll overflow-hidden flex-nowrap">
                @foreach ($programmings as $programming)
                    <a href="/service/productDetail/{{ $programming['_id'] }}">
                        <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                            <img src="{{ asset('storage/' . $programming['image']) }}" alt=""
                                class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                            <div class="p-[7px] mt-[5px]">
                                <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                    {{ $programming['project_name'] }}</p>
                                <div class="flex items-center my-[1px] gap-[5px]">
                                    <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                    <div>
                                        <label class="text-[11px]">4.8</label>
                                        <label class="text-[11px]">(140)</label>
                                    </div>
                                </div>
                                </p>
                                <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                    Rp.{{ $programming['project_cost'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="mt-[20px]">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-[23px] font-semibold text-[#200000]">Video & Animation</p>
                <a href="#" class="border px-[18px] text-[14px] py-[4px] rounded-[3px]">See all</a>
            </div>
            <div class="row container mx-auto py-[14px] flex gap-[10px] overflow-x-scroll overflow-hidden flex-nowrap">
                @foreach ($videos as $video)
                    <a href="/service/productDetail/{{ $video['_id'] }}">
                        <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                            <img src="{{ asset('storage/' . $video['image']) }}" alt=""
                                class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                            <div class="p-[7px] mt-[5px]">
                                <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                    {{ $video['project_name'] }}</p>
                                <div class="flex items-center my-[1px] gap-[5px]">
                                    <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                    <div>
                                        <label class="text-[11px]">4.8</label>
                                        <label class="text-[11px]">(140)</label>
                                    </div>
                                </div>
                                </p>
                                <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                    Rp.{{ $video['project_cost'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="text-center mb-[50px]">
            <a href="/allCategory" class="text-[15px] px-[35px] py-[7px] rounded-full" id="seeAll-btn">See All</a>
        </div>
    </div>
    @include('components.footer')
@endsection
