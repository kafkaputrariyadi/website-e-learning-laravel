// dashboard.js

function scrollProgress(direction) {
    const container = document.querySelector(".progress-cards");
    const scrollAmount = 300;
    container.scrollBy({
        left: direction * scrollAmount,
        behavior: "smooth",
    });
}

function openLesson(subject) {
    alert("Membuka pelajaran: " + subject);
}

function openSubject(subject) {
    alert("Membuka mata pelajaran: " + subject);
}

function openSchedule(subject) {
    alert("Membuka jadwal: " + subject);
}

document.addEventListener("DOMContentLoaded", function () {
    // Smooth scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                });
            }
        });
    });
});
