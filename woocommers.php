<?php
// инициализация woocommerce
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}


function bbloomer_remove_sidebar_product_pages()
{

    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_tax()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_shop()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

// удаляет сайдбар со страниц
add_action('wp', 'bbloomer_remove_sidebar_product_pages');

add_filter('term_description', 'shortcode_unautop');
add_filter('term_description', 'do_shortcode');

add_filter('woocommerce_my_account_my_orders_actions', 'true_order_again', 25, 2);

function true_order_again($actions, $order)
{
    // добавляет кнопку только для выполненных заказов
    if ($order->has_status('completed')) {

        $actions['order-again'] = array(
            'url' => wp_nonce_url(
                add_query_arg(
                    'order_again',
                    $order->get_id(),
                    wc_get_cart_url()
                ),
                'woocommerce-order_again'
            ),
            'name' => __('Order again', 'woocommerce'),
        );

    }
    return $actions;
}

// перенаправлять пользователя на определённый URL после авторизации
add_filter('woocommerce_login_redirect', 'manicure_login_redirect', 25, 2);
function manicure_login_redirect($redirect, $user)
{
    $redirect = site_url('/?page_id=685');
    return $redirect;
}


// Функция "повторить заказ" для вывода LI заказа на странице ЛК

$user_id = get_current_user_id();


// форматирование цены формата 123 000
function formatPrice($order_total)
{
    return number_format($order_total, 0, '.', ' ');
}

function show_user_order($user_id)
{

    if ($user_id) {
        $customer_orders = wc_get_orders(
            array(
                'customer' => $user_id,
                'status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'), // Укажите нужные статусы заказов
            )
        );

        if ($customer_orders) {
            foreach ($customer_orders as $order) {
                $order_id = $order->get_id();
                $order_total = $order->get_total();
                $formatted_price = formatPrice($order_total);

                $order_link = $order->get_view_order_url(); // ссылка на просмотр заказа
                $order_repeat_link = wc_get_endpoint_url('order-pay', $order_id, wc_get_page_permalink('checkout')); //ссылка на повторный заказ

                $order_date = $order->get_date_created(); // дата создания заказа
                $expected_delivery_date = date('j F', strtotime($order_date . '+ 6 days')); // ожидаемую дата доставки вручную

                // Перевод месяцев на русский язык
                $months = array(
                    'January' => 'января',
                    'February' => 'февраля',
                    'March' => 'марта',
                    'April' => 'апреля',
                    'May' => 'мая',
                    'June' => 'июня',
                    'July' => 'июля',
                    'August' => 'августа',
                    'September' => 'сентября',
                    'October' => 'октября',
                    'November' => 'ноября',
                    'December' => 'декабря',
                );

                // русификация месяца
                $expected_delivery_date = str_replace(array_keys($months), array_values($months), $expected_delivery_date);


                foreach ($order->get_items() as $item_id => $item) {
                    $product = $item->get_product();
                    $product_image = $product->get_image();

                    echo "<li class='lk-order__item'>";
                    echo "<p class='lk-order__header'>Ожидаемая дата доставки: <span>$expected_delivery_date</span></p>";
                    echo "$product_image";
                    echo "<p class='lk-order__sku'>sku: {$product->get_sku()}</p>";
                    echo "<p class='lk-order__name'>{$product->get_name()}</p>";
                    echo "<div class='lk-order__wrapper'>";
                    echo "<p class='lk-order__price'>{$formatted_price} &#x20bd</p>";
                    echo "<a class='lk-order__link' href='$order_link'>Повторить</a>";
                    echo "</div>";
                    echo "</li>";
                }
            }
        } else {
            echo "У вас нет заказов.";
        }
    } else {
        // тут поменять адрес страницы 
        echo '<p class="auth-wrapper">Вы должны быть <a href="http://manicur/?page_id=48"><span>авторизованны</span></a></p>';
    }
}



// /// /////////////////////////////=======================================

// шорткод для вывода поля редактируемого телефона на странице ЛК
add_shortcode('custom_shipping_fields', 'add_custom_shipping_fields_shortcode');

