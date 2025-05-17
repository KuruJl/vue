<template>
    <div class="booking-block">
        <img src="/images/image2.png" alt="" class="booking-image">
        <div class="booking-content">
            <h3 class="booking-title">Крестовая падь</h3>
            <p class="booking-description">2 комнаты, 4 спальных места</p>
            <p class="booking-description">​Адрес: рп. Листвянка, Горная, ст14</p>
        </div>
        <div class="divider"></div>
        <div class="booking-price">
            <h3 class="price">4500 Р</h3>
            <p class="booking-description">1 ночь, 1 номер</p>
            <button class="booking-button">Забронировать</button>
        </div>
    </div>

    <div class="booking-block">
        <img src="/images/image3.png" alt="" class="booking-image">
        <div class="booking-content">
            <h3 class="booking-title">Larch</h3>
            <p class="booking-description">1 комната, 2 спальных места</p>
            <p class="booking-description">​Адрес: Иркутск, Свердлова, 19​</p>
        </div>
        <div class="divider2"></div>
        <div class="booking-price">
            <h3 class="price">7200 Р</h3>
            <p class="booking-description">1 ночь, 1 номер</p>
            <button class="booking-button">Забронировать</button>
        </div>
    </div>

    <div class="booking-block">
        <img src="/images/image4.png" alt="" class="booking-image">
        <div class="booking-content">
            <h3 class="booking-title">Irkutsk City Center</h3>
            <p class="booking-description">1 комната, 2 спальных места</p>
            <p class="booking-description">​Адрес: Иркутск, улица Чкалова, 15</p>
        </div>
        <div class="divider"></div>
        <div class="booking-price">
            <h3 class="price">5800 Р</h3>
            <p class="booking-description">1 ночь, 1 номер</p>
            <button class="booking-button">Забронировать</button>
        </div>
    </div>

</template>

<script>
  export default {
    name: 'AppSearchField'
  }
  </script>

  <style scoped>
  .booking-price{
    margin-left: 20px;
  }
  .divider {
    margin-left: 177px;
  border: 1px solid #AEAEAE;
  width: 1px;
  height: 120px;
}
.divider2 {
    margin-left: 208px;
  border: 1px solid #AEAEAE;
  width: 1px;
  height: 120px;
}

  .price{
    font-weight: 700;
    font-size: 20px;
  }
.booking-block {
    font-family: 'Rubik';
    margin: 20px auto;  /* Центрирование */
  width: 920px;
  height: 150px;
  display: flex;
  align-items: center;
  background-color: #ffffff; /* или любой нужный вам фон */
  border: 1px solid rgba(0, 0, 0, 1);
  border-radius: 10px; /* опционально */
  padding-left: 10px;
  box-sizing: border-box;
}

.booking-image {
  width: 223px;
  height: 135px;
  object-fit: cover; /* чтобы изображение заполняло область */
  margin-right: 20px; /* отступ между изображением и текстом */
  border-radius: 10px; /* опционально */

}

.booking-content {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
  padding: 15px 0;
}

.booking-title {
  font-size: 20px;
  font-weight: bold;
  margin: 0;
  margin-bottom: 5px;
}

.booking-description {
  font-size: 16px;
  font-weight: normal;
  margin: 0;
  margin-bottom: 10px;
}

.booking-button {
  width: 170px;
  height: 40px;
  background-color: #9bcb00;
  color: white;
  border: none;
  border-radius: 4px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s;
}

.booking-button:hover {
  background-color: #9bcb00; /* немного темнее при наведении */
}</style>