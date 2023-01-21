<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css"> 
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <title>Pena</title>

</head>
<header>
    <div>
        <nav>
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20 p-6" >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto"><a class="p-3 rounded-sm bg-transparent w-20 h-auto hover:bg-white text-[20px] font-medium m-7 text-black hover:text-black " href='/'>Home</a></div>
                <div class="-ml-12"><a class=" p-3 rounded-sm w-20 h-auto hover:bg-white text-[20px] font-medium m-7">About</a></div>
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
                            <a href="serverside/master" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                             Login
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            kontol
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            jembut
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            mago anjing
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
<body class="bg-slate-100">
    <div class="">
        <img class="w-screen brightness-50 z-0" src="image/bg-Book1.jpg" alt="Perpustakaan Sederhana"> 
        
    </div>
    
    
    <div class="mt-9 mr-24 ml-32">
        <p class="font-bold text-[25px]">Book in this web</p> 
        <div class="grid grid-cols-3 gap-4">
            @foreach ($buku as $data)
            <div class="w-[22rem] h-[40rem] bg-purple-300 mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl p-5 mb-5">
                <a href= "{{url('clientside/detail',$data->id_buku)}}" class="w-[22rem] h-[40rem] bg-slate-700 mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl"> 
                    <article>
                        @if ($data->nama_kategori === 'horor')
                            <p class="capitalize bg-red-500 w-fit px-2 rounded text-white" >{{$data->nama_kategori}} </p>
                        @else
                            <p class="capitalize">{{$data->nama_kategori}} </p>
                        @endif
                            <span class="font-bold">{{$data->judul_buku}}</span>
                            <p class="text-justify">
                            {{Str::limit($data->sinopsis, 200)}}}
                            </p>
                        <img src="{{url('./image/book')}}\{{$data->gambar}}" class= "w-3/4" alt="" />
                    </article>
                </a> 
            </div>
            @endforeach
        </div>
    </div>

    
                <div class="flex flex-col justify-center items-center">
                <a href="{{url('clientside/detail',$data->id_buku)}}">    
                <svg class="w-20 h-20 bg-gray-500 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    <p class="text-black justify-center">
                        See More...
                    </p>
                    </a>
                </div>

    <footer>
        <div class="flex flex-row bg-[#5abbc0] w-auto h-36" >

            <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
                <div class="m-auto text-white">Copyright © 2023, All Rights Reserved</div> 
            </div>

            </div>
        </div>
    </footer>
    
    
    
</body>
</html>