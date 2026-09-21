document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
	button.addEventListener('click', () => {
		document.documentElement.classList.toggle('light-theme');
		button.setAttribute('aria-pressed', document.documentElement.classList.contains('light-theme').toString());
	});
});
