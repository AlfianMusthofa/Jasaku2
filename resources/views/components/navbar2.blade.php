<div class="border" id="navbar">
    <div class="container mx-auto flex justify-between items-center py-[20px]">
        <a href="/service">JasaKu</a>
        <div class="navlink flex items-center gap-[18px]">
            <a href="#"><img src="{{ asset('assets/icons/history.png') }}" alt=""></a>
            <a href="#"><img src="{{ asset('assets/icons/messenger.png') }}" alt=""></a>
            <div class="dropdown cursor-pointer relative block">
                <button onclick="myFunction()" class="dropbtn flex items-center gap-[7px]">
                    <img src="{{ asset('assets/icons/user.png') }}" alt="">
                    <p class="text-[14px]">{{ session('username') }}</p>
                </button>
                <div id="myDropdown"
                    class="dropdown-content hidden border absolute w-[130px] right-[2px] top-[47px] bg-white z-[1]">
                    <a href="/dashboard">Dashboard</a>
                    <a href="/logout">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
