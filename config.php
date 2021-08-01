<?php
function autoloadCore($class){
	require_once "core/{$class}.php";
}
spl_autoload_register("autoloadCore");