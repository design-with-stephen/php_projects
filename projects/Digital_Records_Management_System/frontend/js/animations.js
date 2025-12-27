// creating a function to hold the observer

function animationObserver(className, classToAdd) {
	// create an Observer
	const observer = new IntersectionObserver((entries) => {
		
        entries.forEach((entry) => {

			if (entry.isIntersecting) {
				entry.target.classList.add(classToAdd);
			} else {
				entry.target.classList.remove(classToAdd);
			}

		});
	});
	
	const hiddenElements = document.querySelectorAll(className);

	hiddenElements.forEach((el) => {
		observer.observe(el);
	});
}
// calling the function for different section animations on the page/ website
animationObserver('toBottom',"showFromBottom");
animationObserver('toLeft',"showFromLeft");
animationObserver('toRight',"showFromRight");
