<?php
class FragmentField extends BaseField {
	static public $fieldname = 'fragment';

	public function input() {
		$html = tpl::load( c::get( 'fragment.snippet.uri', kirby()->roots()->snippets() ) . DS . $this->uri() . '.php', $data = array(
			'field' => $this,
			'page' => $this->page()
		));
		return $html;
	}

	// JS helper
	public function js( $uri ) {
		$out = '';
		if( is_array( $uri ) ) {
			foreach( $uri as $item ) {
				$out .= $this->jsSnippet($item);
			}
		} else {
			$out = $this->jsSnippet($uri);
		}
		return $out;
	}

	// CSS helper
	public function css( $uri ) {
		$out = '';
		if( is_array( $uri ) ) {
			foreach( $uri as $item ) {
				$out .= $this->cssSnippet($item);
			}
		} else {
			$out = $this->cssSnippet($uri);
		}
		return $out;
	}

	// Get JS snippet
	function jsSnippet($uri) {
		$data = f::read( c::get( 'fragment.js.uri', u() ) . '/' . $uri );
		return "\n<script>\n" . $data . "\n</script>\n";
	}

	// Get CSS snippet
	function cssSnippet($uri) {
		$data = f::read( c::get( 'fragment.css.uri', u() ) . '/' . $uri );
		return "\n<style>\n" . $data . "\n</style>\n";
	}
}