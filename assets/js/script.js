//corrigir

let tema = document.getElementById('moon_icon');

tema.addEventListener('click', () => {
    const container = document.getElementById('container');
    const form = document.getElementById('login_esp');
    if (tema.classList.contains('fa-moon')){
        tema.classList.remove('fa-moon');
        tema.classList.add('fa-sun');

        container.classList.add('dark');
        form.classList.add('dark');
        return
    }
    tema.classList.add('fa-moon');
    tema.classList.remove('fa-sun');
    container.classList.remove('dark');
    form.classList.remove('dark');
})

