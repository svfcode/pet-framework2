<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/page/:id/', 'page', 'show'),
		new Route('/tes/', 'page', 'test'),
		new Route('/act/:ar/', 'page', 'act'),
		new Route('/product/:id/', 'product', 'show'),
		new Route('/nums/:n1/:n2/:n3', 'num', 'numsum')
	];
	
