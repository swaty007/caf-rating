$(document).ready( function () {
    $('#table_pm').DataTable({
        "searching": false,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "pagingType": "numbers",
    });
} );

function initSlider(){
    $('#pari_slide').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 700,
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                // breakpoint: 992,
                // settings: "unslick"
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });
}

initSlider();
$(window).resize(function(){
    if (window.innerWidth <= 992) {
        // initSlider();
    }
});


let elem = document.getElementById('term-btn'),
    elem2 = document.getElementById('terms-wrap'),
    btn_close = document.getElementById('btn_close');


elem.addEventListener('click', switch_term);
btn_close.addEventListener('click', switch_term);
function switch_term() {
    let name = 'active';
    let arr = elem2.className.split(" ");
    let i = arr.indexOf(name);
    if (i >= 0) {
        arr.splice(i, 1);
    } else {
        arr.push(name);
    }
    elem2.className = arr.join(" ");
}
