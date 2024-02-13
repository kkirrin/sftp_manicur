<footer class="bg-bg-black py-10 ">
            <div class="container flex flex-col md:flex-row items-center justify-between">
                <a href="/"><img class="h-16 mb-4 md:mb-0 hidden esm:hidden sm:block md:block" src="<?php echo get_template_directory_uri() . '/src/img/logo.png'; ?>" alt="Logo"></a>
        
                <ul class="text-white text-xs mb-4 md:mb-0 flex flex-col items-center esm:block sm:hidden md:hidden">
                    <li class="pb-4">
                        <a href="/">
                            <img class="h-16" src="<?php echo get_template_directory_uri() . '/src/img/logo.png'; ?>" alt="Logo">
                        </a>
                    </li>     
                </ul>

                
                
                <div class="flex gap-6 flex-wrap w-full md:w-auto">
                    <div class="mr-10">
                        <p class="text-white font-bold pb-2 uppercase">Каталог</p>

                        <!-- Меню каталога -->
                        <ul class="text-xs grid grid-cols-2 gap-2 text-white">
                            <?php 
                                wp_nav_menu(array(
                                'theme_location' => 'bottom',
                                'menu_class' => 'pb-2',
                                'menu_id' => 'catalog_footer',
                            ));
                            ?>
                        </ul>
                    </div>

                    <!-- Меню навигационное -->
                    <div class="mr-10">
                        <p class="text-white font-bold pb-2 uppercase">Клиентам</p>
                        <ul class="text-xs text-white">
                            <?php 
                                wp_nav_menu(array(
                                'theme_location' => 'bottom-right',
                                'menu_class' => 'pb-2',
                                'menu_id' => 'menu_footer',
                                ));
                            ?>
                        </ul>
                    </div>
                    
                    <div class="mr-10">
                        <p class="text-white font-bold pb-2 uppercase">Контакты</p>
                        <ul class="text-xs text-white">
                            <li class="pb-2">г. Артем, 1-ая рабочая 41 стр. 1, 2 этаж</li>
                            <li class="pb-2"><a href="tel:+79990586241">+7 (999) 058-62-41</a></li>
                            <li class="pb-2"><a href="email:kalistratovamalai@mail.ru">kalistratovamalai@mail.ru</a></li>
                        </ul>
                    </div>  
                </div>
            </div>
        
            <div class="container flex items-center justify-between text-gray pt-6 flex-wrap">
                <div class="text-xs flex justify-center items-center gap-5">
                    <p>«Твой маникюрный» © 2023 Все права защищены</p>
                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/mastercard.svg'; ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/visa.svg'; ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/mir.svg'; ?>" alt="">
                </div>
                <a href="#" class="text-xs underline">
                    Политика обработки персональных данных
                </a>
            </div>    
        </footer>
        <div class="scroll-top">
            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="27" viewBox="0 0 16 27" fill="none">
                <path d="M7 26C7 26.5523 7.44772 27 8 27C8.55228 27 9 26.5523 9 26H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 26V1H7V26H9Z" fill="#202020"/>
            </svg>
        </div>
        
        <?php wp_footer(); ?>

        <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/baguettebox.js"></script>
        <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>