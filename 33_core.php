<?php

// For Moodle 3.3.

// In core:
interface legacy_user_data_provider {
    public static function get_contexts_for_userid($userid) ;
}

interface legacy_plugin_provider extends legacy_user_data_provider {}
interface legacy_subsystem_provider extends legacy_user_data_provider {}

interface user_data_provider extends legacy_user_data_provider {}
interface plugin_provider extends legacy_user_data_provider {}
interface subsystem_provider extends legacy_user_data_provider {}
