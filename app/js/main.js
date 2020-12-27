// functions related the show and hide menu navbar
function cambiamenu() {
  $(".deskview").hide();
  $("footer").hide();
  $(".mobileview").show();
}

function ritornamenu() {
  $(".mobileview").hide();
  $(".deskview").show();
  $("footer").show();
}

// functions related the  navbar button

$(document).ready(function () {
  $(".notActive").mouseover(function () {
    $(this).css("background-color", "red");
  });
  $(".notActive").mouseout(function () {
    $(this).css("background-color", "");
  });
});

// functions related the scroll of navbar

$(document).ready(function () {
  if (document.documentElement.clientWidth > 1280) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "20%");
        $(".navigation-menu ul").css("top", "40px");
      } else {
        $(".navigation-menu").css("height", "18%");
        $(".navigation-menu ul").css("top", "30px");
      }
    });
  }
});
$(document).ready(function () {
  if (document.documentElement.clientWidth < 1280) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "18%");
        $(".navigation-menu ul").css("top", "40px");
      } else {
        $(".navigation-menu").css("height", "17%");
        $(".navigation-menu ul").css("top", "30px");
      }
    });
  }
});
$(document).ready(function () {
  if (document.documentElement.clientWidth < 768) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "11%");
        $(".icon").css("top", "-58px");
        $(".navigation-menu ul").css("top", "40px");
      } else {
        $(".navigation-menu").css("height", "10%");
        $(".icon").css("top", "-40px");
        $(".navigation-menu ul").css("top", "30px");
      }
    });
  }
});
