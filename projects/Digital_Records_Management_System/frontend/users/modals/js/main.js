document.querySelectorAll(".dropdown-toggle").forEach(toggle => {
  toggle.addEventListener("click", () => {
    const parent = toggle.closest(".has-dropdown");

    // Close other dropdowns
    document.querySelectorAll(".has-dropdown").forEach(item => {
      if (item !== parent) {
        item.classList.remove("active");
      }
    });

    // Toggle current dropdown
    parent.classList.toggle("active");
  });
});
