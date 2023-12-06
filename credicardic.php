<div class="container">
    <div class="aboutusbaslik mobilmargintop50">
        <div>
            <span>KREDİ KARTLARIM</span>
        </div>
        <div class="webcardrow mobilcardcolumn mobilmargintop50 marginbottom50">
            <div class="kart-kapsul  card-container">
                <div>
                    <div class="cardön">
                        <div class="col-12" style="display: flex;flex-direction:row;justify-content:space-between;align-items:center;">
                            <div class="satir1">
                                <img src="assets/images/cardcredi.png" alt="">
                            </div>
                            <div class="satir1">
                                <img src="assets/images/Mastercard_2019_logo 1.png" alt="">
                            </div>
                        </div>
                        <div class="credinamesurname">
                            <span>
                                name and surname
                            </span>
                        </div>
                        <div class="credinumber">
                            <span>
                                5634 3333 8784 3003
                            </span>
                        </div>
                        <div class="credidate">
                            <span>
                                12/21
                            </span>
                        </div>
                    </div>
                    <div class="cardarka">
                        <div class="satir1">
                            <button class="carddeletebox">
                                <i class="fa-solid fa-trash fa-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kart-kapsul mobilmargintop50  card-container">
                <div>
                    <div class="cardön">
                        <div style="display: flex;flex-direction:row;justify-content:space-between;align-items:center;">
                            <div class="satir1">
                                <img src="assets/images/cardcredi.png" alt="">
                            </div>
                            <div class="satir1">
                                <img src="assets/images/Mastercard_2019_logo 1.png" alt="">
                            </div>
                        </div>
                        <div class="credinamesurname">
                            <span>
                                name and surname
                            </span>
                        </div>
                        <div class="credinumber">
                            <span>
                                5634 3333 8784 3003
                            </span>
                        </div>
                        <div class="credidate">
                            <span>
                                12/21
                            </span>
                        </div>
                    </div>
                    <div class="cardarka">
                        <div class="satir1">
                            <button class="carddeletebox">
                                <i class="fa-solid fa-trash fa-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="webcardrow mobilcardcolumn mobilmargintop50 marginbottom50">
            <div class="kart-kapsul  card-container">
                <div>
                    <div class="cardön">
                        <div class="col-12" style="display: flex;flex-direction:row;justify-content:space-between;align-items:center;">
                            <div class="satir1">
                                <img src="assets/images/cardcredi.png" alt="">
                            </div>
                            <div class="satir1">
                                <img src="assets/images/Mastercard_2019_logo 1.png" alt="">
                            </div>
                        </div>
                        <div class="credinamesurname">
                            <span>
                                name and surname
                            </span>
                        </div>
                        <div class="credinumber">
                            <span>
                                5634 3333 8784 3003
                            </span>
                        </div>
                        <div class="credidate">
                            <span>
                                12/21
                            </span>
                        </div>
                    </div>
                    <div class="cardarka">
                        <div class="satir1">
                            <button class="carddeletebox">
                                <i class="fa-solid fa-trash fa-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kart-kapsul mobilmargintop50  card-container">
                <div>
                    <div class="cardön">
                        <div style="display: flex;flex-direction:row;justify-content:space-between;align-items:center;">
                            <div class="satir1">
                                <img src="assets/images/cardcredi.png" alt="">
                            </div>
                            <div class="satir1">
                                <img src="assets/images/Mastercard_2019_logo 1.png" alt="">
                            </div>
                        </div>
                        <div class="credinamesurname">
                            <span>
                                name and surname
                            </span>
                        </div>
                        <div class="credinumber">
                            <span>
                                5634 3333 8784 3003
                            </span>
                        </div>
                        <div class="credidate">
                            <span>
                                12/21
                            </span>
                        </div>
                    </div>
                    <div class="cardarka">
                        <div class="satir1">
                            <button class="carddeletebox">
                                <i class="fa-solid fa-trash fa-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <button id="cardeklebuton" class="cardeklebuton col-md-12">Ekle</button>
        </div>

        <!-- Card Ekle Modal -->
        <div class="modal" id="cardeklemodal">
            <div class="modal-icerik">
                <span class="modal-kapat" id="modalKapat">&times;</span>
                <h2 class="credicardbaslik">Kart Bilgisi Gir</h2>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <input class="cardcrediinput col-12 col-md-10" type="text" id="kartNumarasi" maxlength="19" placeholder="1111 1111 1111 1111" oninput="ayirKartNumarasi()">
                    </div>
                    <div class="col-md-12">
                        <input class="cardcrediinput col-12 col-md-10" type="text" placeholder="Adınız Soyadınız">
                    </div>
                    <div class="col-md-12" style="display: flex;flex-direction:row;justify-content:space-around;">
                        <input class="cardcrediinput col-md-4" type="text" id="sonKullanmaTarihi" placeholder="MM/YY" maxlength="5" oninput="formatSonKullanmaTarihi()">
                        <input class="cardcrediinput col-md-4" placeholder="123" type="text" maxlength="3">
                    </div>
                    <div style="margin-top:50px;display: flex;flex-direction:row;justify-content:space-around;">
                        <button class="kartekle col-md-3">kart ekle</button>
                        <button class="kartekle col-md-3">iptal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Tüm kart kaplarına erişin
    const kartKapsuller = document.querySelectorAll('.kart-kapsul');

    // Her kartı dinleyin
    kartKapsuller.forEach(function(kartKapsul) {
        // Kartın içindeki ön yüz ve arkayı seçin
        const kartOnYuz = kartKapsul.querySelector('.cardön');
        const kartArka = kartKapsul.querySelector('.cardarka');

        // Kartın üzerine gelindiğinde
        kartKapsul.addEventListener('mouseover', function() {
            // Kartın ön yüzünü gizleyin
            kartOnYuz.style.visibility = 'hidden';
            // Kartın arkasını görünür yapın
            kartArka.style.visibility = 'visible';
        });

        // Kartın üzerinden çekildiğinde
        kartKapsul.addEventListener('mouseout', function() {
            // Kartın ön yüzünü görünür yapın
            kartOnYuz.style.visibility = 'visible';
            // Kartın arkasını gizleyin
            kartArka.style.visibility = 'hidden';
        });
    }); // Modal açma düğmesini ve modalı seçin
    var modalAcBtn = document.getElementById("cardeklebuton");
    var modal = document.getElementById("cardeklemodal");

    // Modal kapatma düğmesini seçin
    var modalKapat = document.getElementById("modalKapat");

    // Ekle düğmesine tıklanınca modalı görünür yap
    modalAcBtn.onclick = function() {
        var modal = document.getElementById("cardeklemodal");
        modal.style.display = "block";
    }

    // Modal kapatma düğmesine tıklanınca modalı gizle
    modalKapat.onclick = function() {
        modal.style.display = "none";
    }

    // Modal dışına tıklanınca modalı kapatma olayını engelle
    modal.onclick = function(event) {
        if (event.target == modal) {
            event.stopPropagation(); // Olayın yayılmasını engelle
        }
    }

    // Sayfa dışına tıklanınca modalı gizle
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function ayirKartNumarasi() {
        // Kullanıcının girdiği metni alın
        var girilenMetin = document.getElementById("kartNumarasi").value;

        // Girilen metindeki boşlukları ve diğer gereksiz karakterleri kaldırın
        var temizMetin = girilenMetin.replace(/[^\d]/g, "");

        // Girilen metni 4 rakam arasında boşlukla ayırın
        var ayirilmisMetin = temizMetin.replace(/(\d{4})(?=\d)/g, "$1 ");

        // Sonucu inputun içine yazdırın
        document.getElementById("kartNumarasi").value = ayirilmisMetin;
    }

    function formatSonKullanmaTarihi() {
        // Kullanıcının girdiği metni alın
        var girilenMetin = document.getElementById("sonKullanmaTarihi").value;

        // Girilen metindeki boşlukları ve diğer gereksiz karakterleri kaldırın
        var temizMetin = girilenMetin.replace(/[^\d]/g, "");

        // Son kullanma tarihiyi MM/YY biçiminde biçimlendirin
        if (temizMetin.length >= 2) {
            var mm = temizMetin.slice(0, 2);
            var yy = temizMetin.slice(2, 4);
            var formatliTarih = mm + "/" + yy;
            document.getElementById("sonKullanmaTarihi").value = formatliTarih;
        } else {
            document.getElementById("sonKullanmaTarihi").value = temizMetin;
        }
    }
</script>

<div class="entarka mobilmargintop100">
    <div class="hollyent">
        <img class="mobilentlogo" src="assets/images/yesil 6.png" alt="">
    </div>
</div>