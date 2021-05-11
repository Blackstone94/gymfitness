jQuery(document).ready($ => {
    $('.site-header .menu-principal ul').slicknav({
        label: '',
        appendTo: '.site-header'
    });
    if ($('.listado-testimoniales').length > 0) {
        $('.listado-testimoniales').bxSlider({
            auto: true,
            mode: 'fade',
            controls: false
        });
    }
    //agregar posicion fija al header al hacer scroll
    window.onscroll = () => {
        const scroll = window.scrollY;
        const headerNav = document.querySelector('.barra-navegacion');
        const bodyNav = document.querySelector('body');
        //si la cantidad de scrill es mayor a,agregar clase

        if (scroll > 0) {
            headerNav.classList.add('fixed-top');
            bodyNav.classList.add('ft-activo');
        } else {
            headerNav.classList.remove('fixed-top');
            bodyNav.classList.remove('ft-activo');
        }
    }

    ///mapa
    const lat = document.querySelector('#lat').value,
        lng = document.querySelector('#lng').value,
        direccion = document.querySelector('#direccion').value;
    if (lat && lng && direccion) {
        var map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
            .bindPopup(direccion)
            .openPopup();
    }


});