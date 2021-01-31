$('.overlay').on('click', function() {
	$(this).hide();
	$('.modal:visible').hide();
});

function showModal(modal) {
	$('.overlay').show();
	$(`.${modal}`).show();
}

function closeModal() {
	$('.overlay').hide();
	$('.modal:visible').hide();
}