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


