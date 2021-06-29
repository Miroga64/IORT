<?include_once './header.php'?>
<section class="page small_padd">
    <div class="main_container">
        <div class="breadcrumbs">
            <a href="#!" class="breadcrumbs__link">Главная</a>
            <a href="#!" class="breadcrumbs__link">Контакты</a>
        </div>
        <h1 class="page__title">Контакты</h1>
    </div>
    <div class="contacts">
        <div class="main_container">
            <div class="contacts__container">
                <div class="contacts__left">
                    <div class="contacts__left__block">
                        <div class="contacts__left__title">Адрес офиса продаж:</div>
                        <div class="contacts__left__element">г.Уфа, проспект октября 132/3</div>
                        <div class="contacts__left__element">Пн-Пт 9:00–21:00,</div>
                        <div class="contacts__left__element">Сб-Вс 10:00–20:00</div>
                    </div>
                    <div class="contacts__left__block">
                        <div class="contacts__left__title">Телефон и почта</div>
                        <a href="tel:+73472935393" class="contacts__left__element">+7 (347) 293-53-93</a>
                        <a href="mail:kpdnedv@mail.ru" class="contacts__left__element">kpdnedv@mail.ru</a>
                    </div>
                    <div class="contacts__left__bottom">
                        <a href="#!" class="contacts__left__link fb"></a>
                        <a href="#!" class="contacts__left__link vk"></a>
                        <a href="#!" class="contacts__left__link inst"></a>
                    </div>
                    <div class="contacts__call call_message" data-popup="popup__call">Заказать звонок</div>
                </div>
                <div class="contacts__right" id="contacts__right" style="background-color: black;">

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section padding_top negative_bottom_margin">
    <div class="main_container">
        <div class="form">
            <div class="form__left">
                <div class="form__left__title">Запишитесь на консультацию</div>
                <div class="form__left__text">Оставьте свои контактные данные и получите консультацию менеджера по покупке квартиры по выгодным ценам, ипотеке или рассрочке в ЖК «Прибрежный»</div>
            </div>
            <form class="form__right">
                <input class="form__right__input" type="input" placeholder="Ваше имя">
                <input class="form__right__input" type="tel" placeholder="Номер телефона">
                <input class="form__right__submit" type="submit" value="Тeкст кнопки">
                <div class="form__right__policy">Нажимая на кнопку, вы принимаете политику конфиденциальности и даете согласие на обработку персональных данных</div>
            </form>
        </div>
    </div>
</section>
<?include_once './footer.php'?>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
        ymaps.ready(function () {
            let myMap = new ymaps.Map("contacts__right", {
                center: [55.76, 37.64],
                zoom: 10,
                controls: []
            });
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            );

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            }, {
                iconLayout: 'default#image',
                iconImageHref: '/images/yandex_pointer.svg',
                iconImageSize: [40, 40],
                iconImageOffset: [-20, -20]
            });

            myMap.geoObjects
                .add(myPlacemark)
        });
    })
</script>

