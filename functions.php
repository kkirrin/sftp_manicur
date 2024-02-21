<?php

add_action('after_setup_theme', 'add_menu');
// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));


function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // подключаем файл animate.css
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');

    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri());

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // Подключаем основной main.js файл
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);

    // Подключаем japan файл
    wp_enqueue_script('swiper-bundle.min.js', get_template_directory_uri() . '/js/swiper-bundle.min.js');
}


// удаляет сайдбар со страни
add_action('wp', 'bbloomer_remove_sidebar_product_pages');


// функция для добавления меню
function add_menu() {
    // register_nav_menu('mobile', 'навигация sidebar mobile');
    register_nav_menu('top', 'главное меню');
    register_nav_menu('top_horizontal_menu', 'верхнее горизонтальное меню');
    register_nav_menu('bottom', 'каталог в футере');
    register_nav_menu('bottom-right', 'навигация в футере');
    register_nav_menu('sidebar-menu', 'каталог');
    register_nav_menu('modal_menu', 'модальное окно меню');
    register_nav_menu('mobile-link', 'мобильное окно ссылки');
}

// функция выводит количество товаров в мини корзине
function minicart_count_after_content()
    {
        $items_count = WC()->cart->get_cart_contents_count();
        $text_label = _n('Item', 'Items', $items_count, 'woocommerce');
        if ($items_count) {
            ?>
    <p class="total item-count">
        <!-- <strong>
                    <?php echo $text_label; ?>:
                </strong> -->
        <?php echo $items_count; ?>
    </p>

    <?php
        }
}
remove_action( 'woocommerce_single_product_summary', 'woocommerce_short_description', 20 );


// меняет приоритет вывода короткого описания
add_action('init', 'customize_wc_short_description');
function customize_wc_short_description()
{
    // Удаляем короткое описание из его стандартного места
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

    // Добавляем короткое описание в конец секции после описания одиночного продукта с высоким приоритетом
    add_action('woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 100);
}



    add_filter( 'woocommerce_after_shop_loop_item', 'my_show_product_description', 9 );
        function my_show_product_description() {
        if ( is_tax( 'product_cat' ) ) {
        echo '<div class="woo-product-short-desc">' . get_the_excerpt() . '</div>';
    }
}


// Вывод артикла
add_action('woocommerce_single_product_summary', 'custom_sku_output', 6);

function custom_sku_output() {
    global $product;
    
    if ($product && $product->get_sku()) {
        echo '<div class="sku_wrapper pb-4">Артикул: ' . $product->get_sku() . '</div>';
    }
}

  
    add_action('woocommerce_single_product_summary', 'custom_desc', 90);

    function custom_desc() {
        global $product;
        
        if ($product) {
            echo '
            <div class="product-accordion">Описание:</div>
            <div class="product-accordion">'.get_the_excerpt().'</div>
            ';
        }
    }

// меняет текст в "похожих товаров" 
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
    $translated = str_ireplace('Похожие товары', 'Это может пригодиться', $translated);
    return $translated; 
}

function translate_text_2($translated) {
    $translated = str_ireplace('Clear', 'Очистить', $translated);
    return $translated;

}



if (class_exists('WooCommerce')) {
    require_once(get_template_directory() . '/woocommers.php');
}





function wvs_teepro_theme_support() {
    remove_action( 'woocommerce_after_shop_loop_item', 'wvs_pro_archive_variation_template', 30 );
    remove_action( 'woocommerce_after_shop_loop_item', 'wvs_pro_archive_variation_template', 7 );
    
                    
    add_filter( 'woo_variation_swatches_archive_add_to_cart_select_options', function () {
        return '<i></i><span class="tooltip">' . __( 'Select options', 'woocommerce' ) . '</span>';
    } );
    
    add_filter( 'woo_variation_swatches_archive_add_to_cart_text', function () {
        return '<i></i><span class="tooltip">' . __( 'Add to cart', 'woocommerce' ) . '</span>';
    } );

}


// перенаправлять пользователя на определённый URL после авторизации
add_filter('woocommerce_login_redirect', 'manicure_login_redirect', 25, 2);
function manicure_login_redirect($redirect, $user)
{
    $redirect = site_url('/?page_id=685');
    return $redirect;
}

add_action( 'init', 'wvs_teepro_theme_support' );