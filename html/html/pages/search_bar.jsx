function searchBar() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("placeName");
    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
        
}
// Voeg de event listener voor de 'Enter' toets toe
document.getElementById("myInput").addEventListener("keydown", function(event) {
    // enter knop drukken
    if (event.key === "Enter") {
        var ul, li, a, i;
        ul = document.getElementById("placeName");
        li = ul.getElementsByTagName("li");
        // link voor wanneer er wordt gedrukt op de enter knop
        for (i = 0; i < li.length; i++) {
            if (li[i].style.display !== "none") {
                a = li[i].getElementsByTagName("a")[0];
                window.location.href = a.href;
                break;
            }
        }
    }
});

