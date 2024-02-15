<?php
/*
Template Name: Доставка и оплата - шаблон
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
                                <span class="font-semibold text-bg-black">Доставка и оплата</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="pb-20 esm:pb-20 sm:pb-32 md:pb-40">
                <div class="container">
                    <h2 class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl py-4 esm:py-4 sm:py-4 md:py-5 font-extrabold"> Доставка и оплата</h2> 
                    <div class="bg-light-gray py-5 px-10 md:py-14 md:px-28 relative">
                        <ul class="list-disc sm:max-w-md md:max-w-3xl">
                            <li class="font-bold pb-2">Доставка во все регионы РФ (сдэк, деловые линии) </li>
                            <li class="font-bold pb-2">Город Артём доставка курьером</li>
                            <li>Условия: </li>
                            <p class="p-2">Доставка по городу Артём и ближайшие населенные пункты, вторник, пятница, бесплатная, курьером, во все остальные дни и выбранное вами время платная (300₽)</p>
                            <p class="p-2"><span class="font-bold">Владивосток, Уссурийск , Находка </span> и другие населенные пункты Приморского края <span class="font-bold">доставка 1-2 дня сдек</span> , платная за счет получателя</p>
                        </ul>
                        <img class="relative esm:relative sm:absolute md:absolute bottom-0 -right-5 object-cover w-72 h-44 md:w-[490px] md:h-[343px] sm:w-64 sm:h-40 lg:w-96 lg:h-60 xl:w-108 xl:h-68" src="<?php echo get_template_directory_uri() . '/src/img/order/order.png'; ?>" alt="">
                    </div>
                </div>
            </section>
        </main>

    <?php get_footer(); ?>