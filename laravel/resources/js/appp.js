import './bootstrap';
import 'flowbite';
import 'tw-elements';

window.onscroll = function() {
    const header = document.querySelector('header');
    const fixNav = header.offsetTop;

    if (window.pageYOffset > fixNav) {
        header.classList.add('navbar-fixed')
    } else {
        header.classList.remove('navbar-fixed')
    }
}

pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "/image/panorama.jpg",
    "autoLoad": true,
    "autoRotate": -2,
});

pannellum.viewer('panoramaa', {
    "type": "equirectangular",
    "panorama": "/image/panoramaa.jpg",
    "autoLoad": true,
    "autoRotate": -2,
});

pannellum.viewer('panoramaaa', {
    "type": "equirectangular",
    "panorama": "/image/panoramaaa.jpg",
    "autoLoad": true,
    "autoRotate": -2,
});