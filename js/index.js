const burger = document.querySelector('#js-burger');
const headerNav = document.querySelector('#js-header-nav');

burger.addEventListener('click', () => {
  burger.classList.toggle('burger--active');
  headerNav.classList.toggle('header-nav--active');
  document.body.classList.toggle('no-scrolled');
});

if (window.innerWidth < 768) {
  headerNav.querySelectorAll('a').forEach((link) => {
    console.log(link);
    link.addEventListener('click', () => {
      console.log('click');
      burger.classList.toggle('burger--active');
      headerNav.classList.toggle('header-nav--active');
      document.body.classList.toggle('no-scrolled');
    });
  });
}

window.addEventListener('scroll', function () {
  const header = document.getElementById('js-header');

  // Додаємо або видаляємо клас "scrolled"
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

headerNav.querySelectorAll('a').forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault(); // Скасовуємо стандартну прокрутку

    const headerHeight = document.querySelector(".header").offsetHeight; // Висота хедера
    const targetId = this.getAttribute("href"); // ID цільової секції
    const targetSection = document.querySelector(targetId); // Цільова секція

    if (targetSection) {
      // Обчислюємо положення секції з урахуванням висоти хедера
      const sectionPosition = targetSection.offsetTop - headerHeight;

      // Прокручуємо сторінку до секції
      window.scrollTo({
        top: sectionPosition,
        behavior: "smooth", // Плавна прокрутка
      });
    }
  });
});