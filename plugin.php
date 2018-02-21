<?php
// This is the provider for a plugin implementing both..
// The only difference with a normal plugin
class provider implements plugin_provider {
    use user_data_provider_polyfill;

    protected static function real_get_contexts_for_userid($userid) {
        return [
            $userid,
        ];
    }
}
