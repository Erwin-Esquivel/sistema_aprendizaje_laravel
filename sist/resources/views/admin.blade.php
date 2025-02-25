<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="m-0 p-0 bg-gray-200 transition-bg duration-500 ease-in-out">
<nav class="flex p-3 bg-gradient-to-r from-green-500 to-green-900 text-white justify-center" 
id="nav">
        <ul class="flex space-x-4">
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-green-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-green-900 hover:scale-110">
            Usuarios
            </a>

            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-green-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-green-900 hover:scale-110"
            href="{{ route('preguntas') }}">
            Editar informacion de usuarios
            </a>
            

            <li class=" absolute right-3 hover:animate-bounce font-bold mt-[-5px]" >
                <button class="px-4 py-2 cursor-pointer border-0 outline-none bg-[#212121] text-white font-semibold tracking-wide rounded-md shadow-md mt-3" id="btn">DARK</button>
            </li>
            
            <li class="hover:animate-bounce font-bold">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <button id="btn2" type="submit" class=" px-4 py-2 bg-red-500 text-white p-2 rounded  mt-3">Cerrar Sesión</button>
                </form>
                @endauth
            </li>

        </ul>
    </nav>

    <div class="flex justify-center items-center mt-10 ">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2  flex justify-center items-center transform transition-all duration-300 hover:scale-125 hover:shadow-xl">
            <p class="font-bold "> Se ha logeado como administrador</p> 
        </div>
    </div>

    <script>
        document.getElementById('btn').addEventListener('click', function() {
            document.body.classList.toggle('bg-gray-200');
            document.body.classList.toggle('bg-gray-800');

            document.querySelectorAll('a').forEach(function(a) {
            a.classList.toggle('hover:bg-[#ff6ecf]');
            a.classList.toggle('hover:bg-purple-600');
            a.classList.toggle('bg-blue-500');
            a.classList.toggle('bg-gray-800');
            a.classList.toggle('text-white');
        });

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-green-500');
            document.getElementById('nav').classList.toggle('to-green-900');

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-black');
            document.getElementById('nav').classList.toggle('to-red-900');

            var btn = document.getElementById('btn');
            btn.classList.toggle('bg-[#212121]');
            btn.classList.toggle('bg-[#f1f1f1]');
            btn.classList.toggle('text-white');
            btn.classList.toggle('text-black');
            if (btn.innerText === 'DARK') {
                btn.innerText = 'LIGHT';
            } else {
                btn.innerText = 'DARK';
            }
        });
    </script>

</body>
</html>