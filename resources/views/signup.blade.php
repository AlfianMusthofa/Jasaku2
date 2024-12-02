@extends('layouts.main')

@section('container')
    <div class="w-[100%] h-[100vh] flex justify-center items-center" id="bgregis">
        {{-- <div class="border bg-[#00ABE4] p-[16px] shadow-md rounded-tl-[10px] rounded-br-[10px]">
            <h1 class="text-center font-semibold text-white text-[18px] mb-[8px]">Sign Up</h1>
            <form action="/signup" method="post" class="flex flex-col gap-[8px] w-[330px]">
                @csrf
                <label for="username" class="text-[12px] text-white">Username</label>
                <input type="text" name="username" id="username"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required autofocus>
                <label for="password" class="text-[12px] text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required>
                <label for="date" class="text-[12px] text-white">Date Born</label>
                <input type="date" name="date" id="date"
                    class="p-[7px] rounded-tl-[7px] rounded-br-[7px] required text-[14px]">
                <label for="phonenumber" class="text-[12px] text-white">No.Hp</label>
                <input type="number" name="phonenumber" id="phonenumber"
                    class="border text-[14px] p-[7px] rounded-tl-[7px] rounded-br-[7px] outline-none" required>
                <label for="gender" class="text-[12px] text-white">Gender</label>
                <div class="flex justify-between items-center mb-[10px]">
                    <div class="bg-white text-[#00ABE4] text-[14px] px-[50px] py-[6px] font-medium cursor-pointer rounded-tl-[5px] rounded-br-[5px]"
                        id="gender1">
                        <p>Laki-laki</p>
                    </div>
                    <div class="bg-white text-[#00ABE4] text-[14px] px-[40px] py-[6px] font-medium cursor-pointer rounded-tl-[5px] rounded-br-[5px]"
                        id="gender2">
                        <p>Perempuan</p>
                    </div>
                </div>
                <input type="hidden" name="gender" value="" id="selectedGender">
                <button type="submit"
                    class="text-[13px] py-[9px] font-bold bg-white text-[#00ABE4] rounded-tl-[7px] rounded-br-[7px]">Sign
                    Up</button>
            </form>
            <p class="text-[11px] mt-5 text-center text-white">Have an account ? <a href="/loginPage"
                    class="font-semibold">Sign
                    In</a>
            </p>
        </div> --}}
        <div class="flex items-center rounded-[5px] shadow-md" id="formregis">
            <div id="bgregis2">
                <div class="pl-[20px]">
                    <h3 class="text-[33px] font-semibold">Welcome!</h3>
                    <p class="text-[13px]">Let us know you!</p>
                </div>
            </div>
            <div class="px-[40px]">
                <h3 class="text-[23px] font-semibold">Registration</h3>
                <div class="h-[5px] mt-[10px] w-[30px] bg-[#175bd1] rounded-[20px]"></div>
                <form action="/signup" method="post" class="flex flex-col gap-[15px] mt-[20px]">
                    @csrf
                    <div class="flex gap-[20px]">
                        <div class="flex flex-col gap-[15px]">
                            <div class="flex flex-col gap-[6px]">
                                <label for="username" class="text-[12px]">Username</label>
                                <input type="text" name="username" id="username"
                                    class="border text-[14px] p-[6px] rounded-[3px] outline-none border-gray-400 w-[200px]"
                                    required>
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <label for="phonenumber" class="text-[12px]">Phone Number</label>
                                <input type="number" name="phonenumber" id="phonenumber"
                                    class="border text-[14px] p-[6px] rounded-[3px] outline-none border-gray-400" required>
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <label for="date" class="text-[12px]">Born</label>
                                <input type="date" name="date" id="date"
                                    class="border text-[14px] p-[6px] rounded-[3px] outline-none border-gray-400">
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="flex flex-col gap-[6px]">
                                <label for="password" class="text-[12px]">Password</label>
                                <input type="password" name="password" id="password"
                                    class="border text-[14px] p-[6px] rounded-[3px] outline-none border-gray-400 w-[200px]"
                                    required>
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <label for="cPassword" class="text-[12px]">Confirm Password</label>
                                <input type="password" name="cPassword" id="cPassword"
                                    class="border text-[14px] p-[6px] rounded-[3px] outline-none border-gray-400" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-[12px]">
                        <p>Gender</p>
                        <div class="mt-[10px]">
                            <div class="flex items-center gap-[10px]">
                                <input type="radio" name="gender" id="gender1" value="Laki-laki">
                                <label for="Laki-laki">Male</label>
                                <input type="radio" name="gender" id="gender2" value="Perempuan" class="ml-[20px]">
                                <label for="Perempuan">Female</label>
                                <input type="radio" name="gender" id="gender3" value="PreferNotToSay"
                                    class="ml-[20px]">
                                <label for="notToSay">Prefer Not To Say</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-[13px] py-[8px] mt-[10px] rounded-[100px] text-white bg-[#175bd1] shadow-md">Continue</button>
                </form>
                <p class="text-[11px] mt-[20px]">Already have an account? <a href="/loginPage" class="underline">Sign In</a>
                </p>
            </div>
        </div>
    </div>
@endsection
