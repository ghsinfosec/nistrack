// cardbox.js - create a "lightbox"-like effect when clicking on card elements

const cards = document.querySelectorAll('.card');
const cardContent = document.querySelectorAll('.card-content');

cardContent.forEach((content) => {
	content.style.display = "none";
})

cards.forEach((card) => {
	card.addEventListener('click', () => {
		let cardContent = card.querySelector('.card-content');

		card.classList.toggle('card-clicked');
		card.classList.toggle('card');

		if (cardContent.style.display === "block") {
			cardContent.style.display = "none";
		} else {
			cardContent.style.display = "block";
		}
	});
});
