require("./bootstrap");
import Splide from "@splidejs/splide";
import datepicker from "js-datepicker";
console.log("run!!");

document.addEventListener("DOMContentLoaded", function() {
    new Splide(".splide-insta", {
        type: "loop",
        perPage: 4,
        padding: {
            left: "1rem",
            right: "1rem"
        },
        breakpoints: {
            1024: {
                perPage: 2
            },
            600: {
                perPage: 1
            }
        }
    }).mount();

    new Splide(".splide-feedback", {
        type: "loop",
        perPage: 1
    }).mount();

    const picker = datepicker(document.querySelector("#calendar"), {
        formatter: (input, date, instance) => {
            // This will display the date as `1/1/2019`.
            console.log("date", date)
            input.value = date.toDateString();
        },
        disabler: date => date.getDay() === 2,
        startDay: 1, // Calendar week starts on a Monday.
        position: "tr" // Top right.
    });

});
