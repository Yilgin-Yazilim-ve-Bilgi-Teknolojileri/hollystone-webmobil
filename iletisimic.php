<div class="franchisebg">
    <div id="kaydirma-container">
        <div class="container">
            <div class="frow1 kaydirma-input">
                <span style="margin-top:100px;padding: 10px;" class="frow1span">İLETİŞİM</span>
            </div>
            <div class="franchiseinputdiv kaydirma-input col-md-12 col-12">
                <input style="padding: 10px;" class="franchiseinputfont col-12" type="text" placeholder="Adınız Soyadınız">
            </div>


            <div class="franchiseinputdiv kaydirma-input col-md-12 col-12">
                <input style="padding: 10px;" class="franchiseinputfont col-12" type="text" placeholder="EMail Adresiniz">
            </div>
            <div class="franchiseinputdiv kaydirma-input col-md-12 col-12">
                <div class="col-4 col-md-3">
                    <select class="franchiseinputfont  mobilnumaraok telefonalankodu col-12">
                        <option class="franchiseinputfont  col-10" value="+90">+90</option>
                    </select>
                </div>
                <div class="col-9">
                    <input style="padding: 10px;" class="franchiseinputfont col-12" type="number" placeholder="5** *** ****">
                </div>
            </div>
            <div class="franchiseinputdiv kaydirma-input col-md-12 col-12">
                <input style="padding: 10px;" class="franchiseinputfont col-12" type="text" placeholder="Konu">
            </div>
            <div class="franchiseinputdiv kaydirma-input col-md-12 col-12">
                <textarea style="padding: 10px;" class="franchiseinputfont col-12" name="franchisesahipligi" placeholder="Mesajınız."></textarea>
            </div>
            <div style="margin-bottom:250px;" class="frow24">
                <button id="showBannerButton" class="francisebutton col-5">
                    <span> Gönder</span>
                </button>

                <div id="banner" class="hiddenbanner">
                    <span class="checkmark">✓</span>İşlem başarıyla gerçekleştirildi.
                </div>
            </div>
        </div>
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