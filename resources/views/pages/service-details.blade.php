@extends('layouts.app')

@section('title', 'Construction Services - SNODA Professional Solutions')
@section('description', 'Detailed information about SNODA Construction services including new construction, renovations, and project management.')
@section('keywords', 'construction services, building services')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Service Details</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Service Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">New Construction</a>
              <a href="#">Renovations</a>
              <a href="#">Project Management</a>
              <a href="#">Repairs</a>
              <a href="#">Design Services</a>
            </div>

            <h4>Professional Construction Excellence</h4>
            <p>SNODA Construction delivers comprehensive services combining quality craftsmanship with innovative
              project management. We handle projects of all sizes with precision and integrity.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{ asset('assets/img/services.jpg') }}" alt="" class="img-fluid services-img">
            <h3>Complete Construction Services for Your Project</h3>
            <p>
              SNODA Construction provides end-to-end construction services tailored to your specific requirements. Our
              experienced team manages every phase of your project with professional expertise and attention to detail.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Comprehensive project planning and design consultation</span>
              </li>
              <li><i class="bi bi-check-circle"></i> <span>Expert construction management and oversight</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Quality assurance throughout construction phases</span></li>
            </ul>
            <p>
              We specialize in residential, commercial, and industrial construction projects. Our commitment to safety,
              compliance, and customer satisfaction ensures your project succeeds on schedule and within budget.
            </p>
            <p>
              From initial concept through final completion, SNODA Construction delivers reliable construction solutions
              with professional workmanship and proven expertise. Contact us today for your project consultation and
              free quote.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

@endsection