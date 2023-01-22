<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <title>Pena</title>

</head>
<div>
        <nav>
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20 p-6" >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto"><a class="p-3 rounded-sm bg-transparent w-20 h-auto hover:bg-white text-[20px] font-medium m-7 text-black hover:text-black " href='/'>Home</a></div>
                <div class="-ml-12"><a class=" p-3 rounded-sm w-20 h-auto hover:bg-white text-[20px] font-medium m-7" >About</a></div>
              <div class="" x-data="{showMenu : false}">
                    <button @click.prevent="showMenu = !showMenu " class="px-2 py-4 flex justify-between bg-blue-500 text-white -mt-3">
                        <svg x-show="!showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                         Menu
                    </button>
                 <div x-show="showMenu"> 
                    <nav class="flex flex-col absolute z-50">
                            <a href="/serverside/master" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                                Login
                                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Genre
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Daftar Buku
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            bsx
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                    </nav>
                 </div>
              </div>
            </div>
        </nav>
    </div>
</header>

<body>
    
    <div class="">
        <p class="text-center text-2xl font-medium">ALL BOOKS IN THIS WEB</p>
       
        <div class="text-center mb-4 -mt-3 table-auto p-10">
            <table class="table-fixed text-center border-collapse w-11/12 mx-10">
                <thead>
                  <tr>
                    <th class="border-2 border-black w-20 bg-slate-500">Genre</th>
                    <th class="border-2 border-black w-30 bg-slate-500 w-44">Judul Buku</th>
                    <th class="border-2 border-black w-30 bg-slate-500">Sinopsis</th>
                    <th class="border-2 border-black bg-slate-500 w-28">Gambar</th>
                  </tr>
                </thead>
                
                <tbody>
                @foreach ($buku as $data)
                  <tr>
                    <td class="border-2 border-black ">{{$data->id_buku}}</td>
                    <td class="border-2 border-black ">{{$data->judul_buku}}</td>
                    <td class="border-2 border-black max-w-md text-left">{{Str::limit($data->sinopsis, 200)}}}</td>
                    <td class="border-2 border-black">
                        <img src="{{url('./image/book')}}\{{$data->gambar}}" alt="" class="w-20 h-20 mx-auto">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
        </div>

    </div>

    <div class="fixed top-0 left-0 z-50 w-full h-full" style="display: none;">
        <div class="relative flex items-center justify-center h-full">
          <div class="bg-gray-900 bg-opacity-50 w-full md:w-1/2 lg:w-1/3 xl:w-1/4 py-6 px-8 rounded-lg">
            <div class="flex flex-col">
              <div class="text-center text-white font-medium text-lg mb-4">Verifikasi</div>
              <p class="text-center text-white text-base mb-4">Apakah Anda yakin ingin melanjutkan?</p>
              <div class="flex justify-around">
                <button class="bg-red-600 text-white py-2 px-4 rounded-lg">Tidak</button>
                <button class="bg-green-500 text-white py-2 px-4 rounded-lg">Ya</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>

<footer>
    <div class="flex flex-row bg-[#5abbc0] w-auto h-36 " >

        <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
            <div class="m-auto text-white">Copyright © 2023, All Rights Reserved</div> 
        </div>

        </div>
    </div>
</footer>

</html>