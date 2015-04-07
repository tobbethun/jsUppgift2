$(document).ready(function() {
	var container = $('.container'); //sätter variabel
	container.isotope({ //anger variabel till isotope
		sortBy: "random", //sorterar så varje gång sidan laddas så hamnar bilderna olika
		filter: '*', //filter så att alla bilder visas när sidan laddats
		layoutMode: 'fitRows', //layout-modell
	});

	$('.menu li').click(function(e){ //klick-funktion
		$(this).each(function() { //känner av vilket alternativ man klickat på
			var idNumber = e.currentTarget.id; //sätter variabel idNumber får värdet från e i klickfunktionen
			idNumber = idNumber.replace("item-","."); //ändrar början på namnet på id från item- till .
			console.log(this.id); //skriver ut vilket id man klickat på
			// var selector = $(this.id); // sätter variabel selector till klickat alternativ från attribut id
			container.isotope({ //anger variabel till isotope
				filter: idNumber, //filtrerar på variabel idNumber
			});
		});	
	}); 
});