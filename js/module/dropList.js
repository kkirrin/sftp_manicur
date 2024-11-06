export const initDropList = () => {
    const dropdownToggles = document.querySelectorAll('#sidebar-menu li');
    
    // Для фильтров
    const dropdownFilter = document.querySelectorAll('.dropListFilter')
    const buttonShowMenu = document.querySelector('.btn_menu_filter')
    const sidebar = document.querySelector('.sidebar_menu')


    dropdownToggles.forEach((el) => {
        const button = el.querySelector('a');
        const content = el.querySelector('ul');
    
        // console.log(button);
        // if (content.length = 0) {
        //     button.classList.remove("::before")
        // }

        button.addEventListener('click', (evt) => {
            if (evt.currentTarget.classList.contains('.is-active')) {
                evt.currentTarget.classList.remove('.is-active');
            }
            if (content) { 
                evt.preventDefault();
    
                const currentButton = evt.currentTarget;
                currentButton.classList.toggle('is-active');
                content.classList.toggle('is-active');
                
                if (currentButton.classList.contains('is-active')) {
                    
                    content.style.maxHeight = 'max-content';

                } else {
                    content.style.maxHeight = null;
                }
            }
        });
        
    });
    


    dropdownFilter.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            
            const ul = toggle.querySelector('ul');
            ul.classList.toggle('hidden');
        });
    });

    if(buttonShowMenu) {
        buttonShowMenu.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar_menu')
            sidebar.classList.toggle('hidden')
        })
    }



    
}