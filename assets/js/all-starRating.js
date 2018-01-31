function ratingEnable() {

        $('#example-reversed, .select_option').barrating('show', {
            theme: 'bars-reversed',
            showSelectedRating: true,
        });
		
		$('.select_option').barrating('show', {
            theme: 'bars-reversed',
            showSelectedRating: true,
			showValues: true,
        });
    }

    function ratingDisable() {
        $('select').barrating('destroy');
    }



    ratingEnable();

    /* off by rumi */