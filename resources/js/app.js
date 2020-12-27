require("./bootstrap");
import Splide from "@splidejs/splide";
import datepicker from "js-datepicker";
console.log("JS scripts run normal");

document.addEventListener("DOMContentLoaded", function() {
    // sliders connect
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

    // datapicker connect
    const picker = datepicker(document.querySelector("#inputCalendar"), {
        formatter: (input, date, instance) => {
            // This will display the date as `1/1/2019`.
            console.log("date", date);
            input.value = date.toDateString();
        },
        disabler: date => date.getDay() === 2,
        startDay: 1, // Calendar week starts on a Monday.
        position: "tr" // Top right.
    });

    // get data
    axios.post("/getFeedback").then(response => {
        console.log(response);
    });
    axios.post("/getStories").then(response => {
        console.log(response);
    });

    // scipts
    const registrationButtton = document.getElementById("registrationButtton");
    const inputCalendar = document.getElementById("inputCalendar");
    const inputFullname = document.getElementById("inputFullname");

    registrationButtton.addEventListener("click", () => {
        console.log("inputCalendar", inputCalendar.value);
        console.log("inputFullname", inputFullname.value);
        axios
            .post("/registration", {
                calendar: convertDate(inputCalendar.value),
                fullname: inputFullname.value
            })
            .then(response => {
                console.log(response);
            });
    });
});

function convertDate(inputFormat) {
    function pad(s) {
        return s < 10 ? "0" + s : s;
    }
    var d = new Date(inputFormat);
    return [pad(d.getDate()), pad(d.getMonth() + 1), d.getFullYear()].join("-");
}
