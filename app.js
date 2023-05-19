const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'easymarketdb'
});

connection.connect((err) => {
  if (err) {
    console.error('Ошибка подключения к базе данных:', err);
    return;
  }
  console.log('Подключено к базе данных');
});

// Обработка запросов к базе данных
app.get('/data', (req, res) => {
  connection.query('SELECT * FROM your_table_name', (error, results) => {
    if (error) {
      console.error('Ошибка выполнения запроса:', error);
      return;
    }
    res.json(results);
  });
});

// Запуск сервера
app.listen(3000, () => {
  console.log('Сервер запущен на порту 3000');
});
