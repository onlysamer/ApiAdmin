<?php
$afterBehavior = ['\app\admin\behavior\ApiAuth', '\app\admin\behavior\ApiPermission'];

return [
    '[admin]' => [
        'Login/index'       => [
            'admin/Login/index',
            ['method' => 'post']
        ],
        'Login/logout'      => [
            'admin/Login/logout',
            ['method' => 'get']
        ],
        'Menu/index'        => [
            'admin/Menu/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Menu/changeStatus' => [
            'admin/Menu/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Menu/add'          => [
            'admin/Menu/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Menu/edit'         => [
            'admin/Menu/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Menu/del'          => [
            'admin/Menu/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'User/index'        => [
            'admin/User/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'User/getUsers'        => [
            'admin/User/getUsers',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'User/changeStatus' => [
            'admin/User/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'User/add'          => [
            'admin/User/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'User/edit'         => [
            'admin/User/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'User/del'          => [
            'admin/User/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/index'        => [
            'admin/Auth/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/changeStatus' => [
            'admin/Auth/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/delMember' => [
            'admin/Auth/delMember',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/add'          => [
            'admin/Auth/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Auth/edit'         => [
            'admin/Auth/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Auth/del'          => [
            'admin/Auth/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/getGroups'          => [
            'admin/Auth/getGroups',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Auth/getRuleList'         => [
            'admin/Auth/getRuleList',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'App/index'        => [
            'admin/App/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'App/changeStatus' => [
            'admin/App/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'App/getAppInfo' => [
            'admin/App/getAppInfo',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'App/add'          => [
            'admin/App/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'App/edit'         => [
            'admin/App/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'App/del'          => [
            'admin/App/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/index'        => [
            'admin/InterfaceList/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/changeStatus' => [
            'admin/InterfaceList/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/getHash' => [
            'admin/InterfaceList/getHash',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/add'          => [
            'admin/InterfaceList/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/edit'         => [
            'admin/InterfaceList/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceList/del'          => [
            'admin/InterfaceList/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Fields/index'        => [
            'admin/Fields/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Fields/request' => [
            'admin/Fields/request',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Fields/response' => [
            'admin/Fields/response',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'Fields/add'          => [
            'admin/Fields/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Fields/upload'          => [
            'admin/Fields/upload',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Fields/edit'         => [
            'admin/Fields/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'Fields/del'          => [
            'admin/Fields/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/index'        => [
            'admin/InterfaceGroup/index',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/add'          => [
            'admin/InterfaceGroup/add',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/edit'         => [
            'admin/InterfaceGroup/edit',
            ['method' => 'post', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/del'          => [
            'admin/InterfaceGroup/del',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/getAll'          => [
            'admin/InterfaceGroup/getAll',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        'InterfaceGroup/changeStatus' => [
            'admin/InterfaceGroup/changeStatus',
            ['method' => 'get', 'after_behavior' => $afterBehavior]
        ],
        '__miss__'          => ['admin/Miss/index'],
    ],
];
