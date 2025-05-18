<?php

/*
 * This file is part of my-vendor/my-theme.
 *
 * Copyright (c) 2023 My Vendor.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use Flarum\Extend;

return [
    // 註冊前端資源 (Forum 部分)
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/variables.less') // 註冊變量 LESS 文件
        ->css(__DIR__.'/less/forum.less'),    // 註冊你的主要 LESS 文件
        // 如果有 JS，可以註冊
        // ->js(__DIR__.'/js/dist/forum.js'), // 如果你需要編譯 JS

    // 註冊前端資源 (Admin 部分，如果需要主題化後台)
    // (new Extend\Frontend('admin'))
    //    ->css(__DIR__.'/less/admin.less'),

    // 其他擴展器...
];