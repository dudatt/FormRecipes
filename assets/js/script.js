const theme = document.getElementById('moon_icon');

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

function valEmail(){
    let email = document.getElementById('email');
    const re = /^\w.+@\w{5,7}.*\.\w{3}$/; //corrigir o regex
    if (re.test(email)){
        alert('deu bom');
    } else {
        alert('deu ruim fia');
    }
}