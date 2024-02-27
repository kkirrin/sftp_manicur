<?php
/*
Template Name: Политика конфиденциальности
*/
?>
<?php get_header(); ?>


        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
           <section class="pt-24 esm:pt-24 sm:pt-40 md:pt-52">
                <div class="container">

                    <div class="breadcrumb">
                        <ul class="breadcrumb__list flex items-center justify-start gap-2">
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="/">
                                    Главная
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                /
                            </li>
                            <li class="breadcrumb__item">
                                <span class="font-semibold text-bg-black">Политика конфиденциальности</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="pb-20 esm:pb-20 sm:pb-32 md:pb-40">
                <div class="container">
                    <h2 class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl 0 py-10 font-extrabold"> Политика конфиденциальности</h2> 
                    
                    <?php the_content(); ?>

                </div>
            </section>


            
        </main>

    <?php get_footer(); ?>