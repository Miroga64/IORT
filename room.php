<?include_once './header.php'?>
<section class="page">
    <div class="main_container">
        <div class="breadcrumbs">
            <a href="#!" class="breadcrumbs__link">Главная</a>
            <a href="#!" class="breadcrumbs__link">Квартира</a>
        </div>
        <h1 class="page__title">Квартира</h1>
        <div class="page__section room">
            <form class="room__left">
                <a href="#!" class="room__print">Распечатать</a>
                <div class="room__title">3 комнатная квартира</div>
                <div class="room__info">
                    <div class="room__info__container">
                        <div class="room__info__subtitle">Расположение</div>
                        <div class="room__info__value">Секция В</div>
                    </div>
                    <div class="room__info__container">
                        <div class="room__info__subtitle">Этаж</div>
                        <div class="room__info__value">Можно выбрать</div>
                    </div>
                </div>
                <div class="room__info">
                    <div class="room__info__container">
                        <div class="room__info__subtitle">Площадь</div>
                        <div class="room__info__value">25 м2</div>
                    </div>
                    <div class="room__info__container">
                        <div class="room__info__subtitle">Стоимость</div>
                        <div class="room__info__value">10 000 000 ₽</div>
                    </div>
                </div>
                <div class="room__bottom">
                    <input type="submit" class="room__submit white" value="Забронировать">
                    <div class="room__submit ">Отправить по почте</div>
                </div>
            </form>
            <div class="room__right">
                <div class="room__right__switcher">
                    <div class="room__right__link active" data-detail="/images/room_detail.png">Планировка</div>
                    <div class="room__right__link" data-detail="/images/flat.png">На этаже</div>
                </div>
                <div class="room__right__item" style="background-image:url(/images/room_detail.png)" ></div>
            </div>
        </div>
    </div>
</section>
<?include_once './footer.php'?>
