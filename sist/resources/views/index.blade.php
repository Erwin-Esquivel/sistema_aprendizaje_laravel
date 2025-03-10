<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beta</title>
</head>
<body class="m-0 p-0 bg-gray-200 transition-bg duration-500 ease-in-out">
<nav class="flex p-3 bg-gradient-to-r from-blue-500 to-blue-900 text-white justify-center" 
id="nav">
        <ul class="flex space-x-4">
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110">
            inicio
            </a>

            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110"
            href="{{ route('preguntas') }}">
            Preguntas Frecuentes
            </a>
            
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110"
            href="{{ route('creditos') }}">
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

    <div id="myDiv" class="flex items-start space-x-4 h-20 max-w">
        <div class="relative flex items-center h-20 space-x-4 transform transition-all duration-300 hover:scale-125 ">
        <!-- Imagen del personaje -->
        <img src="imagen_1.webp" alt="" class=" ml-[350px] mt-[250px] w-25 h-20 rounded-full border border-gray-400  " >
        
        <!-- Cuadro de texto -->
        <div class=" relative mt-[250px]  bg-white p-4 rounded-lg shadow-md border border-gray-300  w-[600px] ">
            <p id="dialogo" class="text-gray-700">¡Hola! Soy Nutz y en esta plataforma te enseñaré información sobre finanzas a través de divertidos juegos y actividades interesantes. </p>
            <!-- Flecha (Triángulo) del cuadro de diálogo -->
            <button id="btnSiguiente" class="ml-[450px] mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 transition">
                Siguiente →
            </button>
            <button id="btnActividad" class="ml-[450px] mt-3 bg-green-500 text-white px-4 py-2 rounded-lg shadow hover:bg-green-600 transition">
                Actividad!
            </button>
            
            <div class="absolute -left-2 top-4 w-4 h-4 bg-white border-l border-t border-gray-300 rotate-45"></div>
        </div>
        
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

         // Lista de diálogos
        const textos = [
            "¡Hola! Soy Nutz y en esta plataforma te enseñaré sobre finanzas.",
            "Aprenderás sobre ahorro, inversiones e impuestos de manera sencilla.",
            "¡Diviértete con juegos y actividades interactivas!",
            "Antes de aprender sobre inversiones o ahorros debemos saber qué es el RFC.",
            "Ve este <a href='https://www.youtube.com/shorts/Yb8oym1TXnY' target='_blank' class='text-blue-500 underline'>video</a> para saber sobre el RFC.",
            "¿Listo?, veamos qué has aprendido.",
        ];

        let indice = 0; // Controla el índice del texto

        document.getElementById("dialogo").innerHTML = textos[indice]; // Mostrar el primer texto
        document.getElementById("btnActividad").classList.add("hidden");

        document.getElementById("btnSiguiente").addEventListener("click", function() {
            indice++; // Avanza al siguiente texto
            
            if (indice < textos.length) {
                document.getElementById("dialogo").innerHTML = textos[indice]; // Cambia el texto con HTML
                if (indice === textos.length - 1) {
                    document.getElementById("btnSiguiente").classList.add("hidden");
                    document.getElementById("btnActividad").classList.remove("hidden");
                }
            }
        });

        document.getElementById("btnActividad").addEventListener("click", function() {
            window.location.href = "{{ route('actividad') }}";
        });

        // Detectar si la actividad fue completada
        const urlParams = new URLSearchParams(window.location.search);
        const actividadCompletada = urlParams.get('actividad_completada');

        if (actividadCompletada) {
            const nuevosTextos = [
                "¡Felicidades por completar la actividad!",
                "Ahora veamos sobre lo que es una inversión.",
                "Ve este <a href='https://www.youtube.com/watch?v=1FEfkcyDKbg' target='_blank' class='text-blue-500 underline'>video</a> para saber sobre las inversiones.",
                "¿Listo?, veamos qué has aprendido."
            ];

            let indice = 0;
            document.getElementById("dialogo").innerHTML = nuevosTextos[indice];
            document.getElementById("btnSiguiente").classList.remove("hidden");
            document.getElementById("btnActividad").classList.add("hidden");

            document.getElementById("btnSiguiente").onclick = function() {
                indice++;
                if (indice < nuevosTextos.length) {
                    document.getElementById("dialogo").innerHTML = nuevosTextos[indice];
                    if (indice === nuevosTextos.length - 1) {
                        document.getElementById("btnSiguiente").classList.add("hidden");
                        document.getElementById("btnActividad").classList.remove("hidden");
                    }
                }
            };

            document.getElementById("btnActividad").addEventListener("click", function() {
                window.location.href = "{{ route('actividad2') }}";
            });
        }
        const urlParam = new URLSearchParams(window.location.search);
        const actividadCompletada2 = urlParam.get('actividad_completada2');

        if (actividadCompletada2) {
            const nuevosTextos = [
                "¡Felicidades por completar la segunda actividad!",
            ];

            let indice = 0;
            document.getElementById("dialogo").innerHTML = nuevosTextos[indice];
            document.getElementById("btnSiguiente").classList.remove("hidden");
            document.getElementById("btnActividad").classList.add("hidden");

            document.getElementById("btnSiguiente").onclick = function() {
                indice++;
                if (indice < nuevosTextos.length) {
                    document.getElementById("dialogo").innerHTML = nuevosTextos[indice];
                    if (indice === nuevosTextos.length - 1) {
                        document.getElementById("btnSiguiente").classList.add("hidden");
                        document.getElementById("btnActividad").classList.remove("hidden");
                    }
                }
            };

            document.getElementById("btnActividad").addEventListener("click", function() {
                window.location.href = "{{ route('actividad2') }}";
            });
        }
    </script>
</body>
</html>