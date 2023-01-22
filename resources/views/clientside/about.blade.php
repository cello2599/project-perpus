<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
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

<body>
        <div class="py-20" >
        <img class="w-screen brightness-50 z-0 -mt-20" src="image/bg-Book1.jpg" alt="Perpustakaan Sederhana">
          <div class="container mx-auto px-6 -mt-60 absolute">
            <h2 class="text-4xl font-bold mb-2 text-white">
              Perpustakaan Sederhana!
            </h2>
            <h3 class="text-2xl mb-8 text-gray-200">
              Buku adalah jendela dunia untuk mencerdaskan wawasan.
            </h3>
            <a href="/" type="button" class="bg-lime-500 font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
              More Action
            </a>
          </div>
        </div>
        <!-- Features -->
        <section class="container mx-auto px-6 p-10">
          <h2 class="text-4xl font-bold text-center text-gray-800 -mt-20 mb-8">
            About PeNa
          </h2>
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Easy to Use
              </h4>
              <p class="text-gray-600 mb-8">
               Platform perpustakaan online yang memudahkan pengguna untuk mencari buku yang diinginkan.
               dan juga pengguna dapat meminjam buku secara online tanpa harus datang ke perpustakaan.
              </p>
            </div>
            <div class="w-64 h-64 ml-40">
              <img src="image/easytouse.png" alt="Monitoring" />
            </div>
          </div>
          <div class="flex items-center flex-wrap mb-40">
            <div class="w-64 h-64 ml-40">
              <img src="image/manybook.png" alt="Reporting" />
            </div>
            <div class="w-full md:w-1/2 pl-10">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Available Many Books
              </h4>
              <p class="text-gray-600 mb-8">
                Berisi berbagai macam buku dari seluruh genre, dengan banyaknya buku yang tersedia di perpustakaan ini,
                pengguna dapat memilih buku yang diinginkan. cocok untuk anak-anak, remaja, dan dewasa.
              </p>
            </div>
          </div>
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Up to Date
              </h4>
              <p class="text-gray-600 mb-8">
                Selalu update dengan buku-buku terbaru yang diterbitkan oleh penerbit. Buku yang tersedia di perpustakaan ini
                merupakan buku asli yang langsung dari penenerbit dan bukan buku bajakan. tersedia juga buku-buku lama yang 
                jarang ditemukan di perpustakaan lain.
              </p>
            </div>
            <div class="w-72 h-72 ml-40">
              <img src="image/update.png" alt="Syncing" />
            </div>
          </div>
        </section>
        <!-- Testimonials -->
        <section class="bg-gray-800">
          <div class="container mx-auto px-6 py-20">
            <h2 class="text-4xl font-bold text-center text-gray-400 mb-20">
              Testimonials from our users
            </h2>
            <div class="flex flex-wrap">
              <div class="w-full md:w-1/3 px-2 mb-4">
                <div class="bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">
                    Memudahkan saya untuk mencari buku, dan juga meminjam
                    buku secara online tanpa harus datang ke perpustakaan.
                    sehingga saya bisa melakukan peminjaman kapanpun.
                  </p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">
                    Marcello Athapary
                  </p>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-2 mb-4">
                <div class="bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">
                    Koleksi buku yang tersedia di perpustakaan ini sangat banyak, sehingga
                    saya bisa meminjam buku yang susah untuk ditemukan. Buku-buku yang 
                    tersedia juga sangat update. 
                  </p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">
                    Andika Dwi
                  </p>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-2 mb-4">
                <div class="bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">
                    Keaslian buku yang ada sangat terjamin, sehingga sangat minim untuk
                    ditemukan buku-buku yang tidak asli atau bajakan. Memudahkan saya mencari
                    referensi buku yang saya butuhkan.
                  </p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">
                    Indra Kusuma
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
    
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