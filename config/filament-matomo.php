<?php

return [

    'enabled' => env('FILAMENT_MATOMO_ENABLED', false),

    'base_url' => env('FILAMENT_MATOMO_BASE_URL'),

    'tracker_filename' => env('FILAMENT_MATOMO_TRACKER_FILENAME', 'matomo.php'),

    'site_id' => env('FILAMENT_MATOMO_SITE_ID'),

];
