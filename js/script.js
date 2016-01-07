$(document).ready(function () {

    document.querySelector("#toggle_cont")
        .addEventListener("click", function () {
            if (toggle.classList.toggle("active")) {
                document.getElementById('drop').style.top = "0vh";
            } else {
                document.getElementById('drop').style.top = "-100vh";
            }
        });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 650) {
            $('#desk_nav').css('opacity', '0.3');
        } else {
            $('#desk_nav').css('opacity', '1.0');
            
            $('#desk_nav').on('mouseenter', function () {
            $(this).css('opacity', '1.0');
        });
            
        $('#desk_nav').on('mouseleave', function () {
            $(this).css('opacity', '0.3');
        });
            
        }
        
    });
});