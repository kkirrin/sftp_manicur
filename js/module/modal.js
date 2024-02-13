export const initNavModal = () => {
    const btns = document.querySelectorAll('.header-wrapper');
    console.log(btns)
    btns.forEach((btn) => {
        const modal = btn.nextElementSibling;
        console.log(modal)
        btn.addEventListener('click', function() {
            modal.classList.toggle('hidden');
            modal.classList.toggle('opacity');
        });
    });
    const btnCart = document.querySelectorAll('.header__cart');
    console.log(btnCart)
    btnCart.forEach((btn) => {
        const modal = btn.nextElementSibling;
        console.log(modal)
        btn.addEventListener('click', function() {
            modal.classList.toggle('hidden');
            modal.classList.toggle('opacity');
        });
    });
}
