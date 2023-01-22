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
        <div class=" ">
            <p class="text-center mt-3 font-bold text-[25px]">Login</p>
            <img class="mx-auto w-48 h-48 mt-4" src="../image/login_avatar.png" alt="Avatar"> 
        </div>
        
        <div class="content">       
                <div id='login-form'class='login-page'>
                    <div class="form-box">
                        <div class='button-box'>
                            <div id='btn'></div>
                            <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                            <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                        </div>
                        <form id='login' class='input-group-login'>
                            <input type='text'class='input-field'placeholder='Email Id' required >
                            <div class="password">
                                <input type='password' id="password"class='input-field'placeholder='Enter Password' required>
                                <button type="button" id="show-pass" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></button>
                                <!-- <input  type="button" id="show-pass" value='show'> -->
                                <a href="{{url('admin/beranda')}}" class="btn btn-secondary">Login</a>
                            </div>
                            
                            <input type='checkbox'class='check-box'><span>Remember Password</span>
                            <!-- <button type='submit'class='submit-btn'><b>Log in</b></button> -->
                        </form>
                        <form id='register' class='input-group-register'>
                            <input type='text'class='input-field'placeholder='First Name' required>
                            <input type='text'class='input-field'placeholder='Last Name ' required>
                            <input type='email'class='input-field'placeholder='Email Id' required>
                            <input type='password'class='input-field'placeholder='Enter Password' required>
                            <input type='password'class='input-field'placeholder='Confirm Password'  required>
                            <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                            <button type='submit'class='submit-btn'>Register</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>

    <!-----JavaScript for Toggle Menu---->
<script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right ="0";
    }
    function hidenMenu() {
        navLinks.style.right ="-200px";
    }

    document.querySelector('#show-pass').onclick = () => { 
        let type = document.querySelector('#password').type;
        if(type == 'password'){
            document.querySelector('#password').type = 'text';
            document.querySelector('#show-pass').value = 'Hide';
        }else{
            
            document.querySelector('#password').type = 'password';
            document.querySelector('#show-pass').value = 'show';
        }
        };

        document.querySelector('#login > button').onclick =  Swal.fire(
  'Login!',
  'Anda Berhasil Login!',
  'success'
);
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>
    <div class="flex flex-row bg-[#5abbc0] w-auto h-36" >

        <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
            <div class="m-auto text-white">Copyright © 2023, All Rights Reserved</div> 
        </div>

        </div>
    </div>
</footer>

</html>