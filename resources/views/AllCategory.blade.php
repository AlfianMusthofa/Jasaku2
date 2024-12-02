@extends('layouts.main')

@section('container')
    @include('components.navbar2')
    <div class="flex justify-center text-[45px] py-[40px] font-semibold  text-[#004aad]">
        <h1>JasaKu</h1>
    </div>
    {{-- <div class="container mx-auto">
        <div class="flex justify-between items-center py-[50px]">
            <div class="max-w-[600px]">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dicta a architecto tenetur quo optio
                    natus
                    esse ex illum fugit, sint accusantium, expedita, facilis modi quae perspiciatis facere error doloribus.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus ratione molestiae enim ipsum nobis
                    optio. Consectetur quae quam dolorem illum.
                </p>
            </div>
            <div>
                <a href="#">s</a>
                <a href="#">s</a>
                <a href="#">s</a>
            </div>
        </div>
    </div> --}}
    <div>
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto py-[20px] text-[20px] font-semibold text-[#004aad]">
                <h3>Programming & Tech</h3>
            </div>
        </div>
        <div class="container mx-auto flex gap-[10px] flex-wrap py-[30px]">
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
    <div>
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto py-[20px] text-[20px] font-semibold text-[#004aad]">
                <h3>Finance</h3>
            </div>
        </div>
        <div class="container mx-auto flex gap-[10px] flex-wrap py-[30px]">
            @foreach ($finances as $fenance)
                <a href="/service/productDetail/{{ $fenance['_id'] }}">
                    <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                        <img src="{{ asset('storage/' . $fenance['image']) }}" alt=""
                            class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                        <div class="p-[7px] mt-[5px]">
                            <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                {{ $fenance['project_name'] }}</p>
                            <div class="flex items-center my-[1px] gap-[5px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                <div>
                                    <label class="text-[11px]">4.8</label>
                                    <label class="text-[11px]">(140)</label>
                                </div>
                            </div>
                            </p>
                            <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                Rp.{{ $fenance['project_cost'] }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div>
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto py-[20px] text-[20px] font-semibold text-[#004aad]">
                <h3>Video & Animation</h3>
            </div>
        </div>
        <div class="container mx-auto flex gap-[10px] flex-wrap py-[30px]">
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
    <div>
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto py-[20px] text-[20px] font-semibold text-[#004aad]">
                <h3>Music & Audio</h3>
            </div>
        </div>
        <div class="container mx-auto flex gap-[10px] flex-wrap py-[30px]">
            @foreach ($musics as $music)
                <a href="/service/productDetail/{{ $music['_id'] }}">
                    <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                        <img src="{{ asset('storage/' . $music['image']) }}" alt=""
                            class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                        <div class="p-[7px] mt-[5px]">
                            <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                {{ $music['project_name'] }}</p>
                            <div class="flex items-center my-[1px] gap-[5px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                <div>
                                    <label class="text-[11px]">4.8</label>
                                    <label class="text-[11px]">(140)</label>
                                </div>
                            </div>
                            </p>
                            <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                Rp.{{ $music['project_cost'] }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div>
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto py-[20px] text-[20px] font-semibold text-[#004aad]">
                <h3>Digitals Illustrations</h3>
            </div>
        </div>
        <div class="container mx-auto flex gap-[10px] flex-wrap py-[30px]">
            @foreach ($digitals as $digital)
                <a href="/service/productDetail/{{ $digital['_id'] }}">
                    <div class="box w-[205px] rounded-[7px] min-h-[244px] max-h-[244px]">
                        <img src="{{ asset('storage/' . $digital['image']) }}" alt=""
                            class="rounded-tr-[7px] rounded-tl-[7px] h-[135px] w-[203px]">
                        <div class="p-[7px] mt-[5px]">
                            <p class="text-[14px] font-medium line-clamp-2 text-[#200000]">
                                {{ $digital['project_name'] }}</p>
                            <div class="flex items-center my-[1px] gap-[5px]">
                                <img src="{{ asset('assets/icons/star.png') }}" alt="" class="w-[13px]">
                                <div>
                                    <label class="text-[11px]">4.8</label>
                                    <label class="text-[11px]">(140)</label>
                                </div>
                            </div>
                            </p>
                            <p class="text-[14px] font-semibold mt-[5px] text-[#200000]">From
                                Rp.{{ $digital['project_cost'] }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @include('components.footer')
@endsection
