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

    $(document).ready(function() {

        let input = document.querySelector('#inputDict');
        let searchBtns = document.querySelector('#search');

        let apiKey = 'c9da658b-4168-4680-8966-8d34b11f9c0b';
        let notFound = document.querySelector('.not_Found');
        let dispAlert = document.querySelector('.dispAlert');
        let defBox = document.querySelector('.def');
        let audioBox = document.querySelector('.audio');
        let loading = document.querySelector('.loading');


        // let medicalapiKey = '3cc21531-98a7-4aee-961f-d52b58153b47';

        searchBtns.onclick = () => {
            //clear Data
            audioBox.innerHTML = '';
            notFound.innerText = '';
            defBox.innerText = '';
            dispAlert.innerHTML = '';

            //get input data
            let word = input.value;
            //call API get data
            if (word === '') {
                dispAlert.innerText = 'Word Required...';
                return;
            }

            getData(word);

        }


        async function getData(word) {
            loading.style.display = 'block';

            //Ajax call
            const response = await fetch(`https://www.dictionaryapi.com/api/v3/references/learners/json/${word}?key=${apiKey}`);
            const data = await response.json();

            //if emptyCells: 
            if (!data.length) {
                loading.style.display = 'none';
                notFound.innerText = 'No Result Found';
                return;
            }

            //if result is suggestions
            if (typeof data[0] === 'string') {
                loading.style.display = 'none';
                let heading = document.createElement('h3');
                heading.innerText = 'Did you Mean ?'
                notFound.appendChild(heading);
                data.forEach(element => {
                    let suggestion = document.createElement('span');
                    suggestion.classList.add('suggested');
                    suggestion.innerText = element;
                    notFound.appendChild(suggestion);
                })
                return;
            }

            //result found
            loading.style.display = 'none';
            let defination = data[0].shortdef[0];
            defBox.innerText = defination;

            //sound

            const soundName = data[0].hwi.prs[0].sound.audio;

            if (soundName) {
                renderSound(soundName);
            }


        }

        function renderSound(soundName) {

            let subFolder = soundName.charAt(0);
            let soundSrc = `https://media.merriam-webster.com/soundc11/${subFolder}/${soundName}.wav?key=${apiKey}`;

            let aud = document.createElement('audio');
            aud.src = soundSrc;
            aud.controls = true;
            audioBox.appendChild(aud);
        }

    });