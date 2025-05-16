<template>
    <section class="main-section" :style="backgroundStyle">
      <div class="content-container">
        <div class="text-content">
          <h1 class="main-title">Дом, милый дом</h1>
          <p class="main-subtitle">
            Найдите идеальную квартиру, дом или апартаменты на сутки или длительный срок. 
            Большой выбор, безопасные сделки, поддержка 24/7. Бронируйте легко и комфортно!
          </p>
        </div>
        
        <div class="search-form">
    <div class="search-fields">
      <div class="search-field">
        <span class="field-label">локация</span>
        <input type="text" class="search-input">
      </div>
      <div class="search-field">
        <span class="field-label">цена</span>
        <input type="text" class="search-input">
      </div>
      <div class="search-field">
        <span class="field-label">кол-во комнат</span>
        <input type="text" class="search-input">
      </div>
      <div class="search-field">
        <span class="field-label">дата</span>
        <input type="text" class="search-input">
      </div>
    </div>
    <button class="search-button">Поиск</button>
  </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'AppMain',
    props: {
      backgroundImage: {
        type: String,
        default: '/images/main-bg.jpg' // Путь к изображению по умолчанию
      }
    },
    computed: {
      backgroundStyle() {
        return {
          backgroundImage: `url(${this.backgroundImage})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          backgroundRepeat: 'no-repeat'
        }
      }
    }
  }
  </script>
  
  <style scoped>
  .main-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1;
}
  .main-section {
  width: 1120px;
  height: 593px;
  margin: 0 auto;
  border-radius: 15px;
  position: relative;
  overflow: hidden;
}

.content-container {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0 60px;
  color: white;
}
  
  .background-image {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('https://via.placeholder.com/1120x593');
    background-size: cover;
    background-position: center;
    z-index: 1;
  }
  

  .text-content {
    max-width: 700px;
    margin-bottom: 50px;
  }
  
  .main-title {
    font-size: 64px;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
  }
  
  .main-subtitle {
    font-size: 20px;
    line-height: 1.5;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
  }
  
  search-form {
  width: 573px;
  height: 70px;
  background: white;
  border-radius: 8px;
  display: flex;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.search-fields {
  display: flex;
  flex-wrap: wrap;
  flex: 1;
}

.search-field {
  position: relative;
  width: 50%;
  height: 35px;
  padding: 5px;
  box-sizing: border-box;
}

.field-label {
  position: absolute;
  top: 2px;
  left: 8px;
  font-size: 12px;
  color: #888;
  text-transform: uppercase;
}

.search-input {
  width: 100%;
  height: 100%;
  padding: 12px 8px 0;
  border: none;
  outline: none;
  font-size: 14px;
  background: #f5f5f5;
  border-radius: 4px;
}

.search-button {
  width: 100px;
  height: 50px;
  margin: 10px;
  background-color: #ACE000;
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  transition: background-color 0.3s;
  align-self: center;
}

.search-button:hover {
  background-color: #9bcb00;
}
  </style>