<?php

/**
 * Class Name: My_Walker_Nav_Menu
 * GitHub URI: https://gitlab.com/nicgene/bs4navwalker
 * Description: A custom WordPress nav walker class for Bootstrap 4 nav menus in a custom theme using the WordPress built in menu manager.
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// свой класс построения меню:
class My_Walker_Nav_Menu extends Walker_Nav_Menu {

	// Добавление ul для подменю
	function start_lvl(&$output, $depth = 0, $args = NULL) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sub-menu',
			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			// 'menu-depth-' . $display_depth
			);
		$class_names = implode( ' ', $classes );

		// build html
		$output .= "\n" . $indent . '<ul >' . "\n";
	}

	// add main/sub classes to li's and links
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )  {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		$depth_classes = array(
			( $depth == 0 ? 'justify-content-center ' : '' ),
			( $depth >=1 ? '' : '' ),
			( $depth % 2 ? '' : '' ),
			// 'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );


		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		// $classes = empty( $item->classes ) ? array() : array('dropdown') ;
#		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        if (in_array("menu-item-has-children", $classes ))
            $class_names = "dropdown";
            // $attributes .= ' class="dropdown-toggle"';

            # code...

        else
            $class_names = null;

		$output .= $indent . '<li  id="menu-'. $item->ID . '" class="' . $depth_class_names . ' '. $class_names.'">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';






        // $attributes .=  $depth > 0 ? '' : ' data-toggle="dropdown-submenu"';
        // $attributes .=  $depth > 0 ? '' : ' aria-expanded="false"';

        if(in_array("menu-item-has-children", $classes )):
            $attributes .= ' class="justify-content-center"';
            $attributes .= ' data-toggle="dropdown-submenu"';
            $attributes .= ' aria-expanded="false"';
			$attributes .= ' style= "text-align:center"';
			$argsbefore .=' <label class="checkboxMenu" style="display:none"><input type="checkbox" class="checkDown" ></label>';
        elseif($depth > 0): // Заметьте, тут одно слово.
			$attributes .= ' style= "text-align:center"';
			$argsbefore = "";
        else:
            $attributes .= 'class="justify-content-center"';
			$attributes .= ' style= "text-align:center"';

			$argsbefore = "";

        endif;




            #
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$argsbefore,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
};
?>
