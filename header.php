<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Твой маникюрный</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div>
        <header class="z-10 w-full md-28 transition-colors fixed py-4 bg-white">
            <div class="wrapper container md:gap-5 items-center justify-between flex pt-2 border-b-2 border-light-gray pb-0 esm:pb-0 sm:pb-2 md:pb-2">

                <!-- Мобильная кнопка -->
                <div class="flex items-center justify-center gap-2">
                    <div class="btn__menu--mobile shadow-main-black items-center gap-6 flex esm:flex sm:hidden md:hidden">
                        <button class="flex items-center gap-2 btn__shadow">
                            <svg class="h-3 w-3" viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                        </button>   
                        
                    </div>

                    <a href="/"><img class="m-auto w-28 flex esm:flex sm:hidden md:hidden" src="<?php echo get_template_directory_uri() . '/src/img/logo.png'; ?>" alt="Logo"></a>
         
                    
            
                    <div class=" hidden esm:hidden sm:flex md:flex gap-6">
                        <a href="/"><img class="m-auto w-32 md:w-48" src="<?php echo get_template_directory_uri() . '/src/img/logo.png'; ?>" alt="Logo"></a>
                        <div class="flex items-center">
                            <div class="relative">
                                <?php echo do_shortcode('[fibosearch]'); ?>    
                            </div>
                          </div>
                    </div>
                    
                    <div class="mobile-menu h-screen">
                        <nav class="container flex md:justify-between justify-evenly md:flex-nowrap flex-wrap">
                            <div class="p-4">

                                <!-- Мобильное меню -->

                                <nav class="catalog-menu">
                                    <?php wp_nav_menu([
                                        'theme_location' => 'sidebar-menu',
                                        'container' => '',
                                        'menu_class' => '',
                                        'menu_id' => 'sidebar-menu'
                                        ]);
                                    ?>
                                </nav>
                                
                                <div>	
                    </div>
                        
                                <ul class="pt-2">
                                    <li class="text-bg-black text-[10px] pt-5 font-bold"><address>1-ая рабочая 41 стр. 1, 2 этаж</address></li>
                                    <li class="text-bg-black text-[10px] pt-5 font-bold"><a href="tel:+79990586241">+7 (999) 058-62-41</a></li>
                                    <li class="text-bg-black text-[10px] pt-5 font-bold"><a href="email:kalistratovamalai@mail.ru">kalistratovamalai@mail.ru</a></li>
                                    <li class="text-bg-black text-[10px] pt-5 font-bold"><img src="<?php echo get_template_directory_uri() . '/src/img/icons/insta.svg'; ?>" alt="insta"></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>

                <div class="gap-5 items-center justify-center hidden esm:hidden sm:flex md:hidden">

                    <!-- Главное меню -->
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'top',
                            'container' => 'ul class="mr-4"',
                            'menu_class' => 'text-gray flex gap-10 justify-center items-center mr-4',
                        ]); 

                    ?>

                    <button id="main__btn" class="text-white py-3 px-2 rounded-md bg-bg-black header-wrapper btn__shadow">
                        <?php
                        global $user_ID, $user_identity, $current_user;
                        wp_get_current_user();
                        if (!$user_ID):
                            ?>
                            <p>Вход/регистрация</p>
                            <?php
                        else:

                            $first_name = $current_user->user_firstname;
                            $last_name = $current_user->user_lastname;
                            ?>

                            <p>
                                <?php echo $first_name . ' ' . $last_name; ?>
                            </p>

                            <?php
                        endif;
                        ?>
                    </button>
                    <div class="modal-wrapper w-60 hidden">
                        <div class="modal-content">

                        <nav class="nav">
                            <?php wp_nav_menu([
                                'theme_location' => 'modal_menu',
                                'container' => 'ul',
                                'menu_class' => 'p-5',
                                'menu_id' => ''
                                ]);
                            ?>
                        </nav>
                        </div>
                    </div>      
                </div>

                <div class="gap-5 items-center justify-center flex sm:hidden md:hidden">
                    <div class="mr-4 flex items-center justify-start font-bold">
                        <button href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header__cart relative">
                           
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                            class=" bg-bg-gray p-2 rounded-md rounded-xl box-shadow">
                            <?php echo minicart_count_after_content(); ?>
                            
                        </button>

                        <div class="modal-wrapper w-60 hidden">
                            <div class="modal-content">
                                <div class="mini-card">
                                    <?php the_widget('WC_Widget_Cart', 'title=') ?>
                                </div>
                            </div>
                        </div>      

                    </div>
                    <button class="header-wrapper btn__shadow"><img class=" bg-light-gray p-2 rounded-md" src="<?php echo get_template_directory_uri() . '/src/img/icons/search.svg'; ?>" alt="" ></button></li>
                    <div class="modal-wrapper w-60 hidden mr-10">
                        <div class="modal-content">
                            <div class="flex items-center">
                                <div class="relative">
                                <?php echo do_shortcode('[fibosearch]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>      
                    <button class="header-wrapper btn__shadow"><img class=" bg-bg-black p-2 rounded-md" src="<?php echo get_template_directory_uri() . '/src/img/icons/login.svg'; ?>" alt="" ></button></li>
                    <div class="modal-wrapper w-60 hidden">
                        <div class="modal-content">
                            <nav class="nav">
                                <?php wp_nav_menu([
                                    'theme_location' => 'modal_menu',
                                    'container' => 'ul',
                                    'menu_class' => 'p-5',
                                    'menu_id' => ''
                                 ]);
                                ?>
                            </nav>
                        </div>
                    </div>      
                </div>

                <section id="popup1" class="popup">
                    <div class="popup__body">
                        <div class="popup__content">
                            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                    <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40"/>
                                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40"/>
                                    </svg>
                            </button>
                            <h2 class="text-start text-white z-10 font-normal md:text-4xl text-xl uppercase pb-4 ">Найти</h2>
            
                            <div class="flex items-center">
                                <div class="relative">
                                <?php echo do_shortcode('[fibosearch]'); ?>
                              </div>
                    </div>
                </section>
                <section id="popup2" class="popup">
                    <div class="popup__body">
                        <div class="popup__content">
                            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                    <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40"/>
                                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40"/>
                                    </svg>
                            </button>
                            <div class="modal-content">
                                <nav class="nav">
                                    <?php wp_nav_menu([
                                        'theme_location' => 'modal_menu',
                                        'container' => 'ul',
                                        'menu_class' => 'p-5',
                                        'menu_id' => ''
                                    ]);
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>

                
                <ul class="mobile gap-2 flex-wrap t
                xt-main-black hidden esm:hidden sm:hidden md:flex items-center justify-center">
                    <!-- Главное меню -->
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'top',
                            'container' => 'ul class="mr-4"',
                            'menu_class' => 'text-gray flex gap-10 justify-center items-center mr-4',
                        ]); 
                    ?>

                    <li class="mr-4">
                    <button id="main__btn" class="text-white rounded-md bg-bg-black header-wrapper btn__shadow" style="padding: 11px;">
                            <?php
                            global $user_ID, $user_identity, $current_user;
                            wp_get_current_user();
                            if (!$user_ID):
                                ?>
                                <p>Вход/регистрация</p>
                                <?php
                            else:

                                $first_name = $current_user->user_firstname;
                                $last_name = $current_user->user_lastname;
                                ?>

                                <p>
                                    <?php echo $first_name . ' ' . $last_name; ?>
                                </p>

                                <?php
                            endif;
                            ?>
                        </button>
                        <div class="modal-wrapper w-60 hidden">
                            <div class="modal-content">
                                <nav class="nav">
                                    <?php wp_nav_menu([
                                        'theme_location' => 'modal_menu',
                                        'container' => 'ul',
                                        'menu_class' => 'p-5',
                                        'menu_id' => ''
                                    ]);
                                    ?>
                                </nav>
                            </div>
                        </div>      
        
                      </li>
                    <li class="mr-4 flex items-center justify-start font-bold">
                         <button href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header__cart relative">
                               
                         <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                             class=" bg-bg-gray p-2 rounded-md rounded-xl box-shadow">
                            <?php echo minicart_count_after_content(); ?>
                        </button>

                        <div class="modal-wrapper w-60 hidden">
                            <div class="modal-content">
                                <div class="mini-card">
                                    <?php the_widget('WC_Widget_Cart', 'title=') ?>
                                </div>
                            </div>
                        </div>   
                        


                    </li>
                </ul>
     
            </div>
            <div class="container">
                <menu class="header-menu pt-0 esm:pt-0 sm:pt-7 md:pt-9 pb-0 esm:pb-0 sm:pb-4 md:pb-4 hidden esm:hidden sm:block md:block">

                    <!-- Верхнее горизонтальное меню -->
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'top_horizontal_menu',
                            'container' => 'ul',
                            'container_class' => 'gap-4 relative flex justify-start flex-wrap',
                            'menu_class' => 'text-gray flex gap-2 justify-center items-center mr-3',
                            'menu_id' => 'menu_ul',
                        ));
                    ?>
                    
                </menu>
            </div>
        

        </header>