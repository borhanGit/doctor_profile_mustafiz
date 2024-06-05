@extends('frontend.master.master')
@section('content')

<!-- social media button -->

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <h1>Welcome to <span style="color: red;">'Ishaque Homeo International'</span></h1>
    <h2>Providing top-notch homeopathic treatments at Ishaque Homeo International.</h2>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
  </div>
</section>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Start Sticky Icon-->
<div class="sticky-icon">
  
  <a href="https://www.facebook.com/" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
  <a href="https://api.whatsapp.com/send?phone=8801713288640&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="WhatsApp"><i class="fab fa-whatsapp"> </i> WhatsApp </a>
</div>
<!--End Sticky Icon-->

<main id="main">

  <!-- Why Us Section -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Why Choose Ishaque Homeo International?</h3>
            <p>
              Choose Ishaque Homeo International for personalized, holistic homeopathic care tailored to your unique health needs. Experience compassionate treatment from our team of experienced professionals dedicated to your well-being.
            </p>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Homeopathic Care</h4>
                  <p>Receive individualized care from skilled and knowledgeable homeopathic practitioners.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Holistic Approach</h4>
                  <p>Receive comprehensive care that addresses your physical, mental, and emotional well-being.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Compassionate Service:</h4>
                  <p>Experience compassionate and patient-centered care in a supportive environment.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>Providing Personalized & Holistic Homeopathic treatments to enhance your well-being.</h3>
          <p>
            Discover natural remedies tailored just for you, promoting balance and vitality.
            Experience comprehensive care that harmonizes mind, body, and spirit.
            Empowering your wellness journey with personalized and holistic homeopathic solutions.
          </p>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Natural Remedies</a></h4>
            <p class="description">Tailored natural remedies designed to enhance your overall well-being. Achieve balance and vitality through custom homeopathic treatments.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Comprehensive Care</a></h4>
            <p class="description">
              Comprehensive care that integrates mind, body, and spirit. Find harmony and well-being through integrative homeopathic care.
            </p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Optimal Health</a></h4>
            <p class="description">
              Personalized and holistic homeopathic treatments for optimal health.
              Benefit from a holistic approach that addresses root causes, not just symptoms.
            </p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Patients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Chambers</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Research Labs</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Discover holistic healing at our Ishaque Homeo International, where we provide expert homeopathic consultations, 
          effective treatments for a range of conditions, and personalized care to enhance your overall wellness.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4><a href="">Health Consultations</a></h4>
            <p>Comprehensive one-on-one assessments to understand your unique health needs.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4><a href="">Illness Management</a></h4>
            <p>Ongoing support and adjustments to your treatment plan to ensure optimal management of chronic illnesses</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="">Acute Condition Care</a></h4>
            <p>Immediate homeopathic remedies for acute illnesses like colds, flu, and injuries.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-user-md"></i></div>
            <h4><a href="">Health Support</a></h4>
            <p>Specialized homeopathic treatments for anxiety, depression, stress, and other emotional issues.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-plus-square"></i></div>
            <h4><a href="">Health Programs</a></h4>
            <p>Proactive approaches to maintain health and prevent illness through personalized wellness plans.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-stethoscope"></i></div>
            <h4><a href="">Health Services</a></h4>
            <p>Homeopathic treatments suitable for all ages, including children and pregnant women.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- doctors -->
  <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>
            Meet our dedicated team of experienced doctors, committed to providing exceptional homeopathic care and personalized treatments to help you 
            achieve optimal health and well-being.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/frontend/img/doctors/doctor-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Md. Jahirul Islam</h4>
                <span>Ishaque Homeo International</span>
                <p>BHMS (Dhaka University), CDV (Skin & Sexual Disease), CMI (Infertility), CMU (Ultra), Ex-H.P Govt. Homeopathic Medical College Hospital.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/frontend/img/doctors/doctor-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Md. Mostafizul Rahaman</h4>
                <span>Ishaque Homeo International</span>
                <p>BHMS (Dhaka University), Govt. Homeopathic Medical College & Hospital, Dhaka. Lecturer - Tanjim Homeopathic Medical College & Hospital, Narayanganj</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  <!-- Frequently Asked Questions Section -->
  <section id="faq" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions in our comprehensive FAQ section to help guide your healthcare journey.</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What makes your homeopathic treatments personalized? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Our homeopathic treatments are personalized through a detailed consultation process where
                we access your unique physical, emotional, and mental needs. This allows us to tailor remedis specially for your individual circumstances, ensuring a more effective and holistic approach
                to your well-being.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How does holistic homeopathy differ from conventional medicin? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Holistic homeopathy treats the person as a whole, addressing the root causes of health issues rather than just alleviating symptoms. It integrates mind, body, and spirit into the healing process, using natural remedies to stimulate the body's self-healing abilities, whereas conventional medicine often focuses on treating specific symptoms or diseases with pharmaceuticals.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What types of conditions can homeopathy treat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Homeopathy can treat a wide range of conditions, including chronic illnesses such as allergies, asthma, arthritis, digestive disorders, anxiety, depression, and skin conditions, as well as acute issues like colds, flu, and injuries. It's effective for both physical and emotional health concerns.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Is homeopathy safe for everyone, including children and pregnant women? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, homeopathy is generally safe for everyone, including children, pregnant women, and the elderly. It uses highly diluted natural substances that minimize the risk of side effects. However, it's always important to consult with a qualified homeopath to ensure the appropriate remedies are used.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How long does it take to see results with homeopathic treatments? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                The time it takes to see results with homeopathic treatments can vary depending on the individual and the condition being treated. Acute conditions may respond quickly, sometimes within hours or days, while chronic conditions might take several weeks or months to show significant improvement. Consistency and adherence to the treatment plan are key factors in achieving the best outcomes.
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section>

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/frontend/img/testimonials/testimonial.jpg" class="testimonial-img" alt="">
                <h3>Golam Rabbani</h3>
                <h4>Businessman</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  After struggling with chronic migraines for years, I decided to try holistic homeopathy, and it has been life-changing! The personalized treatment plan not only reduced my headaches but also improved my overall well-being. I highly recommend these services to anyone looking for a natural and effective approach to health.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/frontend/img/testimonials/testimonial.jpg" class="testimonial-img" alt="">
                <h3>Zakir Ahmed</h3>
                <h4>Teacher</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I was initially skeptical about homeopathy, but the comprehensive care I received addressed not just my physical symptoms but also my mental and emotional health. The team truly cares about their patients and tailors each treatment to individual needs. I've never felt better!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/frontend/img/testimonials/testimonial.jpg" class="testimonial-img" alt="">
                <h3>Sara Zaker</h3>
                <h4>Housewife</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As a mother, I was looking for safe and natural treatments for my children. The family health services provided here are fantastic. My kids have seen significant improvements in their allergies and general health without any side effects. It's a relief to find such effective and gentle care.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  @include('frontend.includes.contact')

</main><!-- End #main -->

@endsection