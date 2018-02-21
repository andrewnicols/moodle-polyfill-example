<?php

require_once('34_core.php');
require_once('plugin.php');

$eg42 = provider::get_contexts_for_userid(42);
var_dump($eg42);
