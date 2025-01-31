let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function showNextImage() {
    items[currentIndex].classList.remove('active');

    currentIndex = (currentIndex + 1) % totalItems;

    items[currentIndex].classList.add('active');

    document.querySelector('.carousel').style.transform = `translateY(-${currentIndex * 100}%)`;
}

items[0].classList.add('active');

setInterval(showNextImage, 3000);