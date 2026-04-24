@extends('layouts.app')

@section('title', 'Project Details - SNODA Construction Portfolio')
@section('description', 'View detailed project information about SNODA Construction\'s completed construction work and portfolio.')
@section('keywords', 'construction project, portfolio, completed project')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Details</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Project Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/projects/remodeling-1.jpg') }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/projects/construction-1.jpg') }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/projects/design-1.jpg') }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/projects/repairs-1.jpg') }}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Professional Commercial Construction Project</h2>
              <p>
                This commercial construction project showcases SNODA Construction's ability to deliver quality
                facilities on schedule and within budget. The project demonstrates our expertise in managing complex
                construction requirements.
              </p>
              <p>
                Our team coordinated all phases of construction including design consultation, permitting, construction
                management, and quality assurance. The final result is a modern facility that meets all specifications
                and regulatory requirements.
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  The attention to detail and disciplined management from SNODA Construction ensured our project was
                  completed with the highest level of craftsmanship. They truly understood our vision.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sarah Jenkins</h3>
                  <h4>Commercial Property Manager</h4>
                </div>
              </div>

              <p>
                This project involved the integration of high-performance materials and modern site systems to ensure
                long-term durability and structural integrity. Our focus remained on delivering a space that is both
                functional and aesthetically refined.
              </p>

              <p>
                From the structural foundation to the final interior fit-outs, every milestone was supervised to
                maintain compliance with safety standards and design specifications.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Commercial Build</span></li>
                <li><strong>Client</strong> <span>Apex Group</span></li>
                <li><strong>Project date</strong> <span>15 March, 2024</span></li>
                <li><strong>Project Location</strong> <span>Building City, ST</span></li>
                <li><a href="{{ route('contact') }}" class="btn-visit align-self-start">Request Quote</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

@endsection