@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? ($contact_page->title ?? ''),
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
@section('content')
    <section class="page-title" style="background-image: url(images/inner/page-title-bg.jpg);">
      <div class="auto-container">
		<div class="title-outer">
			<ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
			<h1 class="title wow fadeInUp" data-wow-delay=".5s">Contact Us</h1>
		</div>
      </div>
    </section>

	 <!-- Page Contact area start here -->
    <section class="contact-details fix section-padding">
      <div class="auto-container">
        <div class="row g-5">
          <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="contact-details-block">
              <div class="inner-box">
                <div class="icon">
									 <i class="lnr-icon-map-marker"></i>
                </div>
                <h4 class="title">address line</h4>
                <p class="text">Bowery St, New York, 37 USA
                  NY 10013,USA</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="contact-details-block">
              <div class="inner-box">
                <div class="icon">
                   <i class="lnr-icon-phone-handset"></i>
                </div>
                <h4 class="title">address line</h4>
                <p class="text">+1255 - 568 - 6523 4374-221
                  +1255 - 568 - 6523</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
            <div class="contact-details-block">
              <div class="inner-box">
                <div class="icon">
                  <i class="lnr-icon-envelope"></i>
                </div>
                <h4 class="title">Mail Adress</h4>
                <p class="text">email@example.com <br> info@yourdomain.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-100">
          <div class="row g-5">
            <div class="col-lg-6 content-column">
              <div class="inner-column">
                <div class="sec-title mb-30">
                  <h2 class="title wow splt-txt" data-splitting>Get in touch</h2>
                  <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Lorem ipsum dolor sit
                    amet consectetur adipiscing elit mattis
                    faucibus <br> odio feugiat arc dolor.</p>
                </div>
                <div class="google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60838472.930255905!2d54.913433238070375!3d21.45730366517529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1746550690065!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="col-lg-6 content-column">
              <div class="inner-column right-column">
                <div class="sec-title mb-30">
                  <h2 class="title wow splt-txt" data-splitting>Fill Up The Form</h2>
                  <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Your email address will not be published. Required fields are marked *</p>
                </div>
			          <form id="contact_form" name="contact_form" action="https://html.kodesolution.com/2025/finclix-html/includes/sendmail.php" method="post">
                  <div class="type-feild">
                    <i class="fa-light fa-user"></i>
                    <input type="text" name="form_name" id="name" placeholder="Your Name*" />
                  </div>
                  <div class="type-feild">
                    <i class="fa-light fa-envelope"></i>
                    <input type="text" name="form_email" class="required" id="email" placeholder="Email Address*" />
                  </div>
                  <div class="type-feild">
                    <i class="fa-light fa-pen-to-square"></i>
                    <textarea name="form_message" class="required" id="message" placeholder="Enter Your Messege here"></textarea>
                  </div>
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="theme-btn btn-style-one rounded-0" data-loading-text="Please wait...">Submit Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Contact area end here -->


    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top", // top or bottom
                    position: "right", // left, center or right
                    backgroundColor: "#4BB543", // green success color
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif
@endsection
