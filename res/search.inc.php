<?php

/*****************
	GENERAL SETTINGS
*****************/
$imSettings['search']['general'] = array(
	'menu_position' => 'left',
	'defaultScope' => array(
		'0' => 'index.html',
		'3' => 'pagina-1.html',
		'4' => 'pagina-2.html',
		'5' => 'pagina-3.html'
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
		'category' => 'Nueva categoría',
		'image' => '<img src="images/fiesta-1.jpg" alt="Vestido de fiesta 1" title="Vestido de fiesta 1" onclick="x5engine.imShowBox({media:[{ type: \'image\', url: \'images/fiesta-1.jpg\', width: 774, height: 1032, description: \'\' }]}, 0, this)" style="cursor: pointer;"/>',
		'price' => '250.00 $ (IVA incl.)'
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