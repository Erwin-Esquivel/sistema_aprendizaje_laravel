<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="m-0 p-0 bg-purple-200 transition-bg duration-500 ease-in-out">
<nav class="flex p-3 bg-gradient-to-r from-blue-500 to-blue-900 text-white justify-center" 
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
</body>
</html>