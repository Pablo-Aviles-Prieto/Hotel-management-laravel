@extends('layout')


@section('head')
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Hotel Miranda by Pablo Avilés</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="styles/contact.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script type="module" src="scripts/maps.js"></script>
<script src="scripts/mobile-menu.js" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{$maps_api}}&callback=initMap&libraries=geometry" defer></script>
@endsection

@section('header')
@parent
@endsection

@section('content_page')
<section id="description-section">
  <div class="description-container">
    <p class="description-container--legend">The Ultimate Luxury</p>
    <h3 class="description-container--title">Contact</h3>
    <div class="description-container--info-card">
      <p>Home | <span>Contact</span></p>
    </div>
  </div>
</section>
<section id="info-section">
  <div class="info-container">
    <div class="info-container--flex">
      <div class="info-container-card">
        <div class="info-container-card-img">
          <object data="assets/icons/mail.svg" type="image/svg+xml" width="50"></object>
        </div>
        <div class="info-container-card-info">
          <h3>Hotel Address</h3>
          <p>19/A, Cirikon City hall Tower<span>New York, NYC</span></p>
        </div>
        <div class="info-container-card-bground">01</div>
      </div>
      <div class="info-container-card">
        <div class="info-container-card-img">
          <object data="assets/icons/phone.svg" type="image/svg+xml" width="50"></object>
        </div>
        <div class="info-container-card-info">
          <h3>Phone Number</h3>
          <p>+ 97656 8675 7864 7<span>+ 876 766 8675 765 6</span></p>
        </div>
        <div class="info-container-card-bground">02</div>
      </div>
      <div class="info-container-card">
        <div class="info-container-card-img">
          <object data="assets/icons/location-footer.svg" type="image/svg+xml" width="50"></object>
        </div>
        <div class="info-container-card-info">
          <h3>Email</h3>
          <p>info@webmail.com<span>jobs.webmail@mail.com</span></p>
        </div>
        <div class="info-container-card-bground">03</div>
      </div>
    </div>
    <div id="map"></div>
  </div>
</section>
<section id="form-section">
  <div class="form-container">
    <form class="form-container-content" action="{{ route('contact.saveForm') }}" method="POST">
      @csrf
      <div class="form-container-content-info">
        <div class="form-container-content-info-block">
          <div class="form-container-content-info-block--container">
            <input placeholder="Your full name" name="name" type="text" />
            <object data="assets/icons/person_outline_gold.svg" width="18"></object>
          </div>
          <div class="form-container-content-info-block--container">
            <input placeholder="Add phone number" name="phone" type="number" />
            <object data="assets/icons/phone.svg" width="18"></object>
          </div>
        </div>
        <div class="form-container-content-info-block">
          <div class="form-container-content-info-block--container">
            <input placeholder="Enter email address" name="email" type="email" />
            <object data="assets/icons/mail.svg" width="18"></object>
          </div>
          <div class="form-container-content-info-block--container">
            <input placeholder="Enter subject" name="subject" type="text" />
            <object data="assets/icons/book.svg" width="18"></object>
          </div>
        </div>
      </div>
      <div class="form-container-content-info-block--container">
        <textarea name="message" placeholder="Enter message" rows="7"></textarea>
        <object data="assets/icons/pencil.svg" width="18"></object>
      </div>
      <div class="form-container-content-btn">
        <button type="submit">Send</button>
      </div>
    </form>
  </div>
</section>
@endsection

@section('footer')
@parent
@endsection