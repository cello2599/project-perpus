<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css"> 
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <title>Pena</title>

</head>
<header>
    <div>
        <nav>
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20 p-6" >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto"><a class="p-3 rounded-sm bg-transparent w-20 h-auto hover:bg-white text-[20px] font-medium m-7 text-black hover:text-black " href='/'>Home</a></div>
                <div class="-ml-12"><a class=" p-3 rounded-sm w-20 h-auto hover:bg-white text-[20px] font-medium m-7" href="about" >About</a></div>
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
                            <a href="/contact" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Contact Us
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Daftar Buku
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
        <div class="container mx-auto px-6 -mt-60 absolute">
            <h2 class="text-4xl font-bold mb-2 text-white">
              Perpustakaan Sederhana!
            </h2>
            <h3 class="text-2xl mb-8 text-gray-200">
              Buku adalah jendela dunia untuk mencerdaskan wawasan.
            </h3>
         </div>
    </div>
    <!-- TEST -->
    
    <div class="mt-9 mr-24 ml-32">
        <p class="font-bold text-[25px]">Book in this web</p> 
        <div class="grid grid-cols-3 gap-4">
            @foreach ($buku->take(6) as $data)
            <div class="w-[22rem] h-[40rem] bg-purple-300 mr-1 ml-1 hover:bg-purple-200 transition ease-in-out duration-700 hover:drop-shadow-lg rounded-t-xl p-5 mb-5">
                <a href= "{{url('clientside/detail',$data->id_buku)}}" class="w-[22rem] h-[40rem] bg-slate-700 mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl"> 
                    <article class="space-y-2 flex flex-col">
                            <p class="capitalize bg-{{$data->warna}}-700 w-fit px-2 rounded text-white" >{{$data->nama_kategori}} </p>
                            <span class="font-bold">{{$data->judul_buku}}</span>
                            <p class="text-justify">
                            {{Str::limit($data->sinopsis, 200)}}}  <span class="text-blue-900 hover:underline">Read More</span>
                            </p> 

                        <img src="{{url('./image/book')}}\{{$data->gambar}}" class= "w-3/4 mx-auto" alt="" />
                    </article>
                </a> 
            </div>
            @endforeach
        </div>
    </div>


                <div class="flex flex-row-reverse">
                    <div>
                    <a href="clientside/list"><i class=" fa-solid fa-angles-right hover:bg-slate-500 text-black py-2 px-4 rounded-lg mt-2 text-3xl mr-24 mb-4"> </i> </a>
                    </div>   
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