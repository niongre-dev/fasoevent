@extends('private._layouts.app')

@section('titre', 'Admin tableau de bord')

@section('contenu')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Bienvenue Abonné OUEDRAOGO,</h2>
            <p class="mb-md-0">dans votre tableau de bord</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">
              &nbsp;/&nbsp;Tableau de bord&nbsp;
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- fin de bienvenue -->

  <!-- partie de evenement catégorie et utilisateur -->

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body dashboard-tabs p-0">
          <ul class="nav nav-tabs px-4" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="overview-tab"
                data-bs-toggle="tab"
                href="#overview"
                role="tab"
                aria-controls="overview"
                aria-selected="true"
                >Evènements</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="sales-tab"
                data-bs-toggle="tab"
                href="#sales"
                role="tab"
                aria-controls="sales"
                aria-selected="false"
                >Cathégories</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="purchases-tab"
                data-bs-toggle="tab"
                href="#purchases"
                role="tab"
                aria-controls="purchases"
                aria-selected="false"
                >Utilisateurs</a
              >
            </li>
          </ul>
          <div class="tab-content py-0 px-0">
            <div
              class="tab-pane fade show active"
              id="overview"
              role="tabpanel"
              aria-labelledby="overview-tab"
            >
              <div
                class="d-flex flex-wrap justify-content-xl-between"
              >
                <div
                  class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Start date</small>
                    <div class="dropdown">
                      <a
                        class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                        href="#"
                        role="button"
                        id="dropdownMenuLinkA"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <h5 class="mb-0 d-inline-block">
                          26 Jul 2018
                        </h5>
                      </a>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuLinkA"
                      >
                        <a class="dropdown-item" href="#"
                          >12 Aug 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >22 Sep 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >21 Oct 2018</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Revenue</small>
                    <h5 class="me-2 mb-0">$577545</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-eye me-3 icon-lg text-success"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Total views</small>
                    <h5 class="me-2 mb-0">9833550</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-download me-3 icon-lg text-warning"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Downloads</small>
                    <h5 class="me-2 mb-0">2233783</h5>
                  </div>
                </div>
                <div
                  class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-flag me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Flagged</small>
                    <h5 class="me-2 mb-0">3497843</h5>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="sales"
              role="tabpanel"
              aria-labelledby="sales-tab"
            >
              <div
                class="d-flex flex-wrap justify-content-xl-between"
              >
                <div
                  class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Start date</small>
                    <div class="dropdown">
                      <a
                        class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                        href="#"
                        role="button"
                        id="dropdownMenuLinkA"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <h5 class="mb-0 d-inline-block">
                          26 Jul 2018
                        </h5>
                      </a>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuLinkA"
                      >
                        <a class="dropdown-item" href="#"
                          >12 Aug 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >22 Sep 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >21 Oct 2018</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-download me-3 icon-lg text-warning"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Downloads</small>
                    <h5 class="me-2 mb-0">2233783</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-eye me-3 icon-lg text-success"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Total views</small>
                    <h5 class="me-2 mb-0">9833550</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Revenue</small>
                    <h5 class="me-2 mb-0">$577545</h5>
                  </div>
                </div>
                <div
                  class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-flag me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Flagged</small>
                    <h5 class="me-2 mb-0">3497843</h5>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="purchases"
              role="tabpanel"
              aria-labelledby="purchases-tab"
            >
              <div
                class="d-flex flex-wrap justify-content-xl-between"
              >
                <div
                  class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Start date</small>
                    <div class="dropdown">
                      <a
                        class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                        href="#"
                        role="button"
                        id="dropdownMenuLinkA"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <h5 class="mb-0 d-inline-block">
                          26 Jul 2018
                        </h5>
                      </a>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuLinkA"
                      >
                        <a class="dropdown-item" href="#"
                          >12 Aug 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >22 Sep 2018</a
                        >
                        <a class="dropdown-item" href="#"
                          >21 Oct 2018</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Revenue</small>
                    <h5 class="me-2 mb-0">$577545</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-eye me-3 icon-lg text-success"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Total views</small>
                    <h5 class="me-2 mb-0">9833550</h5>
                  </div>
                </div>
                <div
                  class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-download me-3 icon-lg text-warning"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Downloads</small>
                    <h5 class="me-2 mb-0">2233783</h5>
                  </div>
                </div>
                <div
                  class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                >
                  <i
                    class="mdi mdi-flag me-3 icon-lg text-danger"
                  ></i>
                  <div
                    class="d-flex flex-column justify-content-around"
                  >
                    <small class="mb-1 text-muted">Flagged</small>
                    <h5 class="me-2 mb-0">3497843</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- fin de evenement cathégorie et utilisateur -->

  <!-- évènement récent -->
  <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Evènements Récents</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Lieu</th>
                  <th>Date debut</th>
                  <th>Date fin</th>
                  <th>Promoteur</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>FESPACO</td>
                  <td>OUAGADOUGOU</td>
                  <td>10/02/2023</td>
                  <td>10/05/2023</td>
                  <td>ORANGE</td>
                </tr>
                <tr>
                  <td>NAK</td>
                  <td>KOUDOUGOU</td>
                  <td>1/12/2023</td>
                  <td>10/12/2023</td>
                  <td>UNEB</td>
                </tr>
                <tr>
                  <td>SIAO</td>
                  <td>OUAGADOUGOU</td>
                  <td>3/02/2023</td>
                  <td>5/05/2023</td>
                  <td>SEB</td>
                </tr>
                <tr>
                  <td>FESTIGRILLE</td>
                  <td>OUAGADOUGOU</td>
                  <td>10/02/2023</td>
                  <td>10/05/2023</td>
                  <td>BUNESA</td>
                </tr>
                <tr>
                  <td>FETE de la MUSIC</td>
                  <td>OUAGADOUGOU</td>
                  <td>10/02/2023</td>
                  <td>10/05/2023</td>
                  <td>SIG</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection