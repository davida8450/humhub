<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2017-06-01 17:50:41
 */
return [
    'all' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot-static',
        'baseUrl' => '@web-static',
        'js' => [
            'js/all-fedc7c1969a43dcc4dc6c01d275ef574.js',
        ],
        'css' => [
            'css/all-f3df348618e1b371f6a5c7414de1ac08.css',
        ],
        'sourcePath' => null,
        'depends' => [],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\jui\\JuiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'all',
        ],
    ],
    'humhub\\assets\\JuiBootstrapBridgeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\jui\\JuiAsset',
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapPluginAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'humhub\\assets\\JuiBootstrapBridgeAsset',
            'all',
        ],
    ],
    'humhub\\assets\\BluebirdAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryTimeAgoAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryWidgetAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryColorAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryPlaceholderAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\FontAwesomeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\BlueimpFileUploadAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\JqueryWidgetAsset',
            'all',
        ],
    ],
    'humhub\\assets\\JqueryHighlightAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryCookieAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\JqueryAutosizeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\CaretJsAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\AtJsStyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\AtJsAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\CaretJsAsset',
            'humhub\\assets\\AtJsStyleAsset',
            'all',
        ],
    ],
    'humhub\\assets\\AnimateCssAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\CoreApiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'yii\\bootstrap\\BootstrapPluginAsset',
            'humhub\\assets\\BluebirdAsset',
            'all',
        ],
    ],
    'humhub\\modules\\user\\assets\\UserAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\modules\\live\\assets\\LiveAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\modules\\notification\\assets\\NotificationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\modules\\content\\assets\\ContentAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\CoreApiAsset',
            'all',
        ],
    ],
    'humhub\\modules\\content\\assets\\ContentContainerAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\Select2Asset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'all',
        ],
    ],
    'humhub\\assets\\Select2BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\Select2Asset',
            'all',
        ],
    ],
    'humhub\\modules\\user\\assets\\UserPickerAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\Select2BootstrapAsset',
            'all',
        ],
    ],
    'humhub\\modules\\file\\assets\\FileAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\CoreApiAsset',
            'all',
        ],
    ],
    'humhub\\modules\\post\\assets\\PostAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\CoreApiAsset',
            'all',
        ],
    ],
    'humhub\\modules\\space\\assets\\SpaceAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\modules\\comment\\assets\\CommentAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\CoreApiAsset',
            'all',
        ],
    ],
    'humhub\\assets\\NProgressAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\IE9FixesAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\Html5shivAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\IEFixesAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\Html5shivAsset',
            'all',
        ],
    ],
    'humhub\\assets\\PagedownConverterAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\ClipboardJsAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'humhub\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'yii\\bootstrap\\BootstrapPluginAsset',
            'humhub\\assets\\BluebirdAsset',
            'humhub\\assets\\JqueryTimeAgoAsset',
            'humhub\\assets\\JqueryWidgetAsset',
            'humhub\\assets\\JqueryColorAsset',
            'humhub\\assets\\JqueryPlaceholderAsset',
            'humhub\\assets\\FontAwesomeAsset',
            'humhub\\assets\\BlueimpFileUploadAsset',
            'humhub\\assets\\JqueryHighlightAsset',
            'humhub\\assets\\JqueryCookieAsset',
            'humhub\\assets\\JqueryAutosizeAsset',
            'humhub\\assets\\AtJsAsset',
            'humhub\\assets\\AnimateCssAsset',
            'humhub\\assets\\CoreApiAsset',
            'humhub\\modules\\user\\assets\\UserAsset',
            'humhub\\modules\\live\\assets\\LiveAsset',
            'humhub\\modules\\notification\\assets\\NotificationAsset',
            'humhub\\modules\\content\\assets\\ContentAsset',
            'humhub\\modules\\content\\assets\\ContentContainerAsset',
            'humhub\\modules\\user\\assets\\UserPickerAsset',
            'humhub\\modules\\file\\assets\\FileAsset',
            'humhub\\modules\\post\\assets\\PostAsset',
            'humhub\\modules\\space\\assets\\SpaceAsset',
            'humhub\\modules\\comment\\assets\\CommentAsset',
            'humhub\\assets\\NProgressAsset',
            'humhub\\assets\\IE9FixesAsset',
            'humhub\\assets\\IEFixesAsset',
            'humhub\\assets\\PagedownConverterAsset',
            'humhub\\assets\\ClipboardJsAsset',
            'all',
        ],
    ],
];