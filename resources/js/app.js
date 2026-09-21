document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
	button.addEventListener('click', () => {
		document.documentElement.classList.toggle('light-theme');
		button.setAttribute('aria-pressed', document.documentElement.classList.contains('light-theme').toString());
	});
});

const projectFilters = document.querySelectorAll('[data-project-filter]');
const projectCards = document.querySelectorAll('[data-project-card]');

projectFilters.forEach((filter) => {
	filter.addEventListener('click', () => {
		const selectedCategory = filter.dataset.projectFilter;

		projectFilters.forEach((button) => {
			const isSelected = button === filter;
			button.setAttribute('aria-pressed', isSelected.toString());
			button.classList.toggle('border-gold', isSelected);
			button.classList.toggle('bg-gold', isSelected);
			button.classList.toggle('text-ink', isSelected);
			button.classList.toggle('border-white/10', !isSelected);
			button.classList.toggle('text-muted', !isSelected);
		});

		projectCards.forEach((card) => {
			card.hidden = selectedCategory !== 'All' && card.dataset.projectCategory !== selectedCategory;
		});
	});
});
