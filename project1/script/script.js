function navigateTo(url) {
    window.location.href = url; // Navigate to the given URL
}

function search() {
    var query = document.getElementById("favseason").value.toLowerCase();
    var links = {
        "google": "https://www.google.com",
        "youtube": "https://www.youtube.com",
        "facebook": "https://www.facebook.com"
    };
    
    if (links[query]) {
        window.location.href = links[query];
    } else {
        alert("No results found");
    }
}
function validateNumberInput(event) {
    const input = event.target;
    input.value = input.value.replace(/[^0-9 ]/g, "");
}
