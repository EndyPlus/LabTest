<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Мій сайтвізитка</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="aboutme.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Моя візитка.</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#about">Про мене</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Портфоліо</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Навички</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Контакти</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section id="about" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="img/avatar.jpg" alt="Me" class="rounded-image" />
            </div>
            <div class="col-md-6">
              <h2 class="text-purple">Про мене</h2>
              <p>
                Привіт! Мене звуть Артем, я студент першого курсу факультет
                Інформаційних Технологій в ХНУ.
              </p>
              <p>Я прагну стати фронт-енд розробником.</p>
            </div>
          </div>
        </div>
      </section>

      <section id="portfolio" class="py-5 bg-light">
        <div class="container">
          <h2 class="text-purple text-center mb-5">Портфоліо</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="portfolio-item">
                <img src="img/1.png" alt="Портфоліо 1" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="portfolio-item">
                <img src="img/2.png" alt="Портфоліо 2" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="portfolio-item">
                <img src="img/3.png" alt="Портфоліо 3" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="py-5">
        <div class="container">
          <h2 class="text-purple text-center mb-5">Технології, які я вчу</h2>
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h3 class="text-purple">Мови програмування:</h3>
              <ul class="skills-list">
                <li>JavaScript</li>
                <li>TypeScipt</li>
              </ul>
            </div>
            <div class="col-md-6 text-center">
              <h3 class="text-purple">Технології:</h3>
              <ul class="skills-list">
                <li>React</li>
                <li>Next.JS</li>
                <li>Tailwind</li>
                <li>RTK Query</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="py-5 bg-light">
        <div class="container">
          <h2 class="text-purple text-center mb-5">Контакти</h2>
          <div class="row">
            <div class="col-md-6">
              <ul class="contact-info">
                <li><strong>Email:</strong> endycsgoprime@gmail.com</li>
                <li><strong>Телефон:</strong> +XXXXXXXXXXXX</li>
                <li><strong>Адреса:</strong> Хмельницький, Україна</li>
              </ul>
            </div>
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ім'я" />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                  />
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    rows="5"
                    placeholder="Повідомлення"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-purple">Надіслати</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container text-center">
        <p>&copy; 2023 Моя візитка. | Усі права захищені.</p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
