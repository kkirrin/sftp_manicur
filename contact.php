<?php
/*
Template Name: Контакты - шаблон
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
                        <a href="/manicure">
                            Главная
                        </a>
                    </li>
                    <li class="opacity-60 text-bg-black">
                        /
                    </li>
                    <li class="breadcrumb__item">
                        <span class="font-semibold text-bg-black">Контакты</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="pb-20 esm:pb-20 sm:pb-32 md:pb-40">
            <div class="container">
                <h2 class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl 0 py-10 font-extrabold"> Контакты</h2> 
            <div>
                <iframe src="https://yandex.ru/map-widget/v1/-/CDBQyPlO" class="map" frameborder="0"
                    allowfullscreen="true"></iframe>
            </div>

            <div class="flex flex-col sm:flex-row pt-10">
                <div class="w-full sm:w-1/3">
                    <h4 class="text-xl font-bold my-4">Реквизиты</h4>
                    <ul>
                        <li class="py-2">ООО "Твой маникюр", Дальневосточный банк ПАО Сбербанк России, г. Артем</li>
                        <li class="pb-2 font-extrabold">ИНН 2508096440</li>
                        <li class="pb-2 font-extrabold">КПП 250801001</li>
                        <li class="pb-2 font-extrabold">БИК 040813608</li>
                        <li class="pb-2 font-extrabold">К/с 30101810600000000608</li>
                        <li class="pb-2 font-extrabold">Р/с 40702810450180015923</li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/3">
                    <h4 class="text-xl font-bold my-4">Телефон и почта</h4>
                    <ul>
                        <li class="pb-2 font-extrabold"><a href="tel:+79143247860">+7 914 324-78-60</a></li>
                        <li class="pb-2 font-extrabold"><a
                                href="email:@tvoi_magazin.nailshop">@tvoi_magazin.nailshop</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/3">
                    <h4 class="text-xl font-bold my-4">Адрес</h4>
                    <ul>
                        <li>
                            <address class="font-extrabold">г. Артем, 1ая рабочая 41 стр 1, 2 эт</address>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>