
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
        <nav class="static top-0">
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20" >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto"><button class="rounded-sm bg-blue-600 w-20 h-auto hover:bg-white text-[20px] font-medium m-7 text-white hover:text-black">Home</button></div>
                <div class="-ml-12"><button class="rounded-sm w-20 h-auto hover:bg-white text-[20px] font-medium m-7">About</button></div>
                <button class="space-y-2 -ml-6 m-7 hover:bg-white" >
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                </button>
            </div>
        </nav>
    </div>
</header>

<body>
    <div class="w-[60rem] h-[30rem] bg-slate-200 mx-auto mt-5 mb-5 rounded-md">
        <div class="mt-2 ml-2">
            <p class="text-center font-bold text-xl">{{$data->judul_buku}}</p>
            <p class=" w-20 h-6">{{$data->nama_kategori}}</p>
            <p class="text-center">
            <img src="{{url('./image/book')}}\{{$data->gambar}}" class= "w-3/4" alt="" />
            </p>
            <p>{{$data->sinopsis}}</p>
        </div>

    </div>
    
</body>

<footer>
    <div class="flex flex-row bg-[#5abbc0] w-auto h-36 " >

        <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
            <div class="m-auto text-white">Copyright © 2023,  All Rights Reserved</div> 
        </div>

        </div>
    </div>
</footer>

</html>