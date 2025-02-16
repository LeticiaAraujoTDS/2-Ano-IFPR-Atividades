document.addEventListener('mousemove', function(e) {
    const x = e.clientX;
    const y = e.clientY;

    const background = document.querySelector('.bg');

    const intensity = 10;
    const offsetX = (x / window.innerWidth - 0.5) * intensity; 
    const offsetY = (y / window.innerHeight - 0.5) * intensity;

    background.style.backgroundPosition = `calc(50% + ${offsetX}px) calc(50% + ${offsetY}px)`;
});
