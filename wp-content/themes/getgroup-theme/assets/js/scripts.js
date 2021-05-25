jQuery(document).ready(function() {
    jQuery(".menu-item-24").click(function(){
    	jQuery( ".row.main-section .dropdown-menu.megamenu-button" ).toggleClass( "active" );
		 jQuery( ".row.main-section .dropdown-menu.megamenu-tabbed" ).removeClass( "active" );
	});
	jQuery(".menu-item-25").click(function(){
    	jQuery( ".row.main-section .dropdown-menu.megamenu-tabbed" ).toggleClass( "active" );
    	jQuery( ".row.main-section .dropdown-menu.megamenu-button" ).removeClass( "active" );
		  //jQuery( ".row.main-section .dropdown-menu.megamenu" ).addclass( "active" );
	});
});

    

