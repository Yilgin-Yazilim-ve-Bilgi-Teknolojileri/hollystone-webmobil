<div class="container">
    <div class="aboutusbaslik">
        <div class="mobilmt10">
            <span>KAYITLI ADRESLERİM</span>
        </div>
    </div>
    <div class=" flexrow col-md-12">
        <div class="adreslerimfont adreslerim col-md-12">
            <div class="adreslerim1 col-md-10">
                <div class="adresbilgibaslik">
                    EV ADRESİM
                </div>
                <div class="adresbilgiicerik">
                    Ihlamur sokak kapı no:1 Şahinbey/Gaziantep
                </div>
            </div>
            <div class="custom-checkbox adreslerimcheck">
                <input type="checkbox" id="myCheckbox">
                <label for="myCheckbox"></label>
            </div>
        </div>
        <div class="adreslerim1buton">
            <div>
                <button style="border: none;background-color:transparent;">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
            </div>
            <div style="margin-top: 20px;">
                <button style="border: none;background-color:transparent;">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>
    </div>

    <div class=" flexrow col-md-12">
        <div class="adreslerimfont adreslerim col-md-12">
            <div class="adreslerim1 col-md-10">
                <div class="adresbilgibaslik">
                    EV ADRESİM
                </div>
                <div class="adresbilgiicerik">
                    Ihlamur sokak kapı no:1 Şahinbey/Gaziantep
                </div>
            </div>
            <div class="custom-checkbox2 adreslerimcheck">
                <input type="checkbox" id="myCheckbox">
                <label for="myCheckbox"></label>
            </div>
        </div>
        <div class="adreslerim1buton">
            <div>
                <button style="border: none;background-color:transparent;">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
            </div>
            <div style="margin-top: 20px;">
                <button style="border: none;background-color:transparent;">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mobilbutonlarrow col-md-12">
        <button class="mobildüzenlebuton col-5">Düzenle</button>

        <button class="mobilsilbuton col-5">Sil</button>
    </div>
    <div class="mobilmargintop50" style="display: flex;justify-content:center;align-items:center;">
        <button class="eklebuton marginb150 mobileklebuton" id="adresmodalac">Ekle</button>
    </div>
    <div class="modal" id="adreseklemodal">
        <span class="adreseklemodalkapat"></span>
        <div class="adresklemodal-icerik">
            <div style="display: flex;flex-direction:column;justify-content:center;align-items:center;">
                <div class="scrollable-content col-12 col-md-10">
                    <div class="baslikadres col-md-12">
                        <span class="denemefont col-md-12">Adres Bilgisi Gir</span>
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="adresadi col-md-12" type="text" placeholder="adres adı">
                    </div>
                    <div>
                        <select class="adresadi col-md-12 selectoku">
                            <option value="sehirsec" selected>şehir seç</option>
                            <option value="sehir1">sehir1</option>
                            <option value="sehir2">sehir2</option>
                            <option value="sehir3">sehir3</option>
                            <option value="sehir4">sehir4</option>
                            <option value="sehir5">sehir5</option>
                        </select>
                    </div>

                    <div>
                        <select class="adresadi col-md-12 selectoku">
                            <option value="ilcesec" selected>ilçe seç</option>
                            <option value="ilçe1">ilçe1</option>
                            <option value="ilçe2">ilçe2</option>
                            <option value="ilçe3">ilçe3</option>
                            <option value="ilçe4">ilçe4</option>
                            <option value="ilçe5">ilçe5</option>
                        </select>
                    </div>
                    <div>
                        <select class="adresadi col-md-12 selectoku">
                            <option value="mahallesec" selected>mahalle seç</option>
                            <option value="mahalle1">mahalle1</option>
                            <option value="mahalle2">mahalle2</option>
                            <option value="mahalle3">mahalle3</option>
                            <option value="mahalle4">mahalle4</option>
                            <option value="mahalle5">mahalle5</option>
                        </select>
                    </div>

                    <div style="margin-top: 10px;">
                        <input class="adresadi col-md-12" type="number" placeholder="posta kodu">
                    </div>
                    <div style="margin-top: 20px;">
                        <textarea class="frow12input col-md-12" name="franchisesahipligi" placeholder="Açık Adres "></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top:50px;display: flex;flex-direction:row;justify-content:space-around;">
                        <button class="adreseklebuton adresbutonrenkmobil col-8 adresbutonrenk col-md-5">adres ekle</button>
                        <button id="iptalButon" class="adreseklebuton col-4 adresbutonrenkmobil adresbutonrenk col-md-5">iptal</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<div class="entarka mobilmargintop100">
    <div class="hollyent">
        <img class="mobilentlogo" src="assets/images/yesil 6.png" alt="">
    </div>
</div>
<script>
    // Get the modal
    var adreseklemodal = document.getElementById("adreseklemodal");
    // Get the button that opens the modal
    var adresmodalac = document.getElementById("adresmodalac");

    // When the user clicks the button, open the modal 
    adresmodalac.onclick = function() {
        adreseklemodal.style.display = "block";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == adreseklemodal) {
            adreseklemodal.style.display = "none";
        }
    }
</script>