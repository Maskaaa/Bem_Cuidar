let imagens= document.querySelectorAll('.small_img');
let modal = document.querySelector('.cinza');
let modalImg = document.querySelector('#cinza_img');
let btClose = document.querySelector('#bt_close');
let srcVal="";

for(let i =0; i<imagens.length;i++){
    imagens[i].addEventListener('click',function(){
        console.log("clicou");
        srcVal = imagens[i].getAttribute('fullsrc');
        modalImg.setAttribute('src', srcVal);
        modal.classList.toggle('cinza_active');
        document.querySelector('header').style.display = 'none';
    });
    
}
btClose.addEventListener('click', function(){
    modal.classList.toggle('cinza_active');
    document.querySelector('header').style.display = 'block';
});
