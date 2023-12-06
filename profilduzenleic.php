<div class="profilbg">
    <div class="container">
        <div class="aboutusbaslik">
            <div class="mobilpaddingtop20">
                <span>PROFİLİ DÜZENLE</span>
            </div>
            <div>
                <div style="margin-top:50px;">
                    <a href="">
                        <img class="profileimg" src="assets/images/gitar-çalmaya-yeni-başlayanlara-tavsiyeler-1024x576.png" alt="">
                    </a>
                </div>
                <div class="col-md-12 mb-5">


                    <form class="hidden" id="yukleForm" action="resim_yukleme_sonucu.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="resim" id="resimInput">
                        <input type="submit" value="Yükle">
                    </form>
                    <button id="yukleButton" class="yüklebuton p-2 col-5 col-md-5">Yükle</button>
                </div>
                <div>
                    <input class="settingname col-12" type="text" placeholder="Nick Name">
                </div>

                <div>
                    <input class="settingname col-12" type="text" placeholder="Email">
                </div>

                <div>
                    <input class=" settingname mobilnumaraok settingtelefonkod telefonalankodu col-3 col-md-2" maxlength="2" type="tel" id="ulkeKodu" name="ulkeKodu" placeholder="+90" required>
                    <input class="settingname settingtelefon col-8 col-md-9" type="tel" maxlength="10" id="telefonNumarasi" name="telefonNumarasi" placeholder="5** *** ** **" pattern="[0-9]{10}" required>
                </div>
                <div>
                    <input class="settingname col-12" type="text" placeholder="yeni şifre">
                </div>

                <div>
                    <input class="settingname col-12" type="text" placeholder="yeni şifre tekrar">
                </div>
                <button style="margin-top: 20px;margin-bottom:150px;" class="güncellebuton gncellebutonradius   p-2 col-5 col-md-5">Güncelle</button>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: -150px;" class="entarka">
    <div class="hollyent">
        <img class="mobilentlogo marginleft-10" src="assets/images/yesil 6.png" alt="">
    </div>
</div>