document.addEventListener("DOMContentLoaded", function(e) {
    document.getElementById("btnSetCookie").addEventListener("click", function(ev) {
        document.cookie = "foo=bar";
        document.cookie = "hello=world";
        // alert("Cookies set");
        location.reload();
    });

    document.getElementById("btnSetCookieArray").addEventListener("click", function(ev) {
        let data = {
            "vehicles": [
                {
                    "model": "Volvo",
                    "color": "red"
                },
                {
                    "model": "Audi",
                    "color": "blue"
                }
            ]
        }
        document.cookie = "data=" + JSON.stringify(data);
        location.reload();
    });

    document.getElementById("btnShowCookies").addEventListener("click", function(ev) {
        alert(document.cookie);
    });

    document.getElementById("btnDeleteCookie").addEventListener("click", function(ev) {
        document.cookie = "foo=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
        location.reload();
    });
});
