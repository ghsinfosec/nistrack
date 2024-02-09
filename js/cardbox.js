// cardbox.js - create a "lightbox"-like effect when clicking on card elements

const cards = document.querySelectorAll('.card');
const modals = document.querySelectorAll('.modal');
const overlay = document.querySelector('.overlay');

const openModal = (modal) => {
	modal.classList.remove('hidden');
	overlay.classList.remove('hidden');
}

const closeModal = (modal) => {
	modal.classList.add('hidden');
	overlay.classList.add('hidden');
}

cards.forEach((card, index) => {
	card.addEventListener('click', () => {
		openModal(modals[index]);
		});
});

overlay.addEventListener('click', () => {
	modals.forEach(modal => {
		closeModal(modal);
	});
});

