<?php
class LogicField extends BaseField {
	public function input() {
		return $this->hook($this);
	}

	public function hook($field) {
		$hook = c::get('plugin.logic.field');
		if(is_callable($hook)) $callback = call($hook, $field);
		if($callback) return $callback;
	}
}