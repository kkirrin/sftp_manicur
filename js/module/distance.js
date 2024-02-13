export const initDistance = () => {
    document.querySelectorAll('.header-menu .menu-slide').forEach(function(menuSlide) {
        menuSlide.addEventListener('mouseover', function(e) {
        const subMenu = menuSlide.querySelector('.sub-menu');
        const screenWidth = window.innerWidth;
        const subMenuWidth = subMenu.offsetWidth;
        const distanceToRight = screenWidth - menuSlide.getBoundingClientRect().right;
        if (distanceToRight > subMenuWidth) {
            subMenu.style.left ='auto';
            } else {

            subMenu.style.right = '0';
            }
                }
            );
        }
    )
}

