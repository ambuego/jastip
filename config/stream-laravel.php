<?php

return [

    /*
    |-----------------------------------------------------------------------------
    | Your GetStream.io API credentials (you can them from getstream.io/dashboard)
    |-----------------------------------------------------------------------------
    |
    */

    'api_key' => 'a6gaf57wepad',
    'api_secret' => 'b7nnyn5r37m8t9cwgcfhkzt3qm348xuf8ndju475ptm3yxu3hyqezvcynra9jrhb',
    'api_app_id' => '34296',
    /*
    |-----------------------------------------------------------------------------
    | Client connection options
    |-----------------------------------------------------------------------------
    |
    */
    'location' => 'us-east',
    'timeout' => 3,
    /*
    |-----------------------------------------------------------------------------
    | The default feed manager class
    |-----------------------------------------------------------------------------
    |
    */

    'feed_manager_class' => 'GetStream\StreamLaravel\StreamLaravelManager',

    /*
    |-----------------------------------------------------------------------------
    | The feed that keeps content created by its author
    |-----------------------------------------------------------------------------
    |
    */
    'user_feed' => 'user',
    /*
    |-----------------------------------------------------------------------------
    | The feed containing notification activities
    |-----------------------------------------------------------------------------
    |
    */
    'notification_feed' => 'notification',
    /*
    |-----------------------------------------------------------------------------
    | The feeds that shows activities from followed user feeds
    |-----------------------------------------------------------------------------
    |
    */
    'news_feeds' => array(
        'timeline' => 'timeline',
        'timeline_aggregated' => 'timeline_aggregated',
    )
];
