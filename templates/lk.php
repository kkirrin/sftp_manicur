<?php

/*
Template Name: Личный кабинет - шаблон
*/
?>

<?php get_header(); ?>

<?php
$user_id = get_current_user_id();
$user = get_userdata($user_id);


// Получает адрес пользователя
$last_order = wc_get_customer_last_order($user_id);
if ($last_order) {
    // Если у пользователя есть заказы, получаем адрес из последнего заказа
    $shipping_address = $last_order->get_address('shipping'); // Для адреса доставки
} else {
    // Если у пользователя нет заказов, получаем адрес из профиля
    $shipping_address = array(
        'address_1' => get_user_meta($user_id, 'shipping_address_1', true),
    );
}

?>

<main class="inner-page-main pb-20 esm:pb-20 sm:pb-32 md:pb-40 lk">
    <div class="container ">
        <h2 class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl py-4 esm:py-4 sm:py-4 md:py-5 font-extrabold"> Мой кабинет</h2> 
        <div class="_tabs">
            <nav class="lk__nav">
                <button class="_tabs-item lk__button _active" data-tab="#tab1">Личные данные</button>
                <button class="_tabs-item lk__button" data-tab="#tab2">Мои заказы</button>
            </nav>

            <div class="_tabs-block _active" id="tab1">
            
            <?php
                $user_id = get_current_user_id();

                if ($user_id) {
                    ?>

                <ul class="lk__list">
                    <li class="lk__item">
                        <div class="lk__item-header">
                            <p>Телефон</p>
                            <button class="phone-edit-button">
                                <svg width="24.000000" height="24.000000" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <clipPath id="clip149_11761">
                                            <rect id="ic:baseline-edit" width="24.000000" height="24.000000"
                                                fill="white" fill-opacity="0" />
                                        </clipPath>
                                    </defs>
                                    <rect id="ic:baseline-edit" width="24.000000" height="24.000000" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <g clip-path="url(#clip149_11761)">
                                        <path id="Vector"
                                            d="M3 17.2495L3 20.9995L6.75 20.9995L17.8105 9.93945L14.0605 6.18945L3 17.2495ZM20.7109 7.03955C20.8027 6.94678 20.877 6.83691 20.9258 6.71631C20.9766 6.59521 21.002 6.46533 21.002 6.33447C21.002 6.20361 20.9766 6.07373 20.9258 5.95312C20.877 5.83203 20.8027 5.72217 20.7109 5.62939L18.3691 3.28955C18.2773 3.19678 18.168 3.12305 18.0469 3.07324C17.9258 3.02295 17.7969 2.99707 17.6641 2.99707C17.5332 2.99707 17.4043 3.02295 17.2832 3.07324C17.1621 3.12305 17.0527 3.19678 16.9609 3.28955L15.1309 5.11963L18.8809 8.86963L20.7109 7.03955Z"
                                            fill="#C2C3CA" fill-opacity="1.000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <?php echo do_shortcode('[custom_shipping_fields]'); ?>
                        </div>
                    </li>

                    <li class="lk__item">
                        <div class="lk__item-header">
                            <p>Имя</p>
                            <button class="name-edit-button">
                                <svg width="24.000000" height="24.000000" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <clipPath id="clip149_11761">
                                            <rect id="ic:baseline-edit" width="24.000000" height="24.000000"
                                                fill="white" fill-opacity="0" />
                                        </clipPath>
                                    </defs>
                                    <rect id="ic:baseline-edit" width="24.000000" height="24.000000" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <g clip-path="url(#clip149_11761)">
                                        <path id="Vector"
                                            d="M3 17.2495L3 20.9995L6.75 20.9995L17.8105 9.93945L14.0605 6.18945L3 17.2495ZM20.7109 7.03955C20.8027 6.94678 20.877 6.83691 20.9258 6.71631C20.9766 6.59521 21.002 6.46533 21.002 6.33447C21.002 6.20361 20.9766 6.07373 20.9258 5.95312C20.877 5.83203 20.8027 5.72217 20.7109 5.62939L18.3691 3.28955C18.2773 3.19678 18.168 3.12305 18.0469 3.07324C17.9258 3.02295 17.7969 2.99707 17.6641 2.99707C17.5332 2.99707 17.4043 3.02295 17.2832 3.07324C17.1621 3.12305 17.0527 3.19678 16.9609 3.28955L15.1309 5.11963L18.8809 8.86963L20.7109 7.03955Z"
                                            fill="#C2C3CA" fill-opacity="1.000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <?php echo add_custom_name_fields() ?>
                        </div>
                    </li>

                    <li class="lk__item">
                        <div class="lk__item-header">
                            <p>Электронная почта</p>
                            <button class="email-edit-button">
                                <svg width="24.000000" height="24.000000" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <clipPath id="clip149_11761">
                                            <rect id="ic:baseline-edit" width="24.000000" height="24.000000"
                                                fill="white" fill-opacity="0" />
                                        </clipPath>
                                    </defs>
                                    <rect id="ic:baseline-edit" width="24.000000" height="24.000000" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <g clip-path="url(#clip149_11761)">
                                        <path id="Vector"
                                            d="M3 17.2495L3 20.9995L6.75 20.9995L17.8105 9.93945L14.0605 6.18945L3 17.2495ZM20.7109 7.03955C20.8027 6.94678 20.877 6.83691 20.9258 6.71631C20.9766 6.59521 21.002 6.46533 21.002 6.33447C21.002 6.20361 20.9766 6.07373 20.9258 5.95312C20.877 5.83203 20.8027 5.72217 20.7109 5.62939L18.3691 3.28955C18.2773 3.19678 18.168 3.12305 18.0469 3.07324C17.9258 3.02295 17.7969 2.99707 17.6641 2.99707C17.5332 2.99707 17.4043 3.02295 17.2832 3.07324C17.1621 3.12305 17.0527 3.19678 16.9609 3.28955L15.1309 5.11963L18.8809 8.86963L20.7109 7.03955Z"
                                            fill="#C2C3CA" fill-opacity="1.000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <?php echo add_custom_email_fields(); ?>
                        </div>
                    </li>

                    <li class="lk__item">
                        <div class="lk__item-header">
                            <p>Адрес</p>
                            <a href="?page_id=10&edit-address" class="email-edit-button">
                                <svg width="24.000000" height="24.000000" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <clipPath id="clip149_11761">
                                            <rect id="ic:baseline-edit" width="24.000000" height="24.000000"
                                                fill="white" fill-opacity="0" />
                                        </clipPath>
                                    </defs>
                                    <rect id="ic:baseline-edit" width="24.000000" height="24.000000" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <g clip-path="url(#clip149_11761)">
                                        <path id="Vector"
                                            d="M3 17.2495L3 20.9995L6.75 20.9995L17.8105 9.93945L14.0605 6.18945L3 17.2495ZM20.7109 7.03955C20.8027 6.94678 20.877 6.83691 20.9258 6.71631C20.9766 6.59521 21.002 6.46533 21.002 6.33447C21.002 6.20361 20.9766 6.07373 20.9258 5.95312C20.877 5.83203 20.8027 5.72217 20.7109 5.62939L18.3691 3.28955C18.2773 3.19678 18.168 3.12305 18.0469 3.07324C17.9258 3.02295 17.7969 2.99707 17.6641 2.99707C17.5332 2.99707 17.4043 3.02295 17.2832 3.07324C17.1621 3.12305 17.0527 3.19678 16.9609 3.28955L15.1309 5.11963L18.8809 8.86963L20.7109 7.03955Z"
                                            fill="#C2C3CA" fill-opacity="1.000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <input type="text" name="shipping_phone" id="reg_address"
                                placeholder="<?php _e('Address', 'woocommerce'); ?>"
                                value="<?php echo $shipping_address['address_1'] ?>"
                                class="woocommerce-Input woocommerce-Input--text input-text form-control" size="25"
                                disabled />
                        </div>
                    </li>
                </ul>

                <?php
                } else {
                    // тут поменять адрес страницы 
                    echo '<p class="auth-wrapper">Вы должны быть <a href="http://manicur/?page_id=10&edit-address"><span>авторизованны</span></a></p>';
                }
                ?>
            </div>
            <div class="_tabs-block" id="tab2">
                <ul class="lk-order__list">
                    <?php 
                    echo show_user_order($user_id); ?>

                </ul>
            </div> 
        </div>
    </div>
</main> 

<?php get_footer(); ?> 