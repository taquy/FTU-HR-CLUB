<?php

return [
    'menu' => [
        'dashboard' => 'Dashboard',
        'admin_users' => 'Admin Users',
        'users' => 'Users',
        'site-configuration' => 'Site Configuration',
    ],
    'messages' => [
        'general' => [
            'update_success' => 'Successfully updated.',
            'create_success' => 'Successfully created.',
            'delete_success' => 'Successfully deleted.',
        ],
    ],
    'errors' => [
        'general' => [
            'save_failed' => 'Failed To Save. Please contact with developers',
        ],
        'requests' => [
            'me' => [
                'email' => [
                    'required' => 'Email Required',
                    'email' => 'Email is not valid',
                ],
                'password' => [
                    'min' => 'Password need at least 6 letters',
                ],
            ],
        ],
    ],
    'pages' => [
        'common' => [
            'buttons' => [
                'create' => 'Create New',
                'edit' => 'Edit',
                'save' => 'Save',
                'delete' => 'Delete',
                'cancel' => 'Cancel',
                'add' => 'Add',
                'preview' => 'Preview',
                'forgot_password' => 'Send Me Email!',
                'reset_password' => 'Reset Password',
            ],
        ],
        'auth' => [
            'buttons' => [
                'sign_in' => 'Sign In',
                'forgot_password' => 'Send Me Email!',
                'reset_password' => 'Reset Password',
            ],
            'messages' => [
                'remember_me' => 'Remember Me',
                'please_sign_in' => 'Sign in to start your session',
                'forgot_password' => 'I forgot my password',
                'reset_password' => 'Please enter your e-mail address and new password',
            ],
        ],
        'site-configurations' => [
            'columns' => [
                'locale' => 'Locale',
                'name' => 'Name',
                'title' => 'Title',
                'keywords' => 'Keywords',
                'description' => 'Descriptions',
                'ogp_image_id' => 'OGP Image',
                'twitter_card_image_id' => 'Twitter Card Image',
            ],
        ],
        'articles' => [
            'columns' => [
                'slug' => 'Slug',
                'title' => 'Title',
                'keywords' => 'Keywords',
                'description' => 'Description',
                'content' => 'Content',
                'cover_image_id' => 'Cover Image',
                'locale' => 'Locale',
                'is_enabled' => 'Active',
                'publish_started_at' => 'Publish Started At',
                'publish_ended_at' => 'Publish Ended At',
                'is_enabled_true' => 'Enabled',
                'is_enabled_false' => 'Disabled',

            ],
        ],
        'user-notifications' => [
            'columns' => [
                'user_id' => 'User',
                'category_type' => 'Category',
                'type' => 'Type',
                'data' => 'Data',
                'locale' => 'Locale',
                'content' => 'Content',
                'read' => 'Read',
                'read_true' => 'Read',
                'read_false' => 'Unread',
                'sent_at' => 'Sent At',
            ],
        ],
        'admin-user-notifications' => [
            'columns' => [
                'user_id' => 'User',
                'category_type' => 'Category',
                'type' => 'Type',
                'data' => 'Data',
                'locale' => 'Locale',
                'content' => 'Content',
                'read' => 'Read',
                'read_true' => 'Read',
                'read_false' => 'Unread',
                'sent_at' => 'Sent At',
            ],
        ],
        'images' => [
            'columns' => [
                'url' => 'URL',
                'title' => 'Title',
                'is_local' => '',
                'entity_type' => 'EntityType',
                'entity_id' => 'ID',
                'file_category_type' => 'Category',
                's3_key' => '',
                's3_bucket' => '',
                's3_region' => '',
                's3_extension' => '',
                'media_type' => 'Media Type',
                'format' => 'Format',
                'file_size' => 'File Size',
                'width' => 'Width',
                'height' => 'Height',
                'has_alternative' => '',
                'alternative_media_type' => '',
                'alternative_format' => '',
                'alternative_extension' => '',
                'is_enabled' => 'Status',
                'is_enabled_true' => 'Enabled',
                'is_enabled_false' => 'Disabled',
            ],
        ],

        'users' => [
            'columns' => [
                'name' => 'Name'
            ]
        ],

        'files'   => [
            'columns'  => [
                'id' => 'ID',
                'url' => 'URL',
                'title' => 'Title',
                'entity_type' => 'Entity Type',
                'entity_id' => 'Entity ID',
                'file_category_type' => 'File Category Type',
                's3_key' => 'S3 Key',
                's3_bucket' => 'S3 Bucket',
                's3_region' => 'S3 Region',
                's3_extension' => 'S3 Extension',
                'media_type' => 'Media Type',
                'content_type' => 'ContentType',
                'file_size' => 'File Size',
                'is_enabled' => 'Enabled',
                'is_enabled_true' => 'Enabled'
            ],
        ],
        'user-informations'   => [
            'columns'  => [
                'user_id' => 'User ID',
                'fullname' => 'Fullname',
                'phone_number' => 'Phone Number',
                'university' => 'University',
                'graduated_year' => 'Graduted Year',
                'major' => 'Major',
                'major2' => 'Major 2',
                'cv_id' => 'CV ID',
                'personality' => 'Personality',
                'is_enabled' => 'Enabled',
                'is_enabled_true' => 'Enabled',
                'is_enabled_false' => 'Disabled'
            ],
        ],
        'user-tests'   => [
            'columns'  => [
                'user_id' => 'User ID',
                'city' => 'City',
                'submitted_at' => 'Submitted At',
                'is_enabled' => 'Enabled',
                'is_enabled_true' => 'Enabled',
                'is_enabled_false' => 'Disabled'
            ],
        ],
        'user-answers'   => [
            'columns'  => [
                'user_id' => 'User ID',
                'question_id' => 'Question ID',
                'answer' => 'Answer',
                'is_enabled' => 'Enabled',
                'is_enabled_true' => 'Enabled',
                'is_enabled_false' => 'Disabled'
            ],
        ],
        /* NEW PAGE STRINGS */
    ],
    'roles' => [
        'super_user' => 'Super User',
        'site_admin' => 'Site Administrator',
    ],
];
