@extends('layouts.app')

@section('title', 'SNODA Blog - Construction News and Insights')
@section('description', 'Latest construction articles, industry insights, and project updates from SNODA Construction.')
@section('keywords', 'construction blog, building news, industry insights')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Blog</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Blog</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">April 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">The Future of Design-Led Construction</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mark SNODA</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Design</span>
                  </div>
                </div>

                <p>
                  Exploring how the integration of design thinking early in the construction process leads to better
                  outcomes, reduced friction, and more cohesive final results.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">March 19</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">5 Things to Consider Before Starting a Home Renovation</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Sarah Jenkins</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Residential</span>
                  </div>
                </div>

                <p>
                  Successful renovations start long before the first brick is laid. We break down the essential planning
                  steps to avoid common pitfalls and keep budgets in check.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">June 24</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Optimizing Commercial Spaces for Modern Hybrid Work</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">David Chen</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Commercial</span>
                  </div>
                </div>

                <p>
                  Interior fit-outs are evolving. Learn how to create commercial spaces that balance collaborative zones
                  with private focus areas for the modern workforce.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-4.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">August 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">The Critical Importance of Site Supervision</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Robert Miller</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Management</span>
                  </div>
                </div>

                <p>
                  Quality assurance isn't just a final step—it's a daily practice. We discuss why active site management
                  is the key to preventing costly rework and ensuring safety.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-5.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">September 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Sustainable Materials in Modern Architecture</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Elena Rossi</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sustainability</span>
                  </div>
                </div>

                <p>
                  From recycled aggregates to low-carbon concrete, explore the materials that are helping us build more
                  durable structures with a smaller environmental footprint.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets/img/blog/blog-6.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">October 21</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Maximizing Value in Small-Scale Urban Developments</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">James Wilson</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Development</span>
                  </div>
                </div>

                <p>
                  Strategies for building effectively on challenging urban sites, focusing on smart spatial planning and
                  material efficiency to maximize project ROI.
                </p>

                <hr>

                <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

@endsection