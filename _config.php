<?php

// set different $_SERVER Var for remote address
if(defined('GEOIP_SERVER_VAR')) Geoip::set_default_server_var(GEOIP_SERVER_VAR);