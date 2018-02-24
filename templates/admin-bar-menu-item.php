<?php
/**
 * Template for rendering the admin bar item html
 *
 * @package    Foundation_Grid_Helper
 * @version    1.0.0
 * @license    GPL-3.0+
 * @link       https://github.com/barryceelen/wp-foundation-grid-helper
 * @copyright  2018 Barry Ceelen
 */

?>

<style>
#wpadminbar #wp-admin-bar-foundation-grid-helper .ab-icon {
	cursor: pointer;
	transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
}
#wpadminbar #wp-admin-bar-foundation-grid-helper .ab-item {
	padding: 0 4px;
}
#wpadminbar #wp-admin-bar-foundation-grid-helper .ab-icon:before {
	content: "\f214";
	bottom: 3px;
	left: 2px;
}
#foundation-grid-helper {
	position: fixed;
	top: 0;
	left: 0;
	bottom: 0;
	width: 100%;
	z-index: 999999999;
	pointer-events: none;
}
#foundation-grid-helper .grid-container,
#foundation-grid-helper .grid-x {
	height: 100%;
}
#foundation-grid-helper .grid-container {
	background-color: rgba(0,0,0,.1);
}
#foundation-grid-helper .cell {
	height: 100%;
	background-color: rgba(0,0,0,.1);
}
#foundation-grid-helper .cell:nth-of-type(even) {
	background-color: rgba(0,0,0,.2);
}
#foundation-grid-helper .cell-filler {
	height: 100%;
	border-left: 1px solid rgba(0,0,0,.1);
	border-right: 1px solid rgba(0,0,0,.1);
	width: 100%;
}
</style>
<script>
(function ($) {
	'use strict';
	$(function () {
		$('#wp-admin-bar-foundation-grid-helper').on( 'click', function( e ) {
			e.preventDefault();
			var $g = $( '#foundation-grid-helper' );
			if ( $g.length  ) {
				$g.remove();
			} else {
				$g = $( $( '#foundation-grid-helper-tmpl' ).html() ).appendTo( 'body' );
			}
		});
	});
}(jQuery));
</script>
<script type="text/html" id="foundation-grid-helper-tmpl">
<div id="foundation-grid-helper">
<div class="grid-container">
<div class="grid-x grid-padding-x">
<?php
for ( $foundation_grid_helper_i = 0; $foundation_grid_helper_i < 12; $foundation_grid_helper_i++ ) {
	echo '<div class="cell small-1"><div class="cell-filler"></div></div>'; // WPCS: XSS ok.
}
?>
</div>
</script>

