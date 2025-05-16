
  
  <template>
    <nav class="navigation-bar">
      <div class="nav-menu">
        <h1 class="logo">Sweet<br />Home</h1>
        <a href="/" class="nav-link">Главная</a>
        <a href="/search" class="nav-link">Поиск</a>
        <a href="/contacts" class="nav-link">Контакты</a>
      </div>
      <div class="auth-buttons">
        <button class="auth-button">Вход</button>
        <button class="auth-button">Регистрация</button>
      </div>
    </nav>
  </template>
  
  <script>
  export default {
    name: 'AppHeader'
  }
  </script>
  
  <style scoped>
  .navigation-bar {
    font-family: 'Rubik';
    margin-bottom: 20px;
    margin-top: 20px;
    margin-left: 21%;
    width: 1120px;
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
  