<nav class="nav1">
  <div class="mobilgösterme">
    <div class="flex-container ">
      <div class="navbar-yazi col-md-9">
        <div class="logo-container">
          <a href="index.php">
            <img class="navbarlogo" src="assets/images/HollyStone Beyaz.png" alt="">
          </a>
        </div>
        <ul class="nav-list">
          <li class="nav-list-item"><a href="index.php">ANA SAYFA</a></li>
          <li class="nav-list-item"><a href="yaklasandaha.php">KONSERLER</a></li>
          <li class="nav-list-item"><a href="index.php#haftalikprogram">PROGRAM</a></li>
          <li class="nav-list-item"><a href="franchise.php">FRANCHISE</a></li>
          <li class="nav-list-item"><a href="iletisim.php">İLETİŞİM</a></li>
          <li class="nav-list-item"><a href="hollyshop.php">HOLLY<strong>SHOP</strong></a></li>
        </ul>
      </div>
      <ul style="margin-left: -100px;" class="nav-list col-md-2">
        <li id="myBtn" class="girisyapbaslik">GİRİŞ YAP</li>
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modalcon">
            <span class="close"></span>
            <div class="girismodal">
              <div class="girismodalsol1">
                <div class="girismodalsol2">
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/ATRIUM 1.png" alt="">
                    </span>
                  </div>
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/Magnus 4 1.png" alt="">
                    </span>
                  </div>
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/HollyGarden Beyaz.png" alt="">
                    </span>
                  </div>
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/HollyStreet Beyaz.png" alt="">
                    </span>
                  </div>
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/HollyTicket Beyaz.png" alt="">
                    </span>
                  </div>
                  <div class="sollogo">
                    <span>
                      <img src="assets/images/HollyEnt Beyaz.png" alt="">
                    </span>
                  </div>
                </div>
              </div>
              <div class="girismodalsag">
                <div class="girismodalsaglogo">
                  <img src="assets/images/yesil 5.png" alt="">
                </div>
                <div class="divtelefon">
                  <input class="girismodalinput" type="number" placeholder="Telefon Numarası">
                </div>
                <div class="divsifre mt-2">
                  <input class="girismodalinput" type="text" placeholder="Şifre">
                </div>
                <div class="sifreunut">
                  <span style="text-decoration: underline;" class="sifreunutspan">
                    Şifremi Unuttum
                  </span>
                </div>
                <div class="modalgirisyap">
                  <button class="modalgirisbut">
                    Giriş Yap
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div id="registrationModal" class="modal1">

          <!-- Modal içeriği -->
          <div class="modalcon1">
            <span class="close1" onclick="closeRegistrationModal()">&times;</span>
            <div class="kayitolmodal">
              <!-- Kayıt ol içeriği buraya eklenebilir -->
              <div class="kayitlogo">
                <img src="assets/images/yesil 5.png" alt="">
              </div>
              <div class="kayitinput1" style="margin-top: 50px;">
                <div><input class="kayitmodalinput" type="text" placeholder="Ad Soyad"></div>
                <input class="kayitmodalinput" type="text" id="dogumTarihi" placeholder="GG/AA/YYYY" oninput="formatDogumTarihi()">
              </div>
              <div class="kayitinput1">
                <div class="kayitmodalsol">
                  <div><input class="kayitolmodalinputnum" maxlength="2" type="text" placeholder="+90"></div>
                  <div><input class="kayitolmodalinputnum1" type="text" placeholder="Telefon Numarası"></div>
                </div>
                <div>
                  <div><input class="kayitmodalinput" type="text" placeholder="Şifre"></div>
                </div>
              </div>
              <div class="kayitinput1">
                <div><input class="kayitmodalinput" type="text" placeholder="E-Mail"></div>
                <div><input class="kayitmodalinput" type="text" placeholder="Şifre Tekrar"></div>
              </div>
              <div class="kayitinput1">
                <div><input class="kayitmodalref" type="text" placeholder="Referans Kodu (Zorunlu Değildir.)"></div>
              </div>
              <div class="kayitinput1 col-md-12">
                <div style="margin-left: 0px;width:100%;" class="checkboxdiv">
                  <div class="flexroworta col-md-11 ml-5">
                    <div class="col-md-2">
                      <div style="background-color: #00B41C;" class="ödemecheckbox">
                        <input class="ödemecheckbox2" type="checkbox">
                      </div>
                    </div>
                    <div class="col-md-10">
                      <span><a href="" target="_blank">Mesafeli Satış Sözleşmesi’</a>ni ve <a href="">İptal ve İade Şartları’</a>nı ve <a href="">Gizlilik Sözleşmesi</a>'ni okudum onaylıyorum.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modalkayitol col-md-5">
                <button class="modalgirisbut">
                  Kayıt Ol
                </button>
              </div>
            </div>
          </div>

        </div>
        <li class="girisyapbaslik"><a href="javascript:void(0);" onclick="openRegistrationModal()">KAYIT OL</a></li>
      </ul>
    </div>
  </div>
  <div class="webgösterme">
    <?php include('navbargiris.php') ?>
  </div>
  <div class="navortacontainer">
    <div class="mobilgösterme" style="display: flex;flex-direction:row;">
      <div class="cizgisehir mobilgösterme">
        <ul class="navbarsehir col-md-1">
          <li class="city active" onclick="toggleClass(this)">ANTALYA</li>
          <li class="city" onclick="toggleClass(this)">ISPARTA</li>
          <li class="city" onclick="toggleClass(this)">DENİZLİ</li>
          <li class="city" onclick="toggleClass(this)">AYDIN</li>
          <li class="city" onclick="toggleClass(this)">KUŞADASI</li>
      </div>
      </ul>
    </div>
    <div class="navortabas2 col-md-7">
      <span class="navortabas1">
        HOLLY PUAN,CHAT,SHOP VE DAHA FAZLASI IÇIN MOBIL UYGULAMAYA GÖZ AT!
      </span>
      <div class="logolar">
        <div class="applelogo">
          <i class="fa-brands fa-apple fa-2xl" style="color: #ffffff;"></i>
          <span class="logoyazi">
            Dowload on the <strong>App Store</strong>
          </span>
        </div>
        <div class="playstorelogo">
          <i class="fa-brands fa-google-play fa-2xl" style="color: #ffffff;"></i>
          <span class="logoyazi">
            GET IT ON <strong>Google Play</strong>
          </span>
        </div>
      </div>
    </div>
    <div class="navortamobil mobilgösterme">
      <img style="width: 100%;" src="assets/images/mobilresim.png" alt="">
    </div>
  </div>

  <div class="dot-container">
  </div>
  <div class="navkonum mobilgösterme">
    <i class="fa-solid fa-location-dot fa-2xl" style="color: #ffffff;"></i>
    <span class="navkonumyazi">
      ANTALYA
    </span>
  </div>

