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
    <link rel="stylesheet" href="styles/rooms-list.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <script src="scripts/mobile-menu.js" defer></script>
    <script src="scripts/sliders-rooms-page.js" type="module" defer></script>
  @endsection

  @section('header')
    @parent
  @endsection

  @section('content_page')
    <section id="description-section">
      <div class="description-container">
        <p class="description-container--legend">The Ultimate Luxury</p>
        <h3 class="description-container--title">Ultimate Room</h3>
        <div class="description-container--info-card">
          <p>Home | <span>Rooms</span></p>
        </div>
      </div>
    </section>
    <section id="rooms-section">
      <div class="swiper mySwiperRoomsPage">
        <div class="swiper-wrapper">
          @for ($i = 0; $i < $rooms_length; $i++)
            @if ($i % 3 === 0 && $i !== 0)
              </div>
            @endif
            @if ($i % 3 === 0)
              <div class="swiper-slide">
            @endif
              <div class="rooms-card">
                <img src={{$rooms[$i]['photo']}} alt={{$rooms[$i]['roomName']}} />
                <div class="rooms-card--flex">
                  <div class="rooms-card--flex2">
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
                      <object
                        data="assets/icons/cocktail.svg"
                        width="18"
                      ></object>
                    </div>
                    <div class="rooms-card-bottom">
                      <div class="rooms-card-bottom--flex">
                        <div class="rooms-card-bottom-title">
                          {{$rooms[$i]['roomName']}}
                        </div>
                        <div class="rooms-card-bottom-content">
                          {{$rooms[$i]['roomDescription']}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    <p id="price-number"><span>${{$rooms[$i]['ratePerNight']}}</span>/Night</p>
                    <p id="price-booking">Booking Now</p>
                  </div>
                </div>
              </div>
            @if ($i === ($rooms_length - 1))
              </div>
            @endif
          @endfor
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  @endsection

  @section('footer')
    @parent
  @endsection