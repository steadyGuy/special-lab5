const points = document.querySelectorAll(".point");
const first = document.querySelector('.first-block');
const second = document.querySelector('.second-block');
const third = document.querySelector('.third-block')


const deactive = () => {
    points.forEach(el => {
        el.classList.remove('active-point');
    });
    first.classList.remove('active');
    second.classList.remove('active');
    third.classList.remove('active');
}

for (let i = 0; i < points.length; i++) {
    points[i].addEventListener('click', () => {
        deactive();
        if (i == 0) {
            first.classList.add('active');
            points[i].classList.add('active-point');
        }
        else if ( i == 1) {
            second.classList.add('active');
            points[i].classList.add('active-point');
        }
        else {
            third.classList.add('active');
            points[i].classList.add('active-point');
        }
    })
}