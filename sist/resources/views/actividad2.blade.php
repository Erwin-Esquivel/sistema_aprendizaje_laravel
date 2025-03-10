<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="m-0 p-0 bg-gray-200 transition-bg duration-500 ease-in-out">
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
            
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110">
            creditos
            </a>

            <li class=" absolute right-3 hover:animate-bounce font-bold mt-[-5px]" >
                <button class="px-4 py-2 cursor-pointer border-0 outline-none bg-[#212121] text-white font-semibold tracking-wide rounded-md shadow-md mt-3" id="btn">DARK</button>
            </li>
        </ul>
    </nav>
    <div id="pregun" class="flex flex-col justify-center items-center h-[520px] bg-gray-200 p-4 transition-bg duration-500 ease-in-out">
    <h1 class="text-xl font-bold mb-4">Completa el párrafo:</h1>
    
    <p class="bg-white p-4 rounded-lg shadow-md border border-gray-300 text-gray-700 text-center w-[500px]">
        Una inversión es una actividad que consiste en renunciar al<input type="text" id="respuesta1" class="border-b-2 border-gray-400 outline-none w-[300px] text-center">
        de los recursos con el objetivo de obtener un beneficio mayor en el<input type="text" id="respuesta2" class="border-b-2 border-gray-400 outline-none w-24 text-center">.
    </p>

    <button onclick="verificarRespuestas()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 transition">
        Verificar Respuestas
    </button>

    <!-- Contenedor del cuadro de diálogo (oculto por defecto) -->
    <div id="cuadroDialogo" class="hidden flex flex-col items-start space-x-4 max-w-md mt-6">
        <div class="flex items-start space-x-4">
            <!-- Imagen de la Ardilla (Usa la imagen que subiste) -->
            <img src="imagen_1.webp"  alt="Nutz" class="w-16 h-16 rounded-full border border-gray-400">
            
            <!-- Cuadro de texto -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-300 relative w-64">
                <p id="dialogo" class="text-gray-700"></p>
                <div class="absolute -left-2 top-4 w-4 h-4 bg-white border-l border-t border-gray-300 rotate-45"></div>
            </div>
            <button id="btnSiguiente" class="ml-[450px] mt-3 bg-green-500 text-white px-4 py-2 rounded-lg shadow hover:bg-green-600 transition">
            Siguiente
        </button>
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

            document.getElementById('pregun').classList.toggle('bg-gray-200');
            document.getElementById('pregun').classList.toggle('bg-gray-800');
            document.getElementById('pregun').classList.toggle('text-white');

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-blue-500');
            document.getElementById('nav').classList.toggle('to-blue-900');

            document.getElementById('nav').classList.toggle('bg-gradient-to-r');
            document.getElementById('nav').classList.toggle('from-black');
            document.getElementById('nav').classList.toggle('to-purple-900');


    

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


                
        function verificarRespuestas() {
            const r1 = document.getElementById("respuesta1").value.toLowerCase();
            const r2 = document.getElementById("respuesta2").value.toLowerCase();
            const cuadroDialogo = document.getElementById("cuadroDialogo");
            const dialogoTexto = document.getElementById("dialogo");

            if (r1 === "beneficio inmediato" || r1==="Beneficio inmediato" 
            && r2 === "futuro" || r2==="Futuro" ) {
                dialogoTexto.textContent = "✅ ¡Bien hecho! Has aprendido sobre las inveriones, vayamos a lo que sigue.";
                btnSiguiente.classList.remove("hidden");
                document.getElementById("btnSiguiente").addEventListener("click", function() {
                    window.location.href = "{{ route('index', ['actividad_completada2' => 1]) }}";
                });
            } else {
                dialogoTexto.textContent = "❌ Inténtalo de nuevo, puedes lograrlo.";
                btnSiguiente.classList.add("hidden");
            }

            // Mostrar el cuadro de diálogo
            cuadroDialogo.classList.remove("hidden");
        }


    </script>




</body>
</html>