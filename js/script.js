let elem = document.querySelector('.modal_user');

document.addEventListener( 'click', function(event) {
if(event.target.classList.contains('modal_user') || event.target.classList.contains('close') || event.target.classList.contains('closeBtn')){
    elem.classList.add('d-none');
};
if (event.target.classList.contains('open-modal')){
    elem.classList.remove('d-none');
}
});

