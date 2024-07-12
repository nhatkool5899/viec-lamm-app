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
  $('.modal-content').addClass('show');
})
$('.redirect-signup').click(function(){
  $('.modal-register').addClass('show');
  $('.modal-content').addClass('show');
})

$('.modal-close').click(function(){
  $('.modal-login').removeClass('show');
  $('.modal-register').removeClass('show');
  $('.modal-content').removeClass('show');
})

// Signup account

// Login user

$('.confirm-login').click(function(e){
  e.preventDefault();
  var phone = $('.input-phone').val();
  var password = $('.input-password').val();

  if(phone == ""){
      return $('.box-alert').append(`
          <div class="alert alert-error" onclick="removeAlert(this)">
              <div class="alert-content">
                  <span class="icon"><i class="bx bx-x"></i></span>
                  <div class="alert-text">
                      <h5>Error</h5>
                      <span>Số điện thoại không hợp lệ</span>
                  </div>
              </div>
              <div class="alert-progress-bar"></div>
          </div>
      `);
  }
  if(password == ""){
      return $('.box-alert').append(`
          <div class="alert alert-error" onclick="removeAlert(this)">
              <div class="alert-content">
                  <span class="icon"><i class="bx bx-x"></i></span>
                  <div class="alert-text">
                      <h5>Error</h5>
                      <span>Mật khẩu không hợp lệ</span>
                  </div>
              </div>
              <div class="alert-progress-bar"></div>
          </div>
      `);
  }

  var _token = $('input[name="_token"]').val();

  $.ajax({
      url: '/auth/signin',
      method: 'POST',
      data:{phone:phone,password:password,_token:_token},
      success:function(data){
          if(data == "success"){
              location.reload();
          }else{
              return $('.box-alert').append(`
                  <div class="alert alert-error" onclick="removeAlert(this)">
                      <div class="alert-content">
                          <span class="icon"><i class="bx bx-x"></i></span>
                          <div class="alert-text">
                              <h5>Error</h5>
                              <span>` + data + `</span>
                          </div>
                      </div>
                      <div class="alert-progress-bar"></div>
                  </div>
              `);
          }
      },
      error: function(xhr, status, error) {
        // Xử lý lỗi
        var errorMessage = xhr.responseText;
        var message = JSON.parse(errorMessage);

        return $('.box-alert').append(`
                  <div class="alert alert-error" onclick="removeAlert(this)">
                      <div class="alert-content">
                          <span class="icon"><i class="bx bx-x"></i></span>
                          <div class="alert-text">
                              <h5>Thông tin không hợp lệ</h5>
                              <span>` + message.message + `</span>
                          </div>
                      </div>
                      <div class="alert-progress-bar"></div>
                  </div>
              `);
      }
  });
})

$('.confirm-register').click(function(e){
  e.preventDefault();
    var name = $('.register-name').val();
    var phone = $('.register-phone').val();
    var email = $('.register-email').val();
    var password = $('.register-password').val();

    if(name == ""){
        return $('.box-alert').append(`
            <div class="alert alert-error" onclick="removeAlert(this)">
                <div class="alert-content">
                    <span class="icon"><i class="bx bx-x"></i></span>
                    <div class="alert-text">
                        <h5>Error</h5>
                        <span>Tên không thể trống</span>
                    </div>
                </div>
                <div class="alert-progress-bar"></div>
            </div>
        `);
    }
    if(phone == "" || isPhoneValid(phone) == false){
        return $('.box-alert').append(`
            <div class="alert alert-error" onclick="removeAlert(this)">
                <div class="alert-content">
                    <span class="icon"><i class="bx bx-x"></i></span>
                    <div class="alert-text">
                        <h5>Error</h5>
                        <span>Số điện thoại không hợp lệ</span>
                    </div>
                </div>
                <div class="alert-progress-bar"></div>
            </div>
        `);
    }

    if(email == "" || isEmailValid(email) == false){
        return $('.box-alert').append(`
            <div class="alert alert-error" onclick="removeAlert(this)">
                <div class="alert-content">
                    <span class="icon"><i class="bx bx-x"></i></span>
                    <div class="alert-text">
                        <h5>Error</h5>
                        <span>Email không hợp lệ</span>
                    </div>
                </div>
                <div class="alert-progress-bar"></div>
            </div>
        `);
    }
    if(password == ""){
        return $('.box-alert').append(`
            <div class="alert alert-error" onclick="removeAlert(this)">
                <div class="alert-content">
                    <span class="icon"><i class="bx bx-x"></i></span>
                    <div class="alert-text">
                        <h5>Error</h5>
                        <span>Mật khẩu không hợp lệ</span>
                    </div>
                </div>
                <div class="alert-progress-bar"></div>
            </div>
        `);
    }

    if(isPasswordValid(password) == false){
        return $('.box-alert').append(`
            <div class="alert alert-error" onclick="removeAlert(this)">
                <div class="alert-content">
                    <span class="icon"><i class="bx bx-x"></i></span>
                    <div class="alert-text">
                        <h5>Error</h5>
                        <span>Ít nhất 8 kí tự bao gồm: hoa, thường, số</span>
                    </div>
                </div>
                <div class="alert-progress-bar"></div>
            </div>
        `);
    }

    var _token = $('input[name="_token"]').val();

    $.ajax({
        url: '/auth/register',
        method: 'POST',
        data:{name:name,phone:phone,email:email,password:password,_token:_token},
        success:function(data){
            if(data == "success"){
                location.reload();
            }else{
                return $('.box-alert').append(`
                    <div class="alert alert-error" onclick="removeAlert(this)">
                        <div class="alert-content">
                            <span class="icon"><i class="bx bx-x"></i></span>
                            <div class="alert-text">
                                <h5>Thông tin không hợp lệ</h5>
                                <span>` + data + `</span>
                            </div>
                        </div>
                        <div class="alert-progress-bar"></div>
                    </div>
                `);
            }
        },
        error: function(xhr, status, error) {
          // Xử lý lỗi
          var errorMessage = xhr.responseText;
          var message = JSON.parse(errorMessage);

          return $('.box-alert').append(`
                    <div class="alert alert-error" onclick="removeAlert(this)">
                        <div class="alert-content">
                            <span class="icon"><i class="bx bx-x"></i></span>
                            <div class="alert-text">
                                <h5>Thông tin không hợp lệ</h5>
                                <span>` + message.message + `</span>
                            </div>
                        </div>
                        <div class="alert-progress-bar"></div>
                    </div>
                `);
        }
    });
})

function isPhoneValid(phone){
  var phoneRegex = /^\d{10}$/;

  return phoneRegex.test(phone);
}

function isEmailValid(email){
  var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

  return emailRegex.test(email);
}

function isPasswordValid(password){
  var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+{}\[\]:;<>,.?~\\-]{8,}$/;

  return passwordRegex.test(password);
}

// Alert message

function removeAlert(element){
  $(element).fadeOut();

}


