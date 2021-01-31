$('#catalog').on('submit', function(e) {
    e.preventDefault();
    if (noValidate($(this))) {
        return
    }
	var fd = new FormData(this);
	new URL(window.location.href).searchParams.forEach(function(value, key) {
		fd.append(key, value);
	});
	$.ajax({
        url: './action.php',
        type: 'POST',
        contentType: false,
        processData: false,
        data: fd,
        success: function(){
            try {
              yaCounter65984053.reachGoal('CATALOG-SENDFORM');
            } catch(e) {
              console.log(e);
            }
			closeModal();
			showModal('thanks-modal');
			setTimeout(function () {
				window.location.href = "/thanks.html";
			}, 2000);
        },
	});
});