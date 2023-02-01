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
    <link rel="stylesheet" href="styles/homepage.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="scripts/mobile-menu.js" defer></script>
    <script src="scripts/sliders.js" type="module" defer></script>
    <script src="scripts/volume-control.js" defer></script>
  @endsection

  @section('header')
    @parent
  @endsection

  @section('content_page')
    <section id="first-section">
      <div class="first-section-container">
        <div class="first-section-container-intro">
          <p>The ultimate luxury experience</p>
        </div>
        <div class="first-section-container-info">
          <p>The perfect base for you</p>
        </div>
        <div class="first-section-container-btns">
          <button class="solid-btn" onclick="location.href='about-us.php'">Take a tour</button
          ><button class="empty-btn" onclick="location.href='#about-section'">Learn more</button>
        </div>
      </div>
    </section>
    <section id="availability-section">
      <div class="availability-container">
        <form class="availability-container-form" action="rooms-list.php" method="GET">
          <div class="availability-container-form--flex">
            <div class="availability-container-form-input">
              <label for="arrival-input">Arrival Date</label>
              <input
                class="input-field date"
                type="date"
                id="arrival-input"
                name="checkin"
                value={{date("Y-m-d")}}
                min="2021-10-24"
                max="2024-10-24"
                placeholder="Date and Time"
                required
              />
            </div>
            <div class="availability-container-form-input">
              <label for="departure-input">LeDeparture Date</label>
              <input
                class="input-field date"
                type="date"
                id="departure-input"
                name="checkout"
                value={{date("Y-m-d", strtotime("+5 days"))}}
                min="2021-10-24"
                max="2024-10-24"
                placeholder="Date and Time"
                required
              />
            </div>
          </div>
          <div class="availability-container-form-btn">
            <button type="submit">Check availability</button>
          </div>
        </form>
      </div>
    </section>
    <section id="about-section">
      <div class="about-section-description">
        <p class="about-section-description-legend">About us</p>
        <h3 class="about-section-description-title">
          Discover our underground.
        </h3>
        <p class="about-section-description-info">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
          alias quae nisi! Error amet, nihil autem voluptatibus iste atque?
          Consequatur asperiores similique fugiat! Quibusdam cum blanditiis
          corrupti hic voluptatibus incidunt?
        </p>
        <button>Book now</button>
      </div>
      <div class="about-section-images">
        <div class="about-section-images-first">
          <div class="about-section-images-first-img">
            <img
              src="assets/main-hotel/underground1.jpg"
              alt="Some amazing views of the hotel"
            />
          </div>
          <div class="about-section-images-first-description">
            <div class="about-section-images-first-description-img">
              <object data="assets/icons/team-group.svg" width="60"></object>
            </div>
            <p class="about-section-images-first-description-title">
              Strong Team
            </p>
            <p class="about-section-images-first-description-info">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor.
            </p>
          </div>
        </div>
        <div class="about-section-images-second">
          <div class="about-section-images-second-img">
            <img
              src="assets/main-hotel/underground2.jpg"
              alt="More views of the hotel"
            />
          </div>
          <div class="about-section-images-second-description">
            <div class="about-section-images-second-description-img">
              <object
                data="assets/icons/calendar_range.svg"
                width="60"
              ></object>
            </div>
            <p class="about-section-images-second-description-title">
              Luxury Room
            </p>
            <p class="about-section-images-second-description-info">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="rooms-section">
      <div class="rooms-section-title">
        <p>Rooms</p>
        <h2>Hand Picked Rooms</h2>
      </div>
      <div class="rooms-section-slide">
        <div class="swiper mySwiperRooms">
          <div class="swiper-wrapper">
            @foreach ($rooms as $room)
              <div class="swiper-slide">
                <div class="swiper-slide-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object data="assets/icons/smoke-free.svg" width="18"></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <a href="rooms-details.php?id={{$room['id']}}">
                  <img src={{$room['photo']}} alt={{$room['roomName']}} />
                </a>
                <div class="swiper-slide-bottom">
                  <div class="swiper-slide-bottom--flex">
                    <div class="swiper-slide-bottom-title">
                      {{$room['roomType']}}
                    </div>
                    <div class="swiper-slide-bottom-content">
                      {{$room['roomDescription']}}
                    </div>
                  </div>
                  <div class="swiper-slide-bottom-price">
                    ${{$room['ratePerNight']}}<span>/Night</span>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <section id="intro-video-section">
      <div class="intro-video-container">
        <div class="intro-video-container-content">
          <p class="intro-video-container-content-legend">Intro video</p>
          <h3 class="intro-video-container-content-title">
            Meet With Our Luxury Place.
          </h3>
          <p class="intro-video-container-content-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quasi
            omnis pariatur accusantium sapiente necessitatibus at incidunt eos
            ullam tempora quibusdam unde assumenda laudantium, repellat
            accusamus. Excepturi quis reprehenderit autem?
          </p>
          <div class="intro-video-container-content-video">
            <video id="promotional-video" controls>
              <source
                src="./assets/videos/hotel-promotion.mp4"
                type="video/mp4"
              />
            </video>
          </div>
          <button>Book now</button>
        </div>
      </div>
      <div class="intro-video-desktop-container"></div>
    </section>
    <section id="facilities-section">
      <div class="facilities-container">
        <p class="facilities-container-legend">Facilities</p>
        <h2 class="facilities-container-title">Core Features</h2>
        <div class="mySwiperFacilities-mobile-container">
          <div class="swiper mySwiperFacilities">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object data="assets/icons/ratings.svg" width="80"></object>
                    <div class="facilities-container-card-imgs-bground">01</div>
                  </div>
                  <h2 class="facilities-container-card-title">
                    Have High Rating
                  </h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object data="assets/icons/clock.svg" width="80"></object>
                    <div class="facilities-container-card-imgs-bground">02</div>
                  </div>
                  <h2 class="facilities-container-card-title">Quiet Hours</h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object
                      data="assets/icons/location.svg"
                      width="80"
                    ></object>
                    <div class="facilities-container-card-imgs-bground">03</div>
                  </div>
                  <h2 class="facilities-container-card-title">
                    Best Locations
                  </h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object
                      data="assets/icons/clock-cancel.svg"
                      width="80"
                    ></object>
                    <div class="facilities-container-card-imgs-bground">04</div>
                  </div>
                  <h2 class="facilities-container-card-title">
                    Free Cancellation
                  </h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object
                      data="assets/icons/credit-card.svg"
                      width="80"
                    ></object>
                    <div class="facilities-container-card-imgs-bground">05</div>
                  </div>
                  <h2 class="facilities-container-card-title">
                    Payment Options
                  </h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="facilities-container-card">
                  <div class="facilities-container-card-imgs">
                    <object
                      data="assets/icons/discount.svg"
                      width="80"
                    ></object>
                    <div class="facilities-container-card-imgs-bground">06</div>
                  </div>
                  <h2 class="facilities-container-card-title">
                    Special Offers
                  </h2>
                  <p class="facilities-container-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna..
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="mySwiperFacilities-desktop-container">
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/ratings.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">01</div>
            </div>
            <h2 class="facilities-container-card-title">Have High Rating</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/clock.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">02</div>
            </div>
            <h2 class="facilities-container-card-title">Quiet Hours</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/location.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">03</div>
            </div>
            <h2 class="facilities-container-card-title">Best Locations</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/clock-cancel.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">04</div>
            </div>
            <h2 class="facilities-container-card-title">Free Cancellation</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/credit-card.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">05</div>
            </div>
            <h2 class="facilities-container-card-title">Payment Options</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div class="facilities-container-card">
            <div class="facilities-container-card-imgs">
              <object data="assets/icons/discount.svg" width="80"></object>
              <div class="facilities-container-card-imgs-bground">06</div>
            </div>
            <h2 class="facilities-container-card-title">Special Offers</h2>
            <p class="facilities-container-card-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="menu-section">
      <div class="menu-container">
        <object
          id="menu-logo"
          data="assets/icons/donut.svg"
          width="100"
        ></object>
        <p class="menu-container-legend">Menu</p>
        <h2 class="menu-container-title">Our Foods Menu</h2>
        <div class="menu-container-first-slider">
          <div class="mySwiper-container">
            <div class="swiper mySwiperFirstMenu">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="food-card">
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/eggs-bacon.JPG"
                          alt="eggs and bacon"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Eggs & Bacon</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/tea-coffe.JPG"
                          alt="Eggs and bacon"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Tea or Coffe</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/chia-oatmeal.jpg"
                          alt="Chia oatmeal"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Chia Oatmeal</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="food-card">
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/fruit-parfait.jpg"
                          alt="Fruit parfait"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Fruit Parfait</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img src="assets/food/marmalade.jpg" alt="Marmalade" />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Marmalade Selection</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/cheeses.jpg"
                          alt="Various cheeses"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Cheese Plate</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="food-card">
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/grilled-chicken.jpg"
                          alt="Grilled chicken"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Grilled Chicken</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img
                          src="assets/food/kuala-salat.jpg"
                          alt="Kuala Lumpur salat"
                        />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Kuala Lumpur Salat</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                    <div class="food-card-item">
                      <div class="food-card-item--img">
                        <img src="assets/food/sushi.jpg" alt="Oriental sushi" />
                      </div>
                      <div class="food-card-item--content">
                        <div class="content--flex">
                          <h3>Oriental Sushi</h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing
                            elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="food-card-item--content-arrow">
                          <object
                            data="assets/icons/right-arrow.svg"
                            width="20"
                          ></object>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
        <div class="menu-container-second-slider">
          <div class="mySwiper-container-second">
            <div class="swiper mySwiperSecondMenu">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="./assets/restaurant-hotel/restaurant1.jpg"
                    alt="Some menu from the hotel"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="./assets/restaurant-hotel/restaurant2.jpg"
                    alt="Outside part of the restaurant"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="./assets/restaurant-hotel/restaurant3.jpg"
                    alt="Our chef finishing the preparations"
                  />
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="stats-section">
      <div class="stats-container">
        <div class="stats-container-item">
          <div class="stats-container-item--img">
            <object data="assets/icons/rocket.svg" width="60"></object>
          </div>
          <div class="stats-container-item--info">
            <h3>84k<span>+</span></h3>
            <p>Projects are Completed</p>
          </div>
        </div>
        <div class="stats-container-item">
          <div class="stats-container-item--img">
            <object data="assets/icons/group-backers.svg" width="60"></object>
          </div>
          <div class="stats-container-item--info">
            <h3>10M<span>+</span></h3>
            <p>Active Backers Around World</p>
          </div>
        </div>
        <div class="stats-container-item">
          <div class="stats-container-item--img">
            <object data="assets/icons/stocks.svg" width="60"></object>
          </div>
          <div class="stats-container-item--info">
            <h3>02k<span>+</span></h3>
            <p>Categories Served</p>
          </div>
        </div>
        <div class="stats-container-item">
          <div class="stats-container-item--img">
            <object data="assets/icons/book-idea.svg" width="60"></object>
          </div>
          <div class="stats-container-item--info">
            <h3>100M<span>+</span></h3>
            <p>Idea Raised Funds</p>
          </div>
        </div>
      </div>
    </section>
    
  @endsection

  @section('footer')
    @parent
  @endsection