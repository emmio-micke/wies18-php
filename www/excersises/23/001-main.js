document.addEventListener("DOMContentLoaded", function () {
    let var1 = document.getElementById("vehicle_data");
    console.log(var1.value);
    console.log(typeof(var1.value));

    let data = JSON.parse(var1.value);
    console.log(data);
    console.log(typeof(data));

    /*
    let data = [
        {
            "id": 1,
            "model": "Ford",
            "price": 1000000,
            "color": "red"
        },
        {
            "id": 2,
            "model": "Volvo",
            "price": 800000,
            "color": "grey"
        },
        {
            "id": 3,
            "model": "Audi",
            "price": 1200000,
            "color": "blue"
        }
    ];
    */

    let div1 = document.getElementById("vehicle_1");
    div1.addEventListener("click", function(event) {
        let id = 1;
        let vehicle_data;

        for (let i = 0; i < data.length; i++) {
            if (data[i]["id"] === id) {
                vehicle_data = data[i];
            }
        }

        console.log(vehicle_data["price"]);

    });

    let div2 = document.getElementById("vehicle_2");
    div2.addEventListener("click", function(event) {
        let id = 2;
        let vehicle_data;

        for (let i = 0; i < data.length; i++) {
            if (data[i]["id"] === id) {
                vehicle_data = data[i];
            }
        }

        console.log(vehicle_data["price"]);

    });
});