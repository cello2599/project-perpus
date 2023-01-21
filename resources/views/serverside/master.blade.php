<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
    <title>Pena</title>

</head>
<header>
    <div>
        <nav>
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
    
    <div>
        <p class="text-center text-xl font-medium"> Data Buku</p>
        <a href="{{url('serverside/add')}}" class="fa-solid fa-plus ">Tambah data</a> 
        <div class="text-center mb-4 mt-2">
            <table class="table-fixed text-center border-collapse mx-auto max-w-screen-xl ">
                <thead>
                  <tr>
                    
                    <th class="border-2 border-black">ID</th>
                    <th class="border-2 border-black">Judul Buku</th>
                    <th class="border-2 border-black ">Sinopsis</th>
                    <th class="border-2 border-black">Gambar</th>
                    <th class="border-2 border-black">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                @foreach ($buku as $data)
                  <tr>
                    <td class="border-2 border-black">{{$data->id_buku}}</td>
                    <td class="border-2 border-black">{{$data->judul_buku}}</td>
                    <td class="border-2 border-black max-w-md text-left">{{Str::limit($data->sinopsis, 50)}}}</td>
                    <td class="border-2 border-black">
                        <img src="{{url('./image/book')}}\{{$data->gambar}}" alt="" class="w-20 h-20">
                    </td>
                    <td class="border-2 border-black"> 
                        <a href="{{url('serverside/edit',$data->id_buku)}}"><i class="fa-solid fa-pen"> </i> </a>
                        @include('serverside.delete', ['url' => url('serverside/delete', $data->id_buku)])
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