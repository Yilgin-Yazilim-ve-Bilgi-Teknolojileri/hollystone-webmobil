<div style="position:relative;z-index:0; background-color: #fff;" class="col-md-12">
    <div style="display:flex;flex-direction:column;justify-content:center;margin-bottom:100px;">
        <div class="iadebaslik">
            <span class="iadebaslikfont">ÜRÜNÜ DEĞERLENDİR</span>
        </div>
        <div style=" display:flex;align-items:center;justify-content:center;" class="col-md-12 mt-5">
            <div class="degerlendircerceve col-md-11">
                <div style="padding: 10px;">
                    <span class="iadeyazifont">Mobil uygulamadan işlemlerini gerçekleştirerek holly puan kazanma fırsatı yakala!</span>
                </div>
                <div style="display:flex;align-items:center;padding:10px;" class="mt-2">
                    <span class="iadeyazifont">Ürünü değerlendir</span>
                    <img class="mobilhollypuanlogo" src="assets/images/holypuanlogo.png" alt="">
                    <span class="iadepuankazan ml-2">10</span>
                    <span class="iadeyazifont">kazan!</span>
                </div>
                <div style="display: flex;justify-content:flex-end;">
                    <img class="mobilogo" src="assets/images/Hollypuanyesil.png" alt="">
                </div>
            </div>
        </div>
        <div style=" display:flex;align-items:center;justify-content:center;" class="col-md-12 mt-5">
            <div class="iademetincerceve col-md-11">
                <div style="display: flex;flex-direction:row;" class="col-md-12">
                    <div style="display: flex;flex-direction:row;">
                        <div class="col-md-3 col-4">
                            <div class="cardkons2">
                                <div class="hollyshopsatir">
                                    <div class="indirimbox">
                                        <span>%10</span>
                                    </div>
                                    <div class="hollyshopcard">
                                        <div>
                                            <img class="imgcardkonser22" src="assets/images/mad-girls-yesil-baskili-tisort-mg1197-6a27a3 1.png" alt="">
                                            <div class="">
                                                <span class="hollyshopcardyazi">
                                                    Yeşil Holly Tişört
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ürünbaslikgenislik mt-5 ml-5">
                                <span class="sepetürünbaslikspan">
                                    Holly Stone Kadın Yeşil The 1997 Baskılı Oversize T-shirt mdgnthe1997
                                </span>
                                <div class="mt-5" style="display: flex;">
                                    <span class="detayadetstyle col-8 col-md-2">beden:</span>
                                    <span class="detayadetstyle bold">L</span>
                                </div>
                            </div>
                            <div class="webdegerlendiryildiz">
                                <div class="star-group">
                                    <input type="radio" class="star" id="one" name="star_rating">
                                    <input type="radio" class="star" id="two" name="star_rating">
                                    <input type="radio" class="star" id="three" name="star_rating">
                                    <input type="radio" class="star" id="four" name="star_rating">
                                    <input type="radio" class="star" id="five" name="star_rating" checked>
                                </div>
                                <div style="display: flex;justify-content:center;" class="degerlendirtextarea col-md-12">
                                    <textarea class="degerlendirtextareafont col-md-12" placeholder="Ürünle ilgili memnuniyetini yazabilirsin"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mobildegerlendiryildiz">
                    <div class="star-group">
                        <input type="radio" class="star" id="one" name="star_rating">
                        <input type="radio" class="star" id="two" name="star_rating">
                        <input type="radio" class="star" id="three" name="star_rating">
                        <input type="radio" class="star" id="four" name="star_rating">
                        <input type="radio" class="star" id="five" name="star_rating" checked>
                    </div>
                    <div style="display: flex;justify-content:center;" class="degerlendirtextarea col-md-12">
                        <textarea class="degerlendirtextareafont col-md-12" placeholder="Ürünle ilgili memnuniyetini yazabilirsin"></textarea>
                    </div>
                </div>



                <div style="display: flex;align-items:center;" class="col-md-12 mt-5">
                    <div class="custom-checkbox">
                        <input type="checkbox" id="myCheckbox">
                        <label for="myCheckbox"></label>
                    </div>
                    <div>
                        <span class="yorumdetaycheckbox">Yorum detaylarımın site genelinde kullanılmasına izin veriyorum. <a href="#">Aydınlatma metni</a> için tıklayınız.</span>
                    </div>
                </div>
                <div style="display: flex;align-items:center;" class="col-md-12">
                    <div class="custom-checkbox2">
                        <input type="checkbox" id="myCheckbox">
                        <label for="myCheckbox"></label>
                    </div>
                    <div>
                        <span class="yorumdetaycheckbox">Değerlendirme yapmak için <a href="#">Kullanıcı Sözleşmesi’ni</a> kabul ediyorum.</span>
                    </div>
                </div>
                <div class="frow24">
                    <button id="acModalButton" class="degerlendirbuton col-md-3">
                        <span class="degerlendirspan">Değerlendir</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div style="margin-bottom:10px;" class="hollyent">
        <img class="mobilentlogo" style="position: relative;z-index:1;" src="assets/images/HollyShop Gold.png" alt="">
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // ödemecheckbox elementini seçin
        var ödemeCheckbox = document.querySelector(".ödemecheckbox");
        // ödemecheckbox2 elementini seçin
        var ödemeCheckbox2 = ödemeCheckbox.querySelector(".ödemecheckbox2");

        // ödemecheckbox tıklanığında
        ödemeCheckbox.addEventListener("click", function() {
            // ödemecheckbox2'nin display özelliğini kontrol edin
            if (window.getComputedStyle(ödemeCheckbox2).getPropertyValue("display") === "none") {
                // ödemecheckbox2'yi görünür yapın
                ödemeCheckbox2.style.display = "block";
                ödemeCheckbox2.style.opacity = "1"; // Opacity'yi 1'e ayarlayın
            } else {
                // ödemecheckbox2'yi gizleyin
                ödemeCheckbox2.style.display = "none";
                ödemeCheckbox2.style.opacity = "0"; // Opacity'yi sıfıra ayarlayın
            }
        });
    });
</script>