@extends('layout/app')

@section('title')
Mobil
@endsection

@section('navbar')
  @include('components/navbarlanding')
@endsection

@section('content')
<body>
    <div class="flex justify-start gap-4 mt-6 ml-8">
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Yamaha.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Honda.svg" alt=""></button>
    </div>

<div class=" flex items-center justify-center min-h-screen grid gap-4 grid-cols-4 ml-6 mt-6 mb-6  sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 " >

<div class="card w-80 bg-base-100 shadow-xl bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg" onclick="modaldetail.showModal()">Detail</button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">ADV 160</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg"  onclick="modallanding.showModal()">Rental</button>
    </div>
  </div>
</div>

</div> 
<dialog id="modaldetail" class="modal">
  <div class="modal-box 6/12">
    <form action=""></form>
    <div class="bg-slate-300 flex justify-center h-48">
        <img src="images/ADV.png"  alt="">
    </div>
    <p class="text-xl text-center font-extrabold mt-3">ADV 160</p>
    <p class="text-base text-center font-extrabold mb-2">HONDA</p>
    <p class="text-sm text-center mb-10 ">
    Honda ADV 160 tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Honda hadir dalam 2 varian. 
    Bicara soal spesifikasi mesin Honda ADV 160, ini ditenagai dua pilihan mesin Petrol berkapasitas 160 cc. ADV 
    160 tersedia dengan transmisi CVT tergantung variannya. ADV 160 adalah Scooter 2 seater dengan panjang 1950 mm, 
    lebar 763 mm, wheelbase 1324 mm. serta ground clearance 165 mm.
    </p>
    <div class="flex justify-center">
        <p class="text-lg font-extrabold mr-32">1.000.000/day</p>
        <p class="text-lg font-extrabold ml-32">Stok:3</p>
    </div>

  </div>
  </form>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>

<dialog id="modallanding" class="modal">
        <div class="modal-box w-2/6">
            <p class="py-4 text-center font-bold text-xl">Anda belum Masuk! </p>
            <article class="text-wrap ...">
              <p class="text-center">Silahkan Masuk atau Daftar</p>
              <p class="text-center">Terlebih Dahulu</p>
            </article>
            <div class="flex justify-center">
                <button class="btn bg-orange-400 mt-2 mr-4 rounded-lg font-bold shadow-xl" ><a href="{{route('login')}}"> Masuk</a></button>
                <button class="btn bg-gray-300 rounded-lg mt-2 font-bold shadow-xl"><a href="{{route('register')}}">Daftar</a></button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
</dialog>

</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection