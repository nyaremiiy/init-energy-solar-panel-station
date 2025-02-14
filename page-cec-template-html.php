<?php
/*
Template Name: CEC Template
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEC | INIT Energy</title>
    <!-- Підключаємо кастомні стилі -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom-assets/styles-cec/index.css">
</head>
<body>
    <!-- Header -->
    <header class="header" id="js-header">
      <div class="header__container container">
        <div class="header__logo">
          <a href="https://init.energy/" class="logo INIT ENERGY">
            <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/main-logo-white.webp" alt="Logo INIT Energy" />
          </a>
        </div>
        <nav class="header__nav" id="js-header-nav">
          <div class="header__menu">
            <ul class="menu">
              <li class="menu__item">
                <a href="https://init.energy/cec" class="menu__link">Головна</a>
              </li>
              <li class="menu__item">
                <a href="#about-us" class="menu__link">Про нас</a>
              </li>
              <li class="menu__item">
                <a href="#our-services" class="menu__link">Наші сервіси</a>
              </li>
              <li class="menu__item">
                <a href="#credit" class="menu__link">Кредитування</a>
              </li>
            </ul>
          </div>
          <div class="header__button">
            <a href="#" class="button-link button-link--green">
              <span>Підключитись</span>
              <svg
                width="27"
                height="8"
                viewBox="0 0 27 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M26.3536 4.35355C26.5488 4.15829 26.5488 3.84171 26.3536 3.64645L23.1716 0.464466C22.9763 0.269204 22.6597 0.269204 22.4645 0.464466C22.2692 0.659728 22.2692 0.976311 22.4645 1.17157L25.2929 4L22.4645 6.82843C22.2692 7.02369 22.2692 7.34027 22.4645 7.53553C22.6597 7.7308 22.9763 7.7308 23.1716 7.53553L26.3536 4.35355ZM0 4.5H26V3.5H0V4.5Z"
                  fill="#051C2F"
                ></path>
              </svg>
            </a>
          </div>
        </nav>
        <div class="header__burger">
          <div class="burger" id="js-burger">
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->
    <main>
      <!-- Section Hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__top-bar">
            <div class="hero__subtitle">
              <div class="subtitle subtitle--light">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                  />
                </svg>
                <span>твоя енергетична незалежність</span>
              </div>
            </div>
            <div class="hero__info">
              <div class="hero__year">2025</div>
              <svg
                width="24"
                height="1"
                viewBox="0 0 24 1"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <line y1="0.5" x2="24" y2="0.5" stroke="white" />
              </svg>
              <span class="hero__info-text"
                >Нова ера енергії разом з нами!</span
              >
            </div>
          </div>
          <div class="hero__middle-bar">
            <h1 class="hero__title">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 24">
                <path
                  fill-rule="nonzero"
                  d="M13.252 8.4h-5.48l5.08-8h-6.4l-6 12h4.72L.452 23.6z"
                ></path>
              </svg>
              Сонячні Станції для Вашого Дому та Бізнесу
            </h1>
          </div>
          <div class="hero__bottom-bar">
            <p class="hero__description text text--white">
              Сонце дарує безмежну енергію, і ми допомагаємо вам стати
              незалежними від електромережі. Обирайте сонячні станції для дому
              чи бізнесу, заощаджуйте кошти та створюйте екологічно чисту
              енергію вже сьогодні.
            </p>
            <div class="hero__button">
              <a
                href="#"
                class="button-link button-link--light button-link--small"
                >Підключити енергію майбутнього
                <svg
                  width="27"
                  height="8"
                  viewBox="0 0 27 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.3536 4.35355C26.5488 4.15829 26.5488 3.84171 26.3536 3.64645L23.1716 0.464466C22.9763 0.269204 22.6597 0.269204 22.4645 0.464466C22.2692 0.659728 22.2692 0.976311 22.4645 1.17157L25.2929 4L22.4645 6.82843C22.2692 7.02369 22.2692 7.34027 22.4645 7.53553C22.6597 7.7308 22.9763 7.7308 23.1716 7.53553L26.3536 4.35355ZM0 4.5H26V3.5H0V4.5Z"
                    fill="#051C2F"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End section Hero -->

      <!-- Section Info -->
      <section class="info">
        <div class="info__container container">
          <div class="info__content animate">
            <div class="subtitle subtitle--blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>Розвиток Енергетики</span>
            </div>
            <h2 class="info__title title-h2">Зростання сонячної енергетики</h2>
            <p class="info__description text text--silver">
              З кожним роком популярність сонячних панелей зростає, і все більше
              домогосподарств та підприємств обирають відновлювані джерела
              енергії. У цій секції ми наводимо ключову статистику, яка
              демонструє тенденції та ріст встановлення сонячних панелей в
              Україні.
            </p>
            <ul class="info__statistic">
              <li class="info__stat-item">
                <div class="info__stat-year">2020</div>
                <div class="info__stat-canvas">
                  <span class="info__stat-num">30 000+</span>
                  <span class="info__stat-bg"></span>
                </div>
              </li>
              <li class="info__stat-item">
                <div class="info__stat-year">2022</div>
                <div class="info__stat-canvas">
                  <span class="info__stat-num">40 000+</span>
                  <span class="info__stat-bg"></span>
                </div>
              </li>
              <li class="info__stat-item">
                <div class="info__stat-year">2024</div>
                <div class="info__stat-canvas">
                  <span class="info__stat-num">51 000+</span>
                  <span class="info__stat-bg"></span>
                </div>
              </li>
            </ul>
            <p class="info__description text text--small text--cursive">
              Джерело: Міжнародне енергетичне агентство
            </p>
          </div>
          <div class="info__image animate-right">
            <div class="info__image-text">
              <div class="info__image-number">52,000+</div>
              <div class="info__image-desc">СЕС</div>
            </div>
          </div>
        </div>
      </section>
      <!-- End section Info -->

      <!-- Section Choose Us -->
      <section class="choose-us" id="about-us">
        <div class="choose-us__container container">
          <div class="animate">
            <div class="subtitle subtitle--dark-blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>init energy - ваш найкращий вибір</span>
            </div>
            <div class="choose-us__header">
              <h2 class="choose-us__title title-h2">
                Генеруйте власну енергiю разом з нами
              </h2>
              <a href="#" class="button-link button-link--green">
                <span> Дізнатись більше </span>
                <svg
                  width="27"
                  height="8"
                  viewBox="0 0 27 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M26.3536 4.35355C26.5488 4.15829 26.5488 3.84171 26.3536 3.64645L23.1716 0.464466C22.9763 0.269204 22.6597 0.269204 22.4645 0.464466C22.2692 0.659728 22.2692 0.976311 22.4645 1.17157L25.2929 4L22.4645 6.82843C22.2692 7.02369 22.2692 7.34027 22.4645 7.53553C22.6597 7.7308 22.9763 7.7308 23.1716 7.53553L26.3536 4.35355ZM0 4.5H26V3.5H0V4.5Z"
                    fill="#051C2F"
                  ></path>
                </svg>
              </a>
            </div>
            <p
              class="choose-us__description text text--silver text--cursive text--small"
            >
              для продажу, економiï та незалежного споживання
            </p>
          </div>
          <ul class="choose-us__cards">
            <li class="choose-us__item">
              <div class="choose-us__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg" alt="Icon" />
              </div>
              <h3 class="choose-us__title-third title-h3">Для дому</h3>
              <p class="text text--silver">
                Генеруйте електроенергію, незалежну від загальної мережі
                електропостачання, для повної автономії від державних тарифів.
                <br />
                <br />
                Це як встановити генератор, який замість палива буде
                використовувати енергію сонця.
              </p>
            </li>
            <li class="choose-us__item">
              <div class="choose-us__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg" alt="Icon" />
              </div>
              <h3 class="choose-us__title-third title-h3">Для доходу</h3>
              <p class="text text--silver">
                Отримуйте до €6900 річного прибутку від продажу сонячної енергії
                по програмі Зеленого тарифу.
                <br />
                <br />
                Це як купити квартиру та здавати її в оренду роками по вигідній
                ціні.
              </p>
            </li>
            <li class="choose-us__item">
              <div class="choose-us__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg" alt="Icon" />
              </div>
              <h3 class="choose-us__title-third title-h3">Для пiдприємств</h3>
              <p class="text text--silver">
                Зменшіть комунальні витрати на виробництві чи в офісі –
                встановіть сонячну електростанцію для генерації електроенергії
                <br />
                <br />
                Витрачайте на комунальні послуги менше, наче долар знову по 8
                гривень.
              </p>
            </li>
          </ul>
          <div class="choose-us__video">
            <iframe
              src="https://www.youtube.com/embed/NGGgCaMWsHc"
              title="Сонячна електростанція (СЕС) / Потужність 16,72 кВт / Зелений Тариф /"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </section>
      <!-- End section Choose Us -->

      <!-- Section About Us -->
      <section class="about-us">
        <div class="about-us__container container">
          <div class="about-us__content animate">
            <div class="subtitle subtitle--blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>про нас</span>
            </div>
            <h2 class="about-us__title title-h2">
              INIT Energy - енергія, якій можна довіряти
            </h2>
            <p class="about-us__description text text--silver">
              Ми – команда професіоналів із багаторічним досвідом у сфері
              сонячної енергетики. За нашими плечима сотні успішно реалізованих
              проєктів по всій Україні. Ми гарантуємо якісне обладнання,
              прозорість на всіх етапах роботи та повний супровід – від
              проєктування до запуску системи. Обираючи нас, ви отримуєте
              надійного партнера, який піклується про ваш комфорт, незалежність
              від мережі та довгострокову економію.
            </p>
            <h3 class="about-us__title-th title-h3">наша місія:</h3>
            <ul class="our-mission-list">
              <li class="our-mission-list__item">
                Економія та вигода. Ми допомагаємо вам зменшити витрати на
                електроенергію та отримувати стабільний пасивний дохід завдяки
                власній генерації енергії.
              </li>
              <li class="our-mission-list__item">
                Енергонезалежність. Завдяки сонячним станціям ви стаєте
                незалежними від загальної електромережі та захищеними від
                перебоїв у постачанні.
              </li>
              <li class="our-mission-list__item">
                Довготривала надійність. Ми забезпечуємо якісне обладнання та
                професійну підтримку, що гарантує стабільну роботу вашої системи
                на десятиліття.
              </li>
            </ul>
          </div>
          <div class="about-us__images">
            <div class="about-us__image animate-left">
              <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/about-us-solar-1.webp" alt="#" />
            </div>
            <div class="about-us__image animate-left">
              <div class="about-us__rating">
                <span class="about-us__rating-number">4.8/5</span> <br />
                Рейтинг від клієнтів
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/about-us-solar-2.webp" alt="#" />
            </div>
          </div>
        </div>
      </section>
      <!-- End section About Us -->

      <!-- Section Green Energy -->
      <section class="green-energy">
        <div class="green-energy__container container animate">
          <div class="green-energy__content">
            <div class="subtitle subtitle--blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>твоя зелена енергія</span>
            </div>
            <h2 class="green-energy__title title-h2 title-h2--light">
              Отримуйте стабiльний дохiд вiд зеленоï енергiï
            </h2>
            <p
              class="green-energy__description text text--light text--cursive text--small"
            >
              продавайте сонячну електроенергiю по зеленому тарифу
            </p>
          </div>
          <a
            href="#"
            class="green-energy__button button-link button-link--green"
          >
            <span> Дізнатись більше </span>
            <svg
              width="27"
              height="8"
              viewBox="0 0 27 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M26.3536 4.35355C26.5488 4.15829 26.5488 3.84171 26.3536 3.64645L23.1716 0.464466C22.9763 0.269204 22.6597 0.269204 22.4645 0.464466C22.2692 0.659728 22.2692 0.976311 22.4645 1.17157L25.2929 4L22.4645 6.82843C22.2692 7.02369 22.2692 7.34027 22.4645 7.53553C22.6597 7.7308 22.9763 7.7308 23.1716 7.53553L26.3536 4.35355ZM0 4.5H26V3.5H0V4.5Z"
                fill="#051C2F"
              ></path>
            </svg>
          </a>
        </div>
      </section>
      <!-- End section Green Energy -->

      <!-- Section Our Services -->
      <section class="our-services" id="our-services">
        <div class="our-services__container container">
          <div class="animate">
            <div class="subtitle subtitle--blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>Наші сервіси</span>
            </div>
            <h2 class="our-services__title title-h2 title-h2--light">
              Комплексні рішення з відновлюваної енергетики
            </h2>
            <p class="our-services__description text text--light">
              Надаємо можливість бізнесу та домогосподарствам обирати стійкі
              енергетичні рішення, адаптовані до ваших потреб. Від встановлення
              сонячних панелей до систем зберігання енергії — ми пропонуємо
              повний спектр послуг для досягнення енергонезалежності, зниження
              витрат та внеску у чисте майбутнє планети.
            </p>
          </div>
          <ul class="our-services__cards">
            <li class="our-services__card">
              <div class="our-services__card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/our-s-card-1.webp" alt="Solar panel" />
              </div>
              <div class="our-services__card-content">
                <h3 class="our-services__card-title">
                  Встановлення сонячних панелей
                </h3>
                <p class="our-services__card-description">
                  Оптимальне рішення для економії та енергонезалежності. Ми
                  професійно встановлюємо сонячні панелі для вашого дому чи
                  бізнесу, забезпечуючи стабільну генерацію чистої енергії та
                  зниження витрат на електроенергію.
                </p>
              </div>
              <div class="our-services__card-button">
                <a
                  href="#"
                  class="button-link button-link--secondary button-link--small"
                >
                  <span>Дізнатись більше</span>
                  <svg
                    viewBox="0 0 46 46"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="46" height="46" rx="6" fill="#2F4252" />
                    <path
                      d="M16 23H30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M23 16L30 23L23 30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </li>
            <li class="our-services__card">
              <div class="our-services__card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/our-s-card-2.webp" alt="Solar panel" />
              </div>
              <div class="our-services__card-content">
                <h3 class="our-services__card-title">
                  Створення індивідуального проєкту
                </h3>
                <p class="our-services__card-description">
                  Створюємо індивідуальні проєкти сонячних станцій, адаптовані
                  до ваших потреб. Ретельний аналіз, сучасні рішення та
                  максимальна ефективність для вашого дому чи бізнесу.
                </p>
              </div>
              <div class="our-services__card-button">
                <a
                  href="#"
                  class="button-link button-link--secondary button-link--small"
                >
                  <span>Дізнатись більше</span>
                  <svg
                    viewBox="0 0 46 46"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="46" height="46" rx="6" fill="#2F4252" />
                    <path
                      d="M16 23H30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M23 16L30 23L23 30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </li>
            <li class="our-services__card">
              <div class="our-services__card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/our-s-card-3.webp" alt="Solar panel" />
              </div>
              <div class="our-services__card-content">
                <h3 class="our-services__card-title">
                  Моніторинг та обслуговування
                </h3>
                <p class="our-services__card-description">
                  Постійний контроль за ефективністю вашої сонячної станції.
                  Забезпечуємо професійне обслуговування, швидке усунення
                  несправностей та максимальну продуктивність системи.
                </p>
              </div>
              <div class="our-services__card-button">
                <a
                  href="#"
                  class="button-link button-link--secondary button-link--small"
                >
                  <span>Дізнатись більше</span>
                  <svg
                    viewBox="0 0 46 46"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="46" height="46" rx="6" fill="#2F4252" />
                    <path
                      d="M16 23H30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M23 16L30 23L23 30"
                      stroke="#9CFD56"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </li>
          </ul>
          <ul class="our-services__list animate">
            <li class="our-services__item">
              <div class="our-services__item-text">
                <span class="our-services__item-num">30+</span>
                <span>років досвіду</span>
              </div>
            </li>
            <li class="our-services__item">
              <div class="our-services__item-text">
                <span class="our-services__item-num">4.8/5</span>
                <span>рейтинг від клієнтів</span>
              </div>
            </li>
            <li class="our-services__item">
              <div class="our-services__item-text">
                <span class="our-services__item-num">10+</span>
                <span>країн обслуговування</span>
              </div>
            </li>
            <li class="our-services__item">
              <div class="our-services__item-text">
                <span class="our-services__item-num">> 1000</span>
                <span>успішних проектів</span>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- End section Our Services  -->

      <!-- Section Credit -->
      <section class="credit" id="credit">
        <div class="credit__container container">
          <div class="animate">
            <div class="subtitle subtitle--dark-blue">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                />
              </svg>
              <span>Глобус Банк - Енергія в кредит</span>
            </div>
            <h2 class="credit__title title-h2">
              кредитування сонячної електростанції
            </h2>
            <p class="energy__description text">
              Розпочніть шлях до енергонезалежності вже сьогодні з гнучкими
              умовами фінансування. Ми допомагаємо оформити кредит на сонячні
              електростанції зі зручними відсотковими ставками та тривалими
              термінами. Інвестиція в чисту енергію тепер доступна кожному.
            </p>
          </div>
          <div class="credit__content animate-right">
            <div class="credit__images-box animate-right">
              <div class="credit__content-image-box">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/credit-2.webp" alt="" />
              </div>
              <div class="credit__content-image-box">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/credit.webp" alt="" />
              </div>
            </div>
            <div class="credit__content-text-box animate-right">
              <div class="credit__title-h3">
                Етапи кредитування сонячної електростанції під 0%
              </div>
              <ul class="credit__list">
                <li class="credit__item">
                  <div class="credit__item-header">
                    <img
                      class="credit__item-icon"
                      src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg"
                      alt="icon"
                    />
                    <h4 class="credit__title-h4">Консультація з нами</h4>
                  </div>
                  <div class="credit__item-box">
                    <p class="credit__item-text">
                      Перший крок - звернення до нашої компанії. Ми допоможемо
                      підібрати обладнання для вашої сонячної електростанції
                      враховуючи ваші енергетичні потреби. Після погодження
                      надамо рахунок, який ви зможете подати до банку для
                      отримання кредиту.
                    </p>
                  </div>
                </li>
                <li class="credit__item">
                  <div class="credit__item-header">
                    <img
                      class="credit__item-icon"
                      src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg"
                      alt="icon"
                    />
                    <h4 class="credit__title-h4">Звернення до банку</h4>
                  </div>
                  <div class="credit__item-box">
                    <p class="credit__item-text">
                      Після отримання рахунку ви звертаєтеся до банку для
                      отримання безвідсоткового кредиту. Банк розгляне вашу
                      заявку та запропонує пільгові умови з гнучкими термінами
                      погашення та нульовою відсотковою ставкою.
                    </p>
                  </div>
                </li>
                <li class="credit__item">
                  <div class="credit__item-header">
                    <img
                      class="credit__item-icon"
                      src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg"
                      alt="icon"
                    />
                    <h4 class="credit__title-h4">Схвалення та оплата</h4>
                  </div>
                  <div class="credit__item-box">
                    <p class="credit__item-text">
                      Після схвалення кредиту банк перераховує кошти на наш
                      рахунок для оплати обладнання.
                    </p>
                  </div>
                </li>
                <li class="credit__item">
                  <div class="credit__item-header">
                    <img
                      class="credit__item-icon"
                      src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/item.svg"
                      alt="icon"
                    />
                    <h4 class="credit__title-h4">Доставка та монтаж</h4>
                  </div>
                  <div class="credit__item-box">
                    <p class="credit__item-text">
                      Ми забезпечуємо своєчасну доставку та монтаж обладнання,
                      гарантуючи ефективну роботу сонячної електростанції.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End section Credit -->

      <!-- Section Globus -->
      <section class="globus-bank">
        <div class="globus-bank__container container">
          <div class="globus-bank__content-wrapper animate">
            <div class="globus-bank__header-image">
              <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/images/globusbank-logo.webp" alt="Globus Bank logo" />
            </div>
            <p class="globus-bank__description text">
              За підтримки Уряду та Фонду Розвитку Підприємництва, від сьогодні
              у всіх відділеннях Глобус Банку кожен українець може оформити
              кредит для придбання альтернативних джерел електроенергії під 0%.
              Держава повністю компенсує відсоткову ставку.
            </p>
            <ul class="globus-bank__cards">
              <li class="globus-bank__item globus-bank__item--card">
                <h3 class="globus-bank__item-card-title">
                  Програма фінансування ОСББ ТА ЖБК «ВІДНОВЛЕННЯ ЕНЕРГЕТИЧНОЇ
                  ІНФРАСТРУКТУРИ»
                </h3>
                <div class="globus-bank__item-card-button">детальніше</div>
              </li>
              <li class="globus-bank__item globus-bank__item--card">
                <h3 class="globus-bank__item-card-title">
                  Підвищення енергоефективності за програмою «ДОСТУПНІ КРЕДИТИ
                  5-7-9%»
                </h3>
                <div class="globus-bank__item-card-button">детальніше</div>
              </li>
            </ul>
          </div>
          <p class="globus-bank__description text animate-right">
            Для більш детальної інформації, заповніть форму та отримайте
            консультацію від нашого менеджера.
          </p>
          <div class="globus-bank-button animate-right">
            <a href="#" class="button-link button-link--green">
              <span>Отримати консультацію</span>
              <svg
                width="27"
                height="8"
                viewBox="0 0 27 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M26.3536 4.35355C26.5488 4.15829 26.5488 3.84171 26.3536 3.64645L23.1716 0.464466C22.9763 0.269204 22.6597 0.269204 22.4645 0.464466C22.2692 0.659728 22.2692 0.976311 22.4645 1.17157L25.2929 4L22.4645 6.82843C22.2692 7.02369 22.2692 7.34027 22.4645 7.53553C22.6597 7.7308 22.9763 7.7308 23.1716 7.53553L26.3536 4.35355ZM0 4.5H26V3.5H0V4.5Z"
                  fill="#051C2F"
                ></path>
              </svg>
            </a>
          </div>
        </div>
      </section>
      <!-- End section Globus -->
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer__container container">
        <div class="footer__top-bar">
          <h2 class="footer__title animate-left">
            Інноваційні сонячні станції для енергонезалежного майбутнього!
            Почніть зараз!
          </h2>
          <p class="footer__description text text--light animate-left">
            Сонячна енергія — це крок до енергонезалежності та сталого
            майбутнього. Встановлюючи сучасні сонячні панелі, ви отримуєте
            доступ до чистої, безкоштовної електроенергії, зменшуєте витрати та
            робите внесок у збереження довкілля. Долучайтесь до тих, хто вже
            сьогодні інвестує у надійне та екологічне джерело енергії!
          </p>
        </div>
        <div class="footer__middle-bar">
          <div class="footer__logo">
            <a href="https://init.energy/" class="logo INIT ENERGY">
              <img src="./images/main-logo-white.webp" alt="Logo INIT Energy" />
            </a>
          </div>
          <nav class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item">
                <h4 class="footer__list-title">Інформація</h4>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Оплата і доставка</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Гарантія і сервіс</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Договір оферти</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Політика конфіденційності</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Контакти</a>
              </li>
            </ul>
            <ul class="footer__list">
              <li class="footer__item">
                <h4 class="footer__list-title">Напрямки</h4>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Головна</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Про нас</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Наші сервіси</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Кредитування</a>
              </li>
            </ul>
            <ul class="footer__list">
              <li class="footer__item">
                <h4 class="footer__list-title">Контакти</h4>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">+380671985550</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">+380675551250</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Львів, вул. Шевченка, 317б</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Київ, вул. Є.Сверстюка, 19</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">initenergy@gmail.com</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="footer__bottom-bar">
          <span>Copyright © 2025 INIT Energy</span>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/custom-assets/js-cec/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/custom-assets/js-cec/animation.js"></script>>
  </body>
</html>
