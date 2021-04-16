const controls = document.querySelectorAll(".control__item");
const linearSlider = document.querySelector("#row-slider-parent");
const titleData = document.querySelector("#title__data");
const controlSlider = document.querySelector("#control__slider");
const btnShop = document.querySelectorAll(".download__btn");

let dataFromSlider = [];

fetch("core/selectSlider.php")
    .then((response) => {
        return response.json();
    })
    .then(data => {
        dataFromSlider = data;

        let dataFromSliderChildren = "";
        let countControlBtn = 0;
        let linearLength = [0,];
        let countLinear = 0;
        let sliderControlBtns = "";

        dataFromSlider.forEach(data => {
            dataFromSliderChildren += `
        <div class="product__row-slider-childer">
            <h3 class="product__row-suptitle">${data.subtitle}</h3>
                <h1 class="product__row-title">${data.title}</h1>
            <div class="product__row-description">
        <p class="product__row-item">${data.description}</p>
        <p class="product__row-item">${data.description_more}</p>
    </div>
        <a class="row__btn-item" href="#">${data.btn_name}</a>
    </div> 
    `;
            countControlBtn++;
            countLinear = countLinear + 450;
            linearLength.push(countLinear);
            sliderControlBtns += `
    <span class="control__item" data-control></span>
    `;
        });

        controlSlider.innerHTML += sliderControlBtns;
        linearSlider.innerHTML = dataFromSliderChildren;
        linearSlider.style.width = `${linearLength[linearLength.length - 1]}px`;

        const sliderBtns = document.querySelectorAll(".row__btn-item");
        const sliderControlerBtns = document.querySelectorAll(".control__item");

        sliderControlerBtns.forEach((btn, indexBtn) => {
            if (indexBtn === 0) {
                btn.classList.add('control__item-active');
            }
            linearLength.forEach((item, indexItem) => {
                if (indexBtn === indexItem) {
                    btn.addEventListener('click', function () {
                        linearSlider.style.left = `-${item}px`;
                        clearBtnClass();
                        this.classList.add('control__item-active');
                    })
                }
            })
        });

        function clearBtnClass() {
            sliderControlerBtns.forEach(btn => {
                btn.classList.remove('control__item-active');
            })
        }

        function clearData() {
            titleData.style.display = "none";
        }

        sliderBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                titleData.style.display = "block";
                setTimeout(clearData, 1500);
            })
        })

        function clearBgColorControl() {
            controls.forEach(control => {
                control.classList.remove("control__item-active");
            })
        }

        btnShop.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                titleData.style.display = "block";
                setTimeout(clearData, 1500);
            })
        })


    })