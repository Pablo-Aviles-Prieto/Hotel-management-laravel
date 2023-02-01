@extends('layout')


  @section('head')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda by Pablo Avilés</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/offers.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <script src="scripts/mobile-menu.js" defer></script>
    <script src="scripts/slider-offers-page.js" type="module" defer></script>
  @endsection

  @section('header')
    @parent
  @endsection

  @section('content_page')
    <section id="description-section">
      <div class="description-container">
        <p class="description-container--legend">The Ultimate Luxury</p>
        <h3 class="description-container--title">Our Offers</h3>
        <div class="description-container--info-card">
          <p>Home | <span>Offers</span></p>
        </div>
      </div>
    </section>
    <section id="offers-section">
      <div class="offers-section">
        @foreach ($offer_rooms as $offer_room)
          <div class="offers-section-card">
            <div class="offers-section-card-img">
              <img src={{$offer_room['photo']}} alt={{$offer_room['roomName']}} />
            </div>
            <div class="offers-section-card--divider">
              <div class="offers-section-card-title">
                <div class="offers-section-card-title--group">
                  <p class="offers-section-card-title--legend">{{$offer_room['bedType']}}</p>
                  <h3>{{$offer_room['roomType']}}</h3>
                </div>
                <div class="offers-section-card-title-price">
                  <p id="old-price">${{$offer_room['ratePerNight']}}<span>/Night</span></p>
                  <p id="new-price">${{$offer_room['offerPrice']}}<span>/Night</span></p>
                </div>
              </div>
              <div class="offers-section-card-description">
                <p class="offers-section-card-description-text">
                  {{$offer_room['roomDescription']}}
                </p>
                <div class="offers-section-card-description-grid">
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/air-conditioner.svg"
                      width="20"
                    ></object>
                    <p>Air conditioner</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/wifi.svg"
                      width="20"
                    ></object>
                    <p>High speed Wifi</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/breakfast.svg"
                      width="20"
                    ></object>
                    <p>Breakfast</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/shower.svg"
                      width="20"
                    ></object>
                    <p>Shower</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object data="assets/commodities/bed.svg" width="20"></object>
                    <p>Single bed</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/towel.svg"
                      width="20"
                    ></object>
                    <p>Towels</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/support.svg"
                      width="20"
                    ></object>
                    <p>24/7 Online Support</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/key-locker.svg"
                      width="20"
                    ></object>
                    <p>Strong Locker</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/smart-security.svg"
                      width="20"
                    ></object>
                    <p>Smart Security</p>
                  </div>
                  <div class="offers-section-card-description-grid-card">
                    <object
                      data="assets/commodities/engineer-expert.svg"
                      width="20"
                    ></object>
                    <p>Expert Team</p>
                  </div>
                </div>
                <button class="offers-section-card-description-btn">
                  Book now
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
    <section id="popular-section">
      <div class="popular-container">
        <div class="popular-container-title">
          <p>Popular list</p>
          <h3>Popular Rooms</h3>
        </div>
        <div class="swiper mySwiperOffers">
          <div class="swiper-wrapper">
            @for ($i = 0; $i < 5; $i++)
            <div class="swiper-slide">
              <div class="rooms-card">
                <img src={{$rooms[$i]['photo']}} alt={{$rooms[$i]['roomName']}} />
                <div class="rooms-card-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object
                    data="assets/icons/smoke-free.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <div class="rooms-card-bottom">
                  <div class="rooms-card-bottom--flex">
                    <div class="rooms-card-bottom-title">
                      {{$rooms[$i]['roomType']}}
                    </div>
                    <div class="rooms-card-bottom-content">
                      {{$rooms[$i]['roomDescription']}}
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    ${{$rooms[$i]['ratePerNight']}}/Night<span>Booking Now</span>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            {{-- <div class="swiper-slide">
              <div class="rooms-card">
                <img src="./assets/hotel-rooms/room2.jpg" />
                <div class="rooms-card-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object
                    data="assets/icons/smoke-free.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <div class="rooms-card-bottom">
                  <div class="rooms-card-bottom--flex">
                    <div class="rooms-card-bottom-title">
                      Minimal Duplex Room
                    </div>
                    <div class="rooms-card-bottom-content">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eos, amet alias velit quia.
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    $345/Night<span>Booking Now</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rooms-card">
                <img src="./assets/hotel-rooms/room3.jpg" />
                <div class="rooms-card-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object
                    data="assets/icons/smoke-free.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <div class="rooms-card-bottom">
                  <div class="rooms-card-bottom--flex">
                    <div class="rooms-card-bottom-title">
                      Minimal Duplex Room
                    </div>
                    <div class="rooms-card-bottom-content">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eos, amet alias velit quia.
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    $345/Night<span>Booking Now</span>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
  @endsection

  @section('footer')
    @parent
  @endsection