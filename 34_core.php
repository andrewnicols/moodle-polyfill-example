<?php
// This is the set of interfaces for 34 and up.

// This is the polyfill trait.
// It translates real_get_contexts_for_userid into get_contexts_for_userid
// just enforcing the type hints.
trait user_data_provider_polyfill {
    public static function get_contexts_for_userid(int $userid) : array {
        return static::real_get_contexts_for_userid($userid);
    }
}

// These are the standard interfaces already in use.
interface user_data_provider {
    public static function get_contexts_for_userid(int $userid) : array ;
}
interface plugin_provider extends user_data_provider {}
interface subsystem_provider extends user_data_provider {}
