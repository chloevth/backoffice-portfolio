let modal = null;

const openModal = function (e) {
    e.preventDefault();
    const target = document.querySelector(e.target.getAttribute('href'));
    target.style.display = null;
    modal = target;
    modal.addEventListener('click', closeModal);
    modal.querySelector('.js_modal_close').addEventListener('click', closeModal);
   
}

const closeModal = function(e){
    if (modal === null) return;
    e.preventDefault();
    target.style.display = "none";
    modal = target;
    modal.removeEventListener('click', closeModal);
    modal.querySelector('.js_modal_close').removeEventListener('click', closeModal);
    modal = null;
}


document.querySelectorAll('.js_modal').forEach(a =>{
    a.addEventListener('click', openModal);
    
});