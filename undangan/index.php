<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Undangan Pernikahan Risky & Mega</title>

  <!-- bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <!-- icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- lightbox -->
  <script src="assets/library/lightbox/fslightbox.js"></script>
  <!-- aos -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
  <!-- jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/image/icon.png">
</head>

<body>
  <style>
    body {
      font-family: "Work Sans", sans-serif;
    }

    #profile_pasangan {
      background: url('assets/image/270.jpg');
      background-size: cover;
    }

    #love_story {
      background: url('assets/image/271.jpg');
      background-size: cover;
    }

    #WeddingGift {
      background: url('assets/image/bg-sakura.jpg');
      background-size: cover;
    }

    @media only screen and (max-width: 768px) {
      #profile_pasangan {
        background-position-x: -700px;
      }
      #WeddingGift {
        background-position: center;
      }
      #love_story {
        background-position: center;
      }
    }

    .slideshow {
      position: fixed;
      width: 100%;
      height: 100%;
      background: black;
      top: 0;
      left: 0;
      z-index: -100;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .slideshow li {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      filter: brightness(0.5);
      background-size: cover;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      opacity: 0;
      z-index: 0;
      animation: imageAnimation 50s linear infinite;
    }

    .slideshow li:nth-child(1) {
      background-image: url(/assets/image/IMG_6139.jpeg);
    }

    .slideshow li:nth-child(2) {
      background-image: url(/assets/image/IMG_6103.jpeg);
      animation-delay: 10s;
    }

    .slideshow li:nth-child(3) {
      background-image: url(/assets/image/IMG_6399.jpeg);
      animation-delay: 20s;
    }

    .slideshow li:nth-child(4) {
      background-image: url(/assets/image/IMG_6542.jpeg);
      animation-delay: 30s;
    }

    .slideshow li:nth-child(5) {
      background-image: url(/assets/image/IMG_6473.jpeg);
      animation-delay: 40s;
    }

    @keyframes imageAnimation {
      0% {
        opacity: 0;
        animation-timing-function: ease-in;
      }

      10% {
        opacity: 1;
        animation-timing-function: ease-out;
      }

      20% {
        opacity: 1;
      }

      30% {
        opacity: 0;
      }
    }

    .petal {
      position: fixed;
      width: 100%;
      top: -340px;
      text-align: left;
      z-index: -99;
    }

    .petal span {
      display: inline-block;
      overflow: hidden;
      width: 5px;
      height: 5px;
      border-radius: 200px 10px 200px 200px;
      background: linear-gradient(to bottom, #f15f79, #ddd6f3);
      z-index: -99;
      transform: skewX(30deg);
      backface-visibility: visible;
      -webkit-animation: fallingSakura1 8s ease infinite;
    }

    .petal span:nth-of-type(3n + 2) {
      -webkit-animation: fallingSakura2 8s ease infinite;
    }

    .petal span:nth-of-type(3n + 1) {
      -webkit-animation: fallingSakura3 8s ease infinite;
    }

    .petal span:nth-of-type(n) {
      -webkit-animation-delay: -1.9s;
    }

    .petal span:nth-of-type(2n) {
      -webkit-animation-delay: 3.9s;
    }

    .petal span:nth-of-type(3n) {
      -webkit-animation-delay: 2.3s;
    }

    .petal span:nth-of-type(4n) {
      -webkit-animation-delay: 4.4s;
    }

    .petal span:nth-of-type(5n) {
      -webkit-animation-delay: 5s;
    }

    .petal span:nth-of-type(6n) {
      -webkit-animation-delay: 3.5s;
    }

    .petal span:nth-of-type(7n) {
      -webkit-animation-delay: 2.8s;
    }

    .petal span:nth-of-type(8n) {
      -webkit-animation-delay: 1.5s;
    }

    .petal span:nth-of-type(9n) {
      -webkit-animation-delay: 3.3s;
    }

    .petal span:nth-of-type(10n) {
      -webkit-animation-delay: 2.5s;
    }

    .petal span:nth-of-type(11n) {
      -webkit-animation-delay: 1.2s;
    }

    .petal span:nth-of-type(12n) {
      -webkit-animation-delay: 4.1s;
    }

    .petal span:nth-of-type(13n) {
      -webkit-animation-delay: 5.8s;
    }

    .petal span:nth-of-type(14n) {
      -webkit-animation-delay: -0.1s;
    }

    .petal span:nth-of-type(15n) {
      -webkit-animation-delay: 6.3s;
    }

    .petal span:nth-of-type(16n) {
      -webkit-animation-delay: -1s;
    }

    .petal span:nth-of-type(17n) {
      -webkit-animation-delay: 7.4s;
    }

    .petal span:nth-of-type(18n) {
      -webkit-animation-delay: -0.3s;
    }

    .petal span:nth-of-type(19n) {
      -webkit-animation-delay: 8.3s;
    }

    .petal span:nth-of-type(20n) {
      -webkit-animation-delay: -0.6s;
    }

    .petal span:nth-of-type(21n) {
      -webkit-animation-delay: 7.7s;
    }

    .petal span:nth-of-type(2n + 2) {
      background: linear-gradient(to right, #fffbd5, #f15f79);
    }

    .petal span:nth-of-type(3n + 1) {
      background: linear-gradient(to right, #dd5e89, #f7bb97);
    }

    .petal span:nth-of-type(3n + 2) {
      border-radius: 20px 1px;
    }

    .petal span:nth-of-type(3n + 3) {
      transform: rotateX(-180deg);
    }

    .petal span:nth-of-type(3n + 2) {
      animation-duration: 12sec;
    }

    .petal span:nth-of-type(4n + 2) {
      animation-duration: 9sec;
    }

    .petal span:nth-of-type(5n + 2) {
      width: 12px;
      height: 12px;
      box-shadow: 1.5px 1.5px 8px #fc7bd1;
    }

    .petal span:nth-of-type(4n + 3) {
      width: 10px;
      height: 10px;
      box-shadow: 1px 1px 6px #fc7bd1;
    }

    .petal span:nth-of-type(n) {
      height: 23px;
      width: 30px;
    }

    .petal span:nth-of-type(2n + 1) {
      height: 11px;
      width: 16px;
    }

    .petal span:nth-of-type(3n + 2) {
      height: 17px;
      width: 23px;
    }

    @-webkit-keyframes fallingSakura1 {
      0% {
        -webkit-transform: translate3d(0, 0, 0) rotateX(0deg);
        opacity: 1;
      }

      100% {
        -webkit-transform: translate3d(400px, 1200px, 0px) rotateX(-290deg);
        opacity: 0.3;
      }
    }

    @-webkit-keyframes fallingSakura2 {
      0% {
        -webkit-transform: translate3d(0, 0, 0) rotateX(-20deg);
        opacity: 1;
      }

      100% {
        -webkit-transform: translate3d(200px, 1200px, 0px) rotateX(-70deg);
        opacity: 0.2;
      }
    }

    @-webkit-keyframes fallingSakura3 {
      0% {
        -webkit-transform: translate3d(0, 0, 0) rotateX(90deg);
        opacity: 1;
      }

      100% {
        -webkit-transform: translate3d(500px, 1200px, 0px) rotateX(290deg);
        opacity: 0;
      }
    }
  </style>
  <style>
    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
      max-width: 25%;
      padding: 0 4px;
    }

    .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
      .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
      }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
      }
    }

    #player-container {
      position: fixed;
      bottom: 0;
      right: 10px;
      z-index: 999;
    }

    #player-container #play-pause {
      cursor: pointer;
      text-indent: -999999px;
      height: 40px;
      border-radius: 25px;
      width: 40px;
      padding: 12px 18px;
      z-index: 100;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMiAyNHYtMjRsMjAgMTItMjAgMTJ6Ii8+PC9zdmc+);
      background-repeat: no-repeat !important;
      background-position: center;
      background-size: 16px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: 20px;
      background-color: gainsboro;
    }

    .play {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMiAyNHYtMjRsMjAgMTItMjAgMTJ6Ii8+PC9zdmc+);
    }

    .pause {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTAgMjRoLTZ2LTI0aDZ2MjR6bTEwLTI0aC02djI0aDZ2LTI0eiIvPjwvc3ZnPg==) !important;
    }
  </style>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    var countDownDate = new Date("Sept 29, 2024 08:30:00").getTime();
    // Update the count down every 1 second
    var countdown_date = setInterval(function() {
      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("box-day").innerHTML = days;
      document.getElementById("box-hour").innerHTML = hours;
      document.getElementById("box-minutes").innerHTML = minutes;
      document.getElementById("box-second").innerHTML = seconds;

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
  <div class="petal">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="background">
    <ul class="slideshow">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <audio id="track">
    <source src="/assets/audio/music.mp3" type="audio/mpeg" />
  </audio>

  <div id="player-container" class="mb-3 pb-1">
    <!-- <div id="play-pause" class="play bg-light">Play</div> -->
  </div>
  
  <script>
    const rootElement = document.querySelector(":root");

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
      };

      rootElement.style.scrollBehavior = "auto";
    }

    function enableScroll() {
      window.onscroll = function() {};
      rootElement.style.scrollBehavior = "smooth";

      const menu_btn = document.querySelector('#menu_btn');

      menu_btn.style.removeProperty('display');
      playPause();
    }

    disableScroll();

    function copy_alamat() {
      // Get the text field element by its ID
      var copyText = document.getElementById("copy-alamatnya");

      if (!copyText) {
        alert("Element tidak ditemukan.");
        return;
      }

      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(copyText.innerHTML)
          .then(() => {
            alert("Berhasil Copy Teks");
          })
          .catch((err) => {
            console.error('Failed to copy text: ', err);
            alert("Gagal menyalin teks.");
          });
      } else {
        var textarea = document.createElement("textarea");
        textarea.value = copyText.innerHTML;
        document.body.appendChild(textarea);
        textarea.select();
        try {
          document.execCommand('copy');
          alert("Berhasil Copy Teks");
        } catch (err) {
          console.error('Gagal menyalin teks dengan cara lama: ', err);
          alert("Gagal menyalin teks.");
        }
        document.body.removeChild(textarea);
      }
    }
  </script>
  <section id="welcome" style="height: 100vh">
    <div
      class="welcome text-center text-light mt-5"
      data-aos="fade-up"
      data-aos-duration="3000">
      <h2>The Wedding Of</h2>
      <div class="box-img my-3">
        <img
          src="/assets/image/IMG_6072.jpeg"
          class="shadow-lg rounded-5"
          style="width: 200px; height: 200px; object-fit: cover"
          alt="" />
      </div>
      <div class="name_of_wedding my-4">
        <h1
          style="
              font-family: 'Sacramento', cursive;
              font-weight: 400;
              font-style: normal;
            ">
        </h1>
      </div>
      <h2>Rizky & Mega</h2>
      <div class="date_wedding">
        <h5 class="text-bold">Minggu, 29 September 2024</h5>
      </div>
      <div class="to my-4">
        <p class="mb-2">Kepada Yth. Bapak / Ibu / Saudara (i)</p>
        <h1 id="name-display" style="font-family: 'Sacramento', cursive"></h1>
      </div>
      <div class="countdown d-flex justify-content-center">
        <div
          class="box-day m-2 text-dark d-flex flex-column p-1 rounded-3"
          width="100px"
          style="background-color: #f15f79; width: 80px">
          <h3 class="m-0" id="box-day">00</h3>
          <div>Hari</div>
        </div>
        <div
          class="box-hour m-2 text-dark d-flex flex-column p-1 rounded-3"
          width="100px"
          style="background-color: #f15f79; width: 80px">
          <h3 class="m-0" id="box-hour">00</h3>
          <div>Jam</div>
        </div>
        <div
          class="box-Minute m-2 text-dark d-flex flex-column p-1 rounded-3"
          width="100px"
          style="background-color: #f15f79; width: 80px">
          <h3 class="m-0" id="box-minutes">00</h3>
          <div>Menit</div>
        </div>
        <div
          class="box-second m-2 text-dark d-flex flex-column p-1 rounded-3"
          width="100px"
          style="background-color: #f15f79; width: 80px">
          <h3 class="m-0" id="box-second">00</h3>
          <div>Detik</div>
        </div>
      </div>
      <div class="button-open mt-4">
        <a
          id="buka_undangan"
          href="#profile_pasangan"
          class="btn btn-light"
          onclick="enableScroll()"><i class="bi bi-envelope me-2"></i>Buka Undangan</a>
      </div>
    </div>
  </section>
  <section id="profile_pasangan">
    <div
      class=" text-center my-3 p-5">
      <h1
        style="font-family: 'Sacramento', cursive">
        Undangan Pernikahan
      </h1>
      <p>
        <i>Assalamu’alaikum Warahmatullahi Wabarakatuh</i><br /><br />Maha
        suci Allah SWT yang telah menciptakan makhluk-Nya
        berpasang-pasangan.<br />Ya Allah, perkenankanlah kami merangkai kasih
        sayang yang Kau ciptakan di antara putra-putri kami:<br />
      </p>
      <div class="row justify-content-center profile m-0">
        <div
          class="col col-lg laki-laki d-flex flex-column align-items-center"
          style="max-width: 400px">
          <div
            class="box-img my-3 shadow-lg rounded-circle"
            style="
                width: 300px;
                height: 300px;
                overflow: hidden;
                border: #f15f79 5px solid;
              ">
            <img
              src="/assets/image/IMG_6582.jpeg"
              style="
                  width: 800px;
                  margin-left: -190px;
                  margin-top: -65px;
                  object-fit: cover;
                "
              alt="" />
          </div>
          <h1 class="my-4" style="font-family: 'Sacramento', cursive">
            Risky
          </h1>
          <h5>Muhammad Risky Khollid</h5>
          <p>
            Putera Ketiga dari Pasangan<br /><strong>Sadelih Bin Sa'im & Jumanah</strong>
          </p>
          <p><i class="bi bi-geo-alt-fill me-2"></i>Jakarta</p>
        </div>
        <div class="col-1 d-flex justify-content-center align-items-center">
          <div
            class="icons-heart h-50 pb-5">
            <i class="bi bi-heart-fill" style="font-size: 50px"></i>
          </div>
        </div>
        <div
          class="col col-lg perempuan d-flex flex-column align-items-center"
          style="max-width: 400px">
          <div
            class="box-img my-3 shadow-lg rounded-circle"
            style="
                width: 300px;
                height: 300px;
                overflow: hidden;
                border: #f15f79 5px solid;
              ">
            <img
              src="/assets/image/IMG_6297.jpeg"
              style="width: 400px; margin-left: -45px; margin-top: -200px"
              alt="" />
          </div>
          <h1 class="my-4" style="font-family: 'Sacramento', cursive">
            Mega
          </h1>
          <h5>Mega Nurastuti</h5>
          <p>
            Puteri Pertama dari Pasangan<br /><strong>Masruri & Aenur Rahmi</strong>
          </p>
          <p><i class="bi bi-geo-alt-fill me-2"></i>Jakarta</p>
        </div>
      </div>
    </div>
  </section>
  <section id="save_the_date">
    <div class="text-center my-3 p-3 text-light">
      <h1
        data-aos="flip-left"
        data-aos-duration="3000"
        style="font-family: 'Sacramento', cursive">
        Informasi Acara
      </h1>
      <div class="row justify-content-center m-0">
        <div
          data-aos="flip-left"
          data-aos-offset="0"
          data-aos-duration="3000"
          class="col-lg d-flex flex-column justify-content-center my-3 shadow-lg rounded-5 mx-5"
          style="
              max-width: 350px;
              height: 500px;
              overflow: hidden;
              border: #f15f79 5px solid;
              position: relative;
            ">
          <img
            src="/assets/image/IMG_6540.jpeg"
            style="
                width: 700px;
                margin-left: -150px;
                position: absolute;
                filter: brightness(0.5);
                z-index: -50;
              "
            alt="" />
          <div class="jadwal my-2">
            <h1
              class="pb-3 m-auto"
              style="font-family: 'Sacramento', cursive">
              Akad Nikah
            </h1>
            <p class="m-auto">
              <i class="col-1 bi bi-calendar-week me-2"></i>Minggu, 29
              September 2024
            </p>

            <p class="m-auto">
              <i class="bi bi-clock-fill me-2"></i>08:00 WIB - 10:00 WIB
            </p>
          </div>
          <div class="alamat_akad my-2">
            <!-- <p class="mb-0"><i class="bi bi-geo-fill me-2"></i>Alamat</p> -->
            <p class="m-auto">
              Gedung Olahraga (Cengkareng Barat), RT.9/RW.2, West Cengkareng,
              Cengkareng, West Jakarta City, Jakarta 11730
            </p>
          </div>
          <div class="google_maps my-2">
            <div style="width: 100%">
              <iframe
                width="100%"
                height="150"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=GELANGGANG%20OLAH%20RAGA%20CENGKARENG+(GELANGGANG%20OLAH%20RAGA%20CENGKARENG)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe>
            </div>
            <a
              href="https://maps.app.goo.gl/cWT96nbEeX45LL8Y8"
              target="_blank"
              class="btn btn-sm btn-light mt-2"><i class="bi bi-geo-alt-fill pe-2"></i>Lihat di Google Maps</a>
          </div>
        </div>
        <div
          data-aos="flip-right"
          data-aos-offset="0"
          data-aos-duration="3000"
          class="col-lg d-flex flex-column justify-content-center my-3 shadow-lg rounded-5 mx-5"
          style="
              max-width: 350px;
              height: 500px;
              overflow: hidden;
              border: #f15f79 5px solid;
              position: relative;
            ">
          <img
            src="/assets/image/IMG_6367.jpeg"
            style="
                width: 800px;
                margin-left: -150px;
                position: absolute;
                filter: brightness(0.5);
                z-index: -50;
              "
            alt="" />
          <div class="jadwal my-2">
            <h1
              class="mb-3 m-auto"
              style="font-family: 'Sacramento', cursive">
              Resepsi
            </h1>
            <p class="m-auto">
              <i class="col-1 bi bi-calendar-week me-2"></i>Minggu, 29
              September 2024
            </p>
            <p class="m-auto">
              <i class="bi bi-clock-fill me-2"></i>10:00 WIB - 16:00 WIB
            </p>
          </div>
          <div class="alamat_akad my-2">
            <p class="m-auto">
              Gedung Olahraga (Cengkareng Barat), RT.9/RW.2, West Cengkareng,
              Cengkareng, West Jakarta City, Jakarta 11730
            </p>
          </div>
          <div class="google_maps my-2">
            <div style="width: 100%">
              <iframe
                width="100%"
                height="150"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=GELANGGANG%20OLAH%20RAGA%20CENGKARENG+(GELANGGANG%20OLAH%20RAGA%20CENGKARENG)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe>
            </div>
            <a
              href="https://maps.app.goo.gl/cWT96nbEeX45LL8Y8"
              target="_blank"
              class="btn btn-sm btn-light mt-2"><i class="bi bi-geo-alt-fill pe-2"></i>Lihat di Google Maps</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="love_story">
    <div
      class="text-center align-items-center my-3 py-5 px-2"
      data-aos="fade-up"
      data-aos-duration="3000">
      <h1 style="font-family: 'Sacramento', cursive">Our Love Story</h1>
      <div
        id="carouselExampleCaptions"
        class="carousel slide m-auto py-3 px-2"
        style="max-width: 1100px"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <style>
          .carousel-item>img {
            object-fit: cover;
            height: 550px;
          }
        </style>
        <div class="carousel-inner rounded-4 shadow">
          <div class="carousel-item active" data-bs-interval="5000">
            <img
              src="/assets/image/IMG_6085.jpeg"
              class="d-block w-100"
              alt="..." />
            <div class="carousel-caption d-md-block">
              <h5>2018</h5>
              <p>Awal pertemuan</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img
              src="/assets/image/IMG_6103.jpeg"
              class="d-block w-100"
              alt="..." />
            <div class="carousel-caption d-md-block">
              <h5>2023</h5>
              <p>Berkomitmen</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img
              src="/assets/image/IMG_6139.jpeg"
              class="d-block w-100"
              alt="..." />
            <div class="carousel-caption d-md-block">
              <h5>2024</h5>
              <p>Menikah</p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <section id="gallery">
    <div class="text-center text-light align-items-center my-3 py-5 px-1">
      <h1 style="font-family: 'Sacramento', cursive">Moment Yang Berharga</h1>
      <p>
        Menciptakan kenangan adalah hadiah yang tak ternilai harganya. </br>Kenangan akan bertahan seumur hidup; benda-benda hanya dalam waktu singkat.
      </p>
      <!-- Photo Grid -->
      <div class="row px-2 m-0">
        <div class="column">
          <a data-fslightbox="1" href="/assets/image/IMG_6175.jpeg">
            <img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6175.jpeg"
              style="width: 100%" /></a>
          <a data-fslightbox="1" href="/assets/image/IMG_6441.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6441.jpeg"
              style="width: 100%" /></a>
        </div>
        <div class="column">
          <a data-fslightbox="1" href="/assets/image/IMG_6550.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6550.jpeg"
              style="width: 100%" /></a>
          <a data-fslightbox="1" href="/assets/image/IMG_6228.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6228.jpeg"
              style="width: 100%" /></a>
        </div>
        <div class="column">
          <a data-fslightbox="1" href="/assets/image/IMG_6230.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6230.jpeg"
              style="width: 100%" /></a>
          <a data-fslightbox="1" href="/assets/image/IMG_6184.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6184.jpeg"
              style="width: 100%" /></a>
        </div>
        <div class="column">
          <a data-fslightbox="1" href="/assets/image/IMG_6542.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6542.jpeg"
              style="width: 100%" /></a>
          <a data-fslightbox="1" href="/assets/image/IMG_6495.jpeg"><img
              data-aos="zoom-in"
              data-aos-offset="0"
              data-aos-duration="3000"
              class="rounded-4"
              src="/assets/image/IMG_6495.jpeg"
              style="width: 100%" /></a>
        </div>
      </div>
    </div>
  </section>
  <section id="WeddingGift">
    <div
      class="text-center align-items-center my-3 py-5 px-2"
      data-aos="fade-up"
      data-aos-duration="3000">
      <h1
        data-aos="fade-down"
        data-aos-duration="3000"
        style="font-family: 'Sacramento', cursive">
        Wedding Gift
      </h1>
      <div data-aos="fade-down" data-aos-duration="3000">
        Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.
        <br />Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat
        memberi kado secara cashless.
      </div>
      <div
        data-aos="fade-up"
        data-aos-duration="3000"
        class="accordion m-auto py-2"
        style="width: 350px"
        id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="false"
              aria-controls="collapseOne">
              BCA
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>NO REK : 5390679370</strong><br />
              <strong>A/N</strong><br />
              <strong>Muhammad Risky Khollid</strong>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo">
              QRIS
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div
                class="qris d-flex justify-content-center py-3"
                style="width: 100%">
                <img
                  src="/assets/image/qris.jpeg"
                  style="max-width: 350px"
                  alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" data-aos-duration="3000" class="kado-alamat">
        <p>Anda Juga Bisa Mengirim Kado Fisik Ke Alamat Berikut</p>
        <p id="copy-alamatnya">
          Jl. Utan Jati, Rt 007 Rw 011, No.3, Pegadungan, Kalideres, Jakarta
          Barat, 11830
        </p>
      </div>
      <div data-aos="fade-up" data-aos-duration="3000">
        <p>
          <button class="btn btn-sm btn-secondary" onclick="copy_alamat()">
            <i class="bi bi-copy me-2"></i>Salin Alamat
          </button>
        </p>
        <a
          href="https://api.whatsapp.com/send?phone=628998172752&text=Hai%20Risky%2C%20Saya%20mau%20mengkonfirmasi%20pengiriman%20kado%20pernikahan%20berupa"
          target="_blank"
          class="btn btn-sm"
          style="background: #f15f79; color: white"><i class="bi bi-whatsapp me-2"></i>Konfirmasikan Ke Risky</a>
      </div>
    </div>
  </section>

  <section id="UcapanKehadiran">
    <div class="align-items-center my-3 py-5 px-2">
      <h1
        data-aos="fade-down"
        data-aos-duration="3000"
        style="font-family: 'Sacramento', cursive"
        class="text-center text-light">
        Ucapan dan Kehadiran
      </h1>
      <div
        class="text-center mb-4 text-light"
        data-aos="fade-up"
        data-aos-duration="3000">
        Ucapkan Selamat dan Doa Restu Kepada Mempelai Untuk Hari Bahagia
        Mereka Melalui Kolom Berikut :
      </div>
      <div class="row m-auto justify-content-center">
        <div
          class="col-md card p-2 m-2 col-md-5"
          style="max-width: 500px"
          data-aos="fade-up"
          data-aos-duration="3000">
          <div class="card-body">
            <h5>Kirim Ucapan</h5>
            <form id="form_ucapan" method="POST" action="">
              <label for="Nama" class="form-label">Nama</label>
              <input
                name="Nama"
                class="form-control mb-2"
                id="nama"
                type="text"
                placeholder="Nama"
                required />
              <label for="Ucapan" class="form-label">Ucapan</label>
              <textarea
                name="Ucapan"
                class="form-control mb-2"
                id="ucapan"
                type="text"
                placeholder="Ucapan"
                required></textarea>
              <label for="KonfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
              <select
                name="KonfirmasiKehadiran"
                class="form-control mb-2"
                id="konfirmasikehadiran"
                required>
                <option value="">Pilih</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Belum Pasti">Belum Pasti</option>
              </select>
              <button
                id="button-submit"
                type="submit"
                class="btn mb-2 btn-sm"
                style="background: #f15f79; color: white">
                Kirim Ucapan<i class="bi bi-send ms-2"></i>
              </button>
            </form>
          </div>
        </div>
        <div
          class="col-md card p-2 m-2 col-md-5"
          style="max-width: 500px; max-height: 380px"
          data-aos="fade-up"
          data-aos-duration="3000">
          <div class="card-body">
            <h5>All Comments</h5>
            <div
              class="comments"
              style="
                  max-height: 295px;
                  overflow-x: hidden;
                  overflow-y: overlay;
                "></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="menu_btn" class="menu d-flex bg-light mb-3 p-2 rounded shadow" style="display:none !important; position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); ">

    <div class="btn_mempelai px-1">
      <a href="#profile_pasangan" class="btn btn-outline-dark " title="Pasangan Mempelai"><i class="bi bi-heart"></i></a>
    </div>
    <div class="btn_acara px-1">
      <a href="#save_the_date" class="btn btn-outline-dark " title="Informasi Acara"><i class="bi bi-calendar-heart"></i></a>
    </div>
    <div class="btn_love_story px-1">
      <a href="#love_story" class="btn btn-outline-dark " title="Love Story"><i class="bi bi-hourglass-split"></i></a>
    </div>
    <div class="btn_WeddingGift px-1">
      <a href="#WeddingGift" class="btn btn-outline-dark " title="Wedding Gift"><i class="bi bi-gift"></i></a>
    </div>
    <div class="btn_UcapanKehadiran px-1">
      <a href="#UcapanKehadiran" class="btn btn-outline-dark " title="Ucapan Kehadiran"><i class="bi bi-envelope-heart"></i></a>
    </div>
    <div class="btn_music px-1">
      <button class="btn btn-dark " id="play_musik" title="Musik"><i class="bi bi-music-note-beamed"></i></button>
    </div>

  </div>
  <script>
    async function load() {
      try {
        const response = await fetch(
          "https://script.google.com/macros/s/AKfycbyLrAD1Cytv_ULm9Kp_ZbhlqDMIqvUEDXnV273AQ5qLijk8dd31iDuEyS6m3Tvb6jfANg/exec"
        );
        //   console.log(response);
        const data = await response.json();
        document
          .querySelectorAll(
            "#UcapanKehadiran > div > div.row.m-auto.justify-content-center > div > div > div > div"
          )
          .forEach(function(e) {
            e.remove();
          });

        data.forEach(function(item) {
          let dates = new Date(item.Date);
          let date_string = dates
            .toLocaleString("id-ID", {
              timeZone: "Asia/Jakarta",
              year: "numeric",
              month: "long",
              day: "numeric",
              hour: "2-digit",
              minute: "2-digit",
              second: "2-digit",
              timeZoneName: "short",
            })
            .replace(/\./g, ":");
          document.querySelector(".comments").innerHTML +=
            "<div class='card my-2'>" +
            "<div class='body p-2'>" +
            "<div class='row'>" +
            "<div class='col-1 me-1  text-center'>" +
            "<i class='bi bi-person-circle' style='font-size: 30px'></i>" +
            "</div>" +
            "<div class='col ms-2'>" +
            "<p class='text-capitalize fw-semibold m-0'>" +
            item.Nama +
            " - " +
            "<span class='badge fw-normal' style='background-color: #f15f79; color: white'>" +
            item.KonfirmasiKehadiran +
            "</span></p>" +
            "<small>" +
            item.Ucapan +
            "</small><br/>" +
            "<small class='text-secondary'> <i class='bi bi-clock me-2'></i>" +
            date_string +
            "</small>" +
            "</div></div></div></div>";
        });

      } catch (error) {
        console.error("Error fetching data:", error);
      }
    }

    async function updtload() {
      try {
        const response = await fetch(
          "https://script.google.com/macros/s/AKfycbyLrAD1Cytv_ULm9Kp_ZbhlqDMIqvUEDXnV273AQ5qLijk8dd31iDuEyS6m3Tvb6jfANg/exec"
        );
        //   console.log(response);
        const data = await response.json();
        document
          .querySelectorAll(
            "#UcapanKehadiran > div > div.row.m-auto.justify-content-center > div > div > div > div"
          )
          .forEach(function(e) {
            e.remove();
          });

        data.forEach(function(item) {
          let dates = new Date(item.Date);
          let date_string = dates
            .toLocaleString("id-ID", {
              timeZone: "Asia/Jakarta",
              year: "numeric",
              month: "long",
              day: "numeric",
              hour: "2-digit",
              minute: "2-digit",
              second: "2-digit",
              timeZoneName: "short",
            })
            .replace(/\./g, ":");
          document.querySelector(".comments").innerHTML +=
            "<div class='card my-2'>" +
            "<div class='body p-2'>" +
            "<div class='row'>" +
            "<div class='col-1 me-1  text-center'>" +
            "<i class='bi bi-person-circle' style='font-size: 30px'></i>" +
            "</div>" +
            "<div class='col ms-2'>" +
            "<p class='text-capitalize fw-semibold m-0'>" +
            item.Nama +
            " - " +
            "<span class='badge fw-normal' style='background-color: #f15f79; color: white'>" +
            item.KonfirmasiKehadiran +
            "</span></p>" +
            "<small>" +
            item.Ucapan +
            "</small><br/>" +
            "<small class='text-secondary'> <i class='bi bi-clock me-2'></i>" +
            date_string +
            "</small>" +
            "</div></div></div></div>";
        });

        var scrollableDiv = document.querySelector(".comments");

        function scrollToBottom() {
          var bottomElement = scrollableDiv.lastElementChild;
          bottomElement.scrollIntoView({
            behavior: "smooth",
            block: "end"
          });
        }

        scrollToBottom();
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    }

    load();
  </script>
  <script>
    var track = document.querySelector("#track");
    const musicIcon = document.querySelector("#play_musik i");
    var controlBtn = document.querySelector("#play_musik");

    function playPause() {
      if (track.paused) {
        track.play();
        musicIcon.className = "bi bi-music-note-beamed";
      } else {
        track.pause();
        musicIcon.className = "bi-pause-circle";
      }
    }

    controlBtn.addEventListener("click", playPause);
  </script>
  <script>
    $(document).ready(function() {
      $("#form_ucapan").submit(function(event) {
        var formData = {
          Nama: $("#nama").val(),
          Ucapan: $("#ucapan").val(),
          KonfirmasiKehadiran: $("#konfirmasikehadiran").val(),
        };
        document.getElementById("button-submit").innerHTML =
          '<span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>Kirim Ucapan';

        $.ajax({
          type: "POST",
          url: "https://script.google.com/macros/s/AKfycbyvGJ-4N5rmnMzL6eqviVLDoCLuCjMXWKAHIUYht6-TL5IM4LQKdIcEu_6bPDTpY2B0eQ/exec",
          data: formData,
          dataType: "json",
        }).done(function(data) {
          if (data.result == "success") {
            Swal.fire({
              text: "Kirim Ucapan Berhasil!",
              icon: "success",
            });
            document.getElementById("form_ucapan").reset();
            document.getElementById("button-submit").innerHTML =
              "Kirim Ucapan";
              updtload();
          } else if (data.result == "error") {
            Swal.fire({
              text: "Gagal Mengirim Ucapan!",
              icon: "error",
            });
            document.getElementById("button-submit").innerHTML =
              "Kirim Ucapan";
              updtload();
          }
        });

        event.preventDefault();
      });
    });
  </script>

  <footer>
    <div class="mt-5">
      <footer class="bg-light text-center text-white">
        <div class="container p-4 pb-0">
          <section class="mb-4">
            <!-- Instagram -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #ac2bac"
              href="#!"
              role="button"><i class="bi bi-instagram"></i></a>

            <!-- Linkedin -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #0082ca"
              href="#!"
              role="button"><i class="bi bi-linkedin"></i></a>
            <!-- Github -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #333333"
              href="#!"
              role="button"><i class="bi bi-github"></i></a>
          </section>
        </div>
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)">
          <small>Designed By Mahrus Husaeni</small>
        </div>
      </footer>
    </div>
  </footer>
</body>
<!-- <script>
    function fullscreen() {
      document
        .getElementById("welcome")
        .addEventListener("mouseover", function () {
          var el = document.documentElement,
            rfs =
              el.requestFullScreen ||
              el.webkitRequestFullScreen ||
              el.mozRequestFullScreen;
          rfs.call(el);
        });
    }

    fullscreen();
  </script> -->

<script>
  // Fungsi untuk mengambil parameter dari URL
  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  // Ambil parameter 'nama' dari URL
  const name = getQueryParam('nama');

  // Tampilkan nama di dalam elemen <p>
  const nameDisplay = document.getElementById('name-display');
  if (name) {
    nameDisplay.textContent = `${name}`;
  } else {
    nameDisplay.textContent = '';
  }
</script>

<script src="/assets/library/lightbox/fslightbox.js"></script>

</html>