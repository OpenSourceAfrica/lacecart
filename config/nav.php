<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

return [

    'nav' => [
                'tree' => [
                            [
                                'name'     => 'Home',
                                'href'     => $request_base . '/home',
                            ],
                            [
                                'name'     => 'Catalog',
                                'href'     => '#',
                                'children' => [
                                    [
                                        'name' => 'Categories',
                                        'href' => $request_base . '/categories'
                                    ],
                                    [
                                        'name' => 'Products',
                                        'href' => $request_base . '/products'
                                    ],
                                    [
                                        'name' => 'Digital Products',
                                        'href' => $request_base . '/digital'
                                    ],
                                    [
                                        'name' => 'Locations',
                                        'href' => $request_base . '/locations'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Users',
                                'href' => '#',
                                'children' => [
                                    [
                                        'name' => 'Customers',
                                        'href' => $request_base . '/customers'
                                    ],
                                    [
                                        'name' => 'Admin',
                                        'href' => $request_base . '/admin'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Cost Management',
                                'href' => '#',
                                'children' => [
                                    [
                                        'name' => 'Deliver Fees',
                                        'href' => $request_base . '/deliveryfee'
                                    ],
                                    [
                                        'name' => 'Coupon',
                                        'href' => $request_base . '/coupon'
                                    ]
                                ]
                            ],
                            [
                                'name'     => 'Orders',
                                'href'     => $request_base . '/orders',
                            ],
                            [
                                'name' => 'Reports',
                                'href' => '#',
                                'children' => [
                                    [
                                        'name' => 'Revenue Report',
                                        'href' => $request_base . '/revenue'
                                    ],
                                    [
                                        'name' => 'Customer Order History',
                                        'href' => $request_base . '/customerorder'
                                    ],
                                    [
                                        'name' => 'Sales Item',
                                        'href' => '#',
                                        'children' => [
                                            [
                                                'name' => 'Category',
                                                'href' => $request_base . '/sales-category'
                                            ],
                                            [
                                                'name' => 'Product Items',
                                                'href' => $request_base . '/product-items'
                                            ]
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Content',
                                'href' => '#',
                                'children' => [
                                    [
                                        'name' => 'Banners',
                                        'href' => $request_base . '/banners'
                                    ],
                                    [
                                        'name' => 'Boxes',
                                        'href' => $request_base . '/boxes'
                                    ],
                                    [
                                        'name' => 'Pages',
                                        'href' => $request_base . '/pages'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Settings',
                                'href' => '#',
                                'children' => [
                                    [
                                        'name' => 'Payment',
                                        'href' => $request_base . '/payment'
                                    ],
                                    [
                                        'name' => 'Shipping',
                                        'href' => $request_base . '/shipping'
                                    ],
                                    [
                                        'name' => 'Canned Messages',
                                        'href' => $request_base . '/canned'
                                    ],
                                    [
                                        'name' => 'Configuration',
                                        'href' => $request_base . '/configuration'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Logout',
                                'href' => $request_base . '/account/logout'
                            ]
                ],

                'config' => [
                                'top' => [
                                    'node'  => 'ul',
                                    'id'    => 'main-nav'
                                ],
                                'parent' => [
                                    'node'  => 'ul',
                                    'id'    => 'nav',
                                    'class' => 'level'
                                ],
                                'child' => [
                                    'node'  => 'li',
                                    'id'    => 'menu',
                                    'class' => 'item'
                                ],
                                'on'  => 'link-on',
                                'off' => 'link-off',
                                'indent' => '    '
                ]
    ]
];