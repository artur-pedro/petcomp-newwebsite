
document.addEventListener("DOMContentLoaded", (e) => {
  console.log("Hello World")
  var pages1 = document.querySelectorAll(".page-item")
  var url1 = window.location.href;
  var previous1 = document.querySelector("#previous") 
  var next1 = document.querySelector("#next") 
  var page1 = url1.split('page=')[1] ?? 1;
  console.log(pages1.length)
  pages1.forEach((page2) => {
    if(page2.innerText == page1) {
      page2.classList.add("active");
    }
    if(page1 == 1) {
      previous1.classList.add("disabled")
    }
    if(page1 == (pages1.length-2)) {
      next1.classList.add("disabled")
    }
  })
})
document.addEventListener('DOMContentLoaded', () => {
  // Seleciona todos os botões "mostrar mais"
  const showMoreButtons = document.querySelectorAll('.button-showmore');
  const closeButtons = document.querySelectorAll('.popup-close');
  let popupOpen = false; // Flag para verificar se algum popup está aberto

  // Exibir o popup ao clicar no botão
  showMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
      if (!popupOpen) { // Verifica se algum popup está aberto
        const popupId = button.getAttribute('data-id');
        const popup = document.getElementById(`popup-${popupId}`);
        popup.classList.add('show');
        popupOpen = true; // Define a flag como verdadeira quando o popup está aberto
      }
    });
  });

  // Fechar o popup ao clicar no botão "fechar"
  closeButtons.forEach(button => {
    button.addEventListener('click', () => {
      const popup = button.closest('.popup');
      popup.classList.remove('show');
      popupOpen = false; // Define a flag como falsa quando o popup é fechado
    });
  });

  // Fechar o popup clicando fora do conteúdo
  document.querySelectorAll('.popup').forEach(popup => {
    popup.addEventListener('click', (event) => {
      // Verifica se o clique foi fora do conteúdo principal do popup
      const content = popup.querySelector('.popup-content');
      if (!content.contains(event.target)) {
        popup.classList.remove('show');
        popupOpen = false; // Define a flag como falsa quando o popup é fechado
      }
    });
  });
});


