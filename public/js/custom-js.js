// $('.ui.dropdown')
//     .dropdown(
//
//         {
//             // click:true
// }
//     );



$("#company-dropdown-nav").on("mouseover", function () {
    $("#company-dropdown").css("display", "block");
    $("#services-dropdown").css("display", "none");
    $("#solution-dropdown").css("display", "none")
});

$("#company-dropdown").on("mouseout", function () {
    $("#company-dropdown").css("display", "none")
})


$("#services-drop-nav").on("mouseover", function () {
    // $("#services-dropdown").toggle();
    $("#services-dropdown").css("display", "block")
    $("#company-dropdown").css("display", "none")
    $("#solution-dropdown").css("display", "none")
});

$("#services-dropdown").on("mouseout", function () {
    $("#services-dropdown").css("display", "none")
})


$("#solution-drop-nav").on("mouseover", function () {
    $("#solution-dropdown").css("display", "block")
    $("#company-dropdown").css("display", "none")
    $("#services-dropdown").css("display", "none")
});

$("#solution-dropdown").on("mouseout", function () {
    $("#solution-dropdown").css("display", "none")
})


$(document).ready(function () {
    for (let i = 1; i < 10; i++) {

        let selector="#"+i
        $(selector).on("mouseover", function () {
            $(`${selector}`+ " > #subservice-subtab").css("display", "block")
        })

        $(selector).on("mouseout", function () {
            $(`${selector}`+ " > #subservice-subtab").css("display", "none")
        })
    }

});


$(document).ready(function(){
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
    dropdowns.forEach((dd)=>{
        dd.addEventListener('mouseover', function (e) {
            var el = this.nextElementSibling
            el.style.display = el.style.display==='block'?'none':'block'
        })
        dd.addEventListener('mouseout', function (e) {
            var el = this.nextElementSibling
            el.style.display = el.style.display==='block'?'block':'none'
        })
    })
});

// $(".web-menu").on("mouseout",function(){
//     $("#solution-dropdown").css("display","none")
//     $("#company-dropdown").css("display","none")
// })


window.addEventListener("mouseup", function (event) {
    var box = document.getElementById("company-dropdown");
    if (event.target != box && event.target.parentNode != box) {
        box.style.display = "none";
    }
});

window.addEventListener("mouseup", function (event) {
    var box = document.getElementById("services-dropdown");
    if (event.target != box && event.target.parentNode != box) {
        box.style.display = "none";
    }
});

window.addEventListener("mouseup", function (event) {
    var box = document.getElementById("solution-dropdown");
    if (event.target != box) {
        box.style.display = "none";
    }
});


$(document).ready(function () {
    $(".web-menu").click(function () {
        $("li.active").removeClass("active");
        $(this).addClass("active");
    });
});

function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if (elem.length == 0) {
        return;
    }
    var $window = jQuery(window);
    var viewport_top = $window.scrollTop();
    var viewport_height = $window.height();
    var viewport_bottom = viewport_top + viewport_height;
    var $elem = jQuery(elem);
    var top = $elem.offset().top;
    var height = $elem.height();
    var bottom = top + height;

    return (
        (top >= viewport_top && top < viewport_bottom) ||
        (bottom > viewport_top && bottom <= viewport_bottom) ||
        (height > viewport_height &&
            top <= viewport_top &&
            bottom >= viewport_bottom)
    );
}

jQuery(document).ready(function () {
    window.addEventListener("scroll", function (e) {
        $(".caption-animation-1, .caption-animation-2, .title_01, .title, .title-big-icon h1").each(function () {
            if (isOnScreen(this) === true) {
                $(this).addClass("animate__animated animate__slideInLeft animate__slow");
            } else {
                $(this).removeClass("animate__slideInLeft");
            }
        });

        $(".leftimage, .img-side").each(function () {
            if (isOnScreen(this) === true) {
                $(this).addClass("animate__animated animate__fadeIn");
            } else {
                $(this).removeClass("animate__fadeIn");
            }
        });

        $(".service-items").each(function () {
            if (isOnScreen(this) === true) {
                $(this).addClass("animate__animated animate__fadeInUp animate__slowanimate__slow");
            } else {
                $(this).removeClass("animate__fadeInUp");
            }
        });

        $(".main-nav-nav").each(function () {
            if (isOnScreen(this) === true) {
                $(this).addClass("animate__animated animate__fadeInDown");
            } else {
                $(this).removeClass("animate__fadeInDown");
            }
        });

        $(".dropmenu").each(function () {
            if (isOnScreen(this) === true) {
                $(this).addClass("animate__animated animate__slideInUp");
            } else {
                $(this).removeClass("animate__slideInUp");
            }
        });

    });
});

$(document).ready(function () {
    $(".side-menu-icon").click(function () {
        $(".mobi-menu").toggle();
    });
});

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    $(".mobi-menu").hide();

    $(".side-menu-icon").click(function () {
        $(".mega-side").toggle();
    });

    side - desktop

} else {
    $(".mobi-menu").show();
}
