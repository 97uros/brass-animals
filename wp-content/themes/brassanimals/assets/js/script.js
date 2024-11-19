$(document).ready(function () {
  if ($(window).width() > 768) {
    // Equal height
    $(".container").each(function () {
      var highestBox = 0;
      $(".equal-height", this).each(function () {
        if ($(this).height() > highestBox) {
          highestBox = $(this).height();
        }
      });
      $(".equal-height", this).height(highestBox);
    });
  } else {
  }

  // Reset video and audio when close modal
  $(".music .modal").on("hide.bs.modal", function () {
    $iframe = $(this).find("iframe");
    $iframe.attr("src", $iframe.attr("src"));
    $("audio").each(function () {
      this.pause();
      this.currentTime = 0;
    });
  });

  // Activate Owl Carousel
  var one = $("#gallery_slide");
  var two = $("#testimonial_slide");

  one.owlCarousel({
    lazyLoad: true,
    loop: true,
    responsiveClass: true,
    center: false,
    autoplay: false,
    nav: true,
    dots: false,
    navText: [
      '<i class="fal fa-angle-left"></i>',
      '<i class="fal fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 4,
      },
    },
  });

  two.owlCarousel({
    lazyLoad: true,
    loop: true,
    responsiveClass: true,
    center: true,
    autoplay: false,
    nav: true,
    dots: false,
    navText: [
      '<i class="fal fa-angle-left"></i>',
      '<i class="fal fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 3,
      },
    },
  });

  // Add class to music icons
  $('.music__instrumental span:contains("Instrumental")')
    .html('<i class="far fa-check"></i>')
    .addClass("instrumental");
  $('.music__media a:contains("Video")').html("").addClass("video");
  $('.music__media a:contains("Audio")').html("").addClass("audio");

  if (window.matchMedia("(max-width: 768px)").matches) {
    $(".vendor-btn").addClass("collapsed");
    $(".accordion-collapse").removeClass("show");
  }

  // Activate multiselect plugin
  $("#multiselect").multiSelect({
    noneText: "Select all that apply",
  });

  // Filters not collapsed
  $(".wpc-filter-collapsible").addClass("wpc-opened");
  $(".wpc-filter-content").addClass("wpc-opened");

  $(function () {
    if ($("body").hasClass("post-type-archive-vendors")) {
      // Vendors filter mobile view
      let observer = new MutationObserver((mutatedList) => {
        const target = mutatedList[0].target;

        const isLoading = target.classList.contains("is-active");
        if (!isLoading) {
          $(".wpc-filter-categoryvendors .wpc-filters-ul-list").prepend(
            "<li><a class='all-category'>All categories</a></li>"
          );

          $(".all-category").click(function () {
            window.location = "/vendors";
          });
          $(".wpc-filter-categoryvendors .wpc-filters-ul-list").append(
            "<span class='vendors__all'>+ View All</span>"
          );
          // Vendors sidebar view all button
          $(".wpc-filters-ul-list").each(function () {
            var list = $(this).children().filter("li");

            $.each(list, function (i, value) {
              if (i > 6) $(this).hide();
            });

            if (list.length > 7) {
              $(this).find(".vendors__all").show();
            }
          });

          $(".vendors__all").click(function () {
            $(this).closest("ul").children().filter("li").show();
            $(this).hide();
          });

          // Filters not collapsed
          $(".wpc-filter-collapsible").addClass("wpc-opened");
          $(".wpc-filter-content").addClass("wpc-opened");
        }
      });
      const spinner = document.querySelector(".wpc-spinner");
      observer.observe(spinner, { attributes: "class" });

      // Vendors results on large screens
      $(".wpc-posts-found").appendTo("#vendors__results");

      // Vendors All categories button
      $(".wpc-filter-categoryvendors .wpc-filters-ul-list").prepend(
        "<li><a class='all-category'>All categories</a></li>"
      );

      $(".all-category").click(function () {
        window.location = "/vendors";
      });

      // Vendors sidebar view all button
      $(".wpc-filter-categoryvendors .wpc-filters-ul-list").append(
        "<span class='vendors__all'>+ View All</span>"
      );
      $(".wpc-filter-country .wpc-filters-ul-list").append(
        "<span class='vendors__all'>+ View All</span>"
      );
      $(".wpc-filter-city .wpc-filters-ul-list").append(
        "<span class='vendors__all'>+ View All</span>"
      );

      $(".vendors__sidebar ul").each(function () {
        var list = $(this).children().filter("li");

        $.each(list, function (i, value) {
          if (i > 6) $(this).hide();
        });

        if (list.length > 7) {
          $(this).find(".vendors__all").show();
        }
      });

      $(".vendors__all").click(function () {
        $(this).closest("ul").children().filter("li").show();
        $(this).hide();
      });
    }
  });
  if ($("#data_list").hasClass("datalist") === true) {
    $("body").addClass("location-datalist");
  }
});

// Gallery Load More button
var list = $(".gallery .item");
var numToShow = 12;
var button = $("#gallery__more");
var numInList = list.length;
list.hide();

if (numInList > numToShow) {
  button.show();
}
list.slice(0, numToShow).show();
var nowShowing = list.filter(":visible").length;

if (nowShowing < numToShow) {
  button.hide();
}

if (nowShowing >= numInList) {
  button.hide();
}

button.click(function () {
  var showing = list.filter(":visible").length;
  list.slice(showing - 1, showing + numToShow).fadeIn();
  nowShowing = list.filter(":visible").length;
  if (nowShowing >= numInList) {
    button.hide();
  }
});

//page reload on back button
window.onbeforeunload = function () {
  window.location.reload(true);
};

jQuery(function() {

  var showChar = 500;
  var ellipsestext = "...";
  var moretext = "Read More";
  var lesstext = "Read Less";

  jQuery('.show-read-more').each(function() {
    var content = jQuery(this).html(); 
    if(content.length > showChar) { 
      var c = content.substr(0, showChar);
      var h = content.substr(showChar, content.length - showChar);
      var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="javascript:void()" class="morelink">' + moretext + '</a></span>';
      jQuery(this).html(html);
    } 
  }); 
  jQuery(".morelink").click(function(){
    if(jQuery(this).hasClass("less")) {
      jQuery(this).removeClass("less");
      jQuery(this).html(moretext);
    } else {
      jQuery(this).addClass("less");
      jQuery(this).html(lesstext);
    }
  jQuery(this).parent().prev().toggle();
  jQuery(this).prev().toggle();
  return false;
  });
});


jQuery('.js-example-basic-single').select2();