<?php
return [
	'map' => [ // карта участка
		['*', '5', '6', '*', '*', ],
		['*', '*', '3', '*', '*', ],
		['7', '*', '1', '*', '*', ],
		['4', '*', '1', '*', '1', ],
		['3', '3', '@', '0', '0', ],
	],
	'indestructible' => '*', // неразрушимые препятствия
	'prices' => [
		'dig' => 0.5, // стоимость выкопать 1 м3 грунта
		'move' => 1.0, // стоимость проехать 1 клеточку. Повороты бесплатны
		'unload' => 3.0, // стоимость разгрузки. не зависит от кол-ва грунта в отсеке
	],
	'base' => '@', // в какой клеточке находится база
	'digger' => '@', // в какой клеточке начинает копатель
];