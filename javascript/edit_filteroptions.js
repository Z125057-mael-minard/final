// Get references to the select elements
const yearSelect = document.getElementById("yearSelect");
const categorySelect = document.getElementById("categorySelect");

// Store the original category options for resetting
const originalCategories = Array.from(categorySelect.options);

// Function to filter categories based on the selected year
function filterCategories(selectedYear) {
    categorySelect.innerHTML = "";
    originalCategories.forEach(function (category) {
        const categoryYear = parseInt(category.getAttribute("data-year"));
        if (isNaN(categoryYear) || categoryYear === selectedYear) {
            category.style.display = "block"; // Show the category
            categorySelect.appendChild(category);
        } else {
            category.style.display = "none"; // Hide the category
        }
    });

    // Update the currently selected option if it was changed
    const selectedCategory = categorySelect.options[categorySelect.selectedIndex];
    if (selectedCategory) {
        const selectedCategoryYear = parseInt(selectedCategory.getAttribute("data-year"));
        if (!isNaN(selectedCategoryYear) && selectedCategoryYear !== selectedYear) {
            categorySelect.selectedIndex = 0; // Reset to the first option
        }
    }
}

// Add an event listener to the year select
yearSelect.addEventListener("change", function () {
    const selectedYear = parseInt(yearSelect.value);
    filterCategories(selectedYear);
});