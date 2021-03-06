<?php

return [
	'subscriptions' => [
		'FREE' => [
			'/',
			'/page/:name',
			'/market/prequalification',
			'/page/iframe/src',
			'/page/notification/get',
			'/financial-statements',
			'/financial-statements/:symbol',
			'/data-table/financial-statements/:symbol',
			'/portfolio',
			'/portfolio/save-preview',
			'/transactions',
			'/workflow/order',
			'/place-order/:id',
			'/transaction/cancel',
			'/get-transactions-chart',
			'/portfolio/get-currency-list',
			'/portfolio/get-broker-list',
			'/portfolio/get-currency-rate',
			'/portfolio/get-company',
			'/transaction/edit/:id',
			'/portfolio/get-company-price',
			'/portfolio/get-broker-fee',
			'/stocks/list/event',
			'/stocks/list',
			'/symbol/:stock',
			'/options/:stock',
			'/analysis/sector/:symbol',
			'/analysis/sector/modal/:symbol',
			'/analysis/industry/:symbol',
			'/analysis/add/:symbol',
			'/analysis/print',
			'/analysis/print-word',
			'/analysis/editPartial',
			'/analysis/approve',
			'/analysis/make-copy',
			'/analysis/share-with-team',
			'/analysis/detail/:key',
			'/analysis/add-modal',
			'/analysis/delete',
			'/analysis/chart/:symbol',
			'/analysis/all',
			'/analysis/:stock/*',
			'/watchlist/all',
			'/watchlist/delete/:id',
			'/watchlist/all/get/:group_id',
			'/watchlist/verify',
			'/watchlist/create',
			'/watchlist/edit',
			'/watchlist/toggle',
			'/watchlist/get',
			'/watchlist/get-sub',
			'/watchlist/get/all',
			'/watchlist/stocks',
			'/dashboard',
			'/forex',
			'/forex/symbol/:currency',
			'/getMessage/info',
			'/post/delete',
			'/message/read-notification',
			'/login',
			'/register',
			'/subscribe',
			'/subscription',
			'/profile',
			'/logout',
			'/profile/edit/:id',
			'/profile/edit/simulation/:id',
			'/profile/charts',
			'/profile',
			'/profile/comments',
			'/profile/private-post',
			'/profile/alerts',
			'/private/edit/:edit',
			'/profile/private_save',
			'/profile/delete_private_room',
			'/profile/private-edit',
			'/profile/settings',
			'/simulations',
			'/simulations/chart',
			'/simulations/delete',
			'/connect',
			'/profile/simulation',
			'/follow/user',
			'/messages',
			'/message/comments',
			'/message/add/comments',
			'/message/comment/count',
			'/refresh-messages',
			'/refresh-comment',
			'/add/reting',
			'/news',
            '/bonds',
			'/news/:slug',
			'/fetch/:stock',
			'/search',
			'/user/:username',
			'/about-us',
			'/contact-us',
			'/markets',
			'/request-password',
			'/reset-password',
			'/validate-email',
			'/activation',
			'/ipo/interesting/:companyId',
			'/ipo/notinteresting/:interestId',
			'/ipo/:market',
			'/ipo/:market/:company',
			'/research/:market',
			'/research/:market/:company',
			'/:controller',
			'/:controller/:action/*',
			'/:page',
			'/auth/:provider',
			'/data-table/time-and-sales',
			'/stocks/list-data-table'
		],
		'INDIVIDUAL' => [
			'/',
			'/page/:name',
			'/market/prequalification',
			'/page/iframe/src',
			'/page/notification/get',
			'/financial-statements',
			'/financial-statements/:symbol',
			'/data-table/financial-statements/:symbol',
			'/portfolio',
			'/portfolio/save-preview',
			'/transactions',
			'/workflow/order',
			'/place-order/:id',
			'/transaction/cancel',
			'/get-transactions-chart',
			'/portfolio/get-currency-list',
			'/portfolio/get-broker-list',
			'/portfolio/get-currency-rate',
			'/portfolio/get-company',
			'/transaction/edit/:id',
			'/portfolio/get-company-price',
			'/portfolio/get-broker-fee',
			'/stocks/list/event',
			'/stocks/list',
			'/symbol/:stock',
			'/options/:stock',
			'/analysis/sector/:symbol',
			'/analysis/sector/modal/:symbol',
			'/analysis/industry/:symbol',
			'/analysis/add/:symbol',
			'/analysis/print',
			'/analysis/print-word',
			'/analysis/editPartial',
			'/analysis/approve',
			'/analysis/make-copy',
			'/analysis/share-with-team',
			'/analysis/detail/:key',
			'/analysis/add-modal',
			'/analysis/delete',
			'/analysis/chart/:symbol',
			'/analysis/all',
			'/analysis/:stock/*',
			'/watchlist/all',
			'/watchlist/delete/:id',
			'/watchlist/all/get/:group_id',
			'/watchlist/verify',
			'/watchlist/create',
			'/watchlist/edit',
			'/watchlist/toggle',
			'/watchlist/get',
			'/watchlist/get-sub',
			'/watchlist/get/all',
			'/watchlist/stocks',
			'/dashboard',
			'/forex',
			'/forex/symbol/:currency',
			'/bonds',
			'/bonds/historial-price/:isinCode',
			'/getMessage/info',
			'/post/delete',
			'/message/read-notification',
			'/login',
			'/register',
			'/subscribe',
			'/subscription',
			'/profile',
			'/logout',
			'/profile/edit/:id',
			'/profile/edit/simulation/:id',
			'/profile/charts',
			'/profile',
			'/profile/comments',
			'/profile/private-post',
			'/profile/alerts',
			'/private/edit/:edit',
			'/profile/private_save',
			'/profile/delete_private_room',
			'/profile/private-edit',
			'/profile/settings',
			'/simulations',
			'/simulations/chart',
			'/simulations/delete',
			'/connect',
			'/profile/simulation',
			'/follow/user',
			'/messages',
			'/message/comments',
			'/message/add/comments',
			'/message/comment/count',
			'/refresh-messages',
			'/refresh-comment',
			'/add/reting',
			'/news',
			'/news/:slug',
			'/fetch/:stock',
			'/search',
			'/user/:username',
			'/about-us',
			'/contact-us',
			'/markets',
			'/request-password',
			'/reset-password',
			'/validate-email',
			'/activation',
			'/ipo/interesting/:companyId',
			'/ipo/notinteresting/:interestId',
			'/ipo/:market',
			'/ipo/:market/:company',
			'/research/:market',
			'/research/:market/:company',
			'/:controller',
			'/:controller/:action/*',
			'/:page',
			'/auth/:provider',
			'/data-table/time-and-sales',
			'/stocks/list-data-table'
		],
		'PROFESSIONAL' => [
			'/',
			'/page/:name',
			'/market/prequalification',
			'/page/iframe/src',
			'/page/notification/get',
			'/financial-statements',
			'/financial-statements/:symbol',
			'/data-table/financial-statements/:symbol',
			'/portfolio',
			'/portfolio/save-preview',
			'/transactions',
			'/workflow/order',
			'/place-order/:id',
			'/transaction/cancel',
			'/get-transactions-chart',
			'/portfolio/get-currency-list',
			'/portfolio/get-broker-list',
			'/portfolio/get-currency-rate',
			'/portfolio/get-company',
			'/transaction/edit/:id',
			'/portfolio/get-company-price',
			'/portfolio/get-broker-fee',
			'/stocks/list/event',
			'/stocks/list',
			'/symbol/:stock',
			'/options/:stock',
			'/analysis/sector/:symbol',
			'/analysis/sector/modal/:symbol',
			'/analysis/industry/:symbol',
			'/analysis/add/:symbol',
			'/analysis/print',
			'/analysis/print-word',
			'/analysis/editPartial',
			'/analysis/approve',
			'/analysis/make-copy',
			'/analysis/share-with-team',
			'/analysis/detail/:key',
			'/analysis/add-modal',
			'/analysis/delete',
			'/analysis/chart/:symbol',
			'/analysis/all',
			'/analysis/:stock/*',
			'/watchlist/all',
			'/watchlist/delete/:id',
			'/watchlist/all/get/:group_id',
			'/watchlist/verify',
			'/watchlist/create',
			'/watchlist/edit',
			'/watchlist/toggle',
			'/watchlist/get',
			'/watchlist/get-sub',
			'/watchlist/get/all',
			'/watchlist/stocks',
			'/dashboard',
			'/forex',
			'/forex/symbol/:currency',
			'/bonds',
			'/bonds/historial-price/:isinCode',
			'/getMessage/info',
			'/post/delete',
			'/message/read-notification',
			'/login',
			'/register',
			'/subscribe',
			'/subscription',
			'/profile',
			'/logout',
			'/profile/edit/:id',
			'/profile/edit/simulation/:id',
			'/profile/charts',
			'/profile',
			'/profile/comments',
			'/profile/private-post',
			'/profile/alerts',
			'/private/edit/:edit',
			'/profile/private_save',
			'/profile/delete_private_room',
			'/profile/private-edit',
			'/profile/settings',
			'/simulations',
			'/simulations/chart',
			'/simulations/delete',
			'/connect',
			'/profile/simulation',
			'/follow/user',
			'/messages',
			'/message/comments',
			'/message/add/comments',
			'/message/comment/count',
			'/refresh-messages',
			'/refresh-comment',
			'/add/reting',
			'/news',
			'/news/:slug',
			'/fetch/:stock',
			'/search',
			'/user/:username',
			'/about-us',
			'/contact-us',
			'/markets',
			'/request-password',
			'/reset-password',
			'/validate-email',
			'/activation',
			'/ipo/interesting/:companyId',
			'/ipo/notinteresting/:interestId',
			'/ipo/:market',
			'/ipo/:market/:company',
			'/research/:market',
			'/research/:market/:company',
			'/:controller',
			'/:controller/:action/*',
			'/:page',
			'/auth/:provider',
			'/data-table/time-and-sales',
			'/stocks/list-data-table'
		],
		'EXPERT' => [
			'/',
			'/page/:name',
			'/market/prequalification',
			'/page/iframe/src',
			'/page/notification/get',
			'/financial-statements',
			'/financial-statements/:symbol',
			'/data-table/financial-statements/:symbol',
			'/portfolio',
			'/portfolio/save-preview',
			'/transactions',
			'/workflow/order',
			'/place-order/:id',
			'/transaction/cancel',
			'/get-transactions-chart',
			'/portfolio/get-currency-list',
			'/portfolio/get-broker-list',
			'/portfolio/get-currency-rate',
			'/portfolio/get-company',
			'/transaction/edit/:id',
			'/portfolio/get-company-price',
			'/portfolio/get-broker-fee',
			'/stocks/list/event',
			'/stocks/list',
			'/symbol/:stock',
			'/options/:stock',
			'/analysis/sector/:symbol',
			'/analysis/sector/modal/:symbol',
			'/analysis/industry/:symbol',
			'/analysis/add/:symbol',
			'/analysis/print',
			'/analysis/print-word',
			'/analysis/editPartial',
			'/analysis/approve',
			'/analysis/make-copy',
			'/analysis/share-with-team',
			'/analysis/detail/:key',
			'/analysis/add-modal',
			'/analysis/delete',
			'/analysis/chart/:symbol',
			'/analysis/all',
			'/analysis/:stock/*',
			'/watchlist/all',
			'/watchlist/delete/:id',
			'/watchlist/all/get/:group_id',
			'/watchlist/verify',
			'/watchlist/create',
			'/watchlist/edit',
			'/watchlist/toggle',
			'/watchlist/get',
			'/watchlist/get-sub',
			'/watchlist/get/all',
			'/watchlist/stocks',
			'/dashboard',
			'/forex',
			'/forex/symbol/:currency',
			'/bonds',
			'/bonds/historial-price/:isinCode',
			'/getMessage/info',
			'/post/delete',
			'/message/read-notification',
			'/login',
			'/register',
			'/subscribe',
			'/subscription',
			'/profile',
			'/logout',
			'/profile/edit/:id',
			'/profile/edit/simulation/:id',
			'/profile/charts',
			'/profile',
			'/profile/comments',
			'/profile/private-post',
			'/profile/alerts',
			'/private/edit/:edit',
			'/profile/private_save',
			'/profile/delete_private_room',
			'/profile/private-edit',
			'/profile/settings',
			'/simulations',
			'/simulations/chart',
			'/simulations/delete',
			'/connect',
			'/profile/simulation',
			'/follow/user',
			'/messages',
			'/message/comments',
			'/message/add/comments',
			'/message/comment/count',
			'/refresh-messages',
			'/refresh-comment',
			'/add/reting',
			'/news',
			'/news/:slug',
			'/fetch/:stock',
			'/search',
			'/user/:username',
			'/about-us',
			'/contact-us',
			'/markets',
			'/request-password',
			'/reset-password',
			'/validate-email',
			'/activation',
			'/ipo/interesting/:companyId',
			'/ipo/notinteresting/:interestId',
			'/ipo/:market',
			'/ipo/:market/:company',
			'/research/:market',
			'/research/:market/:company',
			'/:controller',
			'/:controller/:action/*',
			'/:page',
			'/auth/:provider',
			'/data-table/time-and-sales',
			'/stocks/list-data-table'
		]
	]
];