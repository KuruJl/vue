<template>
    <header class="main-header">
      <div class="header-content">
        <div class="logo">Sweet Home</div>
        
        <nav class="nav-links">
          <Link href="/">Главная</Link>
          <Link href="/search">Поиск</Link>
          <Link href="/contacts">Контакты</Link>
        </nav>
        
        <div class="auth-links">
          <Link href="/login" class="auth-link">Вход</Link>
          <Link href="/register" class="auth-link register-link">Регистрация</Link>
        </div>
      </div>
    </header>
  </template>
  
  <script>
  export default {
    name: 'AppHeader'
  }
  </script>
  
  <style scoped>
  .main-header {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 15px 0;
  }
  
  .header-content {
    width: 1120px;
    height: 70px;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    padding: 0 30px;
  }
  
  .logo {
    font-family: 'Rubik', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-right: auto;
  }
  
  .nav-links {
    display: flex;
    gap: 40px;
    margin-right: auto;
  }
  
  .nav-links a {
    font-family: 'Rubik', sans-serif;
    font-size: 16px;
    color: #333;
    text-decoration: none;
    transition: color 0.3s;
  }
  
  .nav-links a:hover {
    color: #ACE000;
  }
  
  .auth-links {
    display: flex;
    gap: 15px;
  }
  
  .auth-link {
    font-family: 'Rubik', sans-serif;
    font-size: 16px;
    color: #ACE000;
    text-decoration: none;
    padding: 8px 16px;
    border: 1px solid #ACE000;
    border-radius: 20px;
    transition: all 0.3s;
  }
  
  .register-link {
    background-color: #ACE000;
    color: white !important;
  }
  
  .auth-link:hover {
    background-color: #ACE000;
    color: white;
  }
  </style>