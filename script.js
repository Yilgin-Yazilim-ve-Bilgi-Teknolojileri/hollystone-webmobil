document.addEventListener("DOMContentLoaded", function () {
  const titles = document.querySelectorAll(".title");
  const subTitles = document.querySelectorAll(".sub-title");

  titles.forEach(function (title) {
    title.addEventListener("click", function () {
      const content = this.nextElementSibling;
      content.style.display = content.style.display === "none" ? "block" : "none";
    });
  });

  subTitles.forEach(function (subTitle) {
    subTitle.addEventListener("click", function (e) {
      e.stopPropagation();
      const content = this.nextElementSibling;
      content.style.display = content.style.display === "none" ? "block" : "none";
    });
  });
});
const openModalBtn = document.getElementById('openModalBtn');
const modalContainer = document.getElementById('modalContainer');
const closeModalBtn = document.getElementById('closeModalBtn');

openModalBtn.addEventListener('click', () => {
  modalContainer.style.display = 'block';
});

closeModalBtn.addEventListener('click', () => {
  modalContainer.style.display = 'none';
});

window.addEventListener('click', (event) => {
  if (event.target === modalContainer) {
    modalContainer.style.display = 'none';
  }
});