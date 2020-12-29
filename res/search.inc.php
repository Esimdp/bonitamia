<?php

/*****************
	GENERAL SETTINGS
*****************/
$imSettings['search']['general'] = array(
	'menu_position' => 'left',
	'defaultScope' => array(
		'0' => 'index.html',
		'3' => 'moda-nocturna.html',
		'4' => 'moda-de-ocasion.html',
		'5' => 'outlets.html'
	),
	'extendedScope' => array(
	)
);

/*****************
	PRODUCTS SEARCH
*****************/
$imSettings['search']['products'] = array(
	'rir3857l' => array(
		'name' => 'Vestido de fiesta 1',
		'description' => '',
		'category' => 'Moda Nocturna',
		'image' => '<a href="#" onclick="event.preventDefault(); x5engine.cart.ui.addToCart(\'rir3857l\',1, null, null, false, \'\');"><img src="images/fiesta-1.jpg" alt="Vestido de fiesta 1" title="Vestido de fiesta 1"/></a>',
		'price' => '250.00 $'
	),
	'onleo76q' => array(
		'name' => 'Vestido de fiesta',
		'description' => '',
		'category' => 'Moda Nocturna',
		'image' => '<img src="images/enterito-negro.jpg" alt="Vestido de fiesta" title="Vestido de fiesta" onclick="x5engine.imShowBox({media:[{ type: \'image\', url: \'images/enterito-negro.jpg\', width: 774, height: 1032, description: \'\' }, { type: \'image\', url: \'images/fiesta-1.jpg\', width: 774, height: 1032, description: \'\' }, { type: \'image\', url: \'images/fiesta-2.jpg\', width: 774, height: 1032, description: \'\' }, { type: \'image\', url: \'images/fiesta-amarillo.jpg\', width: 774, height: 1032, description: \'\' }, { type: \'image\', url: \'images/fiesta-rosa.jpg\', width: 774, height: 1032, description: \'\' }]}, 0, this)" style="cursor: pointer;"/>',
		'price' => '0.00 $'
	),
	'iw1xfwcn' => array(
		'name' => 'Producto 1',
		'description' => '',
		'category' => 'Categoría 2',
		'image' => '<img src="cart/images/no-preview.png" alt="Producto 1" title="Producto 1" />',
		'price' => '0.00 $'
	)
);

/*****************
	IMAGES SEARCH
*****************/
$imSettings['search']['images'] = array(
);

/*****************
	VIDEOS SEARCH
*****************/
$imSettings['search']['videos'] = array(
);
$imSettings['search']['dynamicobjects'] = array(

);

// End of file search.inc.php