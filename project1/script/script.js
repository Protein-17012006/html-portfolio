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
        "public relations specialist": "../project1/job_description/Media/media4.html",
        "video production specialist": "../project1/job_description/Media/media5.html",
        "digital marketing specialist": "../project1/job_description/Media/media6.html",
        "business development manager": "../project1/job_description/Business/business1.html",
        "operations manager": "../project1/job_description/Business/business2.html",
        "financial manager": "../project1/job_description/Business/business3.html",
        "hr manager": "../project1/job_description/Business/business4.html",
        "marketing manager": "../project1/job_description/Business/business5.html",
        "project manager": "../project1/job_description/Business/business6.html",
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

//bắt đầu làm từ đây//
const linkItems = document.querySelectorAll(".link-item");
const indicator = document.querySelector(".indicator");


linkItems.forEach((linkItem, index) => {
    linkItem.addEventListener("mouseover", () => {
       
        indicator.style.left = `${index * 200 + 0}px`;

        
        document.querySelector(".link-item.active").classList.remove("active");

       
        linkItem.classList.add("active");
    });
});


document.querySelector(".nav-content").addEventListener("mouseleave", () => {
    const activeItem = document.querySelector(".link-item.active");
    const activeIndex = [...linkItems].indexOf(activeItem);
    indicator.style.left = `${activeIndex * 200 + 0}px`;
});

document.addEventListener("DOMContentLoaded", function() {
    const jobsMenu = document.getElementById("jobs-menu");
    const dropdownMenu = document.querySelector(".dropdown-menu");

    jobsMenu.addEventListener("mouseenter", function() {
        dropdownMenu.style.opacity = "1";
        dropdownMenu.style.transform = "translateY(0)";
        dropdownMenu.style.visibility = "visible";
    });

    jobsMenu.addEventListener("mouseleave", function() {
        setTimeout(() => {
            dropdownMenu.style.opacity = "1";
            dropdownMenu.style.transform = "translateY(-20px)";
            dropdownMenu.style.visibility = "hidden";
        }, 9999999); 
    });

    dropdownMenu.addEventListener("mouseenter", function() {
        dropdownMenu.style.opacity = "1";
        dropdownMenu.style.transform = "translateY(0)";
        dropdownMenu.style.visibility = "visible";
    });

    dropdownMenu.addEventListener("mouseleave", function() {
        setTimeout(() => {
            dropdownMenu.style.opacity = "0";
            dropdownMenu.style.transform = "translateY(-20px)";
            dropdownMenu.style.visibility = "hidden";
        }, 200);
    });
});















