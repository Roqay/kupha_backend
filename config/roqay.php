<?php

return [
    'name'=>env("APP_NAME","AMR"),
    'backend_path' => env('BACKEND_PATH', 'admin'),
    'default_language' => env('DEFAULT_LANGUAGE', 'ar'),
    'mail_from_address' => env('MAIL_FROM_ADDRESS', 'email@site.com'),
    'mail_username' => env('MAIL_USERNAME', ''),
    'mail_password' => env('MAIL_PASSWORD', ''),
    'mail_driver' => env('MAIL_DRIVER', ''),
    'mail_host' => env('MAIL_HOST', ''),
    'mail_port' => env('MAIL_PORT', ''),
    'mail_encryption' => env('MAIL_ENCRYPTION', ''),
    'backend_pagination' => env('BACKEND_PAGINATION', 30),
    'frontend_pagination' => env('FRONTEND_PAGINATION', 30),
    'frontend_topics_order' => env('FRONTEND_TOPICS_ORDER', 'desc'),
    'date_format' => env('DATE_FORMAT', 'Y-m-d'),
    'nocaptcha_status' => env('NOCAPTCHA_STATUS', false),
    'geoip_status' => env('GEOIP_STATUS', false),
    'geoip_service' => env('GEOIP_SERVICE', "ipapi"),
    'geoip_service_key' => env('GEOIP_SERVICE_KEY', ""),
    'rss_status' => env('RSS_STATUS', false),
    'facebook_status' => env('FACEBOOK_STATUS', false),
    'facebook_id' => env('FACEBOOK_ID', ""),
    'facebook_secret' => env('FACEBOOK_SECRET', ""),
    'twitter_status' => env('TWITTER_STATUS', false),
    'twitter_id' => env('TWITTER_ID', ""),
    'twitter_secret' => env('TWITTER_SECRET', ""),
    'google_status' => env('GOOGLE_STATUS', false),
    'google_id' => env('GOOGLE_ID', ""),
    'google_secret' => env('GOOGLE_SECRET', ""),
    'linkedin_status' => env('LINKEDIN_STATUS', false),
    'linkedin_id' => env('LINKEDIN_ID', ""),
    'linkedin_secret' => env('LINKEDIN_SECRET', ""),
    'github_status' => env('GITHUB_STATUS', false),
    'github_id' => env('GITHUB_ID', ""),
    'github_secret' => env('GITHUB_SECRET', ""),
    'bitbucket_status' => env('BITBUCKET_STATUS', false),
    'bitbucket_id' => env('BITBUCKET_ID', ""),
    'bitbucket_secret' => env('BITBUCKET_SECRET', ""),
    'google_maps_key' => env('GOOGLE_MAPS_KEY', "true"),
    'first_day_of_week' => env('FIRST_DAY_OF_WEEK', 0),
    'microsoft_id' => env('MICROSOFT_ID', ""),
    'microsoft_secret' => env('MICROSOFT_SECRET', ""),
    'microsoft_status' => env('MICROSOFT_STATUS', false),
    'max_uploaded_file' => env('MAX_UPLOADED_FILE', 10240),
    'db_table_prefix' => env('DB_TABLE_PREFIX' . config('app.name')),
    'video_types' => ['mp4', 'avi', 'mov', 'mkv', 'wmv', 'flv', 'webm'],
    'image_types' => ['jpg', 'jpeg', 'png', 'gif','svg'],
    'audio_types' => ['mp3', 'wav'],
    'powerpoint_types' => ['ppt', 'pptx', 'pptm'],
    "avaliable_languages"=>[
        'ar',
        'en'
    ],
    'allow_mimetypes' => [
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/pdf',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'image/jpeg',
        'image/png',
        'image/gif',
        'application/x-empty'
    ],
    'not_allowed_permission'=>[
        'permissions'=>[
            env('DELIVER_REQUESTS_PERMISSION_ID',12),
            env('RECEIVER_REQUESTS_PERMISSION_ID',8),
            1
        ]
    ],
    'max_number_upload__files'=>5,
    'dasman_url'=>env('DASMAN_URL',''),
    'dasman_api_url'=>env('DASMAN_API_URL',''),
    'un_remove_sections'=>[
        1,2,3,10,12,16,17,19,20,21,22,26
    ],
    'attachments_extenstions'=>[
        'pdf','ppt','pptx','pptm','xlxs','xls',
        'doc', 'docx', 'txt',
    ],
    'allowed_advanced_sections_ids'=>[
        env('DIGITAL_LIBRARY_SECTION_ID'),
        env('EMPLOYEE_DIGITAL_LIBRARY_ID'),
    ]
    ,
];
