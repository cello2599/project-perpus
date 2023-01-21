<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">

    <title>Pena</title>

</head>
<header>
    <div>
        <nav class="static top-0">
        <div class="flex flex-row bg-[#5abbc0] w-auto h-20 " >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto mt-6 bg-blue-600 h-9 w-20 rounded-lg  hover:bg-white text-[20px] font-medium mr-14 text-white hover:text-black text-center"><a href='/'>Home</a></div>
                <div class="-ml-12 mt-6  bg-blue-600 rounded-lg h-9 w-20 hover:bg-white text-[20px] font-medium m-7 text-center mr-14 text-white hover:text-black"><a >About</a></div>
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

    

    <div class="grid grid-cols-3 gap-4 mt-5">
           
            <div class="w-[22rem] h-[32rem] p-6 ml-60 hover:drop-shadow-lg rounded-md border-purple-800 border mb-5 text-center">
                <div class="mt-1 ">
                <p class="text-center text-xl font-medium m-auto"> Tambah Buku</p>
                <div>
                    <form method="post" action="{{url('serverside/master')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-14 flex flex-col max-w-5xl space-y-3 text-left">
                            <div class="form-group mt-4">
                                <p><label for=" judul_buku">Judul</label></p>
                                <p><input class="w-full pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md h-9" type="text" placeholder="masukkan judul" name="judul_buku" required></p>
                            </div>

                            <div class="form-group">
                                <p><label for="sinopsis">Sinopsis</label></p>
                                <p><textarea rows="5" class="w-full pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md " type="text" placeholder="masukkan sinopsis" name="sinopsis"></textarea></p>
                            </div>

                            <div class="form-group">
                                <p><label for="genre">ID genre</label></p>
                                <p><input class="w-full pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md h-9" type="text" placeholder="masukkan judul" name="id_genre" required></p>
                            </div>

                            <div class="form-group">
                                <p><label for="gambar">Gambar</label></p>
                                <p><input class="w-full mx-auto outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500  h-9" type="file" name="gambar" accept=".jpeg,.jpg,.png"></p>
                            </div>
                            
                        </div>
                        <button class="border -mt-6 bg-green-500 focus:border-black h-10 rounded-lg text-white font-semibold" type="submit">Tambah Buku</button>
                    </form>
                </div>
                </div>
                            
                 </div>

                 <div class="w-[22rem] h-[32rem] ml-60 hover:drop-shadow-lg rounded-t-xl mb-5">
                <div class="mt-3 text-center">
                <p class="text-center text-xl font-medium"> Tabel Genre</p>
                <table class="table-fixed text-center border-collapse mx-auto max-w-screen-xl mt-4 ">
                <thead>
                  <tr>
                    <th class="border-[1px] border-black">ID</th>
                    <th class="border-[1px] border-black">Judul Buku</th>
                    </tr>
                </thead>
                
                <tbody>
               
                  <tr>
                    <td class="border-[1px] border-black"> ID1</td>
                    <td class="border-[1px] border-black">Nama1</td>
                   
                  </tr>
            
                </tbody>
                
              </table>
                <div>
                    
                </div>
                </div>
                            
                 </div>
            
        </div>
    
</body>

<footer>
    <div class="flex flex-row bg-[#5abbc0] w-auto h-36 " >

        <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
            <div class="m-auto text-white">Copyright © 2023, HBO Max</div> 
        </div>

        </div>
    </div>
</footer>

</html>