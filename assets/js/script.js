const theme = document.getElementById('moon_icon'); /* tá funcionado pela metade */

theme.addEventListener('click', () => {
    const cont = document.getElementById('container');

    if(theme.classList.contains('fa-moon')) {
        theme.classList.remove('fa-moon');
        theme.classList.add('fa-sun');
        cont.classList.add('dark');
        return;
    }
    theme.classList.remove('fa-sun');
    theme.classList.add('fa-moon');
    cont.classList.remove('dark');
});