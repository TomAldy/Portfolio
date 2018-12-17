$('body').prepend(`<div class="modal-container">
                    <div class="modal-container__inner">
                        <div class="modal-container__box">
                            <div class="modal-container__header">
                                <span class="modal-container__title"></span>
                                <span class="modal-container__controls pull-right">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                            <div class="modal-container__body">
                                <div class="modal-container__information">
                                    <div class="modal-container__design"></div>
                                    <div class="modal-container__description"></div>
                                </div>
                                <div class="modal-container__statistics">
                                    <div class="modal-container__rating">
                                        <h1>Difficulty</h1>
                                        <ul class="modal-container__stars"></ul>
                                    </div>
                                    <div class="modal-container__heading">
                                        <h1>Technologies</h1>
                                    </div>
                                    <ul class="modal-container__technologies">
                                    </ul>
                                    <div class="modal-container__link"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="back-to-top" class="scrolling-button">
                    <i class="fa fa-angle-double-up fa-lg"></i>
                </div>`);

$('.modal-container__inner').on('click', function() {
    $('.modal-container').fadeOut(400);
    window.setTimeout(function() {
        $('.modal-container__technologies').empty();
        $('.modal-container__stars').empty();
    }, 400);
});

$(".portfolio-navigation__item").click(function(e) {
    $('html, body').animate({
        scrollTop: $($(this).children('a').attr('href')).offset().top
    }, 2000);
    e.preventDefault();
});

if ($('#back-to-top').length) {
    var scrollTrigger = 100,
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

function modal(name, description, image, rating, url, type, languages) {
    if ($('.modal-container').css('display') == 'none') {
        $('.modal-container').fadeIn(400).css('display','table');
        $('.modal-container__title').html(name);
        $('.modal-container__design').html('<img src="'+image+'" alt="'+name+'" class="modal-container__image">');
        $('.modal-container__description').html(description);
        $.each(languages, function(index, value) {
            $('.modal-container__technologies').append(`<li class='modal-container__language modal-container__language--`+value+`'>`+value+`</li>`);
        });
        var n = 0;
        for (var i = 0; i < rating; i++) {
            n++;
            if(n < 5) {
                $('.modal-container__stars').append(`<li class="modal-container__star">
                        <i class="fa fa-star"></i>
                    </li>`);
            }
        }
        for (var a = n; a < 5; a++) {
            $('.modal-container__stars').append(`<li class="modal-container__star">
                        <i class="fa fa-star-o"></i>
                    </li>`);
        }
        $('.modal-container__link').html(`<a href="`+url+`" target="_blank" rel="noopener noreferrer">visit `+type+`</a>`);
    }else{
        $('.modal-container').fadeOut(400);
    }
}

$('.modal-container__controls').on('click', function() {
    $('.modal-container').fadeOut(400);
    window.setTimeout(function() {
        $('.modal-container__technologies').empty();
        $('.modal-container__stars').empty();
    }, 400);
});

$('.portfolio-collection').prepend(`
                                    <div class="portfolio-collection__video">
                                        <video class="portfolio-collection__media" autoplay loop>
                                          <source src="vid/portfolio-collection.mp4" type="video/mp4">
                                          <source src="vid/portfolio-collection.ogg" type="video/ogg">
                                          <source src="vid/portfolio-collection.webm" type="video/webm">
                                        Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    `);

$('.portfolio-message').prepend(`
                                    <div class="portfolio-message__video">
                                        <video class="portfolio-message__media" autoplay loop>
                                          <source src="vid/portfolio-message.mp4" type="video/mp4">
                                          <source src="vid/portfolio-message.ogg" type="video/ogg">
                                          <source src="vid/portfolio-message.webm" type="video/webm">
                                        Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    `);


$('.portfolio-collection__link').on('click', function(e) {
    if (window.matchMedia("(min-width: 860px)").matches) {
        e.preventDefault();
        url = "php/projects.php?id="+$(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: url,
            success: function(data) {
                modal(data.name, data.description, data.image, data.rating, data.url, data.type, data.languages);
            }
        })
    }else{
        window.location.replace("project.php?id="+$(this).attr('data-id'));
    }
});

$('.portfolio-message__details-form').on('submit', function(e) {
    e.preventDefault();
    data = $('.portfolio-message__details-form').serialize();
    $.ajax({
        type: 'POST',
        url: 'php/message.php',
        data: data,
        success: function(response) {
            if (response == 0001) {
                $('#form-result').html(`<div class="portfolio-message__result portfolio-message__result--error">
                                        <i class="fa fa-exclamation-triangle"></i> - You left a field blank.
                                        </div>`);
            }else if(response == 0002) {
                $('#form-result').html(`<div class="portfolio-message__result portfolio-message__result--error">
                                        <i class="fa fa-exclamation-triangle"></i> - Invalid Email Address.
                                        </div>`);
            }else if(response == 0003) {
                $('#form-result').html(`<div class="portfolio-message__result portfolio-message__result--success">
                                        <i class="fa fa-check"></i> - Message sent successfully.
                                        </div>`);
            }else if(response == 0004) {
                $('#form-result').html(`<div class="portfolio-message__result portfolio-message__result--error">
                                        <i class="fa fa-exclamation-triangle"></i> - ReCaptcha Authentication Failed.
                                        </div>`);
            }
        }
    });
});



