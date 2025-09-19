 document.addEventListener("DOMContentLoaded", function () {
    const spinner = document.getElementById("loadingSpinner");
    const container = document.getElementById("job-container");
    const prevBtn = document.getElementById("prevPage");
    const nextBtn = document.getElementById("nextPage");
    const currentPageEl = document.getElementById("currentPage");
    const searchInput = document.getElementById("searchInput");

    let currentPage = 1;
    let currentSearch = "";
    let typingTimeout;

    function fetchJobs(page, search = "") {
        spinner.style.display = "flex";
        container.innerHTML = "";

        fetch(`adzuna_api.php?page=${page}&search=${encodeURIComponent(search)}`)
            .then(res => res.json())
            .then(data => {
                spinner.style.display = "none";
                if (data.results && data.results.length > 0) {
                    renderJobs(data.results);
                } else {
                    container.innerHTML = "<p>No jobs found.</p>";
                }
            })
            .catch(err => {
                spinner.style.display = "none";
                console.error("Error fetching jobs:", err);
                container.innerHTML = "<p>Error loading jobs.</p>";
            });
    }

    function renderJobs(jobs) {
        container.innerHTML = ""; 
        jobs.forEach(job => {
            const div = document.createElement("div");
            div.className = "job-listing";
            div.innerHTML = `
                <h2>${job.title}</h2>
                <p>${job.location.display_name}</p>
                <p><a href="${job.redirect_url}" target="_blank">View Job</a></p>
            `;
            container.appendChild(div);
        });
    }

    // Pagination
    prevBtn.addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            currentPageEl.textContent = `Page ${currentPage}`;
            fetchJobs(currentPage, currentSearch);
        }
    });

    nextBtn.addEventListener("click", function () {
        currentPage++;
        currentPageEl.textContent = `Page ${currentPage}`;
        fetchJobs(currentPage, currentSearch);
    });

    //real-time search
    searchInput.addEventListener("input", function () {
        clearTimeout(typingTimeout);
        typingTimeout = setTimeout(() => {
            currentSearch = searchInput.value.trim();
            currentPage = 1;
            currentPageEl.textContent = `Page ${currentPage}`;
            fetchJobs(currentPage, currentSearch);
        }, 400); 
    });

    // Initial loading
    fetchJobs(currentPage);
});