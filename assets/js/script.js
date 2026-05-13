// DARK / LIGHT MODE

const darkModeBtn = document.getElementById("darkModeBtn");

if (darkModeBtn) {
    darkModeBtn.addEventListener("click", () => {
        document.body.classList.toggle("light");

        if (document.body.classList.contains("light")) {
            localStorage.setItem("theme", "light");
        } else {
            localStorage.setItem("theme", "dark");
        }
    });
}

if (localStorage.getItem("theme") === "light") {
    document.body.classList.add("light");
}

// AJAX PROJECTS

const projectsContainer = document.getElementById("projects-container");

if (projectsContainer) {
    fetch("api/get_projects.php")
        .then(response => response.json())
        .then(data => {
            projectsContainer.innerHTML = "";

            data.forEach(project => {
                const tags = project.technologies
                    .split(",")
                    .map(tag => `<span>${tag.trim()}</span>`)
                    .join("");

                projectsContainer.innerHTML += `
                    <article class="project-card">

                        <div class="project-image">
                            <div class="project-image-frame">
                               ${
                                  project.image_url
                                  ? `<img src="${project.image_url}" alt="${project.title}">`
                                  : project.title.substring(0, 2).toUpperCase()
                               }
                        </div>
                        </div>

                        <div class="project-info">

                            <div class="project-status">
                                <span>ACTIVE BUILD</span>
                                <span>2026 - Present</span>
                            </div>

                            <h3>${project.title}</h3>

                            <p>${project.description}</p>

                            <div class="project-tags">
                                ${tags}
                            </div>

                            <a href="${project.project_link}" target="_blank">
                                View Project ↗
                            </a>

                        </div>

                    </article>
                `;
            });
        })
        .catch(error => {
            projectsContainer.innerHTML = "<p>Projects could not be loaded.</p>";
            console.error(error);
        });
}

// CONTACT FORM

const contactForm = document.getElementById("contactForm");

if (contactForm) {
    contactForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();
        const formMessage = document.getElementById("formMessage");

        if (name === "" || email === "" || subject === "" || message === "") {
            formMessage.innerText = "Please fill all fields.";
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            formMessage.innerText = "Please enter a valid email address.";
            return;
        }

        try {
            const response = await fetch("api/save_contact.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    name,
                    email,
                    subject,
                    message
                })
            });

            const result = await response.text();

            formMessage.innerText = result;
            contactForm.reset();

        } catch (error) {
            formMessage.innerText = "Something went wrong. Please try again.";
            console.error(error);
        }
    });
}