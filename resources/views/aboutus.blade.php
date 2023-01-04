@extends('header')
@section('title')
Fowlt | About Us
@endsection
@section('header')


<div class="hero hero-inner "  style="background-color: #1a374d">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center pt-5">
          <div class="intro-wrap">
            <h1 class="mb-0 text-white">About Us</h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="Title-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel pt-5">
            <img src="image/slider1.jpg" alt="slider1" class="rounded-4" width="Automatic" height="390">
          </div>
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto ">
          <h2 class="section-title mb-4 pt-5">About Fowlt</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          {{-- <ul class="list-unstyled two-col clearfix"> --}}
            <div class="row">
                <div class="col col-md-4">
                    <ul>
                        <li>Outdoor recreation activities</li>
                        <li>Cruise Lines</li>
                        <li>Railways</li>
                        <li>Package Tours</li>
                        <li>Guide Books</li>
                    </ul>
                </div>
                <div class="col col-md-4">
                    <ul>
                        <li>Airlines</li>
                        <li>Car Rentals</li>
                        <li>Hotels</li>
                        <li>Travel Insurance</li>
                        <li>Insurance</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
      </div >
    </div>
  </div>

{{-- TEAMS --}}


  <div class="Teams-section pt-5">
    <div class="container">
      <div class="row justify-content-center mb-5 ">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Team</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/ivan2.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="mb-0">Ivan Maulana Razzaq</h3>
              <p>Co-Founder &amp; Project Manager</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/hanif.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="mb-0">Nasywan Hanif</h3>
              <p>Co-Founder &amp; System Analyst</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/ario.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="mb-0">Ario Kusuma Purboyo</h3>
              <p>Co-Founder &amp; Front-End Programmer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/dani.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="mb-0">Ariadani Dwi Fathurahman</h3>
              <p>Co-Founder &amp; Front-End Programmer</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>



{{-- TESTIMONIALS --}}



  <div class="Testimonials-section testimonial-section mt-5 pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="section-title text-center mb-5">Testimonials</h2>

          <div class="owl-single owl-carousel no-nav">
            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Adam Aderson</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Lukas Devlin</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Kayla Bryant</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

{{-- EXPLORE NOW --}}
  <div class="py-5 cta-section" style="background-color: #1a374d">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
          <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
          <p class="mb-0"><a href="booking.html" class="btn btn-outline-light text-white btn-md font-weight-bold rounded-pill"> Get in touch </a></p>
        </div>
      </div>
    </div>
  </div>



{{-- Footer --}}


  <div class="site-footer pt-5">
    <div class="inner first">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">About Tour</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="widget">
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-dribbble"></span></a></li>
                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                <li><a href="#"><span class="icon-apple"></span></a></li>
                <li><a href="#"><span class="icon-google"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 pl-lg-5">
            <div class="widget">
              <h3 class="heading">Pages</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="widget">
              <h3 class="heading">Resources</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">Contact</h3>
              <ul class="list-unstyled quick-info links">
                <li class="email"><a href="#">mail@example.com</a></li>
                <li class="phone"><a href="#">+1 222 212 3819</a></li>
                <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




  <div class="inner dark pt-5">
    <div class="container pt-5">
      <div class="row text-center">
        <div class="col-md-8 mb-3 mb-md-0 mx-auto">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="" class="link-highlight">Kelompok 10</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>



{{--
<section style="background-color: rgb(245, 245, 245);">
    <br>
    <br>
    <center><h1>About Us</h1></center>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row align-item-start">
            <div class="col">
                <h4>Fowlt merupakan websiter bla bla bla</h4>
              </div>
        </div>
    </div>
    <br>


</section>

<section style="background-color: rgb(245, 245, 245); text-center">
    <h4>Design with love in Indonesia</h4>
    <h4>by Group 10</h4>
 --}}
    <a type="button" class="btn btn-dark text-center" href="{{ url('theteams') }}">Meet out Team</a>

@endsection


</body>
</html>
