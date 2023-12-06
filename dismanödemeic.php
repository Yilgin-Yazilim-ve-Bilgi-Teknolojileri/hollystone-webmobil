<div class="container">
    <div>
        <div class="hidden" style="margin-top: -50px;"></div>
        <div class="baslikkons">
            <span class="bas"><strong>DISCMAN</strong></span>
        </div>
        <div class="ödemerow1">
            <div class="örow1card">
                <img class="dismancardwitdh" src="assets/images/dismancard1.png" alt="">
            </div>
            <div class="örow1card2">
                <div class="örow1card2ic">
                    <span class="örow1cardicfont col-md-6">Ürün/Bilet adeti:</span>
                    <span style="color:#00B41C" class="örow1cardicfont col-md-4">1</span>
                </div>
                <div class="örow1card2ic">
                    <span class="örow1cardicfont col-md-6">Toplam tutar:</span>
                    <span style="color:#00B41C" class="örow1cardicfont dismanödemeyesilfont col-md-4">180 <span class="hollyshopmolly2">₺</span></span>
                </div>
            </div>
        </div>
        <div class="hidden" style="margin-top: 50px;"></div>
        <div class="ödemeinput">
            <div class="inputrow">
                <div class="warningortala">
                    <input id="input1" class="örow2input" type="text" placeholder="Adınız">
                </div>
                <div class="warningortala">
                    <input class="örow2input" type="text" placeholder="Soyadınız">
                </div>
            </div>
            <div class="inputrow">
                <div class="warningortala">
                    <input id="input1" class="örow2input" type="date" placeholder="Doğum Tarihiniz">
                </div>
                <div class="warningortala">
                    <input class="örow2input" type="text" id="tcKimlikNo" name="tcKimlikNo" maxlength="11" pattern="[0-9]{11}" placeholder="Kimlik Numaranız">
                </div>
            </div>
            <div class="inputrow">
                <div class="warningortala">
                    <input class="örow2input" type="email" id="email" name="email" placeholder="E-posta adresiniz" required>
                </div>
                <div class="warningortala">
                    <input class="örow2input1 telefonalankodu mobiltelefonalankodu" type="tel" id="ulkeKodu" name="ulkeKodu" maxlength="2" placeholder="+90" required>
                    <input class="örow2input2" type="tel" id="telefonNumarasi" name="telefonNumarasi" placeholder="5** *** ** **" pattern="[0-9]{10}" required>
                </div>
            </div>
            <div class="inputrow">
                <div class="warningortala">
                    <input id="input1" class="örow2input" type="text" placeholder="Şehir">
                </div>
                <div class="warningortala">
                    <input class="örow2input" type="number" placeholder="Posta Kodu">
                </div>
            </div>

            <div class="inputrow">
                <textarea class="örow2input3" name="" id="" placeholder="Adres"></textarea>
            </div>
        </div>
    </div>
</div>
<div class="flexroworta">
    <div class="col-2 col-md-1">
        <div class="ödemecheckbox">
            <input class="ödemecheckbox2" type="checkbox">
        </div>
    </div>
    <div class="col-6 col-md-7">
        <span><a href="">Mesafeli Satış Sözleşmesi’</a>ni ve <a href="">İptal ve İade Şartları’</a>nı okudum onaylıyorum.</span>
    </div>
    <div class="ödemerow col-md-4">
        <div class="ödememiktarclass">
            <span class="ödememiktarclas">180.00TL</span>
        </div>
        <button class="ödemebuttonclas">
            ödeme yap
        </button>
    </div>
</div>
<div class="entarka">
    <div class="hollyent">
        <img class="mobilentlogo" src="assets/images/Hollyticketyesil.png" alt="">
    </div>
</div>
<script>
    // İnputları ve warningleri bir grup içinde toplayın

    // İnputları ve ilgili uyarıları bir grup içinde toplayın
    var inputGroup = document.querySelectorAll(".örow2input");
    var warningGroup = document.querySelectorAll(".warning");

    // Dokümanın herhangi bir yerine tıklandığında
    document.addEventListener("click", function(event) {
        // Tüm inputları kontrol etmek için bir döngü kullanın
        for (var i = 0; i < inputGroup.length; i++) {
            var input = inputGroup[i];
            var warning = warningGroup[i];

            // Eğer tıklanan yer input veya ilgili warning öğesi değilse, warning'i göster
            if (event.target !== input && event.target !== warning) {
                warning.style.display = "block";
            } else {
                // Eğer tıklanan yer input veya ilgili warning öğesi ise, input boşsa warning'i gizle
                if (input.value === "") {
                    warning.style.display = "hidden";
                } else {
                    // Eğer input boş değilse, uyarıyı gösterme
                    warning.style.display = "none";
                }
            }
        }
    });
    document.getElementById('dogumTarihi').placeholder = 'Doğum Tarihi';
</script>