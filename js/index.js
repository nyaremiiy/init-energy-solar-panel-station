const burger = document.querySelector('#js-burger');
const headerNav = document.querySelector('#js-header-nav');

burger.addEventListener('click', () => {
  burger.classList.toggle('burger--active');
  headerNav.classList.toggle('header-nav--active');
  document.body.classList.toggle('no-scrolled');
});

if (window.innerWidth < 768) {
  headerNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      burger.classList.remove('burger--active');
      headerNav.classList.remove('header-nav--active');
      document.body.classList.remove('no-scrolled');
    });
  });
}

window.addEventListener('scroll', function () {
  const header = document.getElementById('js-header');
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

headerNav.querySelectorAll('.nav').forEach((link) => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    const headerHeight = document.querySelector('.header').offsetHeight;
    const targetId = this.getAttribute('href');
    const targetSection = document.querySelector(targetId);

    if (targetSection) {
      const sectionPosition = targetSection.offsetTop - headerHeight;

      window.scrollTo({
        top: sectionPosition,
        behavior: 'smooth',
      });
    }
  });
});

// const buttons = document.querySelectorAll('.js-btn');
// const modalOverlay = document.querySelector('.modal-overlay');
// const closeModalButton = document.querySelector('.close-modal');

// function openModal() {
//   modalOverlay.classList.add('active');

//   if (!document.body.classList.contains('no-scrolled')) {
//     document.body.classList.add('no-scrolled');
//   }
// }
// function closeModal() {
//   modalOverlay.classList.remove('active');
//   if (!burger.classList.contains('burger--active')) {
//     document.body.classList.remove('no-scrolled');
//   }
// }

// buttons.forEach((button) => {
//   button.addEventListener('click', () => {
//     openModal();
//   });
// });

// closeModalButton.addEventListener('click', () => {
//   closeModal();
// });

// modalOverlay.addEventListener('click', (event) => {
//   if (event.target === modalOverlay) {
//     closeModal();
//   }
// });

// document
//   .getElementById('contact-form')
//   .addEventListener('submit', function (event) {
//     event.preventDefault();

//     const formData = new FormData(this);

//     fetch('/wp-admin/admin-ajax.php?action=send_contact_form', {
//       method: 'POST',
//       body: formData,
//     })
//       .then((response) => response.json())
//       .then((data) => {
//         if (data.success) {
//           document.getElementById('response-message').innerHTML =
//             '<p style="color: green; margin-top: 15px;">Повідомлення успішно надіслано!</p>';
//         } else {
//           document.getElementById(
//             'response-message'
//           ).innerHTML = `<p style="color: red; margin-top: 15px;">Помилка: ${data.data}</p>`;
//         }
//       })
//       .catch((error) => {
//         document.getElementById(
//           'response-message'
//         ).innerHTML = `<p style="color: red; margin-top: 15px;">Помилка: ${error.message}</p>`;
//       });
//   });
