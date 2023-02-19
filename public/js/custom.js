"use strict";
$(document).ready(function () {
    $("select").niceSelect();
    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        AOS Animation Activation
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
    AOS.init();
    window.addEventListener("load", AOS.refresh);

    if (jQuery(".testimonial-slider-one").length > 0) {
        $(".testimonial-slider-one").slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 500,
            slidesPerRow: 1,
        });
    }

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
        Bootstrap Mobile Megamenu Support
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

    $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
        if (!$(this).next().hasClass("show")) {
            $(this)
                .parents(".dropdown-menu")
                .first()
                .find(".show")
                .removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass("show");

        $(this)
            .parents("li.nav-item.dropdown.show")
            .on("hidden.bs.dropdown", function (e) {
                $(".dropdown-submenu .show").removeClass("show");
            });

        return false;
    });

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
           Sticky Header
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            $(".site-header--sticky").addClass("scrolling");
        } else {
            $(".site-header--sticky").removeClass("scrolling");
        }
        if (
            document.body.scrollTop > 300 ||
            document.documentElement.scrollTop > 300
        ) {
            $(".site-header--sticky.scrolling").addClass("reveal-header");
        } else {
            $(".site-header--sticky.scrolling").removeClass("reveal-header");
        }
    }

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
           Input Count Up Button
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
    $(".count-btn").on("click", function () {
        var $button = $(this);
        var oldValue = $button
            .parent(".count-input-btns")
            .parent()
            .find("input")
            .val();
        if ($button.hasClass("inc-ammount")) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent(".count-input-btns").parent().find("input").val(newVal);
    });

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
           Prcing Dynamic Script
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
    $("[data-pricing-trigger]").on("click", function (e) {
        $(e.target).addClass("active").siblings().removeClass("active");
        var target = $(e.target).attr("data-target");
        console.log($(target).attr("data-value-active") == "monthly");
        if ($(target).attr("data-value-active") == "monthly") {
            $(target).attr("data-value-active", "yearly");
        } else {
            $(target).attr("data-value-active", "monthly");
        }
    });

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
           Smooth Scroll
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

    $(".goto").on("click", function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top,
                },
                2000,
                function () {
                    window.location.hash = hash;
                }
            );
        } // End if
    });
});

/*----------  Range Slider  ----------*/
$(function () {
    $(".pm-range-slider").slider({
        range: true,
        min: 50,
        max: 180,
        values: [100, 130],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - " + ui.values[1] + "K");
        },
    });
    $("#amount").val(
        "$" +
            $(".pm-range-slider").slider("values", 0) +
            " - " +
            $(".pm-range-slider").slider("values", 1) +
            "K"
    );
});

$(".product-view-mode a").on("click", function (e) {
    e.preventDefault();

    var shopProductWrap = $(".shop-product-wrap");
    var viewMode = $(this).data("target");

    $(".product-view-mode a").removeClass("active");
    $(this).addClass("active");
    shopProductWrap.removeClass("grid list").addClass(viewMode);
    if (shopProductWrap.hasClass("grid")) {
        $(".pm-product").removeClass("product-type-list");
    } else {
        $(".pm-product").addClass("product-type-list");
    }
});

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>      
      Preloader Activation
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

$(window).load(function () {
    setTimeout(function () {
        $("#loading").fadeOut(500);
    }, 1000);
    setTimeout(function () {
        $("#loading").remove();
    }, 2000);
});

function showPassword() {
    let getElm = document.querySelectorAll(".show-password");
    for (let index = 0; index < getElm.length; index++) {
        getElm[index].addEventListener("click", function (e) {
            if (e.target.classList.contains("show")) {
                e.target.classList.remove("show");
            } else {
                e.target.classList.add("show");
            }
            var target = e.target.getAttribute("data-show-pass");
            let x = document.getElementById(target);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        });
    }
}
showPassword();

/*----------  Range Slider  ----------*/

function toggleItem(params) {
    let getItem = document.querySelectorAll(".toggle-item");
    for (let i = 0; i < getItem.length; i++) {
        getItem[i].addEventListener("click", function (e) {
            if (e.target.classList.contains("clicked")) {
                e.target.classList.remove("clicked");
            } else {
                e.target.classList.add("clicked");
            }
        });
    }
}
toggleItem();

/*---------- Counter Up ------------ */
$(".counter").counterUp({
    delay: 20,
    time: 2000,
});

/*---------- Input Masking ------------ */

document.addEventListener("DOMContentLoaded", () => {
    for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
        const pattern = el.getAttribute("placeholder"),
            slots = new Set(el.dataset.slots || "_"),
            prev = ((j) =>
                Array.from(pattern, (c, i) =>
                    slots.has(c) ? (j = i + 1) : j
                ))(0),
            first = [...pattern].findIndex((c) => slots.has(c)),
            accept = new RegExp(el.dataset.accept || "\\d", "g"),
            clean = (input) => {
                input = input.match(accept) || [];
                return Array.from(pattern, (c) =>
                    input[0] === c || slots.has(c) ? input.shift() || c : c
                );
            },
            format = () => {
                const [i, j] = [el.selectionStart, el.selectionEnd].map((i) => {
                    i = clean(el.value.slice(0, i)).findIndex((c) =>
                        slots.has(c)
                    );
                    return i < 0
                        ? prev[prev.length - 1]
                        : back
                        ? prev[i - 1] || first
                        : i;
                });
                el.value = clean(el.value).join``;
                el.setSelectionRange(i, j);
                back = false;
            };
        let back = false;
        el.addEventListener("keydown", (e) => (back = e.key === "Backspace"));
        el.addEventListener("input", format);
        el.addEventListener("focus", format);
        el.addEventListener(
            "blur",
            () => el.value === pattern && (el.value = "")
        );
    }
});

// multiple add input form request

function genTable(data) {
    let view = [];
    if (data > 0 && data !== "") {
        for (let i = 0; i < data; i++) {
            view.push(`
      <tr>
          <td>${i + 1}</td>
          <td><input type="text" name="name[]" class="form-control" ></td>
          <td><input type="text" name="product_type[]" class="form-control" ></td>
          <td><input type="text" name="product_specification[]" class="form-control" ></td>
      </tr>
  `);
        }
        $("#dummy").hide();
        $("#produk").html(view);
    } else {
        $("#dummy").show();
        $("#produk").html("");
    }
}

// End Multiple add input form request

// Multiple edit input form request
function genTableEdit() {
    const addProduk = $('input[id="add_produk"]').val();
    let view = [],
        lastId = "<?php echo count($produk)?>";
    if (addProduk > 0 && addProduk !== "") {
        for (let i = 0; i < addProduk; i++) {
            let id = ++lastId;
            view.push(`
                <tr id="produk${id}">
                    <td><input type="text" name="name[]" class="form-control" required></td>
                    <td><input type="text" name="product_type[]" class="form-control" required></td>
                    <td><input type="text" name="product_specification[]" class="form-control" required></td>
                    <td>
                        <button type="button" class="btn btn-danger" style="min-width: 50px;" name="add" value="${id}" onclick="removeTableEdit(this)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `);
        }
        $("#produk").append(view);
    } else {
        alert("Mohon input jumlah tambah produk");
    }
}

function removeTableEdit(data) {
    console.log(data.value);
    $(`tr[id="produk${data.value}"]`).remove();
}

//End Multiple edit input form request

// Multiple upload file
$(document).ready(function () {
    $(".add-file").click(function () {
        var html = $(".clone").html();
        $(".increment").after(html);
    });
    $("body").on("click", ".remove-file", function () {
        $(this).parents(".control-group").remove();
    });
});
