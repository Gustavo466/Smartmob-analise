
function tipo( tip ){
    sessionStorage.setItem( 'tipo', tip );
    window.location.href = 'entrar.html';
}

function gerente( ){
    var tipo = document.getElementById('tipo');
    tipo.value = 'gerente';
    var formulario = document.getElementById('form');
    formulario.style.display = 'flex';
    var escolha = document.getElementById('escolha');
    escolha.style.display = 'none';
}

function corretor(  ){
    var tipo = document.getElementById('tipo');
    tipo.value = 'corretor';
    var formulario = document.getElementById('form');
    formulario.style.display = 'flex';
    var escolha = document.getElementById('escolha');
    escolha.style.display = 'none';
}

function cliente( ){
    var tipo = document.getElementById('tipo');
    tipo.value = 'cliente';
    var formulario = document.getElementById('form');
    formulario.style.display = 'flex';
    var escolha = document.getElementById('escolha');
    escolha.style.display = 'none';
}