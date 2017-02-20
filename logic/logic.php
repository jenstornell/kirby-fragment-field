<?php
class LogicField extends BaseField {
	public function input() {
		ob_start();
		kirby()->trigger('pluginLogicField', array(
			$this,
			$this->page(),
		));
		$out = ob_get_contents();
		ob_end_clean();

		return $out;
	}
}