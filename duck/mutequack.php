<?php
require_once 'quackbehaviour.php';
class MuteQuack implements QuackBehavior {
	public function quack() {
		echo 'Нет звуков<br>';
	}
}
?> 