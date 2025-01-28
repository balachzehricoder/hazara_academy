const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });


    let currentSlide = 0;
        const totalSlides = 3;
        const slider = document.getElementById('slider');
        const dots = document.querySelectorAll('.flex.justify-center.mt-8.gap-2 button');

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            // Update dots
            dots.forEach((dot, index) => {
                dot.className = `w-2 h-2 rounded-full ${index === currentSlide ? 'bg-purple-600' : 'bg-gray-300'}`;
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateSlider();
        }

        // Optional: Auto-advance slides every 5 seconds
        setInterval(nextSlide, 5000);



        document.addEventListener("DOMContentLoaded", function () {
            const cards = Array.from(document.querySelectorAll("#card-container > div")); // All cards
            const cardsPerPage = 12; // Items per page
            let currentPage = 1;
            const totalPages = Math.ceil(cards.length / cardsPerPage);
        
            // Function to display cards for the current page
            function displayCards() {
                const startIndex = (currentPage - 1) * cardsPerPage;
                const endIndex = startIndex + cardsPerPage;
        
                cards.forEach((card, index) => {
                    if (index >= startIndex && index < endIndex) {
                        card.style.display = "block"; // Show card
                    } else {
                        card.style.display = "none"; // Hide card
                    }
                });
        
                // Update pagination controls
                document.getElementById("prev-page").disabled = currentPage === 1;
                document.getElementById("next-page").disabled = currentPage === totalPages;
                updatePaginationButtons();
                document.getElementById("results-info").textContent = `${startIndex + 1}-${Math.min(endIndex, cards.length)} of ${cards.length}`;
            }
        
            // Function to update pagination buttons
            function updatePaginationButtons() {
                const paginationContainer = document.getElementById("pagination-buttons");
                paginationContainer.innerHTML = "";
        
                const maxButtons = 5; // Number of buttons to show at a time
                let start = Math.max(1, currentPage - Math.floor(maxButtons / 2));
                let end = Math.min(totalPages, start + maxButtons - 1);
        
                if (end - start + 1 < maxButtons) {
                    start = Math.max(1, end - maxButtons + 1);
                }
        
                for (let i = start; i <= end; i++) {
                    const button = document.createElement("button");
                    button.textContent = i;
                    button.className = `px-4 py-2 rounded-md ${i === currentPage ? "bg-blue-500 text-white" : "bg-gray-300 hover:bg-gray-400"}`;
                    button.addEventListener("click", () => {
                        currentPage = i;
                        displayCards();
                    });
                    paginationContainer.appendChild(button);
                }
        
                if (end < totalPages) {
                    const ellipsis = document.createElement("span");
                    ellipsis.textContent = "...";
                    paginationContainer.appendChild(ellipsis);
        
                    const lastButton = document.createElement("button");
                    lastButton.textContent = totalPages;
                    lastButton.className = "px-4 py-2 rounded-md bg-gray-300 hover:bg-gray-400";
                    lastButton.addEventListener("click", () => {
                        currentPage = totalPages;
                        displayCards();
                    });
                    paginationContainer.appendChild(lastButton);
                }
            }
        
            // Event listeners for next and previous buttons
            document.getElementById("prev-page").addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    displayCards();
                }
            });
        
            document.getElementById("next-page").addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    displayCards();
                }
            });
        
            // Initial display
            displayCards();
        });
        
        
        

        window.addEventListener('load', function() {
            // Function to animate the count
            function animateCount(element) {
                const target = +element.getAttribute("data-target"); // Get the target number
                let current = 0; // Start from 0
                const increment = target / 100; // Increment value (target divided by 100 for smooth animation)

                // Update the counter every 20 milliseconds
                const interval = setInterval(function() {
                    current += increment;
                    if (current >= target) {
                        element.textContent = target; // Ensure it ends at the target value
                        clearInterval(interval); // Stop the interval once the target is reached
                    } else {
                        element.textContent = Math.floor(current); // Update the count
                    }
                }, 20); // Adjust the time (20ms is a good smooth interval)
            }

            // Get all count elements by class
            const countElements = document.querySelectorAll('.count');
            
            // Apply the animation to each count element
            countElements.forEach(element => {
                animateCount(element);
            });
        });


        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section.classList.contains('hidden')) {
                section.classList.remove('hidden'); // Show the section
                section.scrollIntoView({ behavior: 'smooth' }); // Scroll to the section
            } else {
                section.classList.add('hidden'); // Hide the section
            }
        }
        