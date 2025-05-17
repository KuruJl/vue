<template>
    <div class="profile-container">
  <h1 class="profile-title">ПРОФИЛЬ</h1>
  
  <div class="profile-content">
    <h2 class="profile-subtitle">Данные о пользователе</h2>
    
    <div class="profile-info">
      <div class="info-row">
        <span class="info-label">ФИО:</span>
        <span class="info-value">Баранович Кирилл</span>
      </div>
      
      <div class="info-row">
        <span class="info-label">Электронная почта:</span>
        <span class="info-value">baranovick26@gmail.com</span>
      </div>
      
      <div class="info-row">
        <span class="info-label">Номер телефона:</span>
        <span class="info-value">+7 (904) 119 06 59</span>
      </div>
      
      <div class="info-row">
        <span class="info-label">Пароль:</span>
        <span class="info-value password-mask">• • • • • • • • • •</span>
      </div>
    </div>
    
    <button class="edit-button">Редактировать данные</button>
  </div>
</div>
</template>

<script >
  export default {
    name: 'AppProfile'
  }
  </script>

<style>
.profile-container {
    font-family: 'Rubik';
    margin: 20px auto;  /* Центрирование */
  width: 1120px;
  height: 560px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  padding: 40px;
  box-sizing: border-box;
}

.profile-title {
 margin: 20px auto;  /* Центрирование */
  font-size: 64px;
  font-weight: bold;
  margin: 0 0 30px 0;
  color: #000000;
}

.profile-subtitle {
  font-size: 30px;
  font-weight: 600;
  margin: 0 0 25px 0;
  color: #000000;
}

.profile-info {
  margin-bottom: 40px;
}

.info-row {
  display: flex;
  margin-bottom: 20px;
}

.info-label {
  font-size: 22px;
  color: #000000;
  width: 250px;
  font-weight: 500;
}

.info-value {
  font-size: 22px;
  color: #000000;
}

.password-mask {
  letter-spacing: 3px;
}

.edit-button {
  background-color: #9bcb00;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 12px 30px;
  font-size: 20px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s;
}

.edit-button:hover {
  background-color: #ACE000; 
}
</style>