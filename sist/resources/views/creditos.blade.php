<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="m-0 p-0 bg-purple-200 transition-bg duration-500 ease-in-out min-h-screen flex flex-col">
<nav class="flex p-3 bg-gradient-to-r from-blue-500 to-blue-900 text-white justify-center" 
id="nav">
        <ul class="flex space-x-4">
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110"
            href="{{ route('index') }}">
            inicio
            </a>

            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110"
            href="{{ route('preguntas') }}">
            Preguntas Frecuentes
            </a>
            
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110" 
            >
            creditos
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
    <div class="flex items-start space-x-4 h-20 max-w ml-[400px]">
        <div class="relative flex items-center h-20 space-x-4 transform transition-all duration-300 hover:scale-125 ">
        <!-- Cuadro de texto -->
        <div class=" relative mt-[250px]  bg-white p-4 rounded-lg shadow-md border border-gray-300  w-[600px] ">
            <p class="text-gray-700">Equipo de desarrollo:</p>
            <p class="text-gray-700">Esquivel Vega Erwin : Director de Desarrollo </p>
            <p class="text-gray-700">Galarza Niño Michell: Analista de informacion </p>
            <p class="text-gray-700">Vaca Moreno Diego Alejandro: Diseñador y recolector de informacion</p>
        </div>
    </div>
    </div>

    <footer class="bg-black h-20 w-full mt-auto justify-center flex">
        <!-- Contenido del footer -->
        <p class="text-white font-bold mt-8" > Copyright - @DevZone 2025 </p>
    </footer>

<script>
    document.getElementById('btn').addEventListener('click', function() {
            document.body.classList.toggle('bg-purple-200');
            document.body.classList.toggle('bg-gray-800');

            document.querySelectorAll('a').forEach(function(a) {
            a.classList.toggle('hover:bg-[#ff6ecf]');
            a.classList.toggle('hover:bg-purple-600');
            a.classList.toggle('bg-blue-500');
            a.classList.toggle('bg-gray-800');
            a.classList.toggle('text-white');
        });

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-blue-500');
            document.getElementById('nav').classList.toggle('to-blue-900');

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-black');
            document.getElementById('nav').classList.toggle('to-purple-900');


            document.querySelectorAll('.question-div').forEach(function(div) {
                div.classList.toggle('bg-white');
                div.classList.toggle('bg-gray-700');
                div.classList.toggle('text-black');
                div.classList.toggle('text-white');
            });

            document.getElementById('myDiv').classList.toggle('bg-white');
            document.getElementById('myDiv').classList.toggle('bg-black');
            document.getElementById('myDiv').classList.toggle('text-white');

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