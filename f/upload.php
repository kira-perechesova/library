<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
  </head>
<body>
  <h1>Загрузка файлов</h1>
  <form action="fileUpload.php" method="post" enctype="multipart/form-data">
    <p><select name="path">
      <option value="Видео">Видео</option>
      <option value="Документы">Документы</option>
      <option value="Картинки">Картинки</option>
  </select></p>
      <p><input type="file" name="upload[]" multiple></p>
      <p><input type="submit"></p>
  </form>
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
  <script>
    let inputElement = document.querySelector('input[type="file"]');
    FilePond.create(inputElement, {
      storeAsFile: true
    });
  </script>
</body>
</html>