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
    <div class="mt-3">
    <p class="text-center text-xl font-medium"> Tambah Buku</p>
    <div>
        <form method="post" action="{{url('serverside/master')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-14 ml-48 flex flex-col max-w-[70%] space-y-3">
                <div class="form-group">
                    <label for="judul_buku">Judul</label>
                    <input class=" pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md h-9" type="text" placeholder="masukkan judul" name="judul_buku" required>
                </div>

                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea rows="5" class="pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md " type="text" placeholder="masukkan sinopsis" name="sinopsis"></textarea>
                </div>

                <div class="form-group">
                    <label for="genre">ID genre</label>
                    <input class=" pl-3 border outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500 rounded-md h-9" type="text" placeholder="masukkan judul" name="id_genre" required>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input class="outline-none text-gray-500 focus:text-gray-700 duration-300 transition ease-in-out focus:border-gray-500  h-9" type="file" name="gambar" accept=".jpeg,.jpg,.png">
                </div>
                
            </div>
            <button class="border bg-green-500 focus:border-black h-10 rounded-lg text-white font-semibold" type="submit">Tambah Buku</button>
        </form>
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