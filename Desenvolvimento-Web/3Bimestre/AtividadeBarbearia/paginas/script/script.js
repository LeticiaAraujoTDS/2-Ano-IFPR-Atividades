function abrirModal() {
    const modal = document.getElementById('modal-form');
    modal.classList.add('aberto');
}

function fecharModal() {
    const modal = document.getElementById('modal-form');
    modal.classList.remove('aberto');
}

const btnMenu = document.getElementById("abrir-menu");
const menu = document.querySelector(".menu-celular");
const overlay = document.querySelector(".overlay-menu");
const btnFechar = document.querySelector(".botao-fechar a");


btnMenu.addEventListener("click", () => {
    menu.style.width = "70%";
    overlay.style.display = "block";
});

btnFechar.addEventListener("click", () => {
    menu.style.width = "0";
    overlay.style.display = "none";
});

overlay.addEventListener("click", () => {
    menu.style.width = "0";
    overlay.style.display = "none";
});

