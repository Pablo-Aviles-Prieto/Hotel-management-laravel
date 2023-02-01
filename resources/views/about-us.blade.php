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
    <link rel="stylesheet" href="styles/about-us.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <script src="scripts/mobile-menu.js" defer></script>
    <script src="scripts/volume-control.js" defer></script>
    <script src="scripts/slider-about-us.js" type="module" defer></script>
  @endsection

  @section('header')
    @parent
  @endsection

  @section('content_page')
    <section id="description-section">
      <div class="description-container">
        <p class="description-container--legend">The Ultimate Luxury</p>
        <h3 class="description-container--title">About Us</h3>
        <div class="description-container--info-card">
          <p>Home | <span>About</span></p>
        </div>
      </div>
    </section>
    <section id="info-section">
      <div class="info-container">
        <div class="info-container-video">
          <video id="promotional-video" controls>
            <source
              src="./assets/videos/hotel-promotion.mp4"
              type="video/mp4"
            />
          </video>
        </div>
        <div class="info-container-description">
          <p>
            Hello. Our hotel has been present for over 20 years.<span
              >We make the best for all our customers</span
            >
          </p>
          <div class="info-container-description-images">
            <div class="info-container-description-images-card">
              <svg
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 511 511"
                style="enable-background: new 0 0 511 511"
                xml:space="preserve"
              >
                <g>
                  <path
                    d="M406.955,323.231c5.903-10.164,10.241-21.144,12.907-32.543c7.545,2.833,15.565,4.312,23.638,4.312
              c37.22,0,67.5-30.28,67.5-67.5v-40c0-37.22-30.28-67.5-67.5-67.5c-6.949,0-13.882,1.101-20.5,3.218V103.5
              c0-12.958-10.542-23.5-23.5-23.5h-288C98.542,80,88,90.542,88,103.5v160c0,21.003,5.548,41.658,16.045,59.731
              c6.24,10.744,14.147,20.453,23.346,28.769H7.5c-4.142,0-7.5,3.358-7.5,7.5C0,381.28,17.72,399,39.5,399h65.223
              c3.515,18.205,19.561,32,38.777,32h224c19.216,0,35.262-13.795,38.777-32H471.5c21.78,0,39.5-17.72,39.5-39.5
              c0-4.142-3.358-7.5-7.5-7.5H383.609C392.808,343.685,400.715,333.976,406.955,323.231z M423,187.5c0-11.304,9.196-20.5,20.5-20.5
              s20.5,9.196,20.5,20.5v40c0,11.304-9.196,20.5-20.5,20.5s-20.5-9.196-20.5-20.5V187.5z M443.5,135c28.949,0,52.5,23.551,52.5,52.5
              v40c0,28.949-23.551,52.5-52.5,52.5c-7.261,0-14.464-1.56-21.109-4.495c0.402-3.979,0.609-7.985,0.609-12.005v-7.045
              c5.795,4.115,12.867,6.545,20.5,6.545c19.575,0,35.5-15.925,35.5-35.5v-40c0-19.575-15.925-35.5-35.5-35.5
              c-7.633,0-14.705,2.43-20.5,6.545v-19.329C429.491,136.431,436.364,135,443.5,135z M367.5,416h-224
              c-10.895,0-20.151-7.147-23.326-17h270.652C387.651,408.853,378.395,416,367.5,416z M471.5,384h-72h-288h-72
              c-10.895,0-20.151-7.147-23.326-17h344.79c0.005,0,0.01,0.001,0.015,0.001c0.005,0,0.01-0.001,0.015-0.001h133.832
              C491.651,376.853,482.395,384,471.5,384z M152.168,352C121.346,332.719,103,299.793,103,263.5v-160c0-4.687,3.813-8.5,8.5-8.5h288
              c4.687,0,8.5,3.813,8.5,8.5v30.887c0,0.015,0,0.03,0,0.045V187.5v40v36c0,4.942-0.351,9.818-1.016,14.609
              c-0.104,0.433-0.166,0.87-0.191,1.307c-4.529,29.858-21.719,56.167-47.962,72.583H152.168z"
                  />
                  <path
                    d="M383.5,143c4.142,0,7.5-3.358,7.5-7.5v-16c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v16
              C376,139.642,379.358,143,383.5,143z"
                  />
                  <path
                    d="M391,239.5v-72c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v72c0,4.142,3.358,7.5,7.5,7.5S391,243.642,391,239.5z"
                  />
                  <path
                    d="M127.5,238.997c4.142,0,7.5-3.358,7.5-7.5v-15.995c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v15.995
              C120,235.639,123.358,238.997,127.5,238.997z"
                  />
                  <path
                    d="M164.151,321.481C145.625,307.708,135,286.575,135,263.5c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5
              c0,27.866,12.831,53.387,35.202,70.019c1.344,1,2.913,1.481,4.469,1.481c2.291,0,4.553-1.046,6.025-3.026
              C168.167,328.65,167.476,323.952,164.151,321.481z"
                  />
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>

              <p>Breakfast</p>
            </div>
            <div class="info-container-description-images-card">
              <svg
                viewBox="0 0 32 32"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g id="icomoon-ignore"></g>
                <path
                  d="M9.123 30.464l-1.33-6.268-6.318-1.397 1.291-2.475 5.785-0.316c0.297-0.386 0.96-1.234 1.374-1.648l5.271-5.271-10.989-5.388 2.782-2.782 13.932 2.444 4.933-4.933c0.585-0.585 1.496-0.894 2.634-0.894 0.776 0 1.395 0.143 1.421 0.149l0.3 0.070 0.089 0.295c0.469 1.55 0.187 3.298-0.67 4.155l-4.956 4.956 2.434 13.875-2.782 2.782-5.367-10.945-4.923 4.924c-0.518 0.517-1.623 1.536-2.033 1.912l-0.431 5.425-2.449 1.329zM3.065 22.059l5.63 1.244 1.176 5.544 0.685-0.372 0.418-5.268 0.155-0.142c0.016-0.014 1.542-1.409 2.153-2.020l5.978-5.979 5.367 10.945 1.334-1.335-2.434-13.876 5.349-5.348c0.464-0.464 0.745-1.598 0.484-2.783-0.216-0.032-0.526-0.066-0.87-0.066-0.593 0-1.399 0.101-1.881 0.582l-5.325 5.325-13.933-2.444-1.335 1.334 10.989 5.388-6.326 6.326c-0.483 0.482-1.418 1.722-1.428 1.734l-0.149 0.198-5.672 0.31-0.366 0.702z"
                ></path>
              </svg>
              <p>Airport Pickup</p>
            </div>
            <div class="info-container-description-images-card">
              <svg
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 511.999 511.999"
                style="enable-background: new 0 0 511.999 511.999"
                xml:space="preserve"
              >
                <g>
                  <g>
                    <g>
                      <path
                        d="M288.563,91.425c0-26.242-21.35-47.591-47.591-47.591c-26.242,0-47.591,21.35-47.591,47.591
                  c0,26.242,21.35,47.591,47.591,47.591C267.213,139.017,288.563,117.667,288.563,91.425z M213.419,91.425
                  c0-15.193,12.36-27.553,27.553-27.553c15.193,0,27.553,12.36,27.553,27.553c0,15.193-12.36,27.553-27.553,27.553
                  C225.779,118.978,213.419,106.618,213.419,91.425z"
                      />
                      <path
                        d="M506.684,106.695C474.742,79.722,440.755,66.61,402.786,66.61c-23.846,0-47.603,5.265-71.144,13.257
                  C325.939,34.896,287.466,0,240.972,0c-50.412,0-91.425,41.014-91.425,91.425c0,15.334,7.988,36.385,19.04,58.175
                  c-19.971,6.386-39.85,10.471-59.371,10.474c-0.008,0-0.011,0-0.02,0c-33.023,0-62.777-11.566-90.95-35.357
                  c-2.979-2.516-7.148-3.075-10.684-1.433c-3.537,1.643-5.799,5.187-5.799,9.087V464.26c0,2.951,1.301,5.751,3.554,7.655
                  c31.943,26.973,65.929,40.084,103.898,40.084c51.196,0,101.986-24.254,151.101-47.71c47.103-22.494,95.81-45.754,142.467-45.754
                  c33.038,0,62.796,11.565,90.97,35.357c2.981,2.516,7.149,3.073,10.684,1.433c3.537-1.643,5.799-5.187,5.799-9.087V114.349
                  C510.239,111.4,508.937,108.598,506.684,106.695z M240.972,20.038c39.363,0,71.387,32.024,71.387,71.387
                  c0,30.531-45.922,100.562-71.387,135.893c-25.465-35.33-71.387-105.361-71.387-135.893
                  C169.585,52.062,201.609,20.038,240.972,20.038z M251.734,315.309c-15.058,7.19-30.512,14.569-45.829,21.163v-40.103
                  c0-3.32-1.647-6.422-4.392-8.29c-4.392-2.988-9.325-1.022-9.325-1.022c-14.126,5.609-26.953,9.873-38.883,12.917v-75.203
                  c16.804-3.928,33.521-9.731,50.109-16.474c14.166,21.375,26.404,37.775,29.563,41.959c1.894,2.507,4.853,3.983,7.997,3.983
                  c3.144,0,6.103-1.474,7.997-3.983c5.268-6.977,35.772-47.906,58.381-89.27v129.016
                  C288.673,297.669,269.926,306.622,251.734,315.309z M307.349,311.743v59.048c-18.712,7.672-37.497,16.643-55.726,25.347
                  c-15.023,7.174-30.438,14.534-45.719,21.114v-59.03C206.16,358.118,307.049,311.871,307.349,311.743z M69.39,320.767
                  c12.825,3.484,26.166,5.25,39.829,5.25c11.455,0,23.559-1.236,35.975-3.67c0.075-0.014,0.149-0.03,0.223-0.046
                  c12.565-2.471,25.898-6.237,40.45-11.438v40.61v73.923c-29.613,11.219-54.111,16.469-76.651,16.47
                  c-13.973,0-27.067-1.995-39.823-6.085V320.774L69.39,320.767z M69.393,299.896v-74.93c12.822,3.483,26.165,5.243,39.828,5.244
                  c0.003,0,0.005,0,0.008,0c8.024,0,16.038-0.596,24.036-1.692v75.568c-8.297,1.256-16.358,1.894-24.047,1.894
                  C95.245,305.978,82.15,303.985,69.393,299.896z M490.2,426.02c-27.135-18.492-55.901-27.523-87.415-27.523
                  c-51.196,0-101.986,24.254-151.101,47.71c-47.103,22.494-95.81,45.754-142.467,45.754c-31.653,0-60.292-10.614-87.415-32.426
                  V152.59c27.132,18.492,55.892,27.523,87.394,27.523c0.006,0,0.015,0,0.023,0c23.133-0.003,46.182-4.963,69.032-12.559
                  c4.549,8.03,9.328,15.973,14.098,23.588c-27.922,11.083-55.873,19.03-83.127,19.03c-16.349-0.001-31.492-2.732-46.294-8.347
                  c-3.077-1.167-6.535-0.748-9.245,1.122s-4.328,4.953-4.328,8.246v95.809v135.886c0,4.162,2.574,7.89,6.465,9.367
                  c16.879,6.405,34.844,9.652,53.397,9.652c26.741,0,55.456-6.465,90.37-20.342c20.329-8.08,40.838-17.873,60.671-27.344
                  c19.978-9.54,40.635-19.404,60.782-27.336h0.001c0.001,0,0.001,0,0.003-0.001c31.923-12.583,57.9-18.443,81.753-18.443
                  c16.341,0,31.479,2.73,46.278,8.345c3.078,1.169,6.536,0.749,9.245-1.121c2.71-1.871,4.328-4.953,4.328-8.246V135.724
                  c0-4.162-2.574-7.891-6.465-9.367c-16.874-6.402-34.836-9.648-53.387-9.648c-24.588,0-50.795,5.457-81.947,17.098
                  c5.155-11.768,8.985-22.927,10.64-32.621c23.973-8.673,47.893-14.535,71.297-14.535c31.653,0,60.292,10.614,87.415,32.426V426.02
                  z M382.515,301.165c0.356,5.522,5.124,9.716,10.644,9.353c17.551-1.132,33.801,0.759,49.451,5.774v37.353
                  c-12.818-3.482-26.156-5.241-39.814-5.241c-22.853,0-47.092,4.704-75.407,14.713v-66.347v-83.279
                  c46.261-17.313,82.348-20.439,115.22-9.914v91.824c-16.162-4.424-32.883-6.033-50.741-4.879
                  C386.346,290.878,382.158,295.642,382.515,301.165z M442.609,182.704c-41.862-11.381-82.13-2.343-115.221,9.432v-39.389
                  c29.053-10.901,53.154-16.001,75.407-16.001c13.971,0,27.062,1.995,39.814,6.083V182.704z"
                      />
                    </g>
                  </g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>
              <p>City Guide</p>
            </div>
            <div class="info-container-description-images-card">
              <svg
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 60 60"
                style="enable-background: new 0 0 60 60"
                xml:space="preserve"
              >
                <g>
                  <circle cx="20" cy="42" r="1" />
                  <circle cx="26" cy="42" r="1" />
                  <circle cx="32" cy="42" r="1" />
                  <circle cx="38" cy="42" r="1" />
                  <circle cx="44" cy="42" r="1" />
                  <path
                    d="M60,38V28h-3v-0.856C57,24.858,55.142,23,52.856,23H7.144C4.859,23,3,24.858,3,27.144V28H0v10h3v5H2c-0.552,0-1,0.447-1,1
              s0.448,1,1,1H0v15h11v-3h38v3h11V45h-2c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-5H60z M58,30v6h-1h-3v-6h3H58z M2,30h1h3v6H3H2V30z
                M9,58H2V47h1h3v10h3V58z M11,55H8v-8h1h42h1v8h-3H11z M14.18,39c-0.309-0.558-0.222-1.261,0.255-1.73l3.992-3.936
              c0.592-0.584,1.555-0.584,2.146,0l3.993,3.936c0.477,0.471,0.563,1.173,0.254,1.73H16H14.18z M13.003,42.017
              C13.013,42.561,13.454,43,14,43c0.552,0,1-0.448,1-1c0-0.324-0.164-0.598-0.403-0.781C15.044,41.087,15.511,41,16,41h4h5.315h0.427
              H26h6h1.258H38h6c2.415,0,4.435,1.721,4.899,4H48c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4
              c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4
              c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.413-0.251-0.767-0.608-0.92C11.737,43.255,12.299,42.549,13.003,42.017z M34.435,37.27
              l3.992-3.936c0.592-0.584,1.555-0.584,2.146,0l3.993,3.936c0.477,0.471,0.563,1.173,0.254,1.73H44h-9.82
              C33.871,38.442,33.958,37.739,34.435,37.27z M58,58h-7v-1h3V47h3h1V58z M55,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h-2h-1.08
              c-0.352-2.443-1.964-4.484-4.16-5.431c0.501-1.25,0.236-2.713-0.79-3.724l-3.992-3.936c-1.366-1.348-3.589-1.349-4.955,0
              l-3.992,3.936c-0.874,0.861-1.19,2.048-0.958,3.154h-5.146c0.232-1.106-0.083-2.294-0.957-3.154l-3.992-3.936
              c-1.366-1.348-3.589-1.349-4.955,0l-3.992,3.936c-1.142,1.125-1.332,2.805-0.583,4.133C10.662,41.037,9.388,42.862,9.08,45H8H6
              c0.552,0,1-0.447,1-1s-0.448-1-1-1H5v-5h3V28H5v-0.856C5,25.962,5.961,25,7.144,25h45.713C54.038,25,55,25.962,55,27.144V28h-3v10
              h3V43z"
                  />
                  <path d="M48,4H12v13h36V4z M46,15H14V6h32V15z" />
                  <path d="M52,0H8v21h44V0z M50,19H10V2h40V19z" />
                  <path
                    d="M18,13c0.256,0,0.512-0.098,0.707-0.293L21,10.414l2.293,2.293C23.488,12.902,23.744,13,24,13s0.512-0.098,0.707-0.293
              L27,10.414l2.293,2.293C29.488,12.902,29.744,13,30,13s0.512-0.098,0.707-0.293L33,10.414l2.293,2.293
              C35.488,12.902,35.744,13,36,13s0.512-0.098,0.707-0.293L39,10.414l2.293,2.293C41.488,12.902,41.744,13,42,13
              s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-3-3c-0.391-0.391-1.023-0.391-1.414,0L36,10.586l-2.293-2.293
              c-0.391-0.391-1.023-0.391-1.414,0L30,10.586l-2.293-2.293c-0.391-0.391-1.023-0.391-1.414,0L24,10.586l-2.293-2.293
              c-0.391-0.391-1.023-0.391-1.414,0l-3,3c-0.391,0.391-0.391,1.023,0,1.414C17.488,12.902,17.744,13,18,13z"
                  />
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>
              <p>Luxury Room</p>
            </div>
          </div>
        </div>
        <div class="info-container-restaurant">
          <div class="info-container-restaurant-img">
            <img src="./assets/food/aboutus-food.jpg" alt="Top food" />
          </div>
          <div class="info-container-restaurant-card">
            <p class="info-container-restaurant-card-legend">Restaurant</p>
            <h2>Get Restaurant Facilities & Many Other More</h2>
            <p class="info-container-restaurant-card-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A
              veritatis quibusdam numquam vel exercitationem dolore rerum
              ducimus nulla, velit, quod delectus ipsam laborum? Eligendi
              mollitia harum autem maxime, est ipsum!
            </p>
            <button>Take a Tour</button>
          </div>
        </div>
      </div>
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
    <section id="counter-section">
      <div class="counter-container">
        <p>Counter</p>
        <h2>Some Fun Facts</h2>
        <div class="counter-container-stats">
          <div class="counter-container-stats-card">
            <div class="counter-container-stats-card-content">
              <object data="assets/icons/user.svg" width="70"></object>
              <div class="counter-container-stats-card-content-text">
                8000 <span>Happy Users</span>
              </div>
            </div>
            <div class="counter-container-stats-card-arrow">
              <object
                data="assets/icons/right-arrow-light.svg"
                width="40"
              ></object>
            </div>
          </div>
          <div class="counter-container-stats-card">
            <div class="counter-container-stats-card-content">
              <object data="assets/icons/star-rate.svg" width="70"></object>
              <div class="counter-container-stats-card-content-text">
                10M <span>Reviews & Appreciations</span>
              </div>
            </div>
            <div class="counter-container-stats-card-arrow">
              <object
                data="assets/icons/right-arrow-light.svg"
                width="40"
              ></object>
            </div>
          </div>
          <div class="counter-container-stats-card">
            <div class="counter-container-stats-card-content">
              <object
                data="assets/icons/world-location.svg"
                width="70"
              ></object>
              <div class="counter-container-stats-card-content-text">
                100 <span>Country Coverage</span>
              </div>
            </div>
            <div class="counter-container-stats-card-arrow">
              <object
                data="assets/icons/right-arrow-light.svg"
                width="40"
              ></object>
            </div>
          </div>
        </div>
        <div class="counter-container-slider">
          <div class="swiper mySwiperCounter">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="counter-container-slider-card">
                  <img src="./assets/main-hotel/underground1.jpg" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="counter-container-slider-card">
                  <img src="./assets/main-hotel/underground2.jpg" />
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="counter-container-desktop">
          <div class="counter-container-desktop-img">
            <img src="./assets/main-hotel/underground1.jpg" />
          </div>
          <div class="counter-container-desktop-img">
            <img src="./assets/main-hotel/underground2.jpg" />
          </div>
        </div>
      </div>
    </section>
  @endsection

  @section('footer')
    @parent
  @endsection