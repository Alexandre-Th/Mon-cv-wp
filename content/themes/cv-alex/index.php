<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexandre Thaye</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="body">
    <section class="profil" id="profil">
      <header class="header">
        <div class="profil-picture">
          <img src="images/photo-alex1.png" alt="Alexandre">
        </div>
        <div class="profil-content">
          <h1 class="profil-title">
            Hi ! i'm Alexandre Thaye.
          </h1>
          <p class="profil-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laboriosam quam pariatur, alias voluptatum explicabo. Odit nihil laudantium vero ut. Corrupti unde quam, expedita cumque dolores atque cum delectus voluptatem architecto doloremque aspernatur beatae velit illum eum numquam hic. Fugit, nobis neque? Obcaecati, fugit! Ipsum dolor dolores hic nulla culpa.
          </p>
        </div>
      </header>
    </section>
    <section class="school" id="school">
      <main class="main-school">
        <div class="school-picture">
          <a href="" class="school-picture__link">
            <img src="images/Oclock.jpg" alt="logo Oclock">
          </a>
        </div>
        <div class="school-content">
          <h1 class="school-title">
            I learned at O'clock ! 
          </h1>
          <p class="school-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore provident maiores eos deserunt nihil doloremque harum nisi animi corporis vel odio, enim magni quae ullam, tenetur sint ut commodi perspiciatis quos! Corporis, iure. Aut, suscipit placeat, architecto explicabo optio repellendus, hic omnis exercitationem culpa ab iusto consectetur maxime facere vero.</p>
        </div>
      </main>
    </section>
    <section class="spec" id="spec">
      <main class="main-spec">
        <div class="spec-content">
          <h1 class="spec-title">
            My speciality ? Wordpress !
          </h1>
          <p class="spec-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore provident maiores eos deserunt nihil doloremque harum nisi animi corporis vel odio, enim magni quae ullam, tenetur sint ut commodi perspiciatis quos! Corporis, iure. Aut, suscipit placeat, architecto explicabo optio repellendus, hic omnis exercitationem culpa ab iusto consectetur maxime facere vero.</p>
        </div>
        
        <div class="spec-picture">
          <a href="" class="spec-picture__link">
            <img src="images/wordpress.jpg" alt="logo wordpress">
          </a>
        </div>
      </main>
    </section>
    <section class="contact" id="contact">
      <footer class="footer" id="footer">
        <form action="" class="contact-form">
          <div class="field is-half">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="field is-half">
            <label for="email">Email</label>
            <input type="email" name="name" id="name">
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
          </div>
          <div class="field">
            <input type="submit" value="Envoyer">
          </div>
        </form>
        <address class="contact-info">
          <div class="contact-info__part">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Email</h4>
            <!-- On peut utiliser ce genre de chose pour éviter les spam : https://www.nicolas-hoffmann.net/utilitaires/crypteur.php -->
            <a href="mailto:%74&#104;&#97;y%65&#46;%61l%65%78%61ndr%65&#64;&#103;&#109;ai&#108;%2e&#99;o%6d" class="contact-info__part__content is-email">thaye.alexandre&#64;gmail.com</a>
          </div>
          <div class="contact-info__part">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Téléphone</h4>
            <a href="tel:+33658838174" class="contact-info__part__content">+33 6 58 83 81 74</a>
          </div>
          <div class="contact-info__part">
            <i class="fa fa-home" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Adresse</h4>
            <p class="contact-info__part__content">
              28 Avenue Barbier Daubrée<br />
              63100 Clermont-Ferrand
            </p>
          </div>
  
        </address>
      </footer>
    </section>
      <div class="menu">
        <div class="burger_menu-icon">
          <span></span>
        </div>
        <nav class="main-nav">
          <ul>
            <li class="main-nav__item">
              <a href="#profil">Profil</a>
            </li>
            <li class="main-nav__item">
              <a href="#school">School</a>
            </li>
            <li class="main-nav__item">
              <a href="#spec">Speciality</a>
            </li>
            <li class="main-nav__item">
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="social-nav">
          <ul>
            <li>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
    </div>
  <script src="js/app.js"></script>
</body>
</html>