</nav>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  function openRegistrationModal() {
    var modal = document.getElementById("registrationModal");
    modal.style.display = "block";
  }

  function closeRegistrationModal() {
    var modal = document.getElementById("registrationModal");
    modal.style.display = "none";
  }




  function toggleClass(element, cityName) {
    // Diğer li elementlerini temizle
    var allElements = document.querySelectorAll('.city');
    allElements.forEach(function(el) {
      el.classList.remove('active');
    });

    // Tıklanan li elemente aktif sınıfı ekle
    element.classList.add('active');

    // Çizgiyi oluştur
    var lines = document.querySelectorAll('.line');
    lines.forEach(function(line) {
      line.remove();
    });
  }

  document.addEventListener("DOMContentLoaded", function() {
    const images = [
      "assets/images/arkaplangitar.png",
      "assets/images/footerimg.png",
      "assets/images/konserresim1.jpg",
      "assets/images/pngtree-excited-audience-silhouette-background-abstract-image_1076320.jpg",
      "assets/images/arkaplangitar.png",
      "assets/images/arkaplangitar.png",
      "assets/images/arkaplangitar.png",
    ];
    const duration = 2000; // Her 5 saniyede bir değiştir

    let currentIndex = 0;
    const dotContainer = document.querySelector('.dot-container');

    function createDots() {
      images.forEach((image, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (index === currentIndex) {
          dot.classList.add('active');
        }
        dotContainer.appendChild(dot);
      });
    }

    function updateDots() {
      const dots = document.querySelectorAll('.dot');
      dots.forEach((dot, index) => {
        if (index === currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }

    function changeBackground() {
      const currentImage = images[currentIndex];
      const nav1 = document.querySelector('.nav1');

      nav1.style.backgroundImage = `url('${currentImage}')`;

      updateDots();

      currentIndex = (currentIndex + 1) % images.length; // Diziyi dolaş
    }

    createDots(); // Dotları oluştur

    // Belirli bir süre aralığında fonksiyonu çağır
    setInterval(changeBackground, duration);
  });

  function formatDogumTarihi() {
    var input = document.getElementById("dogumTarihi");
    var girilenMetin = input.value;

    // Girişte sadece sayılar ve / karakteri kabul edilir
    var temizMetin = girilenMetin.replace(/[^\d/]/g, "");

    // Girişi en fazla 10 karaktere sınırla (GG/AA/YYYY)
    if (temizMetin.length > 10) {
      temizMetin = temizMetin.slice(0, 10);
    }

    // Girişi gün/ay/yıl olarak ayır ve her bölümü formatla
    if (temizMetin.length >= 2) {
      var gun = temizMetin.slice(0, 2);
      var ay = temizMetin.slice(3, 5);
      var yil = temizMetin.slice(6, 10);
      if (temizMetin[2] === '/' && temizMetin[5] === '/') {
        temizMetin = gun + "/" + ay + "/" + yil;
      } else {
        temizMetin = gun + ay + "/" + yil;
      }
    }

    input.value = temizMetin;
  }

  function getDogumTarihi() {
    var dogumTarihi = document.getElementById("dogumTarihi").value;
    document.getElementById("sonuc").textContent = "Doğum Tarihi: " + dogumTarihi;
  }
</script>