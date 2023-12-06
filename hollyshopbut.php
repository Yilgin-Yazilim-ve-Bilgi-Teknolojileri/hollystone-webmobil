<div class="hollyshopbuton">
    <div class="deneme1">
        <div class="deneme2">
            <ul class="nav-list1">
                <div class="margintop-20 col-md-3 col-12">
                    <li class="nav-list-item2 col-12">
                        <button id="butontümü" class="butondenemetümü col-4 col-md-6">
                            <span class="hollybutyazi">TÜMÜ</span>
                        </button>
                    </li>
                </div>
                <div class="deneme">
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">GİFT CARD</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">BARDAK</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">BİLEKLİK</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">TİŞÖRT</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">GİFT CARD</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">GİFT CARD</span>
                        </button>
                    </li>
                    <li class="nav-list-item1">
                        <button class="butondeneme">
                            <span class="hollybutyazi">GİFT CARD</span>
                        </button>
                    </li>

                </div>
            </ul>
        </div>
    </div>
</div>
<script>
    const buttons = document.querySelectorAll(".butondeneme");
    const buttonstümü = document.getElementById("butontümü");
    let prevButton = null;

    buttonstümü.addEventListener("click", () => {
        if (prevButton && prevButton !== buttonstümü) {
            prevButton.style.backgroundColor = "white";
        }
        buttonstümü.style.backgroundColor = "#D6B769"; // veya istediğiniz renk
        prevButton = buttonstümü;
    });

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            if (prevButton && prevButton !== buttonstümü) {
                prevButton.style.backgroundColor = "white";
            }
            button.style.backgroundColor = "#D6B769"; // veya istediğiniz renk
            prevButton = button;
        });
    });
</script>