@extends('layouts.app')

@section('title', 'SNODA Construction Projects - Our Portfolio')
@section('description', 'View our completed construction projects showcasing quality work in residential, commercial, and industrial sectors.')
@section('keywords', 'construction projects, portfolio, completed work')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Projects</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kitchen Remodel</h4>
                  <p>Complete modernization of a residential kitchen with premium finishes.</p>
                  <a href="{{ asset('assets/img/projects/remodeling-1.jpg') }}" title="Kitchen Remodel"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Office Complex</h4>
                  <p>Structural phase for a new multi-story commercial development.</p>
                  <a href="{{ asset('assets/img/projects/construction-1.jpg') }}" title="Office Complex"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Roof Repair</h4>
                  <p>Full restoration and weatherproofing of a damaged industrial roof.</p>
                  <a href="{{ asset('assets/img/projects/repairs-1.jpg') }}" title="Roof Repair"
                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/design-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Luxury Villa Design</h4>
                  <p>Architectural concept and planning for a modern hilltop residence.</p>
                  <a href="{{ asset('assets/img/projects/design-1.jpg') }}" title="Villa Design"
                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/remodeling-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Living Space Refresh</h4>
                  <p>Open-plan conversion and interior fit-out for a residential client.</p>
                  <a href="{{ asset('assets/img/projects/remodeling-2.jpg') }}" title="Living Space Refresh"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Warehouse Build</h4>
                  <p>Delivery of a high-capacity logistics facility with heavy-duty slab.</p>
                  <a href="{{ asset('assets/img/projects/construction-2.jpg') }}" title="Warehouse Build"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Facade Restoration</h4>
                  <p>Specialized repair and cleaning of a historic building exterior.</p>
                  <a href="{{ asset('assets/img/projects/repairs-2.jpg') }}" title="Facade Restoration"
                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/design-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior Concept</h4>
                  <p>Modern interior design planning for a retail flagship store.</p>
                  <a href="{{ asset('assets/img/projects/design-2.jpg') }}" title="Interior Concept"
                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/remodeling-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Master Bedroom Suite</h4>
                  <p>High-end renovation of a master suite with custom cabinetry.</p>
                  <a href="{{ asset('assets/img/projects/remodeling-3.jpg') }}" title="Master Bedroom Suite"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Multi-Unit Housing</h4>
                  <p>Development of a modern apartment block with sustainable features.</p>
                  <a href="{{ asset('assets/img/projects/construction-3.jpg') }}" title="Multi-Unit Housing"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Structural Reinforcement</h4>
                  <p>Specialized repair of structural columns in an existing commercial space.</p>
                  <a href="{{ asset('assets/img/projects/repairs-3.jpg') }}" title="Structural Reinforcement"
                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/projects/design-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Landscape Architecture</h4>
                  <p>Design and planning for integrated outdoor living and green spaces.</p>
                  <a href="{{ asset('assets/img/projects/design-3.jpg') }}" title="Landscape Architecture"
                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

@endsection