const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
/*Click vao small img cua sproduct*/
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

const mainImg = document.getElementById('MainImg');
const smalling = document.querySelectorAll('.small-img');

smalling.forEach((small) =>{
    small.addEventListener('click', ()=>{
        mainImg.src = small.src
    })
})
/*Click vao product -> sproduct*/
const allProduct = document.querySelectorAll('#product1 .pro-container .pro')
console.log(allProduct);

allProduct.forEach(product =>{
    product.addEventListener('click', ()=>{
        window.location.href = 'sproduct.html'
    })
})