// functions related the show and hide menu navbar in mobile view
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
  if (document.documentElement.clientWidth >= 1280) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "24%");
        $(".navigation-menu ul").css("top", "40px");
        $(".navigation-menu #logo").css({ height: "130px", width: "130px" });
      } else {
        $(".navigation-menu").css("height", "20%");
        $(".navigation-menu ul").css("top", "30px");
        $(".navigation-menu #logo").css({ height: "110px", width: "110px" });
      }
    });
  }
});
$(document).ready(function () {
  if (document.documentElement.clientWidth < 1280) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "22%");
        $(".navigation-menu ul").css("top", "40px");
        $(".navigation-menu #logo").css({ height: "120px", width: "120px" });
      } else {
        $(".navigation-menu").css("height", "19%");
        $(".navigation-menu ul").css("top", "30px");
        $(".navigation-menu #logo").css({ height: "80px", width: "80px" });
      }
    });
  }
});
$(document).ready(function () {
  if (document.documentElement.clientWidth < 768) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 150) {
        $(".navigation-menu").css("height", "16%");
        $(".icon").css("top", "-58px");
        $(".navigation-menu ul").css("top", "40px");
        $(".navigation-menu #logo").css({ height: "80px", width: "80px" });
      } else {
        $(".navigation-menu").css("height", "12%");
        $(".icon").css("top", "-40px");
        $(".navigation-menu ul").css("top", "30px");
        $(".navigation-menu #logo").css({ height: "65px", width: "65px" });
      }
    });
  }
});
