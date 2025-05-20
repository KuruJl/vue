<template>
    <div class="container">
        <h1>Создание объявления</h1>
        
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" id="title" placeholder="Введите название объявления">
        </div>
        
        <div class="form-group">
            <label for="address">Адрес (Город, улица, номер здания)</label>
            <input type="text" id="address" placeholder="Введите адрес">
        </div>
        
        <div class="form-group">
            <label for="city">Город</label>
            <input type="text" id="city" placeholder="Введите город">
        </div>
        
        <div class="form-group">
            <label for="rooms">Количество комнат</label>
            <input type="number" id="rooms" placeholder="Введите количество комнат" min="1">
        </div>
        
        <div class="form-group">
            <label for="price">Цена за ночь</label>
            <input type="number" id="price" placeholder="Введите цену">
        </div>
        
        <div class="form-group">
            <label>Добавить изображение</label>
            <div class="image-upload">
                <input type="file" id="image" accept="image/*" style="display: none;">
                <p>Перетащите изображение сюда или нажмите для загрузки</p>
            </div>
        </div>
        
        <button type="submit" class="submit-btn">Разместить объявление</button>
    </div>
</template>

<script>
export default {
  name: 'AppCreate_ad'
}
    </script>

<style>
.container {
    font-family: 'Rubik';
            
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 25px;
            color: black;
            text-align: center;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: black;
        }
        
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        .image-upload {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .image-upload:hover {
            border-color: #999;
        }
        
        .submit-btn {
            background-color: rgba(172, 224, 0, 1);
            color: white;
            border: none;
            padding: 14px 20px;
            width: 100%;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #45a049;
        }
</style>