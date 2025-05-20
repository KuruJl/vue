<template>
  <div v-for="listing in listings" :key="listing.id" class="booking-block">
    <img :src="listing.image_url" :alt="listing.title" class="booking-image">
    <div class="booking-content">
      <h3 class="booking-title">{{ listing.title }}</h3>
      <p class="booking-description">{{ listing.rooms }} {{ roomDeclension(listing.rooms) }}</p>
      <p class="booking-description">{{ listing.address }}</p>
    </div>
    <div class="divider" :style="{ marginLeft: dividerMargin(listing) }"></div>
    <div class="booking-price">
      <h3 class="price">{{ listing.price_per_night }} ₽</h3>
      <p class="booking-description">1 ночь, 1 номер</p>
      <button class="booking-button">Забронировать</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AppSearchField',
  data() {
    return {
      listings: []
    }
  },
  methods: {
    roomDeclension(count) {
      const cases = [2, 0, 1, 1, 1, 2];
      const words = ['комната', 'комнаты', 'комнат'];
      return words[(count % 100 > 4 && count % 100 < 20) ? 2 : cases[Math.min(count % 10, 5)]];
    },
    dividerMargin(listing) {
      return listing.title.length > 15 ? '208px' : '177px';
    },
    async fetchListings() {
      try {
        const response = await fetch('/api/listings', {
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        });
        
        if (!response.ok) throw new Error('Ошибка сети');
        
        this.listings = await response.json();
      } catch (error) {
        console.error('Ошибка загрузки:', error);
        // Можно добавить fallback-данные здесь
      }
    }
  },
  mounted() {
    this.fetchListings();
  }
}
</script>
<style scoped>
/* Ваши существующие стили остаются без изменений */
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
  margin: 20px auto;
  width: 920px;
  height: 150px;
  display: flex;
  align-items: center;
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 1);
  border-radius: 10px;
  padding-left: 10px;
  box-sizing: border-box;
}
.booking-image {
  width: 223px;
  height: 135px;
  object-fit: cover;
  margin-right: 20px;
  border-radius: 10px;
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
  background-color: #8bb900;
}
</style>