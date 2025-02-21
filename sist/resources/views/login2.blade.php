<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BETA</title>
</head>
<body class="m-0 p-0 bg-gradient-to-br from-gray-500 to-red-500 h-full ">
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex w-[700px] h-auto bg-transparent">
        <div class="w-[650px] h-[550px] bg-gradient-to-br from-blue-200 to-green-400 text-black box-border p-[30px] px-[40px] rounded-[10px] animate-border">

                <h2 class="title text-[24px] font-bold text-center mt-[15px] pb-[30px]"> Ingresa tu Usuario y Contraseña</h2>

                <form class="mt-10" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                    <p class="text-red-500">{{ $errors->first() }}</p>
                    @endif


                    <h2 class="text-base m-0 p-0 font-normal block" >Ingresa tu Usuario : </h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-2 border-black text-black  text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="text" name="usuario" placeholder="Usuario" required>

                    <h2>Ingresa tu Contraseña : </h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-1 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400 " type="password" name="contraseña" placeholder="Contraseña" required>

                    <button class="w-full h-[40px] my-[10px] border-none text-white outline-none 
                    text-black bg-blue-500 text-[16px] rounded-[25px] hover:bg-[#3f8cb5] cursor-pointer" type="submit">Acceder</button>

                    <a class="block text-[18px] text-gray-500 mt-[5px] no-underline hover:text-black" href="{{ route('olvido') }}">¿Olvidaste tu contraseña?</a>
                    <a class="block text-[18px] text-gray-500 mt-[5px] no-underline hover:text-black" href="{{ route('registro') }}">Registrate</a>

                </form>
        </div>


            <div class=" w-[650px] h-[550px] text-white bg-black box-border p-[30px] px-[40px] rounded-[10px]">
                <h2 class="title text-[24px] font-bold text-center mt-[15px] pb-[30px]">Inicia Sesion con tus redes</h2>
                <div class="icons">
                    <button class="w-full my-[20px] relative rounded-[10px] border-none p-[10px] bg-[#db4a39] text-[16px] hover:bg-[#c23321] cursor-pointer"><i class=" absolute top-[15px] left-[25px] fas fa-envelope"></i> Inicia Sesion con Gmail</button>
                    <button class="w-full my-[20px] relative rounded-[10px] border-none p-[10px] bg-[#3b5999] text-[16px] hover:bg-[#2a4887] cursor-pointer"><i class=" absolute top-[15px] left-[25px] fab fa-facebook-f"></i> Inicia Sesion con Facebook</button>
                    <button class="w-full my-[20px] relative rounded-[10px] border-none p-[10px] bg-[#00acee] text-[16px] hover:bg-[#0087b5] cursor-pointer"><i class=" absolute top-[15px] left-[25px] fab fa-twitter"></i> Inicia Sesion con Twitter</button>
                    <button class="w-full my-[20px] relative rounded-[10px] border-none p-[10px] bg-gradient-to-br from-[#515BD4] to-[#F58529] text-white text-[16px] hover:from-[#3F5EFB] hover:to-[#e4761d] cursor-pointer"><i class="  fab fa-instagram"></i> Inicia Sesion con Instagram</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>