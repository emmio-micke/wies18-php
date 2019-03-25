
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
        for (let playerIndex = 1; playerIndex <= 4; playerIndex++) {
            let sum = 0;

            sum += getValueFromField(document.getElementById("player" + playerIndex + "_ones"));
            sum += getValueFromField(document.getElementById("player" + playerIndex + "_twos"));
            sum += getValueFromField(document.getElementById("player" + playerIndex + "_threes"));
            sum += getValueFromField(document.getElementById("player" + playerIndex + "_fours"));
            sum += getValueFromField(document.getElementById("player" + playerIndex + "_fives"));
            sum += getValueFromField(document.getElementById("player" + playerIndex + "_sixes"));
    
            document.getElementById("player" + playerIndex + "_sum").innerText = sum;
    
            if (sum >= 63) {
                document.getElementById("player" + playerIndex + "_bonus").innerText = 50;
            } else {
                document.getElementById("player" + playerIndex + "_bonus").innerText = 0;
            }
            }
    });
});
