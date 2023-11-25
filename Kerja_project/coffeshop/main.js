
let header = document.querySelector('header');

window.addEventListener('scroll' , () => {
        header.classList.toggle('shadow', window.scrollY > 0);
});

// jQuery code to handle navbar link clicks
$(document).ready(function () {
    $('.nav-link').click(function () {
        // Remove 'active' class from all navbar links
        $('.nav-link').removeClass('active');
        
        // Add 'active' class to the clicked navbar link
        $(this).addClass('active');
    });
});

// Optional: Smooth scroll to the section when a navbar link is clicked
$('.nav-link').on('click', function (e) {
    e.preventDefault();
    var targetId = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(targetId).offset().top
    }, 1000);
});


