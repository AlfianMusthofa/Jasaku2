@extends('layouts.main')

@section('container')
    {{-- <div class="bglogin w-[100%] h-[100vh] flex justify-center items-center">
        <div class="bg-[#00ABE4] p-[16px] shadow-md rounded-tl-[10px] rounded-br-[10px] w-[370px] flex flex-col">
            <p class="font-semibold text-[22px] text-center text-white">Login</p>
            <p class="text-[13px] mt-[5px] text-center text-white">Hey, Enter your details to get sign In<br>to your account
            </p>
            <form action="/login" method="post" class="flex flex-col gap-[8px] my-4">
                @csrf
                <label for="username" class="text-[12px] text-white">Username</label>
                <input type="text" name="username" id="username"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required autofocus>
                <label for="password" class="text-[12px] text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required>
                <div class="flex justify-between items-center my-2">
                    <div class="flex gap-[4px]">
                        <input type="checkbox" name="remember" id="remember">
                        <p class="font-medium text-[11px] text-white">Remember Me</p>
                    </div>
                    <a href="#" class="text-[11px] font-medium text-white">Forget Password ?</a>
                </div>
                <button type="submit"
                    class="text-[13px] border py-[9px] font-bold bg-white text-[#00ABE4] rounded-tl-[7px] rounded-br-[7px]">Sign
                    In</button>
            </form>
            <p class="text-[11px] text-center font-medium text-white">-- Or Sign In with --</p>
            <div class="flex justify-between mt-4">
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px] bg-white">
                    <img src="assets/icons/search.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Google</p>
                </a>
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px] bg-white">
                    <img src="assets/icons/facebook.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Facebook</p>
                </a>
                <a href="#"
                    class="flex gap-[5px] items-center font-medium border px-[17px] py-[7px] rounded-tl-[6px] rounded-br-[6px] bg-white">
                    <img src="assets/icons/apple-logo.png" alt="" class="w-[17px]">
                    <p class="text-[12px]">Apple ID</p>
                </a>
            </div>
            <p class="text-[11px] mt-5 text-center text-white">Dont have an account ? <a href="/signup"
                    class="font-semibold">Sign
                    Up</a>
            </p>
        </div>
    </div> --}}

    <div class="w-[100%] h-[100vh] flex justify-center items-center" id="bglogin">
        <div class="flex items-center shadow-md rounded-[5px]" id="formlogin">
            <div id="bglogin2">
            </div>
            <div class="px-[50px] w-[400px]">
                <p class="text-[26px] font-semibold mb-[7px]">Login</p>
                <p class="text-[13px] mb-[35px]">Welcome back! Please login to your<br>account.</p>
                <form action="/login" method="post" class="flex flex-col gap-[14px]">
                    @csrf
                    <div class="flex flex-col gap-[5px]">
                        <label for="username" class="text-[12px]">Username</label>
                        <input type="text" name="username" id="username"
                            class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400" required>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <label for="password" class="text-[12px]">Password</label>
                        <input type="password" name="password" id="password"
                            class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400">
                    </div>
                    <div class="text-[11px] mt-[18px] text-end">
                        <a href="#">Forget Password?</a>
                    </div>
                    <button type="submit"
                        class="text-[13px] py-[11px] mt-[15px] rounded-[3px] bg-[#8652ff] text-white">Login</button>
                </form>
                <p class="text-[11px] mt-[23px]">New User? <a href="/signup" class="font-semibold text-[#8652ff]">SignUp</a>
                </p>
            </div>
        </div>
    </div>
@endsection
