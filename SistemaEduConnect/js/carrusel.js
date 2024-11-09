document.addEventListener('DOMContentLoaded', () => {
    const carousels = [
        document.getElementById('carousel1'),
        document.getElementById('carousel2'),
        document.getElementById('carousel3'),
        document.getElementById('carousel4'),
        document.getElementById('carousel5')
    ];

    carousels.forEach((carousel, index) => {
        let currentIndex = 0;

        function showNextImage() {
            currentIndex = (currentIndex + 1) % 3; // 3 imágenes por carrusel
            carousel.style.transform = `translateX(${-currentIndex * 350}px)`;
        }

        setInterval(showNextImage, 5000); // Cambia cada 5 segundos
    });
});
