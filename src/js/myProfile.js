window.onload = function () {
  // Existing code to handle sign button clicks
  const signButtons = document.querySelectorAll(".sign-button");

  signButtons.forEach((button) => {
    button.addEventListener("click", function () {
        alert("Ciaoooo")
      const service = this.parentNode; // Get the parent service div
      const calendarContainer = service.querySelector(".calendar-container");

      // Check if calendar div already exists to avoid duplicates
      if (!calendarContainer.firstChild) {
        // Create a new calendar div with appropriate content
        const newCalendarDiv = document.createElement("div");
        newCalendarDiv.classList.add("calendar");
        newCalendarDiv.innerHTML = ``;

        // Optionally, position the calendar div appropriately
        newCalendarDiv.style.position = "absolute"; // Adjust positioning as needed
        newCalendarDiv.style.top = "0";
        newCalendarDiv.style.left = `${service.offsetWidth}px`; // Place to the right

        calendarContainer.appendChild(newCalendarDiv);
      } else {
        // If calendar div already exists, toggle its visibility
        calendarContainer.firstChild.style.display =
          calendarContainer.firstChild.style.display === "none"
            ? "block"
            : "none";
      }
    });
  });
};
