<footer class="bg-bg-black py-10 ">
            <div class="container flex flex-col md:flex-row items-center justify-between">
                <a href="/"><img class="h-16 mb-4 md:mb-0 hidden esm:hidden sm:block md:block" src="<?php echo get_template_directory_uri() . '/src/img/logo__light.svg'; ?>" alt="Logo"></a>
        
                <ul class="logo__small text-white text-xs mb-4 md:mb-0 flex flex-row items-center justify-between esm:flex sm:hidden md:hidden">
                    <li class="">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/logo__light.svg'; ?>" alt="Logo">
                        </a>
                    </li>   
                    
                    <li class="text-bg-black text-[10px]font-bold"><img src="<?php echo get_template_directory_uri() . '/src/img/icons/insta.svg'; ?>" alt="insta"></li>
                </ul>

                
                
                <div class="flex gap-6 flex-wrap w-full md:w-auto">
                    <div class="footer__section">
                        <p class="text-white font-bold pb-2 uppercase">Каталог</p>
                        <div class="mr-10 footer__column gap-10">
    
                            <!-- Меню каталога -->
                            <ul class="text-xs grid text-white pb-2">
                                <?php 
                                    wp_nav_menu(array(
                                    'theme_location' => 'bottom',
                                    'menu_class' => 'pb-2',
                                    'menu_id' => 'catalog_footer',
                                ));
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Меню навигационное -->
                    <div class="footer__section--2">
                        <p class="text-white font-bold pb-2 uppercase">Клиентам</p>
                        <div class="mr-10">
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
                    </div>
                    
                    <div class="footer__section--3">
                        <p class="text-white font-bold pb-2 uppercase">Контакты</p>
                        <div class="mr-10">
                            <ul class="text-xs text-white">
                                <li class="pb-2">г. Артем, 1-ая рабочая 41 стр. 1, 2 этаж</li>
                                <li class="pb-2"><a href="tel:+79143247860">+7 914 324-78-60</a></li>
                                <li class="pb-2"><a href="email:kalistratovamalai@mail.ru">kalistratovamalai@mail.ru</a></li>
                            </ul>
                        </div>  
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