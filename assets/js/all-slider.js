	// 29. Pricing bar Filter
	$(".filter_price").slider({ 
		from: 0,
		to: 1000000,
		step: 1000,
		smooth: true,
		round: 0,
		dimension: "$",
		skin: "plastic" 
	});
	
	$(".area_filter").slider({ 
		from: 0,
		to: 10000,
		step: 10,
		smooth: true,
		round: 0,
		dimension: "sq ft",
		skin: "plastic" 
	});