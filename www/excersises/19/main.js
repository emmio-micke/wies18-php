
document.addEventListener("DOMContentLoaded", function(e) {
    let btnCalc = document.getElementById("calc");

    function getValueFromField(element) {
        if (element.value === '') {
            return 0;
        }
        if (!isNaN(element.value)) {
            return parseInt(element.value);
        }
        return 0;
    }

    btnCalc.addEventListener("click", function(event) {
        let sum = 0;

        sum += getValueFromField(document.getElementById("player1_ones"));
        sum += getValueFromField(document.getElementById("player1_twos"));
        sum += getValueFromField(document.getElementById("player1_threes"));
        sum += getValueFromField(document.getElementById("player1_fours"));
        sum += getValueFromField(document.getElementById("player1_fives"));
        sum += getValueFromField(document.getElementById("player1_sixes"));

        document.getElementById("playerone_sum").innerText = sum;

        if (sum >= 63) {
            document.getElementById("playerone_bonus").innerText = 50;
        } else {
            document.getElementById("playerone_bonus").innerText = 0;
        }
    });
});
