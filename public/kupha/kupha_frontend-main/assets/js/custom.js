(function ($) {
  "use strict";
  // Mean Menu
  $(".mean-menu").meanmenu({
    meanScreenWidth: "991",
  });
  /**************************** */
  $(".hidden").hide();
  $(".trigger").change(function () {
    var hiddenId = $(this).attr("data-trigger");
    if ($(this).is(":checked")) {
      // Show the hidden fields.
      $("#" + hiddenId).show();
    } else {
      $("#" + hiddenId).hide();
    }
  });
  /**************************** */

  //Tabs Box
  if ($(".tabs-box").length) {
    $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).is(":visible")) {
        return false;
      } else {
        target
          .parents(".tabs-box")
          .find(".tab-buttons")
          .find(".tab-btn")
          .removeClass("active-btn");
        $(this).addClass("active-btn");
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .fadeOut(0);
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .removeClass("active-tab");
        $(target).fadeIn(300);
        $(target).addClass("active-tab");
      }
    });
  }
  /**************************** */
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  /**************************** */
  // Partner Slider JS
  $(".latest-offers-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='ri-arrow-right-s-fill'></i>",
      "<i class='ri-arrow-left-s-fill'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  $(".team-members-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='ri-arrow-right-s-fill'></i>",
      "<i class='ri-arrow-left-s-fill'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });

  $(".hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    mouseDrag: true,
    thumbs: true,
    thumbsPrerendered: true,
    items: 1,
    dots: false,
    autoHeight: true,
    autoplay: false,
    smartSpeed: 1500,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='flaticon-left-arrow'></i>",
      "<i class='flaticon-right-arrow'></i>",
    ],
    responsive: {
      0: {
        nav: true,
      },
      767: {
        nav: true,
      },
    },
  });
  $(".progress").each(function () {
    var value = $(this).attr("data-value");
    var left = $(this).find(".progress-left .progress-bar");
    var right = $(this).find(".progress-right .progress-bar");

    if (value > 0) {
      if (value <= 50) {
        right.css("transform", "rotate(" + percentageToDegrees(value) + "deg)");
      } else {
        right.css("transform", "rotate(180deg)");
        left.css(
          "transform",
          "rotate(" + percentageToDegrees(value - 50) + "deg)"
        );
      }
    }
  });

  function percentageToDegrees(percentage) {
    return (percentage / 100) * 360;
  }
  // FAQ Accordion JS
  $(".accordion")
    .find(".accordion-title")
    .on("click", function () {
      // Adds Active Class
      $(this).toggleClass("active");
      // Expand or Collapse This Panel
      $(this).next().slideToggle("fast");
      // Hide The Other Panels
      $(".accordion-content").not($(this).next()).slideUp("fast");
      // Removes Active Class From Other Titles
      $(".accordion-title").not($(this)).removeClass("active");
    });

  //Jquery Spinner / Quantity Spinner
  if ($(".quantity-spinner").length) {
    $("input.quantity-spinner").TouchSpin({
      verticalbuttons: true,
    });
  }
  // Header Sticky, Go To Top JS
  $("#myTab a").on("click", function (e) {
    e.preventDefault();
    $(this).tab("show");
  });
  // Header Sticky, Go To Top JS
  $(window).on("scroll", function () {
    // Header Sticky JS
    if ($(this).scrollTop() > 150) {
      $(".navbar-area").addClass("is-sticky");
    } else {
      $(".navbar-area").removeClass("is-sticky");
    }

    // Go To Top JS
    var scrolled = $(window).scrollTop();
    if (scrolled > 300) $(".go-top").addClass("active");
    if (scrolled < 300) $(".go-top").removeClass("active");
  });

  // Language-switcher
  $(".language-option").each(function () {
    var each = $(this);
    each
      .find(".lang-name")
      .html(each.find(".language-dropdown-menu a:nth-child(1)").text());
    var allOptions = $(".language-dropdown-menu").children("a");
    each.find(".language-dropdown-menu").on("click", "a", function () {
      allOptions.removeClass("selected");
      $(this).addClass("selected");
      $(this)
        .closest(".language-option")
        .find(".lang-name")
        .html($(this).text());
    });
  });

  // Causes Slider JS
  $(".causes-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='ri-arrow-right-line'></i>",
      "<i class='ri-arrow-left-line'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 3,
      },
    },
  });

  // Causes Slider Two JS
  $(".causes-slider-two").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='ri-arrow-right-line'></i>",
      "<i class='ri-arrow-left-line'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 3,
      },
    },
  });

  // Related Causes Slider JS
  $(".related-causes-slider").owlCarousel({
    items: 1,
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    rtl: true,
    navText: [
      "<i class='ri-arrow-right-s-line'></i>",
      "<i class='ri-arrow-left-s-line'></i>",
    ],
  });

  // Click Event JS
  $(".go-top").on("click", function () {
    $("html, body").animate({ scrollTop: "0" }, 50);
  });

  // Count Time JS
  function makeTimer() {
    var endTime = new Date("november  30, 2021 17:00:00 PDT");
    var endTime = Date.parse(endTime) / 1000;
    var now = new Date();
    var now = Date.parse(now) / 1000;
    var timeLeft = endTime - now;
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - days * 86400) / 3600);
    var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
    var seconds = Math.floor(
      timeLeft - days * 86400 - hours * 3600 - minutes * 60
    );
    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }
    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hours</span>");
    $("#minutes").html(minutes + "<span>Minutes</span>");
    $("#seconds").html(seconds + "<span>Seconds</span>");
  }
  setInterval(function () {
    makeTimer();
  }, 300);

  // Preloader
  $(window).on("load", function () {
    $(".preloader").addClass("preloader-deactivate");
  });

  // WOW JS
  if ($(".wow").length) {
    var wow = new WOW({
      mobile: false,
    });
    wow.init();
  }

  // Tabs
  $(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
  $(".tab ul.tabs li").on("click", function (g) {
    var tab = $(this).closest(".tab"),
      index = $(this).closest("li").index();
    tab.find("ul.tabs > li").removeClass("current");
    $(this).closest("li").addClass("current");
    tab
      .find(".tab_content")
      .find("div.tabs_item")
      .not("div.tabs_item:eq(" + index + ")")
      .fadeOut();
    tab
      .find(".tab_content")
      .find("div.tabs_item:eq(" + index + ")")
      .fadeIn();
    g.preventDefault();
  });

  // Others Option For Responsive JS
  $(".others-option-for-responsive .dot-menu").on("click", function () {
    $(".others-option-for-responsive .container .container").toggleClass(
      "active"
    );
  });

  // FAQ Accordion JS
  $(".accordion")
    .find(".accordion-title")
    .on("click", function () {
      // Adds Active Class
      $(this).toggleClass("active");
      // Expand or Collapse This Panel
      $(this).next().slideToggle("fast");
      // Hide The Other Panels
      $(".accordion-content").not($(this).next()).slideUp("fast");
      // Removes Active Class From Other Titles
      $(".accordion-title").not($(this)).removeClass("active");
    });

  $(".bar").each(function () {
    $(this)
      .find(".bar-inner")
      .animate(
        {
          width: $(this).attr("data-width"),
        },
        2000
      );
  });
})(jQuery);

