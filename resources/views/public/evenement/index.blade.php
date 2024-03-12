@extends('public._layouts.app')

@section('contenu')

<main id="main">
    Connectez-vous à Internet

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Accueil</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry">
              <div class="entry-img">
                <img
                  src="{{asset('assets_public/img/blog/IMG-20240117-WA0002.jpg')}}"
                  alt=""
                  class="img-fluid"
                />
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"
                  >FETE DE LA MUSIQUE AU BURKINA FASO</a
                >
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="blog-single.html">John Doe</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <a href="blog-single.html"
                      ><time datetime="2020-01-01">Jan 1, 2020</time></a
                    >
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-chat-dots"></i>
                    <a href="blog-single.html">12 Comments</a>
                  </li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  La fete de la musique au Burkina Faso, célébrée le 21juin,
                  est une joyeuse célébration de la diversité musicale du
                  pays. Des artistes locaux et internationaux captive les
                  spectateurs avec des performances variée, créant une
                  atmosphère festive dans tous le pays. cette journée devient
                  un moment ou la musique transcende les frontières, unifiant
                  les communautés et célébrant la richesse culturelle du
                  Burkina Faso.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>
            </article>
            <!-- End blog entry -->

            <article class="entry">
              <div class="entry-img">
                <img
                  src="{{asset('assets_public/img/blog/IMG-20240117-WA0004.jpg')}}"
                  alt=""
                  class="img-fluid"
                />
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">SIAO </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="blog-single.html">John Doe</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <a href="blog-single.html"
                      ><time datetime="2020-01-01">Jan 1, 2020</time></a
                    >
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-chat-dots"></i>
                    <a href="blog-single.html">12 Comments</a>
                  </li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le SIAO (Salon International de l'Artisanat de Ouagadougou)
                  est un événement majeur au Burkina Faso, organisé tous les
                  deux ans. Il s'agit d'un salon dédié à la promotion et à la
                  valorisation du secteur de l'artisanat, mettant en avant le
                  savoir-faire artisanal local et international. Le SIAO offre
                  une plateforme unique aux artisans pour exposer et
                  commercialiser leurs produits, ainsi qu'un espace d'échange
                  culturel et économique. Cet événement contribue
                  significativement à la promotion de l'artisanat, au
                  renforcement des échanges entre artisans et à la découverte
                  de la diversité artistique et culturelle.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>
            </article>
            <!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
              </ul>
            </div>
          </div>
          <!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Recherches</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" />
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>
              <!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li>
                    <a href="#">Fetes <span>(25)</span></a>
                  </li>
                  <li>
                    <a href="#">Musique <span>(12)</span></a>
                  </li>
                  <li>
                    <a href="#">Artistiques <span>(5)</span></a>
                  </li>
                  <li>
                    <a href="#">Créativités<span>(22)</span></a>
                  </li>
                </ul>
              </div>
              <!-- End sidebar categories-->
            </div>
            <!-- End sidebar -->
          </div>
          <!-- End blog sidebar -->
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
  </main>
@endsection