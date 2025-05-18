<template>
  <nav class="navigation-bar">
    <div class="nav-menu">
      <h1 class="logo">Sweet<br />Home</h1>
      <a href="/" class="nav-link">Главная</a>
      <a href="/search" class="nav-link">Поиск</a>
      <a href="/contacts" class="nav-link">Контакты</a>
    </div>
    <div class="auth-buttons">
      <template v-if="!isAuthenticated">
        <a href="/login" class="auth-button">Вход</a>
        <a href="/register" class="auth-button">Регистрация</a>
      </template>
      <template v-else>
        <button @click="logout" class="auth-button">Выйти</button>
      </template>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'AppHeader',
  // Добавьте props или используйте Vuex/локальное хранилище
  // для определения статуса авторизации.
  // В данном примере используется локальное свойство data.
  data() {
    return {
      isAuthenticated: false // Изначально пользователь не авторизован
    };
  },
  created() {
    // Здесь вы можете проверить статус авторизации при создании компонента.
    // Например, проверить наличие токена в локальном хранилище или в Vuex state.
    // Для примера просто установим true/false.
    this.checkAuthStatus();
  },
  methods: {
    checkAuthStatus() {
      // Реальная логика проверки статуса авторизации.
      // Например:
      // this.isAuthenticated = localStorage.getItem('authToken') !== null;
      // Или из Vuex store:
      // this.isAuthenticated = this.$store.getters.isAuthenticated;

      // Для демонстрации, давайте предположим, что пользователь авторизован
      // если есть что-то в localStorage с ключом 'userToken'
       this.isAuthenticated = localStorage.getItem('userToken') !== null;
    },
    logout() {
      // Логика выхода из системы.
      // Например, удаление токена из локального хранилища или вызов действия Vuex.
      console.log('Выход...');
      // Пример:
       localStorage.removeItem('userToken');
      // Или вызов действия Vuex:
      // this.$store.dispatch('logout');

      // Обновить статус авторизации
      this.isAuthenticated = false;

      // Возможно, перенаправить пользователя на главную страницу или страницу входа
       this.$router.push('/');
    }
  }
}
</script>

<style scoped>
.navigation-bar {
  font-family: 'Rubik';
  margin: 20px auto; /* Автоматические отступы по бокам для центрирования */
  max-width: 1120px; /* Максимальная ширина */
  width: 80%; /* Гибкая ширина, например 80% от родителя */
  border-radius: 15px;
  background-color: rgba(255, 255, 255, 1);
  border: 1px solid rgba(0, 0, 0, 1);
  display: flex;
  padding: 10px 22px;
  align-items: stretch;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: space-between;
}

.nav-menu {
  display: flex;
  margin: auto 0;
  align-items: stretch;
  gap: 30px;
}

.logo {
  color: rgba(172, 224, 0, 1);
  font-weight: 800;
  line-height: 13px;
  margin: 0;
}

.nav-link {
  text-decoration: none;
  color: inherit;
}

.auth-buttons {
  display: flex;
  align-items: stretch;
  gap: 25px;
}

.auth-button {
  border-radius: 15px;
  background-color: rgba(172, 224, 0, 1);
  padding: 16px 32px;
  border: none;
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  color: inherit;
  cursor: pointer;
  text-decoration: none; /* Убираем подчеркивание для кнопки */
  display: inline-block; /* Делаем кнопку строчно-блочным элементом */
}

.auth-button:last-child {
  padding: 16px 27px;
}

@media (max-width: 991px) {
  .navigation-bar {
    padding: 10px 20px;
    white-space: initial;
  }

  .nav-menu {
    white-space: initial;
  }

  .auth-buttons {
    white-space: initial;
  }

  .auth-button {
    padding: 16px 20px;
  }
}
</style>