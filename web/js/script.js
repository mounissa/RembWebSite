 $(document).ready(function() {
//	 $('#dialog').dialog({
//		   autoOpen: false,
//		   width: "auto",
//		   modal: true,
//		   show: 'fadeIn(3000)',
//		   close:function(){
//			   $("body").css({
//			        background:"none"
//			        	
//			   });
//		   }
//	 });
//	
//	  $( "#connexion" ).click(function( event ) {
//	      // cette ligne est très importante pour empêcher les liens ou les boutons de rediriger
//	      // vers une autre page avant que l'usager ait cliqué dans le popup
//	      event.preventDefault();
//	      $("body").css({
//		        background:"rgb(0, 0, 0)",
//		        opacity: ".10 !important",
//		        filter: "Alpha(Opacity=10)",
//		   });
//	      $("#login").val(" ");
//	      $("#mdp").val(" ");
//	      // affichage du popup
//	      $( "#dialog" ).dialog( "open" );
//		
//	  });
//	  $( "#connexion-small" ).click(function( event ) {
//	      // cette ligne est très importante pour empêcher les liens ou les boutons de rediriger
//	      // vers une autre page avant que l'usager ait cliqué dans le popup
//	      event.preventDefault();
//	      $("body").css({
//		        background:"rgb(0, 0, 0)",
//		        opacity: ".10 !important",
//		        filter: "Alpha(Opacity=10)",
//		   });
//	      $('#dialog').css('overflow', 'hidden'); 
//	      // affichage du popup
//	      $( "#dialog" ).dialog( "open" );
//	     
//		
//	  });
//	 
	  $('#calendar').fullCalendar({
				lang:'fr',
				header: {
					left: 'title',
					center:'',
					right: ' prev,today,next'
				},
				
				defaultDate: '2016-05-12',
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'Journée culturel',
						start: '2016-05-10',
						end: '2016-05-15'
					},
					{
						title: 'Sortie sénat',
						start: '2016-05-04',
						end: '2016-05-06'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2016-01-28'
					}
				]
			});
	  
			
			
});