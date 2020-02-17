// Close modal Login/ Register
$("span.close").click(function() {
  $(".login-container").toggle();
});
//Event Enter Keyup Action Button
$(".login-container").keypress(function(event) {
  var keycode = event.keyCode ? event.keyCode : event.which;
  if (keycode == "13") {
    $('button').click();
  }
});
$("a.log-form").click(function() {
  $(".login-container").toggle();
  $("a#a-tab-signup").click(function() {
    $("div#tab-login").addClass("log_display");
    $("div#tab-signup").removeClass("log_display");
    $("a#a-tab-signup").addClass("active");
    $("a#a-tab-login").removeClass("active");
  });

  $("a#a-tab-login").click(function() {
    $("div#tab-login").removeClass("log_display");
    $("div#tab-signup").addClass("log_display");
    $("a#a-tab-login").addClass("active");
    $("a#a-tab-signup").removeClass("active");
  });
});

//Section Signup Page Home
function checkEmail() {
  $("input#emailSignup").blur(function() {
    var emailSignup = $(this).val();
    $.ajax({
      url: "Log/CheckUser",
      type: "POST",
      data: { emailSignup: emailSignup },
      dataType: "text",
      success: function(data) {
        msg = "";
        if (data == "false") {
          msg = "<span style='color:green'>Bạn có thể sử dụng email này</span>";
        } else {
          msg = "<span style='color:red'>Email đã có người sử dụng</span>";
        }
        $("#errorEmail").html(msg);
      }
    });
  });
}
checkEmail();

function checkRpPass() {
  $("input#pass_rpSignup").blur(function() {
    var $this = $(this);
    var pass_rpSignup = $this.val();
    var pass_Signup = $this
      .closest("div.row")
      .find("input#passSignup")
      .val();
    if (pass_rpSignup != pass_Signup) {
      $("#errorRpPass").html(
        "<span style='color:red'>Nhập lại mật khẩu không đúng</span>"
      );
    } else {
      $("#errorRpPass").html("");
    }
  });
}
checkRpPass();

function SignupUser() {
  $("button#signup_user").click(function() {
    var $this = $(this);
    var nameSignup = $this
      .closest("div.row")
      .find("input#usernameSignup")
      .val();
    var phoneSignup = $this
      .closest("div.row")
      .find("input#phoneSignup")
      .val();
    var genderSignup = $this
      .closest("div.row")
      .find("input#genderSignup")
      .val();
    var emailSignup = $this
      .closest("div.row")
      .find("input#emailSignup")
      .val();
    var citySignup = $this
      .closest("div.row")
      .find("input#citySignup")
      .val();
    var locationSignup = $this
      .closest("div.row")
      .find("input#locationSignup")
      .val();
    var addSignup = $this
      .closest("div.row")
      .find("input#addSignup")
      .val();
    var dateSignup = $this
      .closest("div.row")
      .find("input#dateSignup")
      .val();
    var passSignup = $this
      .closest("div.row")
      .find("input#passSignup")
      .val();
    var passrpSignup = $this
      .closest("div.row")
      .find("input#pass_rpSignup")
      .val();

    if (
      nameSignup == "" ||
      emailSignup == "" ||
      passSignup == "" ||
      passrpSignup == ""
    ) {
      $("#messerrorSignup").html(
        "<span style='color:red'>Vui lòng điền đầy đủ thông tin</span>"
      );
    } else if (passSignup != passrpSignup) {
      $("#messerrorSignup").html(
        "<span style='color:red'>Nhập lại mật khẩu không đúng</span>"
      );
    } else {
      $.ajax({
        url: "Log/SignupUser",
        type: "POST",
        data: {
          nameSignup: nameSignup,
          phoneSignup: phoneSignup,
          genderSignup: genderSignup,
          emailSignup: emailSignup,
          citySignup: citySignup,
          locationSignup: locationSignup,
          addSignup: addSignup,
          dateSignup: dateSignup,
          passSignup: passSignup
        },
        dataType: "text",
        success: function(data) {
          if (data == "true") {
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Your work has been saved",
              showConfirmButton: false,
              timer: 1500
            });
            location.reload();
          } else {
            $("#messerrorSignup").html(
              "<span style='color:red'>Đăng kí không thành công</span>"
            );
          }
        }
      });
    }
  });
}
SignupUser();

//End Section Signup page Home

//Start Section Login page Home
$("button.btnLogin").click(function() {
  var $this = $(this);
  var emailLogin = $this
    .closest("div")
    .find("input#emailLogin")
    .val();
  var passLogin = $this
    .closest("div")
    .find("input#passLogin")
    .val();
  $.ajax({
    url: "Log/CheckLogin",
    type: "POST",
    data: { emailLogin: emailLogin, passLogin: passLogin },
    dataType: "text",
    success: function(data) {
      msg = "";
      if (data == "false") {
        msg =
          "<span style='color:red'>Tài khoản hoặc mật khẩu không đúng</span>";
        $("#errorLogin").html(msg);
      } else {
        location.reload();
      }
    }
  });
});
//End Section Login page Home

//Dropdown
$("div.dropdown").click(function() {
  var $this = $(this);
  $this.addClass("open");
  $this
    .closest("div")
    .find("div.dropdown-menu")
    .toggle();
});

$(document).click(function() {
  $("div.dropdown").removeClass("open");
  });
  
