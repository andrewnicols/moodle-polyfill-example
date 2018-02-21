<?php

// This is the set of interfaces for 33 only.

// This is the polyfill trait for 33.
// It differs from the 34 one in that it doesn't specify the type hints and
// just performs a redirect to the real functions.
trait user_data_provider_polyfill {
    public static function get_contexts_for_userid($userid) {
        return static::real_get_contexts_for_userid($userid);
    }
}

// These are the standard interfaces already in use.
// They do not have the type hints etc.
interface user_data_provider {
    public static function get_contexts_for_userid($userid) ;
}
interface plugin_provider extends user_data_provider {}
interface subsystem_provider extends user_data_provider {}
