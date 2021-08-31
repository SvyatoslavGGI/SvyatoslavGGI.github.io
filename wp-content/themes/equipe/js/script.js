$(".work-item").hover(
  function () {
      $(this).find(".work-thumbnail").fadeIn(700);
      console.log('yes')
  },
  function () {
      $(this).find(".work-thumbnail").fadeOut(700);
  }
);
$(".service-item").hover(
  function () {
      $(this).find(".service-thumbnail").fadeIn(1000);
      console.log('yes')
  },
  function () {
      $(this).find(".service-thumbnail").fadeOut(1100);
      console.log("yes yes yes!")
  }
);

// Получить модальный
var modal = document.getElementById("overlay-modal");

// Получить кнопку, которая открывает модальный
var btn = document.getElementById("menu-item-250");

// Получить элемент <span>, который закрывает модальный
var span = document.getElementsByClassName("close-modal")[0];

//Получить элемент <body> что бы запретить ему скролл
var body = document.getElementsByTagName('body')[0];

// Когда пользователь нажимает на кнопку, откройте модальный
btn.onclick = function() {
  modal.style.display = "block";
  body.style.position = "fixed"
}

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function() {
  modal.style.display = "none";
  body.style.position = "inherit"
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    body.style.position = "inherit"
  }
}