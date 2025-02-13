function navigateTo(url) {
    window.location.href = url; // Navigate to the given URL
}

function search() {
    var query = document.getElementById("search_list").value.toLowerCase();
    var links = {
        "cybersecurity analyst": "../project1/job_description/CS/cs1.html",
        "full stack developer": "../project1/job_description/CS/cs2.html",
        "front-end developer": "../project1/job_description/CS/cs3.html",
        "back-end developer": "../project1/job_description/CS/cs4.html",
        "data engineer": "../project1/job_description/CS/cs5.html",
        "automation engineer": "../project1/job_description/CS/cs6.html",
        "content creator": "../project1/job_description/Media/media1.html",
        "social media manager": "../project1/job_description/Media/media2.html",
        "media buyer": "../project1/job_description/Media/media3.html",
        "public relations specialist": "../project1/job_description/Media/cs4.html",
        "video production specialist": "../project1/job_description/Media/cs5.html",
        "digital marketing specialist": "../project1/job_description/Media/cs6.html",
        "business development manager": "../project1/job_description/Business/cs1.html",
        "operations manager": "../project1/job_description/Business/cs2.html",
        "financial manager": "../project1/job_description/Business/cs3.html",
        "hr manager": "../project1/job_description/Business/cs4.html",
        "marketing manager": "../project1/job_description/Business/cs5.html",
        "project manager": "../project1/job_description/Business/cs6.html",
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