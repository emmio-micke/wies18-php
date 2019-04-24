
document.addEventListener("DOMContentLoaded", function () {
    let links = document.querySelectorAll("a");

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
            e.preventDefault();
            if (confirm('Vill du verkligen ta bort produkten?')) {
                window.location = this.href;
            }
        }, false);
    }
});
