<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Axon</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body>
  <header class="header">
    <div class="header-logo">
      <img class="header-logo-img" src="{{ asset('images/logo.svg') }}" alt="logo">
      <img class="header-logo-text" src="{{ asset('images/logo-name.svg') }}" alt="logo-name">
    </div>
    <ul class="header-menu">
      <li class="header-menu-item">история</li>
      <li class="header-menu-item">услуги</li>
      <li class="header-menu-item">отзывы</li>
      <li class="header-menu-item">контакты</li>
    </ul>
  </header>
  <section class="section section-first">
    <img src="{{ asset('images/img_first.jpg') }}" class="section-first-img" alt="backgraound-img-1">
    <div class="section-first-name">
      <h1 class="section-first-name-title">Роман Василенко</h1>
      <p class="section-first-name-sub">начать общение</p>
    </div>
  </section>
  <section class="section section-history">
    <h2 class="section-title section-title__history">ИСТОРИЯ</h2>
    <div class="history-content">
      <img class="history-content-img" src="{{ asset('images/img_history.jpg') }}" alt="img_history">
      <div class="history-content-text">
        <p class="history-content-text__first">Меня зовут Роман Василенко, родился и вырос в Екатеринбурге.
          <br />
          <br />
          Много лет руководил строительной компанией, некоторое время выпускал конно-спортивный журнал.
          Меня судили власти и похищали бандиты. Я был участником ночных гонок,
          а потом заново учился ходить и кушать после аварии.
        </p>
        <p class="history-content-text__second">
          <img class="history-content-text__second-img" src="{{ asset('images/history-content-text__second.jpg') }}" alt="img-text">
          Я люблю жизнь!<br />
          Мне не нравится мир, в котором я живу.<br />
          Всегда хотел сделать его лучше, людей чище, а кофе крепче.
        </p>
        <p class="history-content-text__first">
          У меня всегда был миллион вопросов к миру, родителям, себе и Богу.
          На поиск ответов ушли десятилетия учебы и саморазвития - психология и менеджмент,
          философия и социология, йога и медитации.
          Основой для работы и жизни стала ведическая астрология – джйотиш в ее современном изложении.
          <br />
          <br />
          С 2017 года практически все время посвятил учебе и путешествиям,
          на время оставив бизнес. Практику личных консультаций начал в 2019 году.
        </p>
        <p class="history-content-text__fourth">
          <img class="history-content-text__fourth-img" src="{{ asset('images/history-content-text__fourth.jpg') }}" alt="img-text">
          Когда каждый занят Своим делом, и делает<br /> его хорошо - мир становится чуть лучше.
        </p>
      </div>
    </div>
  </section>
  <section class="section section-consultation">
    <h2 class="section-title section-title__consultation">УСЛУГИ</h2>
    <div class="consultation-text-wrapper">
      <div class="consultation-text__left">
        <p class="consultation-text__left-big">
          Основная консультация: 3-6 часов.
          Стоимость - <b>10.000</b> рублей.
        </p>
        <p>
          Считаю важным ответить на два вопроса:<br />
          что мне делать вообще? что мне делать сейчас?
        </p>
        <p>
          Ответ на первый вопрос похож на стратегическое планирование.<br />
          Ответ на второй вопрос – на оперативное совещание.
        </p>
        <p class="consultation-text__left-big">
          Последующая консультация: 2-3 часа.
          Стоимость – <b>5.000</b> рублей.
        </p>
        <p>
          Возможна личная встреча или консультация по видео-связи,
          индивидуальный формат сотрудничества.
        </p>
        <button class="button">К РАСПИСАНИЮ</button>
      </div>
      <div class="consultation-text__right">
        <i class="consultation-text__right-first">
          <img class="consultation-text__right-first-img" src="{{ asset('images/consultation-text__right-first-img.jpg') }}" alt="img-text">
          Первое и самое важное условие моей работы – Этика и Конфиденциальность.
        </i>
        <p>
          Работа всегда начинается с ректификации – разговора за чашкой чая или кофе,
          где мы с Вами знакомимся. Я интересуюсь событиями вашей жизни, мыслями о них – больше
          похоже на работу психолога, часто прозрения возникают уже на этой стадии.
        </p>
        <i class="consultation-text__right-second">
          <img class="consultation-text__right-second-img" src="{{ asset('images/consultation-text__right-second-img.jpg') }}" alt="img-text">
          Смысл моей работы – помочь вам найти и пройти свой уникальный путь в жизни.
        </i>
        <p>
          Во второй части консультации больше говорю я. Про вас, вашу жизнь и устройство
          вашей психики. Про то, как эффективнее использовать ваш уникальный ресурс. Даю
          практичные знания.
        </p>
      </div>
    </div>
  </section>
  <section class="section section-instagram">
    <h2 class="section-title section-title__instagram">INSTAGRAM: ROMAN.AXON</h2>
    <div class="splide splide-insta">
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
          <img class="consultation-text__right-second-img" src="{{ asset('images/arrow.svg') }}" alt="arrow">
        </button>
        <button class="splide__arrow splide__arrow--next">
          <img class="consultation-text__right-second-img" src="{{ asset('images/arrow.svg') }}" alt="arrow">
        </button>
      </div>
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
          <li class="splide__slide">
            <img class="consultation-text__right-second-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section section-feedback-wrapper">
    <img class="section-feedback-wrapper-img" src="{{ asset('images/img_feedback.png') }}" alt="img-text">
    <div class="section-feedback">
      <h2 class="section-title section-title__feedback">ОТЗЫВЫ</h2>
      <div class="splide splide-feedback">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img class="consultation-text__right-second-img" src="{{ asset('images/arrow.svg') }}" alt="arrow">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img class="consultation-text__right-second-img" src="{{ asset('images/arrow.svg') }}" alt="arrow">
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img class="feedback-avatar-img" src="{{ asset('images/feedback_1.jpg') }}" alt="img-text">
              <div class="feedback-text-wrapper">
                <h3 class="feedback-text-name">Андрей. Предприниматель</h3>
                <p class="feedback-text-message">
                  Привет. Меня зовут Андрей. Хочется оставить свой отзыв о прекрасном специалисте
                  и теперь уже о моём друге. О Романе я узнал от своих друзей, находясь в это время
                  в Индии. Это как водится, сначала о хорошем человеке кто-то начинает что-то рассказывать,
                  а потом появляется и сам хороший человек. Рома приехал после Нового года и примерно через
                  3 дня мы встретились, потому что мне было уже совсем невтерпеж, узнать, что со мной происходит
                  и что у меня со звездами? Мне, до нашей встречей с Ромой, тоже несколько раз делали
                  астрологические прогнозы и рассказывали мою судьбу, но что-то она никак не хотела совпадать
                  с моей реальностью. На сеансе у Ромы моя судьба и я встретились, и первый раз в жизни,
                  за 54 года, поняли, куда нам вместе нужно двигаться. Обнялись и пошли. Информация зашла так,
                  что казалось, наконец-то выросли крылья и стало понятно, что было со мной до этого и,
                  что теперь может быть, в настоящем, и будущем. С этого момента,
                  моя жизнь сильно изменилась. Я поверил в себя, как не верил с 20 лет. Началась полная
                  трансформация моей личности и начались чудеса. Сейчас я уже совершенно другой человек
                  и я вижу, как меняется мир вокруг меня. Я полностью счастлив. Советую вам, пообщайтесь
                  с Романом и у вас появится шанс изменить свою жизнь, в правильном направлении.
                </p>
              </div>
            </li>
            <li class="splide__slide">
              <img class="feedback-avatar-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
              <div class="feedback-text-wrapper">
                <h3 class="feedback-text-name">ivan uvanov</h3>
                <p class="feedback-text-message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere non quas,
                  eligendi, libero blanditiis nostrum porro enim officia dolor quasi accusamus
                  id labore officiis cupiditate velit obcaecati modi quae doloremque!
                </p>
              </div>
            </li>
            <li class="splide__slide">
              <img class="feedback-avatar-img" src="{{ asset('images/insta_load.jpg') }}" alt="img-text">
              <div class="feedback-text-wrapper">
                <h3 class="feedback-text-name">ivan uvanov</h3>
                <p class="feedback-text-message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere non quas,
                  eligendi, libero blanditiis nostrum porro enim officia dolor quasi accusamus
                  id labore officiis cupiditate velit obcaecati modi quae doloremque!
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-calendar">
    <h2 class="section-title section-title__calendar">РАСПИСАНИЕ</h2>
    <div class="calendar-block">
      <h2 class="calendar-block-title">Выберите и подтвердите дату для встречи.</h2>
      <input type="text" id="inputCalendar" class="calendar-block-input" placeholder="Выберите дату" />
      <input type="text" id="inputFullname" class="calendar-block-input" placeholder="Введите ФИО" />
      <button class="button" id="registrationButtton">Зарегистрироваться</button>
    </div>
    <div class="calendar-text">
      <p class="calendar-text-info">
        У любого человека бывали сложные времена.
        Мне всегда помогали, теперь моя очередь.
        Две консультации в месяц я провожу со скидкой 80%.
        Если вам нужна моя помощь – пишите на roman@axon.one.
      </p>
      <div class="calendar-text-response">
        <p>На ваш e-mail будет отправлено письмо с информацией о времени консультации и способах подключения</p>
      </div>
    </div>
  </section>
</body>

</html>