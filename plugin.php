<?php

// My plugin.
trait my_actual_provider {
    protected static function real_get_contexts_for_userid($userid) {
        return [
            $userid,
        ];
    }
}

// In your plugin.
if (interface_exists('legacy_user_data_provider')) {
    class provider implements legacy_plugin_provider {
        use my_actual_provider {
            real_get_contexts_for_userid as public get_contexts_for_userid;
        }
    }
} else {
    class provider implements plugin_provider {
        use my_actual_provider;
        use user_data_provider_polyfill;
    }
}
