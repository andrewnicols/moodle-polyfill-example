<?php

// 34 + master.

// In core.
interface user_data_provider {
    public static function get_contexts_for_userid(int $userid) : array ;
}

trait user_data_provider_polyfill {
    public static function get_contexts_for_userid(int $userid) : array {
        return static::real_get_contexts_for_userid($userid);
    }
}

interface plugin_provider extends user_data_provider {}
interface subsystem_provider extends user_data_provider {}
