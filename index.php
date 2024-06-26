<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Скрытый заголовок</h1>
        <section class="pt-24 esm:pt-24 sm:pt-40 md:pt-52">
            <div class="container">

                <div class="relative">
                <img class="object-cover img_main"
                    src="<?php echo get_template_directory_uri() ?>/src/img/main/mian.png" alt="main_bg">
                <div
                    class="absolute inset-0 flex flex-col items-start justify-center bg-black bg-opacity-50 text-start px-5 esm:px-5 sm:px-20 md:px-20">
                    <h2 class="text-white text-2xl sm:text-3xl md:text-7xl font-extrabold">Создавайте идеальный маникюр
                        с нашей продукцией!</h2>
                    <a href="?post_type=product" class="mt-10 px-6 py-3 bg-white text-black font-bold rounded-lg">Перейти в каталог</a>
                </div>
            </div>

        </div>
        
        <div class="wrap">
            <div class="items-wrap">
                <div class="items marquee">
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
            </div>
                <div aria-hidden="true" class="items marquee">
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
                <div class="item">&compfn;Набор масел 25 шт за 2000 рублей!</div>
            </div>
        </div>
    </section>

    <!-- Категории -->
    <section class="py-5 esm:py-5 sm:py-8 md:pb-20">
        <div class="container">
            <h2 class=" text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl py-5 esm:py-5 sm:py-5 md:py-10 font-bold"> Категории </h2>
            <ul class="flex flex-wrap gap-4 list__category">
            <?php 
                $args = array(
                    'taxonomy' => 'product_cat', 
                    'hide_empty' => false, 
                    'parent' => 0,
                );
                $terms = get_terms( $args ); 

                if ( $terms && ! is_wp_error( $terms ) ) : 
                    foreach ( $terms as $term ) { 
                        $term_link = get_term_link( $term );
                        $term_thumb_url = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true ); 

                        echo '<a href="' . esc_url( $term_link ) . '">
                            <li class="category-item rounded-md bg-light-gray hover:bg-red transition-all relative  overflow-hidden">

                                <p class="text-bg-black category__item--title p-8 font-black">' . esc_html( $term->name ) . '</p>';

                        if ( $term_thumb_url ) {
                            echo  wp_get_attachment_image( $term_thumb_url, 'thumbnail' );
                        }

                        echo '</li></a>';
                    }
                else :
                    echo '<p>Категорий не найдено.</p>';
                endif;
            ?>
            </ul>
        </div>
    </section>

      <!-- Распродажа -->
      <section class="py-8 esm:py-8 sm:py-8 md:py-10 swiper-item w-full bg-light-gray">
        <div class="container">
            <div class="flex items-center justify-between">
                <div>
                    <h2
                        class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl py-4 esm:py-4 sm:py-4 md:py-10 font-bold">
                        <span class="text-red font-bold">%</span> Распродажа | <span
                            class="text-gray text-sm esm:text-sm sm:text-base md:text-xl">Новинки</span>
                    </h2>
                </div>


                <div class="hidden esm:hidden sm:hidden md:flex items-center justify-between">
                    <div class="swiper-pagination"></div>
                    <div>
                        <button class="prev-new--item-1 bg-white rounded-lg shadow-md shadow-main-black -z-0 mr-5">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow_prev.svg"
                                alt="влево" />
                        </button>
                        <button class="next-new--item-1 bg-white rounded-lg shadow-md shadow-main-black -z-0 mr-5">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow_next.svg"
                                alt="вправо" />
                        </button>
                    </div>
                </div>

            </div>

            <div class="new-items-section">
                <div class="swiper new-items-1">
                    <div class="swiper-wrapper gap-[20px] w-0 min-w-[100%]" style="align-items: stretch;">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1,
                            'product_cat' => 'sale',
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {

                            while ($query->have_posts()) {
                                $query->the_post();

                                $terms = get_the_terms($post->ID, 'product_cat');

                                $product = wc_get_product(get_the_ID());

                                $product_name = $product->get_name();
                                $product_sku = $product->get_sku();
                                $product_image = wp_get_attachment_url($product->get_image_id());
                                $product_price = $product->get_price();
                                $id = $product->get_id();
                                $product_link = $product->get_permalink();
                                $product_color = $product->get_meta('color');

                                echo '
                                        <div class="swiper-slide swiper-slide-sale sale-item rounded-xl relative" style="height:auto;">
                                                <a href="' . esc_url($product_link) . '">
                                                    <div class="new-items-section__img relative">
                                                        <img class="rounded-xl h-auto" src="' . $product_image . '" alt="" />
                                                    </div>
                                                </a>
                                        
                                                <p class="font-black text-xs sm:text-base md:text-xl pt-2 pb-5 text-bg-black uppercase">' . $product_name . '</p>
                                            
                                                <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-5 text-gray">Артикул: <span>' . $product_sku . '</span></p>

                                                <div class="font-bold text-sm md:text-2xl md:mb-0 mr-10 mb-2">' . $product_price . 'р</div>

                                                ';




                                echo '<div class="flex flex-col sale__item--heigth">
                                     
                                                                                       
                                    <form class="variations_form" action="' . esc_url($product->add_to_cart_url()) . '" method="post" enctype="multipart/form-data">
                                    <div class="flex flex-col justify-between gap-2 flex-wrap ">';

                                if ($product->is_type('variable')) {
                                    $attributes = $product->get_variation_attributes();
                                    $available_variations = $product->get_available_variations();

                                    foreach ($attributes as $attribute_name => $options) {

                                        // Выводим радио-кнопки для каждого атрибута
                                        echo '<div class="woocommerce-variation single_variation">';
                                        echo '<fieldset>';
                                        echo '<legend> Выберите ' . wc_attribute_label($attribute_name) . ' </legend>';


                                        // Переменная для определения первой итерации цикла
                                        $is_first_option = true;

                                        $unique_suffix = $product->get_id();

                                        echo '<div class="inputs-wrapper">';
                                        foreach ($options as $option) {

                                            $checked = $is_first_option ? 'checked' : '';

                                            $option_slug = sanitize_title($option);


                                            echo '<label class="' . $checked . ' ' . $attribute_name . '-label"
                                            style="background-color: #' . esc_attr($option_slug) . ';"
                                            >';
                                            echo '<input class="' . $attribute_name . '-input" type="radio" name="attribute_' . sanitize_title($attribute_name) . '" 
                                                    id="' . esc_attr($option_slug) . '" value="' . esc_attr($option) . '" ' . $checked . '>' .
                                                esc_html(apply_filters('woocommerce_variation_option_name', $option));
                                            echo '</label>';

                                            $is_first_option = false;
                                        }

                                        echo '</div>';
                                        echo '</fieldset>';
                                        echo '</div>';
                                    }
                                    // Добавляем скрытое поле, необходимое для вариативных товаров
                                    echo '<input type="hidden" name="product_id" value="' . esc_attr($product->get_id()) . '" />';
                                    echo '<input type="hidden" name="variation_id" class="variation_id" value="" />';
                                }


                                echo '
                                    <div class="flex gap-5 items-center justify-between flex-wrap absolute new__item--button">
                                    <div class="quantity buttons_added flex  gap-2 rounded-lg border-2 border-gray px-12 sm:px-20 md:px-6">
                                         <input type="button" value="-" class="minus cursor-pointer">
                                          <input type="number" id="quantity_65c1b90451f5a" class="input-text qty text" name="quantity" value="1" aria-label="Количество товара" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                          <input type="button" value="+" class="plus cursor-pointer">
                                     </div>
                                                                    
                                    <button type="submit" name="add-to-cart" value="' . esc_attr($product->get_id()) . '" class="pointer text-white py-2 px-4 md:py-3 md:px-3 rounded-md bg-bg-black flex-1 mt-2 md:mt-0 single_add_to_cart_button button alt">В корзину</button>
                                                            </div>
                                                        </form>
                                    </div>
                                    </div>
                                        </div>';


                            }


                            wp_reset_postdata();
                        } else {
                            echo 'Товаров со скидкой не найдено.';
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Информационный блог -->
    <section class="pb-28 esm:pb-8 sm:pb-8 md:pb-16 pt-28 esm:pt-28 sm:pt-28 md:pt-28">
        <div class="container grid grid-cols-1 esm:grid-cols-1 sm:grid-cols-2">
            <div class="flex relative">
                <div class="w-full">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/src/img/info/infp.png" alt="" />
                </div>
            </div>
            <div class="p-0 esm:p-4 sm:p-4 md:p-14 relative">
                <img class="absolute right-0 top-0 hidden esm:hidden sm:block md:block"
                    src="<?php echo get_template_directory_uri() ?>/src/img/icons/quotes.svg" alt="ковычки">
                <h2 class="text-2xl esm:text-xl sm:text-xl md:text-5xl font-extrabold pb-5 pt-5">Интернет-магазин «Твой
                    маникюрный»</h2>
                <img class="absolute right-0 top-7 block esm:block sm:hidden md:hidden w-11 h-10"
                    src="<?php echo get_template_directory_uri() ?>/src/img/icons/quotes.svg" alt="ковычки">
                <p class="text-sm esm:text-sm sm:text-sm md:text-xl text-bg-black font-semibold">Это ваш идеальный выбор
                    для стильных и здоровых ногтей. В нашем магазине представлены разнообразные лаки, гель-лаки и
                    аксессуары
                    от ведущих брендов. Мастера-консультанты
                    помогут подобрать идеальный продукт, учитывая
                    все пожелания и индивидуальные особенности. Окунитесь в мир красоты и качества вместе
                    с “Твой маникюрный”!
                </p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>