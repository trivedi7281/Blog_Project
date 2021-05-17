$(document).ready(function() {



    $('.food-slider').slick({
        autoplay: true,
        slidesToShow: 3,
        slideToScroll: 1,
        prevArrow: ".prev-btn",
        nextArrow: ".next-btn",

        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]

    });


    $('.nav-trigger').click(function() {
        $('.site-content-wrapper').toggleClass('scaled');
    });

    const searchBtn = document.querySelector(".search-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    const searchInput = document.querySelector("input")
    const searchBox = document.querySelector(".search-box");
    const searchData = document.querySelector(".search-data");
    searchBtn.onclick = () => {
        searchBox.classList.add("active");
        searchInput.classList.add("active");
        searchBtn.classList.add("active");
        cancelBtn.classList.add("active");
        if (searchInput.value != "") {
            let values = searchInput.value;
            searchData.classList.remove("active");
            searchData.innerHTML = "You just typed " + "<span style='font-weight:500; color:rgba(255, 119, 48, .8);'>" + values + "</span>";
        } else {
            searchData.innerHTML = "";
        }
    }

    cancelBtn.onclick = () => {
        searchBox.classList.remove("active");
        searchInput.classList.remove("active");
        searchBtn.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.add("active");
        searchInput.value = "";
    }

});