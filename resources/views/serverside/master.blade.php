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

<body>
    
    <div class="">
        <p class="text-center text-2xl font-medium"> Data Buku</p>
                <div class="flex">
          <div class="ml-auto mr-48 py-1 bg-gray-200 h-7 w-24 rounded-lg  hover:bg-gray-400 text-[15px] font-medium text-black  text-center ">
        <a href="{{url('serverside/add')}}"><i class="fa-solid fa-file-circle-plus"></i> Tambah</a> </div>
        </div>

        <a href="{{url('clientside/list')}}"><i class="fa-solid fa-file-circle-plus"></i> list</a> </div>
        </div>

        
       
        <div class="text-center mb-4 -mt-3 table-auto p-10">
            <table class="table-fixed text-center border-collapse w-11/12 mx-10">
                <thead>
                  <tr>
                    <th class="border-2 border-black w-5">ID</th>
                    <th class="border-2 border-black w-30">Judul Buku</th>
                    <th class="border-2 border-black w-30 ">Sinopsis</th>
                    <th class="border-2 border-black">Gambar</th>
                    <th class="border-2 border-black w-10">Aksi</th>
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
                        <a><i class="fa-solid fa-trash-can"></i> </a>
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