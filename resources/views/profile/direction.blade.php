<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Направления танцев</title>
  <style>
    #dance-directions {
      background-image: url('path/to/your/image.jpg'); /* Замените на путь к Вашему изображению */
      background-size: cover; /* Или contain, если нужно, чтобы изображение полностью поместилось */
      background-repeat: no-repeat;
      padding: 20px;
      color: white; /* Текст на фоне изображения */
    }

    #dance-directions > div {
      display: flex;
      flex-wrap: wrap; /* Разрешаем перенос строк */
      justify-content: space-around; /* Равномерное распределение колонок */
    }

    .dance-column {
      flex: 1 0 30%; /* 3 колонки, каждая занимает 30% ширины */
      margin: 10px;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный фон для читаемости */
      border-radius: 5px;
    }

    /*  Желто-черный эффект можно добавить через  linear-gradient  в background-image, 
        например: background-image: linear-gradient(to bottom, yellow, black);  */


  </style>
</head>
<body>

  <section id="dance-directions">
    <h2>#Направление танцев</h2>
    <div>
      <div class="dance-column">
        <h3>Вид танца 1</h3>
        <p>Описание вида танца 1.</p>
      </div>
      <div class="dance-column">
        <h3>Вид танца 2</h3>
        <p>Описание вида танца 2.</p>
      </div>
      <div class="dance-column">
        <h3>Вид танца 3</h3>
        <p>Описание вида танца 3.</p>
      </div>
    </div>
  </section>

</body>
</html>