// функция для отрисовки поля редактируемого телефона
function add_custom_shipping_fields_shortcode()
{
    ob_start();

    $user = wp_get_current_user();

    ?>
    <form action="#" method="post" id="phoneForm">
        <div>
            <input type="text" name="shipping_phone" id="reg_shipping_phone"
                placeholder="<?php _e('Phone', 'woocommerce'); ?>"
                value="<?php echo isset($user->shipping_phone) ? $user->shipping_phone : ''; ?>"
                class="woocommerce-Input woocommerce-Input--text input-text form-control" size="25" />
        </div>
        <?php wp_nonce_field('save_account_details_custom_shipping_fields'); ?>
        <button type="submit" class="woocommerce-Button button sendbutton" name="save_account_details"
            value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>">
            <?php esc_html_e('Save changes', 'woocommerce'); ?>
        </button>
    </form>
    <?php

    return ob_get_clean();
}



// Функция для сохранения данных формы PHONE
function handle_custom_shipping_fields_form_submission()
{
    if (isset($_POST['save_account_details']) && wp_verify_nonce($_POST['_wpnonce'], 'save_account_details_custom_shipping_fields')) {
        $customer_id = get_current_user_id();
        if (isset($_POST['shipping_phone'])) {
            update_user_meta($customer_id, 'shipping_phone', sanitize_text_field($_POST['shipping_phone']));
        }
        if (isset($_POST['shipping_phone'])) {
            update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['shipping_phone']));
        }
    }
}
add_action('init', 'handle_custom_shipping_fields_form_submission');



//========================================================================================================

// функция для отрисовки поля редактируемого имени 
function add_custom_name_fields()
{
    ob_start();
    $user = wp_get_current_user();
    ?>
    <form action="#" method="post" id="nameForm">
        <div>
            <input type="text" name="first_name" id="reg_first_name"
                placeholder="<?php _e('Enter your first name', 'woocommerce'); ?>"
                value="<?php echo esc_attr($user->first_name); ?>"
                class="woocommerce-Input woocommerce-Input--text input-text form-control" size="25" />
        </div>
        <?php wp_nonce_field('save_account_details_custom_first_name_fields'); ?>
        <button type="submit" class="woocommerce-Button button sendbutton2" name="save_account_details"
            value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>">
            <?php esc_html_e('Save changes', 'woocommerce'); ?>
        </button>
    </form>
    <?php

    return ob_get_clean();
}

// Функция для сохранения данных формы NAME
function handle_custom_name_fields_form_submission()
{
    if (isset($_POST['save_account_details']) && wp_verify_nonce($_POST['_wpnonce'], 'save_account_details_custom_first_name_fields')) {
        $customer_id = get_current_user_id();

        if (isset($_POST['first_name'])) {
            update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['first_name']));
        }

        // TODO: ДОБАВИТЬ ОБРАБОТКУ LASTNAME
    }
}
add_action('init', 'handle_custom_name_fields_form_submission');


//========================================================================================================



// Функция для отрисовки поля редактируемого email
function add_custom_email_fields()
{
    ob_start();
    $user = wp_get_current_user();
    ?>
    <form action="#" method="post" id="emailForm">
        <div>
            <input type="email" name="email" id="reg_email" placeholder="<?php _e('Enter your email', 'woocommerce'); ?>"
                value="<?php echo esc_attr($user->user_email); ?>"
                class="woocommerce-Input woocommerce-Input--email input-text form-control" size="25" />
        </div>
        <?php wp_nonce_field('save_account_details_custom_email_fields'); ?>
        <button type="submit" class="woocommerce-Button button sendbutton3" name="save_account_details"
            value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>">
            <?php esc_html_e('Save changes', 'woocommerce'); ?>
        </button>
    </form>
    <?php

    return ob_get_clean();
}

// Функция для сохранения данных формы EMAIL
function handle_custom_email_fields_form_submission()
{
    if (isset($_POST['save_account_details']) && wp_verify_nonce($_POST['_wpnonce'], 'save_account_details_custom_email_fields')) {
        $customer_id = get_current_user_id();

        if (isset($_POST['email'])) {
            $email = sanitize_email($_POST['email']);
            if (is_email($email)) {
                wp_update_user(
                    array(
                        'ID' => $customer_id,
                        'user_email' => $email
                    )
                );
            } else {
                print_r("Введите корректный адрес почты");
            }
        }
    }
}
add_action('init', 'handle_custom_email_fields_form_submission');


?>
