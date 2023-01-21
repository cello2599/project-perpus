<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css"> 
    <title>Pena</title>

</head>
<header>
    <div>
        <nav>
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20 " >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto mt-6 bg-blue-600 h-9 w-20 rounded-lg  hover:bg-white text-[20px] font-medium mr-14 text-white hover:text-black text-center"><a href='/'>Home</a></div>
                <div class="-ml-12 mt-6  bg-blue-600 rounded-lg h-9 w-20 hover:bg-white text-[20px] font-medium m-7 text-center mr-14 text-white hover:text-black"><a >About</a></div>
                <div class="-ml-12 mt-6  bg-blue-600 rounded-lg  h-9 w-20 hover:bg-white text-[20px] font-medium m-7 text-center mr-14 text-white hover:text-black"><a class="" href='serverside/master'>coba</a></div>
                <button class="space-y-2 -ml-6 m-7 hover:bg-white" >
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                </button>
            </div>
        </nav>
    </div>
</header>
<body class="bg-slate-100 z-10">
    <div class="">
        <img class="w-screen brightness-50" src="image/bg-Book1.jpg" alt="Perpustakaan Sederhana"> 
        
    </div>
    <!-- TEST -->
    
    <div class="mt-9 mr-24 ml-32">
        <p class="font-bold text-[25px]">Book in this web</p> 
        <div class="grid grid-cols-3 gap-4">
            @foreach ($buku as $data)
            <div class="w-[22rem] h-[40rem] bg-purple-300 mr-1 ml-1 hover:bg-purple-200 transition ease-in-out duration-700 hover:drop-shadow-lg rounded-t-xl p-5 mb-5">
                <a href= "{{url('clientside/detail', $data->id_buku)}}" class="w-[22rem] h-[40rem] bg-slate-700 mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl"> 
                <article class="space-y-2 flex flex-col">
                    @if ($data->nama_kategori === 'horor')
                        <p class="capitalize bg-gray-700 w-fit px-2 rounded text-white" >{{$data->nama_kategori}} </p>
                    @elseif ($data->nama_kategori === 'romance')
                        <p class="capitalize  bg-blue-400 w-fit px-2 rounded text-white">{{$data->nama_kategori}} </p>
                    @elseif ($data->nama_kategori === 'fantasi')
                        <p class="capitalize  bg-green-400 w-fit px-2 rounded text-white">{{$data->nama_kategori}} </p>
                    @endif
                        <span class="font-bold">{{$data->judul_buku}}</span>
                        <p class="text-justify">
                           {{Str::limit($data->sinopsis, 200)}}}  <span class="text-blue-900 hover:underline">Read More</span>
                        </p> 

                    <img src="{{url('./image/book')}}\{{$data->gambar}}" class= "w-3/4 mx-auto" alt="" />
                    </article>
                    

                </a> 
            </div>
            @endforeach

            <!--<div><button class="w-[22rem] h-[40rem] bg-slate-700 mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl"> 2 </button> </div>
            <div><button class="w-[22rem] h-[40rem] bg-white mr-1 ml-1 hover:drop-shadow-lg rounded-t-xl"> 3 </button> </div>
            <div><button class="w-[22rem] h-[40rem] bg-white mr-1 ml-0 mb-4 hover:drop-shadow-lg rounded-t-xl"> 4 </button> </div>
            <div><button class="w-[22rem] h-[40rem] bg-slate-700 mr-1 ml-1 mb-4 hover:drop-shadow-lg rounded-t-xl"> 5 </button> </div>
            <div><button class="w-[22rem] h-[40rem] bg-white mr-1 ml-1 mb-4 hover:drop-shadow-lg rounded-t-xl"> 6 </button> </div> -->

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