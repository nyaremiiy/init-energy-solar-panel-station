gsap.registerPlugin(ScrollTrigger);

const heroAnimation = {
  duration: 1,
  opacity: 1,
  y: 0,
};

if (window.innerWidth > 560) {
  gsap.to('.header', { ...heroAnimation, duration: 0.3 });
  gsap.to(
    [
      '.hero__subtitle',
      '.hero__info',
      '.hero__title',
      '.hero__description',
      '.hero__button',
    ],
    { ...heroAnimation }
  );

  // Глобальна анімація для всіх елементів з класом .animate
  gsap.utils.toArray('.animate').forEach((item) => {
    gsap.from(item, {
      opacity: 0,
      y: 30,
      duration: 0.8,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: item,
        start: 'top 75%',
        end: 'top 30%',
        toggleActions: 'play none none reverse',
      },
    });
  });
  // Анімація зсуву зліва (.animate-left)
  gsap.utils.toArray('.animate-left').forEach((item) => {
    gsap.from(item, {
      opacity: 0,
      x: -10,
      duration: 0.8,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: item,
        start: 'top 80%',
        end: 'top 55%',
        toggleActions: 'play none none reverse',
      },
    });
  });
  // Анімація зсуву справа (.animate-right)
  gsap.utils.toArray('.animate-right').forEach((item) => {
    gsap.from(item, {
      opacity: 0,
      x: 10,
      duration: 0.8,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: item,
        start: 'top 80%',
        end: 'top 55%',
        toggleActions: 'play none none reverse',
      },
    });
  });

  gsap.from('.info__stat-bg', {
    width: 0,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.info',
      start: 'top 30%',
      end: 'top 10%',
      toggleActions: 'play none none reverse',
    },
  });

  gsap.utils
    .toArray(['.choose-us__cards', '.credit__list'])
    .forEach((container) => {
      gsap.from(container.children, {
        opacity: 0,
        y: 50,
        scale: 0.9,
        duration: 0.8,
        ease: 'power2.out',
        stagger: 0.5, // Плавне з’явлення карток одна за одною
        scrollTrigger: {
          trigger: container,
          start: 'top 75%',
          end: 'top 50%',
          toggleActions: 'play none none reverse',
        },
      });
    });
}

// Оновлюємо тригери після завантаження
ScrollTrigger.refresh();
