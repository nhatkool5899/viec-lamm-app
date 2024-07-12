$('.select-location').customSelect({
  search: true
});

$('.select__jobs').customSelect({
  includeValue: true
});

$('.filter__select').customSelect({
  includeValue: true
});


$('.slider__banner').slick({
  dots: true,
  arrows: false,
  infinite: true,
  autoplay: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
});

$(document).on('click', '.page-link', function(event) {
    event.preventDefault();
    var url = $(this).attr('href');
    fetchJobs(url);
});

function fetchJobs(url) {
  $('#loading').css('display','flex');
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'json',
    success: function(data) {
        $('#jobs__list').html('');
        data.jobs.forEach(function(job) {
            var jobHtml = '<div class="jobs__content">' +
                '<div class="jobs__logo">' +
                '<img src="' + job.employer.logo + '" alt="job-logo">' +
                '</div>' +
                '<div class="jobs__info">' +
                '<div class="jobs__name">' + job.jobTitle + '</div>' +
                '<div class="jobs__company" title="' + job.employer.name + '">' + job.employer.name + '</div>' +
                '<div class="jobs__price">' +
                '<span>' + job.salary + '</span>' +
                '<span>' + job.level + '</span>' +
                '</div>' +
                '<div class="jobs__deadline">' +
                '<span>Hạn nộp: ' + job.expiredDay + '</span>' +
                '<span>Số lượng: ' + job.count + '</span>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#jobs__list').append(jobHtml);
        });
        $('#pagination__links').html(data.pagination);
        $('#loading').css('display', 'none');
    },
    error: function(xhr) {
        console.log(xhr.responseText);
        $('#loading').css('display', 'none');
    }
  });
}



// Sign in


// Redirect login
$('.redirect-signin').click(function(){
  $('.modal-login').addClass('show');
  $('.modal-login').find('.modal-content').addClass('show');
})
$('.redirect-signup').click(function(){
  $('.modal-register').addClass('show');
  $('.modal-register').find('.modal-content').addClass('show');
})

$('.modal-close').click(function(){
  $('.modal-login').removeClass('show');
  $('.modal-register').removeClass('show');
  $('.modal-content').removeClass('show');
})

$('.modal-login').click(function(e){
    if(e.target === e.currentTarget){
        $(this).removeClass('show');
        $(this).find('.modal-content').removeClass('show');
    }
})
$('.modal-register').click(function(e){
    if(e.target === e.currentTarget){
        $(this).removeClass('show');
        $(this).find('.modal-content').removeClass('show');
    }
})


// Signup account

$(document).ready(function() {
    $('#register-form').on('submit', function(e) {
        e.preventDefault();

        var formData = {
            email: $('.register-email').val(),
            password: $('.register-password').val(),
            confirm_password: $('.confirm-password').val(),
            name: $('.register-name').val(),
            phone: $('.register-phone').val(),
            gender: $('input[name="gender"]:checked').val(),
            birthday: $('.register-birthday').val(),
            address: $('.register-address').val(),
        };

        $.ajax({
            url: 'http://45.90.220.144:1403/api/v1/auth/register/candidate',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            success: function(response) {
                alert('ok')
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'Đăng ký thất bại!';
                $('#message').text(errorMessage).css('color', 'red').show();
            }
        });
    });
});


