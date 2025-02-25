<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="m-0 p-0 bg-purple-200 transition-bg duration-500 ease-in-out">
<nav class=" transition-all duration-300 ease-in-out flex p-3 bg-gradient-to-r from-blue-500 to-blue-900 text-white justify-center" 
id="nav">
        <ul class="flex space-x-4">
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110"
            href="{{ route('index') }}">
            inicio
            </a>

            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110">
            Preguntas Frecuentes
            </a>
            
            <a  class="text-sm rounded-lg no-underline py-2.5 px-12 text-white bg-blue-700 flex flex-col uppercase my-2 tracking-wide text-center transition-all duration-300 ease-in-out hover:bg-blue-900 hover:scale-110" 
            href="{{ route('creditos') }}">
            creditos
            </a>

            <li class=" absolute right-3 hover:animate-bounce font-bold mt-[-5px]" >
                <button class="px-4 py-2 cursor-pointer border-0 outline-none bg-[#212121] text-white font-semibold tracking-wide rounded-md shadow-md mt-3" id="btn">DARK</button>
            </li>
        </ul>
    </nav>

    <div>
    <!-- Pregunta 1 -->
    <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div ">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 text-white 
      rounded-lg focus:outline-none hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500 ">¿Qué significa RFC?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>El Registro Federal de Contribuyentes (RFC) es una clave única que identifica a personas y empresas ante el Servicio de Administración Tributaria (SAT) en México.</p>
      </div>
    </div>
    <!-- Pregunta 2 -->
    <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Por qué es importante el ahorro?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>El ahorro permite enfrentar emergencias, alcanzar metas financieras y tener estabilidad económica a largo plazo, evitando endeudamientos innecesarios.</p>
      </div>
    </div>

    <!-- Pregunta 3 -->
    <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Qué es una inversión?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>Es la acción de destinar dinero a un activo o proyecto con la expectativa de generar rendimientos o ganancias en el futuro.</p>
      </div>
    </div>


    <!-- Pregunta 4 -->
    <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Qué tipo de inversiones existen?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>Existen inversiones de renta fija (como bonos y cetes), de renta variable (como acciones) y alternativas (como criptomonedas o bienes raíces).</p>
      </div>
    </div>

    <!-- Pregunta 5 -->
    <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Qué es el ISR?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>El Impuesto Sobre la Renta (ISR) es un tributo que deben pagar personas y empresas sobre sus ingresos, según lo establecido por la ley fiscal.</p>
      </div>
      
  </div>
  <!-- Pregunta 6 -->
  <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Cuál es la diferencia entre ahorro e inversión?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>El ahorro consiste en reservar dinero sin riesgo de pérdida, mientras que la inversión implica utilizar ese dinero en activos que pueden generar ganancias, pero con cierto nivel de riesgo.

        </p>
      </div>

      </div>

      <!-- Pregunta 7 -->
      <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Qué es un fondo de inversión?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>
        Es un instrumento financiero donde varias personas aportan dinero, 
        el cual es administrado por expertos para invertir en diversos activos y obtener rendimientos
        </p>
      </div>
      </div>

      <!-- Pregunta 8 -->
      <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Cómo afecta la inflación a los ahorros?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>
        La inflación reduce el poder adquisitivo del dinero con el tiempo, 
        por lo que el dinero ahorrado sin generar intereses pierde valor real.
        </p>
      </div>
      </div>
        <!-- Pregunta 9 -->
        <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Quién debe tramitar el RFC?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>
        Toda persona física o moral que realice actividades económicas en México y necesite pagar impuestos o emitir facturas debe obtener su RFC
        </p>
      </div>
      </div>
        <!-- Pregunta 10 -->
        <div class="bg-white p-6 transition-all duration-300 ease-in-out shadow-lg question-div">
      <button class="accordion-button font-bold text-left w-full p-4 bg-purple-500 
      text-white rounded-lg focus:outline-none  hover:animate-pulse  hover:bg-gradient-to-r from-blue-500 to-purple-500">¿Qué es una deducción fiscal?</button>

      <div class="accordion-content mt-2 p-4 bg-purple-100 rounded-lg hidden">
        <p>
        Es un gasto permitido por la ley que puede restarse de los ingresos sujetos a impuestos, reduciendo así el monto total a pagar al SAT.
        </p>
      </div>
      </div>

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

        document.querySelectorAll('.accordion-button').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        content.classList.toggle('hidden');
      });
    });
    </script>
</body>
</html>