function navigateTo(url) {
    window.location.href = url; // Navigate to the given URL
}

function search() {
    var query = document.getElementById("search_list").value.toLowerCase();
    var links = {
        "cybersecurity analyst": "../project2/job_description/CS/cs1.php" ,
        "full stack developer": "../project2/job_description/CS/cs2.php",
        "front-end developer": "../project2/job_description/CS/cs3.php",
        "back-end developer": "../project2/job_description/CS/cs4.php",
        "data engineer": "../project2/job_description/CS/cs5.php",
        "automation engineer": "../project2/job_description/CS/cs6.php",
        "content creator": "../project2/job_description/Media/media1.php",
        "social media manager": "../project2/job_description/Media/media2.php",
        "media buyer": "../project2/job_description/Media/media3.php",
        "public relations specialist": "../project2/job_description/Media/media4.php",
        "video production specialist": "../project2/job_description/Media/media5.php",
        "digital marketing specialist": "../project2/job_description/Media/media6.php",
        "business development manager": "../project2/job_description/Business/business1.php",
        "operations manager": "../project2/job_description/Business/business2.php",
        "financial manager": "../project2/job_description/Business/business3.php",
        "hr manager": "../project2/job_description/Business/business4.php",
        "marketing manager": "../project2/job_description/Business/business5.php",
        "project manager": "../project2/job_description/Business/business6.php",
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


        document.querySelector(".link-item.lighted").classList.remove("lighted");


        linkItem.classList.add("lighted");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let menu = document.querySelector(".menu");

    // Remove the class to reset animation
    menu.classList.remove("active");

    // Force reflow (trick to restart CSS animation)
    void menu.offsetWidth;

    // Re-add the class after a short delay
    setTimeout(() => {
        menu.classList.add("active");
    }, 50); // Small delay ensures animation restarts
});

document.addEventListener("DOMContentLoaded", function () {
    let menu = document.querySelector(".middle");
    menu.classList.remove("active");
    void menu.offsetWidth;
    setTimeout(() => {
        menu.classList.add("active");
    }, 50);
});


window.addEventListener("load", function () {
    document.querySelector(".login-box").classList.add("show");
    document.querySelector("form").classList.add("show");
    document.querySelector(".form-middle").classList.add("show");
});


window.onload = function () {
    document.querySelector(".about-middle").classList.add("show");
};


let currentIndex = 0;

function setActive(element, index) {
    if (index === currentIndex) return; // Avoid unnecessary updates

    let frameWraps = document.querySelectorAll('.frame-wrap');

    // Remove active class from previous frame
    let prevFrame = frameWraps[currentIndex];
    prevFrame.classList.remove('active');

    // Show new frame
    let nextFrame = frameWraps[index];
    nextFrame.classList.add('active');

    // Delay hiding the old frame to allow animation
    setTimeout(() => {
        prevFrame.style.display = "none";
        nextFrame.style.display = "block";
    }, 500); // Matches CSS transition duration

    // Update pagination button states
    document.querySelectorAll('.circle').forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');

    currentIndex = index;
}

function changePage(direction) {
    let circles = document.querySelectorAll('.circle');
    let newIndex = currentIndex + direction;

    if (newIndex >= 0 && newIndex < circles.length) {
        setActive(circles[newIndex], newIndex + 1);
    }
}


let currentIndex2 = 0;
const carousel = document.querySelector(".carousel");
const cards = document.querySelectorAll(".card");
const totalCards = cards.length;
const visibleCards = 3;
const cardWidth = 320; // 300px width + 10px margin each side
const leftArrow = document.querySelector(".arrow-left");
const rightArrow = document.querySelector(".arrow-right");

function updateButtons() {
    leftArrow.disabled = currentIndex2 === 0;
    rightArrow.disabled = currentIndex2 >= totalCards - visibleCards;
}

function moveSlide(direction) {
    currentIndex2 += direction;

    // Prevent out-of-bounds movement
    if (currentIndex2 < 0) {
        currentIndex2 = 0;
    } else if (currentIndex2 > totalCards - visibleCards) {
        currentIndex2 = totalCards - visibleCards;
    }

    const newTransformValue = -currentIndex2 * cardWidth + "px";
    carousel.style.transform = `translateX(${newTransformValue})`;

    updateButtons();
}

updateButtons();


  