$(document).ready(function () {
  function startCounter() {
    $(".counter-content h3").each(function () {
      var $this = $(this);
      var countTo = $this.attr("data-count");
      $({ countNum: 0 }).animate(
        { countNum: countTo },
        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          },
        }
      );
    });
  }

  // Trigger counter animation when in viewport
  var counterTriggered = false;
  $(window).scroll(function () {
    var $counterArea = $(".counter-area");

    if ($counterArea.length) {
      // Check if the element exists
      var sectionOffset = $counterArea.offset().top - window.innerHeight + 100;

      if (!counterTriggered && $(window).scrollTop() > sectionOffset) {
        startCounter();
        counterTriggered = true;
      }
    }
  });
});
/*******************************************/
document.querySelectorAll(".upload-btn").forEach((button) => {
  button.addEventListener("click", function () {
    let inputId = this.getAttribute("data-input");
    let fileInput = document.getElementById(inputId);

    if (fileInput) {
      fileInput.click();
    }
  });
});

document.querySelectorAll("input[type='file']").forEach((input) => {
  input.addEventListener("change", function () {
    let fileName =
      this.files.length > 0 ? this.files[0].name : "لم يتم اختيار ملف";
    let button = document.querySelector(`[data-input="${this.id}"]`);

    if (button) {
      let fileNameSpan = button.querySelector(".file-name");
      if (fileNameSpan) {
        fileNameSpan.textContent = fileName;
      }
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  let container = document.getElementById("input-container");

  // Ensure the container exists before proceeding
  if (!container) {
    return;
  }

  // Get the initial placeholder from the first input field
  let initialInput = container.querySelector(".form-control");
  let placeholderText = initialInput
    ? initialInput.placeholder
    : "ادخل مؤهلاتك العلمية";

  // Function to add new input field
  container.addEventListener("click", function (event) {
    if (event.target.closest(".add-input")) {
      let newInputGroup = document.createElement("div");
      newInputGroup.classList.add("input-group", "mb-3");
      newInputGroup.innerHTML = `
              <input type="text" class="form-control" 
                  placeholder="${placeholderText}"
                  aria-label="Username" aria-describedby="basic-addon1">
              <button type="button" class="btn btn-danger remove-input">
                  <i class="ri-delete-bin-line"></i>
              </button>
          `;
      container.appendChild(newInputGroup);
    }

    // Remove input field when clicking remove button
    if (event.target.closest(".remove-input")) {
      event.target.closest(".input-group").remove();
    }
  });

  // Toggle between Arabic and English
  document
    .getElementById("toggle-language")
    .addEventListener("click", function () {
      let allInputs = container.querySelectorAll(".form-control");

      allInputs.forEach((input) => {
        if (input.placeholder === "ادخل مؤهلاتك العلمية") {
          input.placeholder = "Enter your qualifications";
        } else if (
          input.placeholder ===
          "عناوين الصيادلة أو الهيئات التي يمكنها تزكية الطلب"
        ) {
          input.placeholder =
            "Addresses of pharmacists or organizations that can recommend the application";
        } else if (input.placeholder === "Enter your qualifications") {
          input.placeholder = "ادخل مؤهلاتك العلمية";
        } else if (
          input.placeholder ===
          "Addresses of pharmacists or organizations that can recommend the application"
        ) {
          input.placeholder =
            "عناوين الصيادلة أو الهيئات التي يمكنها تزكية الطلب";
        }
      });
    });
});
