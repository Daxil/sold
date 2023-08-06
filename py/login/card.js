// Получаем все элементы с классом dopPhoto
var dopPhotos = document.querySelectorAll('.dopPhoto');

// Перебираем все элементы dopPhoto
for (var i = 0; i < dopPhotos.length; i++) {
  // Добавляем обработчик события "клик"
  dopPhotos[i].addEventListener('click', function() {
    // Получаем ссылку на изображение внутри текущего элемента dopPhoto
    var imgSrc = this.querySelector('img').src;

    // Находим элемент с классом mainPhoto
    var mainPhoto = document.querySelector('.mainPhoto');

    // Находим и сохраняем ссылку на изображение внутри mainPhoto
    var mainImg = mainPhoto.querySelector('img');

    // Меняем ссылку на изображение внутри mainPhoto на выбранное изображение
    mainImg.src = imgSrc;
  });
}
