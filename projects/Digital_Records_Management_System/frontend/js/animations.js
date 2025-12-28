// Scroll Animation with Intersection Observer
function scrollAnimation({
	selector = '.animate',
	showClass = 'show',
	delayStep = 100,
	// threshold = 0.2
} = {}) {
	const elements = document.querySelectorAll(selector);
	const observer = new IntersectionObserver(
		(entries) => {

			entries.forEach((entry) => {

				if (entry.isIntersecting) {
					
					const index = [...elements].indexOf(entry.target);
					entry.target.style.transitionDelay = `${index * delayStep}ms`;
					entry.target.classList.add(showClass);

					observer.unobserve(entry.target);
				}
			});
		},
		// { threshold }
	);

	elements.forEach(el => observer.observe(el));
}

// INIT
scrollAnimation();


