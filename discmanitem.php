<div class="container">
    <div class="mobilbiletbg">
        <div class="hidden" style="margin-top: -50px;"></div>
        <div class="baslikkons bas1">
            <span class="bas"><strong>DISCMAN</strong></span>
        </div>
        <div>
            <span class="dismanspan1">
                <b>
                    DISCMAN 90'LAR 2000'LER TÜRKÇE POP GECESİ 8 Ağustos Holly Stone Performance Hall Antalya sahnesinde sizlerle!
                </b>
            </span>
        </div>
        <div class="dismancard">
            <div class="discmanrow">
                <div class="discmanresim">
                    <img class="discmancardresim" src="assets/images/discmanyuvarlak.png" alt="">
                </div>
                <div class="discmanaciklama marginlefteksi10">
                    <div class="dcrow1 webmargintop20 mobilmargintop5">
                        <div class="dcspan1 col-md-4 col-3">
                            <span class="bold">
                                Tarih:
                            </span>
                        </div>
                        <div class="dcspan1 col-md-6">
                            <span class="mobiltarih">
                                08 AĞUSTOS 2023
                            </span>
                        </div>
                    </div>
                    <div class="dcrow1">
                        <div class="dcspan2 col-md-4 col-3">
                            <span class="bold">
                                Kapı Açılış:
                            </span>
                        </div>
                        <div class="dcspan2 col-md-6">
                            <span>
                                20:00
                            </span>
                        </div>
                    </div>

                    <div class="dcrow1">
                        <div class="dcspan2 col-md-4 col-3">
                            <span class="bold">
                                Sahne:
                            </span>
                        </div>
                        <div class="dcspan2 col-md-6">
                            <span>
                                20:00
                            </span>
                        </div>
                    </div>
                    <div class="dcrow1">
                        <div class="dcspan2 col-md-4 col-3">
                            <span class="bold">
                                Şehir:
                            </span>
                        </div>
                        <div class="dcspan2 col-md-6">
                            <span>
                                ANTALYA
                            </span>
                        </div>
                    </div>
                    <div class="dcadres mobilmargintop20">
                        <div class="col-md-8">
                            <span>
                                Selçuk Mh. Uzunçarşı Sk. No:42
                                Muratpaşa/ ANTALYA
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dismaninput">
            <div class="selectorta">
                <div>
                    <select class="kategoriselect selectokudisman" id="biletTuru" name="biletTuru">
                        <option value="" style="display:none;">
                            <span>
                                bilet türü
                                <i class="fa-solid fa-arrow-down-wide-short" style="color: #000000;"></i>
                            </span>
                        </option>
                        <option value="standart">
                            <span>Standart</span>
                        </option>
                        <option value="standart">1+1</option>
                    </select>
                </div>
                <div>
                    <select class="kategoriselect selectokudisman" id="kategoriDisman" name="kategori">
                        <option value="" style="display:none;">
                            <span>
                                kategori
                                <i class="fa-solid fa-down-long"></i>
                            </span>
                        </option>
                        <option value="kategori1">1.Kategori</option>
                        <option value="kategori2">2.Kategori</option>
                        <option value="kategori3">3.Kategori</option>
                    </select>
                </div>
                <div class="biletfiyat">
                    <div class="col-md-4">
                        <span>
                            Fiyat
                        </span>
                    </div>
                    <div class="col-md-6">
                        <span>
                            180.00TL
                        </span>
                    </div>
                </div>
            </div>

            <div class="dismanadet">
                <div class="beyazyuvarlak">
                    <span>
                        -
                    </span>
                </div>
                <div class="adetarka col-3 col-md-1">
                    <span>
                        1
                    </span>
                </div>
                <div class="beyazyuvarlak">
                    <span class="arti">
                        +
                    </span>
                </div>
            </div>
            <div class="dismanbuton">
                <button id="showBannerButton" class="sepeteekle2 col-md-6 col-8 mb-5">
                    <span>
                        Sepete Ekle
                    </span>

                    <div id="banner" class="hiddenbanner">
                        <span class="checkmark">✓</span>Sepete Başarı İle Eklendi...
                    </div>
                </button>
                <a href="dismanödeme.php" class="mobilmargintop10">
                    <button class="sepeteekle">
                        <span>
                            hızlı öde
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="entarka">
    <div class="hollyent">
        <img class="mobilentlogo" src="assets/images/HollyTicket Yeşil.png" alt="">
    </div>
</div>
<script>
    document.getElementById('showBannerButton').addEventListener('click', function() {
        var banner = document.getElementById('banner');
        banner.style.display = 'block'; // Banner'ı görünür yap

        setTimeout(function() {
            banner.style.display = 'none'; // 5 saniye sonra banner'ı gizle
        }, 5000);
    });
</script>