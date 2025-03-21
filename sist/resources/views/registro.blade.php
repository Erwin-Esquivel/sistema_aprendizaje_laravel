<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BETA V1.0.0</title>
</head>
<body class="m-0 p-0 bg-gradient-to-br from-gray-500 to-red-500 h-screen bg-cover bg-no-repeat">
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex w-[700px] h-auto bg-transparent">
            <div class="mt-10 w-[650px] h-auto bg-gradient-to-br from-blue-200 to-green-400 text-black box-border p-[30px] px-[40px] rounded-[10px] animate-border">
                <h2 class="title text-[24px] font-bold text-center mt-[15px] pb-[30px]">Registrate con un usuario y contraseña</h2>

                <form class="mt-[-5px]" action="{{ route('usuario.registrar') }}" method="POST">
                    @csrf
                    <h2 class="text-base m-0 p-0 font-normal block">Ingresa tu Nombre :</h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-2 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="text" name="nombre" placeholder="Nombre" required>

                    <h2 class="text-base m-0 p-0 font-normal block">Ingresa tu Usuario :</h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-2 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="text" name="usuario" placeholder="Usuario" required>

                    <h2 class="text-base m-0 p-0 font-normal block">Ingresa tu email :</h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-2 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="text" name="email" placeholder="Email" required>

                    <h2>Ingresa tu Contraseña :</h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-1 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="password" name="contraseña" placeholder="Contraseña" required>

                    <h2>Confirma tu Contraseña :</h2>
                    <input class="w-full h-[50px] my-[10px] border-none border-b-1 border-black text-black text-[16px] bg-gradient-to-br from-blue-250 to-green-400" type="password" name="contraseña_confirmation" placeholder="Confirma Contraseña" required>

                    <button class="w-full h-[40px] my-[10px] border-none text-white outline-none text-black bg-blue-500 text-[16px] rounded-[25px] hover:bg-[#3f8cb5] cursor-pointer" type="submit">Acceder</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>