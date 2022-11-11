let searchBtn = document.querySelector("#search-btn");
let searchForm = document.querySelector(".header .search-form");

searchBtn.onclick = () => {
  searchBtn.classList.toggle("fa-times");
  searchForm.classList.toggle("active");
  menuBtn.classList.remove("fa-times");
  navbar.classList.remove("active");
};

let menuBtn = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menuBtn.onclick = () => {
  menuBtn.classList.toggle("fa-times");
  navbar.classList.toggle("active");
  searchBtn.classList.remove("fa-times");
  searchForm.classList.remove("active");
};

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchForm.classList.remove("active");
  menuBtn.classList.remove("fa-times");
  navbar.classList.remove("active");
};

function iniciaPopup(popId) {
  const pop = document.getElementById(popId);
  if (pop) {
    pop.classList.add("mostrar");
    botaoFechar = document.getElementById("fecharPopup");
    botaoFechar.addEventListener("click", (e) => {
      pop.classList.remove("mostrar");
    });
  }
}

const adicionar = document.getElementById("adicionar");
adicionar.addEventListener("click", (e) => {
  e.preventDefault();
  iniciaPopup("popId");
});

//desaparecer borda em pesquisar
function ativaTabela() {
  const borda = document.querySelector(".table_responsive2");
  const botaoPesquisar = document.querySelector("#pesquisar");

  if (botaoPesquisar) {
    borda.classList.remove("table_responsive2-ativa");
    botaoPesquisar.addEventListener("click", (e) => {
      borda.classList.add("table_responsive2-ativa");
      console.log("ativa");
    });
  }
}
