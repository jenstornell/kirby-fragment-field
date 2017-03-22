<?php
class LogicField extends BaseField {
	public function input() {
		return $this->hook($this);
	}

	public function hook($field) {
		$hook = c::get('plugin.logic.field');
		if(is_callable($hook)) {
			$callback = call_user_func_array($hook, array($field, $field->page));
		}
		if($callback) return $callback;
	}
}