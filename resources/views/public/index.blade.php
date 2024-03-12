@extends('public._layouts.app')

@section('titre', 'Page d\'acceuil')

@section('contenu')
<!-- End Hero -->

<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Pourquoi choisir FasoEvent ?</h3>
              <p>
                Nous sommes le lien entre les promoteurs passionés et les
                amoureux de la culture dans différentes villes du pays
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"
                  >Learn More <i class="bx bx-chevron-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Acheter vos Billet en ligne</h4>
                    <p>
                      Evitez les files d'attente, réservez vos billets
                      facilement et en toute sécurité sur notre plateforme
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Explorez la Scène Culturelle Local</h4>
                    <p>
                      Découvrez et soutenez les talents locaux. Notre
                      plateforme met en avant la diversité culturelle du
                      Burkina Faso
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Restez informé avec les Notifications</h4>
                    <p>
                      Abonnez-vous pour recevoir des alertes sur les
                      évènements à venir dans votre ville
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">
        <div class="row">
          <div
            class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative"
            data-aos="fade-right"
          >
            <a
              href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
              class="glightbox play-btn mb-4"
            ></a>
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
          >
            <h4 data-aos="fade-up">About us</h4>
            <h3 data-aos="fade-up">
              Enim quis est voluptatibus aliquid consequatur fugiat
            </h3>
            <p data-aos="fade-up">
              Esse voluptas cumque vel exercitationem. Reiciendis est hic
              accusamus. Non ipsam et sed minima temporibus laudantium. Soluta
              voluptate sed facere corporis dolores excepturi. Libero
              laboriosam sint et id nulla tenetur. Suscipit aut voluptate.
            </p>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">
                Voluptatum deleniti atque corrupti quos dolores et quas
                molestias excepturi sint occaecati cupiditate non provident
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">
                Explicabo est voluptatum asperiores consequatur magnam. Et
                veritatis odit. Sunt aut deserunt minus aut eligendi omnis
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <h5><strong>BOBO DIOULASSO</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>OUAGADOUGOU</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>ZINIARE</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>KOUDOUGOU</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>KAYA</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>FADA GOURMA</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>ZORGHO</strong></h5>
            </div>
            <div class="swiper-slide">
              <h5><strong>KOUPELA</strong></h5>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url(assets_public/img/R.jpg)">
              <div class="card-body">
                <h5 class="card-title"><a href="">Notre Mission</a></h5>
                <p class="card-text">
                  FasoEvent a pour mission de catalyser la diversité
                  culturelle au Burkina Faso en rendant accessibles des
                  expériences variées. Nous sommes déterminés à créer des
                  souvenirs inoubliables et à soutenir les talents locaux pour
                  enrichir la scène culturelle.
                </p>
                <div class="read-more">
                  <a href="#"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div
              class="card"
              style="background-image: url(assets_public/img/IM.jpg)"
            >
              <div class="card-body">
                <h5 class="card-title"><a href="">Notre Plan</a></h5>
                <p class="card-text">
                  FasoEvent a pour plan de dynamiser la scène culturelle au
                  Burkina Faso en facilitant l'accès à une variété
                  d'événements. Notre engagement est de créer des moments
                  mémorables, de soutenir les talents locaux et d'enrichir la
                  diversité artistique de notre communauté.
                </p>
                <div class="read-more">
                  <a href="#"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 d-flex align-items-stretch mt-4"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div
              class="card"
              style="background-image: url(assets_public/img/IM1.jpg)"
            >
              <div class="card-body">
                <h5 class="card-title"><a href="">Notre Vision</a></h5>
                <p class="card-text">
                  FasoEvent aspire à devenir la référence culturelle au
                  Burkina Faso en offrant une plateforme d'événements variés.
                  Notre vision est de créer une communauté vibrante, unie par
                  des expériences culturelles enrichissantes, favorisant le
                  dialogue interculturel et contribuant à l'épanouissement
                  artistique et social de notre nation.
                </p>
                <div class="read-more">
                  <a href="#"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 d-flex align-items-stretch mt-4"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div
              class="card"
              style="background-image: url(assets_public/img/R\\(1\).jpg)"
            >
              <div class="card-body">
                <h5 class="card-title"><a href="">Notre Attention</a></h5>
                <p class="card-text">
                  Notre engagement se concentre sur la promotion et la
                  célébration de la richesse culturelle au Burkina Faso. Notre
                  objectif est de fournir des expériences culturelles
                  exceptionnelles, de soutenir les talents locaux et de créer
                  une communauté dynamique. Nous nous investissons avec
                  passion pour réaliser cette vision.
                </p>
                <div class="read-more">
                  <a href="#"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">
        <div
          class="testimonials-slider swiper"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="{{ asset('assets_public/img/testimonials/testimonials-1.jpg') }}"
                  class="testimonial-img"
                  alt=""
                />
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec
                  porttitora entum suscipit rhoncus. Accusantium quam,
                  ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                  risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets_public/img/testimonials/testimonials-2.jpg"
                  class="testimonial-img"
                  alt=""
                />
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse
                  labore quem cillum quid cillum eram malis quorum velit fore
                  eram velit sunt aliqua noster fugiat irure amet legam anim
                  culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="{{ asset('assets_public/img/testimonials/testimonials-3.jpg') }}"
                  class="testimonial-img"
                  alt=""
                />
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim
                  sint quorum nulla quem veniam duis minim tempor labore quem
                  eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="{{ asset('assets_public/img/testimonials/testimonials-4.jpg') }}"
                  class="testimonial-img"
                  alt=""
                />
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                  multos export minim fugiat minim velit minim dolor enim duis
                  veniam ipsum anim magna sunt elit fore quem dolore labore
                  illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="{{ asset('assets_public/img/testimonials/testimonials-5.jpg') }}"
                  class="testimonial-img"
                  alt=""
                />
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure
                  aliqua veniam tempor noster veniam enim culpa labore duis
                  sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                  fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Portfolio</h2>
          <p data-aos="fade-up">Quelques images de nos évènements</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div
          class="row portfolio-container"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img
              src="assets_public/img/portfolio/OIP (1).jpg"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>événement 1</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (1).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="App 1"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (2).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>événement 2</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (2).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Web 3"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (3).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 3</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (3).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="App 2"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (4).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 4</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (4).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Card 2"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (5).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 5</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (5).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Web 2"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (6).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 6</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (6).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="App 3"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img
              src="{{ asset('assets_public/img/portfolio/OIP (7).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 7</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/OIP (7).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Card 1"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img
              src="{{ asset('assets_public/img/portfolio/R (3).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 8</h4>

              <a
                href="{{ asset('assets_public/img/portfolio/R (3).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Card 3"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img
              src="{{ asset('assets_public/img/portfolio/R (4).jpg') }}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4>évènement 9</h4>
              <a
                href="{{ asset('assets_public/img/portfolio/R (4).jpg') }}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="Web 3"
                ><i class="bx bx-plus"></i
              ></a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Rencontrez Notre Équipe Passionnée</h2>
          <p data-aos="fade-up">
            L'équipe de FasoEvent s'engage pleinement à promouvoir la richesse
            culturelle du Burkina Faso. Unie par une passion commune, notre
            objectif est de soutenir les talents locaux et de contribuer à
            l'épanouissement artistique et social de notre communauté.
          </p>
        </div>

        <div class="row">
          <div
            class="col-lg-3 col-md-6 d-flex align-items-stretch"
            data-aos="fade-up"
          >
            <div class="member">
              <div class="member-img">
                <img
                  src="{{ asset('assets_public/img/team/team-1.jpg') }}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Herman BAKOUAN</h4>
                <span
                  >Responsable de la Communication: Herman BAKOUAN excelle
                  dans la communication, assurant une visibilité maximale pour
                  chaque événement.</span
                >
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="member">
              <div class="member-img">
                <img
                  src="{{ asset('assets_public/img/team/team-2.jpg') }}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Arlette ZONGO</h4>
                <span
                  >Consultante Culturelle: Fort de son expertise, Pierre offre
                  une guidance éclairée dans le monde riche de la culture
                  burkinabè.</span
                >
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="member">
              <div class="member-img">
                <img
                  src="{{ asset('assets_public/img/team/team-3.jpg') }}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Elisée SABIDANI</h4>
                <span
                  >Spécialiste en Promotion: Elisée SABIDANI, en tant que
                  spécialiste en promotion, fait briller les artistes grâce à
                  des stratégies promotionnelles innovantes.</span
                >
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="member">
              <div class="member-img">
                <img
                  src="{{ asset('assets_public/img/team/team-4.jpg') }}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fassia OUANRE</h4>
                <span
                  >Gestionnaire d'Événements: Avec une expertise éprouvée dans
                  la coordination d'événements, Fassia OUANRE assure une
                  planification impeccable, de la conception à la
                  réalisation.</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">F.A.Q</h2>
          <p data-aos="fade-up">
            Explorez notre plateforme dédiée à la gestion des événements
            culturels au Burkina Faso. Consultez ci-dessous les réponses à
            certaines questions fréquemment posées :
          </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i>
              <a
                data-bs-toggle="collapse"
                class="collapse"
                data-bs-target="#faq-list-1"
              >
                Comment puis-je soumettre un événement pour qu'il soit ajouté
                à la plateforme ? <i class="bx bx-chevron-down icon-show"></i
                ><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div
                id="faq-list-1"
                class="collapse show"
                data-bs-parent=".faq-list"
              >
                <p>
                  Vous pouvez soumettre votre événement en remplissant le
                  formulaire de soumission disponible sur notre site.
                  Assurez-vous de fournir toutes les informations nécessaires,
                  y compris la date, le lieu et une description détaillée.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i>
              <a
                data-bs-toggle="collapse"
                data-bs-target="#faq-list-2"
                class="collapsed"
              >
                Quelles sont les étapes de la planification d'un événement
                avec votre plateforme ?
                <i class="bx bx-chevron-down icon-show"></i
                ><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div
                id="faq-list-2"
                class="collapse"
                data-bs-parent=".faq-list"
              >
                <p>
                  La planification d'un événement implique plusieurs étapes,
                  de la réservation du lieu à la promotion. Notre équipe vous
                  guidera tout au long du processus pour garantir le succès de
                  votre événement.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i>
              <a
                data-bs-toggle="collapse"
                data-bs-target="#faq-list-3"
                class="collapsed"
                >Comment fonctionne la billetterie en ligne sur votre
                plateforme ? <i class="bx bx-chevron-down icon-show"></i
                ><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div
                id="faq-list-3"
                class="collapse"
                data-bs-parent=".faq-list"
              >
                <p>
                  Notre système de billetterie en ligne vous permet de
                  réserver et d'acheter des billets pour les événements
                  culturels en un clic. Sélectionnez l'événement, choisissez
                  le nombre de billets et procédez au paiement de manière
                  sécurisée.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i>
              <a
                data-bs-toggle="collapse"
                data-bs-target="#faq-list-4"
                class="collapsed"
                >Les billets en ligne sont-ils remboursables ?
                <i class="bx bx-chevron-down icon-show"></i
                ><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div
                id="faq-list-4"
                class="collapse"
                data-bs-parent=".faq-list"
              >
                <p>
                  Les politiques de remboursement varient en fonction de
                  l'événement. Consultez les conditions spécifiques à chaque
                  événement lors de l'achat de vos billets.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i>
              <a
                data-bs-toggle="collapse"
                data-bs-target="#faq-list-5"
                class="collapsed"
                >Comment puis-je promouvoir mon événement à travers votre
                plateforme ? <i class="bx bx-chevron-down icon-show"></i
                ><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div
                id="faq-list-5"
                class="collapse"
                data-bs-parent=".faq-list"
              >
                <p>
                  En tant que promoteur, vous pouvez utiliser nos services de
                  promotion ciblée. Contactez notre équipe marketing pour
                  discuter des options disponibles et maximiser la visibilité
                  de votre événement.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up">Nous contacter en cas de besoin</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Notre Adresse</h3>
              <p>Decouvrez et vivez la richesse culturelle du Burkina Faso</p>
            </div>
          </div>

          <div
            class="col-xl-3 col-lg-4 mt-4"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>fasoevent@.com<br />contactfasoevent@.com</p>
            </div>
          </div>
          <div
            class="col-xl-3 col-lg-4 mt-4"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Appeler</h3>
              <p>+22662825688<br />+22655504797</p>
            </div>
          </div>
        </div>

        <div
          class="row justify-content-center"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <div class="col-xl-9 col-lg-12 mt-4">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Votre Nom"
                    required
                  />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Votre Email"
                    required
                  />
                </div>
              </div>
              <div class="form-group mt-3">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  required
                />
              </div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement en cours</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Votre message a été envoyé. merci!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Envoyer le message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
@endsection