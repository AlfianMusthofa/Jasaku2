@extends('layouts.main')

@section('container')
    <div class="bg-[#E9F1FA] h-[100vh]">
        <div class="container mx-auto">
            @include('components.navbar')
            <div class="hero flex items-center justify-center h-[100vh] gap-5">
                <img src="assets/bg.png" alt="" class="w-[400px]">
                <div>
                    <div
                        class="title bg-[#00ABE4] p-[6px] text-[30px] font-semibold text-white text-center rounded-tl-[12px] rounded-br-[12px]">
                        <h1>Expertise at Your Fingertips</h1>
                    </div>
                    <div class="my-[10px]">
                        <p class="text-[#00ABE4] font-medium">Unlock a World of Expertise at Your Fingertips, Tailored to</p>
                        <p class="text-[#00ABE4] font-medium">Meet Every Need with Easy and Convenience</p>
                    </div>
                    <div class="mt-[20px]">
                        <a href="/loginPage" class="bg-[#00ABE4] p-[10px] text-[15px] text-white font-medium rounded-md">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
