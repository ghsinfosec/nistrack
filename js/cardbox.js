// cardbox.js - create a "lightbox"-like effect when clicking on card elements

const cards = document.querySelectorAll('.card');

cards.forEach((card) => {
	card.addEventListener('click', (e) => {
		e.target.style.transform = "scale(4)";
	})
})
