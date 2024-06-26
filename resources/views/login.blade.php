@extends('layout.app')

@section('title')
  Login
@endsection

@section('content')
<div class="flex">
<div class="w-1/2">
    <img src="images/rubicon.jpg" class="w-full min-h-screen" alt="">
</div>

<div class="w-1/2">
    <div class="mr-8 flex justify-end">
    <img src="images/logo-rentcang.png" class="ml-8 w-40" alt="">
    </div>
    <div class=" grid justify-center mt-28">
        <form action="{{ route('login_proses') }}" method="POST" id="loginform">
        @csrf
        <h1 class="text-3xl font-extrabold">MASUK</h1>
        <p class="text-base font-semibold mb-8">Belum memiliki akun?<a href="{{ route('register') }}" class="text-lg text-orange-400">Daftar</a></p>
            <div class="grid jusify-center">
            <label for="email" class="font-poppins text-sm font-bold">Email </label>
            <input type="email" id="email" name="email" class="bg-gray-300 p-2 rounded-sm mb-4 h-7 w-80" required>
            </div>

            <div class="grid jusify-center">
            <label for="password" class="font-poppins text-sm font-bold">Password </label>
            <div class="relative w-80 ">
                <input id="password" name="password" type="password" class="bg-gray-300 p-2 rounded-sm h-7 w-full pr-10" required>
                <img id="toggleIcon" src="images/eyeclose.svg" class="w-6 absolute top-1/2 right-2 transform -translate-y-1/2 cursor-pointer" onclick="togglePasswordVisibility()">
            </div>
            </div>


            <div class="grid justify-start mt-6">
            <button type="submit" class="bg-orange-400 rounded-md text-xs w-20 h-10 font-extrabold">Masuk</button>
            </div>
        </form>
    </div>
</div>
</div>
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-green-500 rounded shadow-lg top-4 left-1/2">{{ session('berhasil') }}</div>
        @elseif(session('gagal'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">{{ session('gagal') }}</div>
        @endif
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.src = 'images/eyeopen.svg';
            } else {
                passwordInput.type = 'password';
                toggleIcon.src = 'images/eyeclose.svg';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const alertBox = document.querySelector('#customAlert > div');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</body>
@endsection
