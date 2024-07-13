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

// Chart.js

const topBorderPlugin = {
    id: 'topBorderPlugin',
    afterDatasetsDraw: function(chart) {
        const ctx = chart.ctx;
        chart.data.datasets.forEach((dataset, i) => {
            const meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach((element, index) => {
                    const { x, y, width, height } = element;

                    ctx.save();
                    ctx.strokeStyle = dataset.borderColor[index];
                    ctx.lineWidth = 6;

                    ctx.clearRect(x - width / 2, y, width, height);

                    // Draw the top border
                    ctx.beginPath();
                    ctx.moveTo(x - width / 2, y);
                    ctx.lineTo(x + width / 2, y);
                    ctx.stroke();

                    ctx.restore();
                });
            }
        });
    }
};


const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['12', '19', '8', '5', '6'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 8, 5, 6],
            backgroundColor: [
                'rgba(17, 215, 105, 0.2)',
                'rgba(48, 138, 205, 0.2)',
                'rgba(218, 131, 0, 0.2)',
                'rgba(28, 255, 241, 0.2)',
                'rgba(255, 231, 0, 0.2)',
            ],
            borderColor: [
                'rgba(17, 215, 105, 1)',
                'rgba(48, 138, 205, 1)',
                'rgba(218, 131, 0, 1)',
                'rgba(28, 255, 241, 1)',
                'rgba(255, 231, 0, 1)',
            ]
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    display: false
                },
                ticks: {
                    display: false 
                }
            },
            x: {
                grid: {
                    // display: false
                }
            }
        },
        plugins: {
            legend: {
                // display: false 
            }
        }
    },
    plugins: [topBorderPlugin]
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
    $('#login-form').on('submit', function(e) {
        e.preventDefault();

        var email = $('.login-email').val();
        var password = $('.login-password').val();
    
        var _token = $('input[name="_token"]').val();
    
        $.ajax({
            url: '/dang-nhap',
            method: 'POST',
            data:{email:email, password:password, _token:_token},
            success: function(data) {
    
                if(data == 'success') {
                    location.reload()
                }else{
                    console.log(data.message);
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'Đăng nhập thất bại!';
                alert(errorMessage);
            }
        });
    });


    $('#register-form').on('submit', function(e) {
        e.preventDefault();

        var formData = {
            email: $('.register-email').val(),
            password1: $('.register-password').val(),
            password2: $('.confirm-password').val(),
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
                alert(errorMessage);
            }
        });
    });


});


