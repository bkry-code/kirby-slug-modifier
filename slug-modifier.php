<?php
function PluginSlugModifier() {
	$items = array();
	$root = kirby()->roots()->plugins() . DS . 'slug-replace';
	$dir = $root . DS  . 'set';
	$file = $dir . DS . c::get('plugin.slug.modifier.set') . '.php';
	$replaces = c::get('plugin.slug.modifier.replace.items');
	$removes = c::get('plugin.slug.modifier.remove.items');

	if( file_exists( $file ) ) {
		include $file;
	}

	if( ! empty( $replaces ) && is_array( $replaces ) ) {
		foreach( $replaces as $key => $replace ) {
			$replace_array['/' .$key . '/'] = $replace;
		}
		$items = a::merge( $items, $replace_array );
	}

	if( ! empty( $removes ) && is_array( $removes ) ) {
		foreach( $removes as $remove ) {
			$remove_array['/' . $remove . '/'] = '';
		}
		$items = a::merge( $items, $remove_array );
	}

	str::$ascii = a::merge(str::$ascii, $items );
}

PluginSlugModifier();