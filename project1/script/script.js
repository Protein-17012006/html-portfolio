function navigateTo(url) {
    window.location.href = url; // Navigate to the given URL
}

function search() {
    var query = document.getElementById("search_list").value.toLowerCase();
    var links = {
        "cybersecurity analyst": "../job_description/CS/cs1.html",
        "full stack developer": "../job_description/CS/cs2.html",
        "front-end developer": "../job_description/CS/cs3.html",
        "back-end developer": "../job_description/CS/cs4.html",
        "data engineer": "../job_description/CS/cs5.html",
        "automation engineer": "../job_description/CS/cs6.html",
        "content creator": "../job_description/Media/cs1.html",
        "social media manager": "../job_description/Media/cs2.html",
        "media buyer": "../job_description/Media/cs3.html",
        "public relations specialist": "../job_description/Media/cs4.html",
        "video production specialist": "../job_description/Media/cs5.html",
        "digital marketing specialist": "../job_description/Media/cs6.html",
        "business development manager": "../job_description/Business/cs1.html",
        "operations manager": "../job_description/Business/cs2.html",
        "financial manager": "../job_description/Business/cs3.html",
        "hr manager": "../job_description/Business/cs4.html",
        "marketing manager": "../job_description/Business/cs5.html",
        "project manager": "../job_description/Business/cs6.html",
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