<?php

function set_active($path, $active= "active"){
	return in_array($path, Request::segments()) ? $active : "";
}