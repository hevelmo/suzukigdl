<?php
/**
 * This class join all the constants previously declared in "core/enviroment/ WaxConfigSet.php" file,
 * in order to get them easyly like a group instead of one by one.
 * 
 * @author **** <****>
 * @copyright 2017
 */
	class Site {
		private $banner, $gamma_model, $modelos;
		function __construct() {
			$this->gamma_model = array(
				array(
					'id' => '1',
					'key' => 'ignis',
					'title' => 'Ignis',
					'slogan' => 'Experimenta comodidad',
					'info' => 'Redefine tu experiencia'
				),
				array(
					'id' => '2',
					'key' => 'swift-sport',
					'title' => 'Swift Sport',
					'slogan' => 'Experimenta agilidad',
					'info' => 'Rendimiento: 16.10 km/lt.'
				),
				array(
					'id' => '3',
					'key' => 'swift',
					'title' => 'Swift',
					'slogan' => 'Experimenta desafío.',
					'info' => 'Rendimiento: 18.50 km/lt.'
				),
				array(
					'id' => '4',
					'key' => 'kizashi',
					'title' => 'Kizashi',
					'slogan' => 'Experimenta evolución.',
					'info' => 'Rendimiento: 14.50 km/lt.'
				),
				array(
					'id' => '5',
					'key' => 'grand-vitara',
					'title' => 'Grand Vitara',
					'slogan' => 'Experimenta libertad.',
					'info' => 'Rendimiento: 11.90 km/lt.'
				),
				array(
					'id' => '6',
					'key' => 's-cross',
					'title' => 'S-Cross',
					'slogan' => 'Experimenta sin límite.',
					'info' => 'Rendimiento: 17.80 km/lt.'
				),
				array(
					'id' => '7',
					'key' => 'ciaz',
					'title' => 'Ciaz',
					'slogan' => 'Experimenta tu momento.',
					'info' => 'Rendimiento: 19.70 km/lt.'
				),
				array(
					'id' => '8',
					'key' => 'new-vitara',
					'title' => 'Nueva Vitara',
					'slogan' => 'Experimenta actitud.',
					'info' => 'Rendimiento: 18.2 km/lt.'
				)
			);
			$this->modelos = array(
				'ignis' => array(
					'key' => 'ignis',
					'name' => 'Ignis',
					'id' => '1',
					'inicio' => array(
						'main' => array(
							'image' => 'ignis.png',
							'title' => 'Ignis 2017',
							'slogan' => 'Redefine tu experiencia.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 'ignis-2017-pantalla-touch.jpg',
										'title' => 'Pantalla touch de 7” con navegador GPS, cámara de reversa y conectividad con smartphones.',
										'description' => 'Disfruta al máximo cada viaje y con la mayor seguridad gracias a su visibilidad trasera y navegador GPS, así como su integración con Apple CarPlay™, Android Auto™ y Mirrorlink™.'
									),
									array(
										'image' => 'ignis-2017-rieles-carga.jpg',
										'title' => 'Rieles de carga',
										'description' => 'Que nada te detenga. Llega hasta donde tú quieras y lleva contigo todo lo que necesitas para encender la diversión.'
									),
									array(
										'image' => 'ignis-2017-faros-led.jpg',
										'title' => 'Faros LED con lupas, luces diurnas LED y faros de niebla',
										'description' => 'Asegura tu camino con la iluminación adecuada y ten mayor seguridad al transitar. *Faros LED con lupas solo en versión GLX y faros de niebla en todas las versiones.'
									),
									array(
										'image' => 'ignis-2017-kits.jpg',
										'title' => 'Kits de personalización',
										'description' => 'Detalles interiores y exteriores que destacan tu personalidad en cada pieza. Es hora de redefinir tu mundo y lucir tu estilo  único en cada viaje.'
									),
									array(
										'image' => 'ignis-2017-rines-aluminio.jpg',
										'title' => 'Rines de aluminio de 16 pulgadas',
										'description' => 'Rines de aluminio de 16" en color negro y un manejo dinámico, ágil y eficiente.'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Redefine tu experiencia.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '01.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '02.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '03.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '05.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '04.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '06.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '07.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '10.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => '01-mini.png',
											'href' => '01.png'
										),
										array(
											'group' => 'interior',
											'img' => '02-mini.png',
											'href' => '02.png'
										),
										array(
											'group' => 'interior',
											'img' => '03-mini.png',
											'href' => '03.png'
										),
										array(
											'group' => 'interior',
											'img' => '06-mini.png',
											'href' => '06.png'
										),
										array(
											'group' => 'interior',
											'img' => '07-mini.png',
											'href' => '07.png'
										),
										array(
											'group' => 'interior',
											'img' => '10-mini.png',
											'href' => '10.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => '04-mini.png',
											'href' => '04.png'
										),
										array(
											'group' => 'exterior',
											'img' => '05-mini.png',
											'href' => '05.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '2',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '2'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'first',
											'image' => 'ignis-gl.png',
											'title' => 'Ignis GL'
										),
										'second' => array(
											'class' => 'last',
											'image' => 'ignis-glx.png',
											'title' => 'Ignis GLX'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>TM 2017 $194,990.00</span></p>',
													'height' => 'height: 100px;'
												),
												'second' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'last',
													'titles' => array(
														array(
															'span' => '<p><span>TM 2017 $269,990.00</span></p>'
														),
														array(
															'span' => '<p><span>TA CVT 2017 $233,990.00</span></p>'
														)
													),
													'height' => 'height: 100px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rendimiento de combustible en transmisión manual de 21.8 km/l</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Rendimiento de combustible en transmisión CVT 20.9 km/l. En transmisión manual 21.8 km/l</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Diseño Nano SUV: El máximo poder en el empaque más pequeño </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Diseño Nano SUV: El máximo poder en el empaque más pequeño </p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor 1.2 lt VVT de 82 HP ligero y compacto, diseñado para obtener un manejo ágil y eficiente </p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Motor 1.2 lt VVT de 82 HP ligero y compacto, diseñado para obtener un manejo ágil y eficiente</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Chasís más resistente con bajo peso vehicular para un manejo más dinámico y gran rendimiento de combustible </p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Chasís más resistente con bajo peso vehicular para un manejo más dinámico y gran rendimiento de combustible</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Consola central color negro </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Parrilla frontal negra con acentos cromados</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Interiores de tela negra con costuras azules </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Pantalla a color 7” Touch Screen con sistema Bluetooth®, vínculo con Smartphones (Apple CarPlay®* y Android AutoTM**) y cámara de reversa</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Manos libres al volante y control de audio </p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Control de velocidad crucero en el volante</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Portabotellas y portadocumentos en puertas </p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Consola central color titanio con interiores de tela negra con costuras titanio disponible en colores Mentolato y Fénix</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos traseros abatibles 60/40 </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Consola central color naranja con interiores de tela negra con costuras naranja disponible en colores Constelación y Lava</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Habitáculo de amplio espacio </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Sistema de navegación</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Reproductor de CD compatible con MP3 y Bluetooth®</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Transmisión: manual de 5 velocidades y CVT</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión: manual de 5 velocidades</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Portabotellas y portadocumentos en puertas</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado manual</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Asientos traseros abatibles 60/40</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Cierre centralizado de seguros de puertas desde el mando del conductor</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Habitáculo de amplio espacio</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Elevadores eléctricos de cristales frontales</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Aire acondicionado automático</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Filtro de polen</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Cierre centralizado de seguros de puertas desde el mando del conductor</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Puerto USB y tomacorriente de 12V</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Elevadores eléctricos de cristales frontales y traseros</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Volante con ajuste de altura y manos libres</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Limitador de velocidad</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Cantoneras</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Filtro de polen</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Cristales entintados en tono verde</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Puerto USB y tomacorriente de 12V</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Desempañador trasero</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Volante forrado en piel, con ajuste de altura y manos libres</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Espejos laterales al color de la carrocería y con ajuste eléctrico</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Cristales entintados en tono verde</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Espejo retrovisor con ajuste manual día / noche</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Cantoneras</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros de halógeno multirreflector </p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Espejos laterales al color de la carrocería y con ajuste eléctrico</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros frontales de niebla</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Espejo retrovisor con ajuste manual día / noche</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Luz de stop superior trasera de LED</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Faros LED con lupa y encendido automático</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Parrilla frontal negra con acentos negros</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Faros frontales de niebla</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rieles de carga</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Rieles de carga</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Biseles de rejillas laterales y centrales de aire acondicionado color negro</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Biseles de rejillas laterales y centrales de aire acondicionado color plata</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Viseras con espejo de vanidad y con clip portadocumentos</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Viseras con espejo de vanidad y con clip portadocumentos</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Alarma de luces encendidas</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Alarma de luces encendidas</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pantalla de información:  Consumo de combustible instantáneo / promedio / autonomía.  Reloj digital. Termómetro</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Clúster iluminado</p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines de acero de 15 pulgadas y llantas: 175 / 65R15</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Pantalla de información: Consumo de combustible instantáneo / promedio / autonomía.  Reloj digital. Termómetro. Velocidad promedio.</p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Alarma de seguridad</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Rines de aluminio de 16 pulgadas y llantas: 175 / 60R16</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Anclaje en los asientos traseros Isofix®</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Alarma de seguridad</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Barras laterales de protección de puertas</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Anclaje en los asientos traseros Isofix®</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Bolsas de aire frontales</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Barras laterales de protección de puertas</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pedal de freno colapsable para protección del tobillo</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Bolsas de aire frontales</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de frenos ABS con función EBD</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Pedal de freno colapsable para protección del tobillo</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p>Sistema de frenos ABS con función EBD</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 20px;'
												),
												'second' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 20px;'
												)
											)
										)
									),
									'col' => array(
										'class' => '2'
									)
								),
								'event' => array(
									'ga' => 'ficha-ignis',
									'href' => 'ignis.2017.pdf'
								),
							)
						)
					),
					'mantenimieto' => array(
						'main' => array(
							'image' => 'ignis.png',
							'key' => 'ignis',
							'name' => 'Ignis',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '4',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => '',
														'title' => 'TM'
													),
													'fourth' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => 'last',
														'title' => 'TA CVT'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,000.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$1,000.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,330.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$1,330.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,860.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$1,860.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,290.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$3,290.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$4,230.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$4,230.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,294.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$3,294.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,890.00'
													),
													'fourth' => array(
														'col' => 'dark',
														'class' => 'last',
														'title' => '$3,890.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '4'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'class' => 'accessories',
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => 'Redefine todo e inicia un nuevo capítulo en tu vida.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							)
						)
					)
				),
				'swift-sport' => array(
					'key' => 'swift-sport',
					'name' => 'Swift Sport',
					'id' => '2',
					'inicio' => array(
						'main' => array(
							'image' => 'swift-sport.png',
							'title' => 'Swift Sport 2017',
							'slogan' => 'Experimenta agilidad.',
							'price' => 'Diseño deportivo, movilidad veloz. La combinación perfecta de un auto deportivo y uno urbano.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 'swift-sport-2013-aire-acondicionado.jpg',
										'title' => 'Aire acondicionado automático',
										'description' => 'Prográmalo para tener siempre la temperatura deseada sin importar los cambios de clima exterior.'
									),
									array(
										'image' => 'swift-sport-2013-keyless.jpg',
										'title' => 'Keyless Start &amp; Entry',
										'description' => 'No tendrás que insertar la llave para abrir ni encender tu auto. Basta con tenerla contigo y presionar el botón correspondiente para disfrutar tu auto.'
									),
									array(
										'image' => 'swift-sport-2013-rines-16.jpg',
										'title' => 'Rines de 16”',
										'description' => 'Fabricados en aluminio. Ligeros y con gran estilo.'
									),
									array(
										'image' => 'swift-sport-2013-pedales-acero.jpg',
										'title' => 'Pedales de acero inoxidable',
										'description' => 'Diseño y materiales que te harán vivir la deportividad.'
									),
									array(
										'image' => 'swift-sport-2013-asientos-deportivos.jpg',
										'title' => 'Asientos deportivos',
										'description' => 'Asientos de tela con terminados en rojo, brindan un mejor soporte durante el manejo deportivo.'
									),
									array(
										'image' => 'swift-sport-2013-carroceria-acero.jpg',
										'title' => 'Equilibrio entre deportividad y comodidad',
										'description' => 'Siente la emoción deportiva, la seguridad Suzuki y el confort de un auto urbano al mismo tiempo.'
									),
									array(
										'image' => 'swift-sport-stereo-pantalla-touch.jpg',
										'title' => 'Estéreo con pantalla touch a color de 7”',
										'description' => 'AM/FM/CD/MP3/Bluetooth/ APPLE CAR PLAY ​/ Compatible con Android​ Auto. Disponible para modelo 2017.'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta agilidad.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '01.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '02.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '03.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '04.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '05.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '06.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '07.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '10.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => '02-mini.png',
											'href' => '02.png'
										),
										array(
											'group' => 'interior',
											'img' => '03-mini.png',
											'href' => '03.png'
										),
										array(
											'group' => 'interior',
											'img' => '06-mini.png',
											'href' => '06.png'
										),
										array(
											'group' => 'interior',
											'img' => '07-mini.png',
											'href' => '07.png'
										),
										array(
											'group' => 'interior',
											'img' => '10-mini.png',
											'href' => '10.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => '01-mini.png',
											'href' => '01.png'
										),
										array(
											'group' => 'exterior',
											'img' => '04-mini.png',
											'href' => '04.png'
										),
										array(
											'group' => 'exterior',
											'img' => '05-mini.png',
											'href' => '05.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '1',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '1'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'last first',
											'image' => 'swift-sport-swift-sport.png',
											'title' => 'Swift Sport'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>TM 2017 $274,990.00</span></p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 1.6 litros VVT, 16 válvulas.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta: 134 hp @ 6,900 rpm.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión manual de 6 velocidades.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección Eléctricamente Asistida (EPS).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión delantera: McPherson.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión trasera: Barra de torsión tipo H.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Aluminio de 16".</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>ABS (Sistema Antibloqueo de Frenos).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos de disco: Delanteros ventilados / Traseros sólidos</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asistencia de frenado.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Barras laterales de protección.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Bolsas de aire frontales (x2), laterales incorporadas a los asientos delanteros (x2) y tipo cortina (x2)</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Volante con ajuste de altura y profundidad.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Botón de arranque (Keyless Start®).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado automático.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pedales de acero inoxidable.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Elevadores eléctricos de cristales.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Seguros y espejos eléctricos.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Estribos deportivos.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Spoiler en quinta puerta.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Tubo de escape de salida doble.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros con lupa bixenón de alta penetración, con ajuste de altura auto-nivelable por sensor de peso.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Estéreo Pioneer AVH-X8850BT con pantalla touch a color de 7" (panel desmontable).</p>'
												)
											)
										)
									),
									'col' => array(
										'class' => '1'
									)
								),
								'event' => array(
									'ga' => 'ficha-swift-sport',
									'href' => 'catalogo-swift-2017.pdf'
								)
							)
						)
					),
					'mantenimieto' => array(
						'main' => array(
							'image' => 'swift-sport.png',
							'key' => 'swift-sport',
							'name' => 'Swift Sport',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '3',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'Swift Sport'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,000.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,060.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,570.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,060.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,755.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,915.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,915.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,110.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,785.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,085.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '100,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,345.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,065.00'
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,200.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '3'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => 'Diseño deportivo, movilidad veloz. La combinación perfecta de un auto deportivo y uno urbano.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_swift-sport',
								'href' => 'swift-sport.pdf'
							)
						)
					)
				),
				'swift' => array(
					'key' => 'swift',
					'name' => 'Swift',
					'id' => '3',
					'inicio' => array(
						'main' => array(
							'image' => 'swift.png',
							'title' => 'Swift 2017',
							'slogan' => 'Experimenta desafío. Acepta el reto.',
							'price' => 'Aerodinámico y divertido para ti que buscas diseño y agilidad en un solo auto.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 'swift-2013-aire-acondicionado.jpg',
										'title' => 'Aire acondicionado automático',
										'description' => 'Prográmalo para tener siempre la temperatura deseada sin importar los cambios de clima exterior. *Sólo para GLX.'
									),
									array(
										'image' => 'swift-2013-quemacocos.jpg',
										'title' => 'Quemacocos',
										'description' => 'Eléctrico de 3 posiciones con cubierta deslizable interior. Vive la libertad en todo momento desde el interior de tu Swift. *Sólo para GLX.'
									),
									array(
										'image' => 'swift-2013-bolsas-aire.jpg',
										'title' => '6 Bolsas de aire',
										'description' => '2 frontales, 2 laterales y 2 tipo cortina que se activan de acuerdo a la necesidad del imprevisto. *Sólo para GLX.'
									),
									array(
										'image' => 'swift-2013-keyless.jpg',
										'title' => 'Keyless Start &amp; Entry',
										'description' => 'No tendrás que insertar la llave para abrir ni encender tu auto. Basta con tenerla contigo y presionar el botón correspondiente para disfrutar tu auto. *Sólo para GLX.'
									),
									array(
										'image' => 'swift-2013-rines-16.jpg',
										'title' => 'Rines de 16”',
										'description' => 'Fabricados en aluminio. Ligeros y con gran estilo. *Sólo para GLS y GLX.'
									),
									array(
										'image' => 'swift-frenos-disco.jpg',
										'title' => 'Frenos de disco',
										'description' => 'Efectivo sistema de frenado en las 4 ruedas que combina frenos ventilados y sólidos. *Sólo para GLX.'
									),
									array(
										'image' => 'swift-stereo-pantalla-touch.jpg',
										'title' => 'Estéreo con pantalla touch a color de 7”',
										'description' => 'AM/FM/CD/MP3/Bluetooth/ APPLE CAR PLAY ​/ Compatible con Android​ Auto. Disponible para E. Especial y GLX año modelo 2017.'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta desafío. Acepta el reto.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '01.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '02.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '07.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '08.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '06.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '03.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '02.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '09.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => '01-mini.png',
											'href' => '01.png'
										),
										array(
											'group' => 'interior',
											'img' => '02-mini.png',
											'href' => '02.png'
										),
										array(
											'group' => 'interior',
											'img' => '03-mini.png',
											'href' => '03.png'
										),
										array(
											'group' => 'interior',
											'img' => '04-mini.png',
											'href' => '04.png'
										),
										array(
											'group' => 'interior',
											'img' => '05-mini.png',
											'href' => '05.png'
										),
										array(
											'group' => 'interior',
											'img' => '09-mini.png',
											'href' => '09.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => '06-mini.png',
											'href' => '06.png'
										),
										array(
											'group' => 'exterior',
											'img' => '07-mini.png',
											'href' => '07.png'
										),
										array(
											'group' => 'exterior',
											'img' => '08-mini.png',
											'href' => '08.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '4',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '4'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'first',
											'image' => 'swift-gls.png',
											'title' => 'Swift GLS'
										),
										'second' => array(
											'class' => '',
											'image' => 'swift-glx.png',
											'title' => 'Swift GLX'
										),
										'third' => array(
											'class' => '',
											'image' => 'swift-vs.png',
											'title' => 'Swift Edición Especial'
										),
										'fourth' => array(
											'class' => 'last',
											'image' => 'swift-ga.png',
											'title' => 'Swift GA'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>TM 2017 $214,990.00</span><span>TA 2017 $229,990.00</span></p>',
													'height' => 'height: 100px;'
												),
												'second' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => '',
													'title' => '<p><span>TM 2017 $239,990.00</span><span>TA 2017 $254,990.00</span></p>',
													'height' => 'height: 100px;'
												),
												'third' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => '',
													'title' => '<p><span>TM 2017 $252,990.00</span><span>TA 2017 $265,990.00</span></p>',
													'height' => 'height: 100px;'
												),
												'fourth' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'last',
													'title' => '<p><span>TM 2017 $189,990.00</span></p>',
													'height' => 'height: 100px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 1.4 litros V V T, 16 válvulas.</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Motor: 4 cilindros, 1.4 litros V V T, 16 válvulas.</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Motor: 4 cilindros, 1.4 litros V V T .16 válvulas.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Motor: 4 cilindros, 1.4 litros V V T, 16 válvulas.</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>TM: Transmisión manual de 5 velocidades<br />TA: Transmisión automática de 4 velocidades</p>',
													'height' => 'height: 100px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>TM: Transmisión manual de 5 velocidades<br />TA: Transmisión automática de 4 velocidades</p>',
													'height' => 'height: 100px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>TM: Transmisión manual de 5 velocidades<br />TA: Transmisión automática de 4 velocidades</p>',
													'height' => 'height: 100px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p> Transmisión manual de 5 velocidades</p>',
													'height' => 'height: 100px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 100 hp @ 6,000 rpm.</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Potencia neta (hp@rpm): 100 hp @ 6,000 rpm.</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Potencia neta (hp@rpm): 100 hp @ 6,000 rpm.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Potencia neta (hp@rpm): 100 hp @ 6,000 rpm.</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Elevadores eléctricos de cristales.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Elevadores eléctricos de cristales.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Elevadores eléctricos de cristales.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Elevadores eléctricos de cristales.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Seguros y espejos eléctricos.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Seguros y espejos eléctricos.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Seguros y espejos eléctricos.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Seguros y espejos eléctricos.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>ABS (Sistema Antibloqueo de Frenos).</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>ABS (Sistema Antibloqueo de Frenos).</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>ABS (Sistema Antibloqueo de Frenos).</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>ABS (Sistema Antibloqueo de Frenos).</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asistencia de frenado.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Asistencia de frenado.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Asistencia de frenado.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Asistencia de frenado.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Aluminio de 16".</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Rines: Aluminio de 16".</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Rine: pintado en color “Gun Metalic".</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Rines: Acero de 15".</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección Eléctricamente Asistida (EPS).</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Dirección Eléctricamente Asistida (EPS).</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Dirección Eléctricamente Asistida (EPS).</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Dirección Eléctricamente Asistida (EPS).</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Suspensión delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Suspensión delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Suspensión delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión trasera: Eje rígido.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Suspensión trasera: Eje rígido.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Suspensión trasera: Eje rígido.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p>Suspensión trasera: Eje rígido.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Controles de audio en el volante.</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Controles de audio y velocidad crucero en el volante.</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Controles de audio y velocidad crucero en el volante.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de audio AM / FM / CD / MP3.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de audio AM / FM / CD / MP3.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Sistema de audio AM / FM / CD / MP3.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Conexión USB.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Conexión USB.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Conexión USB.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Conexión Bluetooth&#174;</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Frenos de disco en las cuatro ruedas.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Frenos de disco en las cuatro ruedas.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Botón de arranque (Keyless start).</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Botón de arranque (Keyless start).</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Aire acondicionado automático.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Aire acondicionado automático.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Quemacocos eléctrico, corredizo de tres posiciones.</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Quemacocos eléctrico, corredizo de tres posiciones.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Pantalla Touch de 6.1" WVGA.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Pantalla Touch de 6.1" WVGA.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Conexión  Bluetooth&#174;</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Conexión  Bluetooth&#174;</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Luces de circulación diurna (DRL).</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Luces de circulación diurna (DRL).</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Biseles de faros de niebla con luces Led.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Biseles de faros de niebla con luces Led.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Luz de freno central en 5ta puerta con Led.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Luz de freno central en 5ta puerta con Led.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Parrilla cromada.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Spoiler superior trasero.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Asientos con tapicería tipo gamuza/piel.</p>',
													'height' => 'height: 40px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Costuras claras en asientos, volante y cubierta de palanca de velocidades.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Tapicería tipo gamuza en puertas.</p>',
													'height' => 'height: 60px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 80px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 80px;'
												),
												'third' => array(
													'class' => '',
													'title' => '<p>Estéreo Pioneer AVH-X8850BT con pantalla touch a color de 7" (panel desmontable).</p>',
													'height' => 'height: 80px;'
												),
												'fourth' => array(
													'class' => 'last',
													'title' => '<p></p>',
													'height' => 'height: 80px;'
												)
											)
										)
									),
									'col' => array(
										'class' => '4'
									)
								),
								'event' => array(
									'ga' => 'ficha-swift-sport',
									'href' => 'catalogo-swift-2017.pdf'
								),
							)
						)
					),
					'mantenimieto' => array(
						'main' => array(
							'image' => 'swift-sport.png',
							'key' => 'swift-sport',
							'name' => 'Swift Sport',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '4',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'T/M'
													),
													'fourth' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'T/A'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,000.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,000.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,065.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,065.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,555.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,555.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,690.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,690.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,745.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,550.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,230.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,230.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,615.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,090.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,835.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,640.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,730.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,730.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '100,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,175.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,175.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,065.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,065.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,400.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,055.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '4'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => 'Aerodinámico y divertido para ti que buscas diseño y agilidad en un solo auto.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_swift',
								'href' => 'swift.pdf'
							)
						)
					)
				),
				'kizashi' => array(
					'key' => 'kizashi',
					'name' => 'Kizashi',
					'id' => '4',
					'inicio' => array(
						'main' => array(
							'image' => 'kizashi.png',
							'title' => 'Kizashi 2017',
							'slogan' => 'Experimenta evolución. Distinción a primera vista.',
							'price' => '"Algo grande está por venir". Imponente diseño con finos acabados que roban miradas.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 'kizashi-2013-aire-acondicionado.jpg',
										'title' => 'Aire acondicionado automático',
										'description' => 'Prográmalo para tener siempre la temperatura deseada sin importar los cambios de clima exterior.'
									),
									array(
										'image' => 'kizashi-2013-paddle-shifter.jpg',
										'title' => 'Paddle Shifter',
										'description' => 'Paletas de cambio de velocidad en el volante. Disfruta el control total del vehículo. Sólo para GLX'
									),
									array(
										'image' => 'kizashi-2013-quemacocos.jpg',
										'title' => 'Quemacocos',
										'description' => 'Eléctrico de 3 posiciones con cubierta deslizable interior. Vive la libertad en todo momento desde el interior de tu Kizashi. Sólo para GLX'
									),
									array(
										'image' => 'kizashi-2013-sistema-navegacion.jpg',
										'title' => 'Sistema de navegación',
										'description' => 'Pantalla táctil de 6.1” con reconocimiento de voz para llegar a tu destino sin contratiempos. Sólo para GLX'
									),
									array(
										'image' => 'kizashi-2013-keyless.jpg',
										'title' => 'Keyless Start &amp; Entry',
										'description' => 'No tendrás que insertar la llave para abrir ni encender tu auto. Basta con tenerla contigo y presionar el botón correspondiente para disfrutar tu auto.'
									),
									array(
										'image' => 'kizashi-2013-camara-reversa.jpg',
										'title' => 'Cámara y sensor de reversa',
										'description' => 'Se activa al poner reversa en el selector, facilitando maniobras en espacios reducidos. Sólo para GLX'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta evolución. Distinción a primera vista.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-07.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-06.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-04.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-10.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-05.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-02.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-08.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-09.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-09-mini.png',
											'href' => 'foto-09.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-10-mini.png',
											'href' => 'foto-10.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '1',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '1'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'last first',
											'image' => 'kizashi-special.png',
											'title' => 'Kizashi Edición Especial'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>2016 $374,500.00</span></p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión CVT.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 176 hp@6,500 rpm.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Nuevo diseño de 18".</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado automático de doble zona.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Botón de arranque (Keyless start).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Controles de audio y velocidad crucero iluminados en el volante.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección Eléctricamente Asistida, sensible a la velocidad (EPS).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema Antibloqueo de Frenos (ABS).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Distribución Electrónica de Fuerza de Frenado (EBD).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Programa Electrónico de Estabilidad (ESP® ).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Luces de circulación diurna (DRL).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pantalla touch de 6.1" WVGA.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Bolsas de aire frontales (x2), laterales delanteras y traseras (x4) y tipo cortina (x2).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros de niebla delanteros.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asistencia de frenado.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos de disco en las 4 ruedas con pastillas de freno Akebono®.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Palancas de cambio de velocidades en el volante (Paddle Shifter).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión delantera: McPherson.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión trasera: Multilink.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sensor de reversa con cámara integrada.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de manos libres Bluetooth®.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Quemacocos eléctrico con cubierta interna deslizable.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos cubiertos con piel.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos delanteros con ajusre eléctrico de conductor y pasajero.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de volante con insertos plateados y piel perforada.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Costuras claras en volante, cubierta de palanca de velocidades y cubierta de freno de estacionamiento.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de Fascia con parrilla doble (superior e inferior)</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Biseles cromados para faros de niebla.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Molduras cromadas en los costados y nuevo diseño de estribos.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Spoiler traser para tapa de la cajuela.</p>'
												)
											)
										)
									),
									'col' => array(
										'class' => '1'
									)
								),
								'event' => array(
									'ga' => 'ficha_grand-vitara',
									'href' => 'catalogo-kizashi-2016.pdf'
								)
							)
						)
					),
					'mantenimieto' => array(
						'main' => array(
							'image' => 'kizashi.png',
							'key' => 'kizashi',
							'name' => 'Kizashi',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '3',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'Kizashi'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,150.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,285.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,815.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,665.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,755.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,925.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,925.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,355.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,845.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,675.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '100,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,450.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,295.00'
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,675.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '3'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => '"Algo grande está por venir". Imponente diseño con finos acabados que roban miradas.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_kizashi',
								'href' => 'kizashi.pdf'
							)
						)
					)
				),
				'grand-vitara' => array(
					'key' => 'grand-vitara',
					'name' => 'Grand Vitara',
					'id' => '5',
					'inicio' => array(
						'main' => array(
							'image' => 'grand-vitara.png',
							'title' => 'Grand Vitara 2017',
							'slogan' => 'Experimenta libertad.',
							'price' => 'Seguridad, control y poder. El balance perfecto en una SUV.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 'grand-vitara-2013-aire-acondicionado.jpg',
										'title' => 'Aire acondicionado automático',
										'description' => 'Prográmalo para tener siempre la temperatura deseada sin importar los cambios de clima exterior.'
									),
									array(
										'image' => 'grand-vitara-2013-quemacocos.jpg',
										'title' => 'Quemacocos',
										'description' => 'Eléctrico de 3 posiciones con cubierta deslizable interior. Vive la libertad en todo momento desde el interior de tu Grand Vitara. *Sólo para GLS y 4X4.'
									),
									array(
										'image' => 'grand-vitara-2013-traccion-trasera.jpg',
										'title' => 'Tracción trasera',
										'description' => 'Capacidad de arrastre de 1,360 kg. La fuerza necesaria para lograr cualquier objetivo.'
									),
									array(
										'image' => 'grand-vitara-2013-navegacion.jpg',
										'title' => 'Sistema de navegación',
										'description' => 'Pantalla táctil de 6.1” con reconocimiento de voz para llegar a tu destino sin contratiempos. *Sólo para GLS y 4X4.'
									),
									array(
										'image' => 'grand-vitara-2013-rines-18.jpg',
										'title' => 'Rines de 18”',
										'description' => 'Brindan la altura necesaria para recorrer cualquier camino con total confianza.'
									),
									array(
										'image' => 'grand-vitara-2013-keyless-start.jpg',
										'title' => 'Keyless Start & Entry',
										'description' => 'No tendrás que insertar la llave para abrir ni encender tu auto. Basta con tenerla contigo y presionar el botón correspondiente para disfrutar tu auto. *Sólo para GLS y 4X4'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta libertad.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '01.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '04.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '05.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'special',
											'href' => 'special-1.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '10.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '09.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => '03.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => '08.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => '01-mini.png',
											'href' => '01.png'
										),
										array(
											'group' => 'interior',
											'img' => '02-mini.png',
											'href' => '02.png'
										),
										array(
											'group' => 'interior',
											'img' => '03-mini.png',
											'href' => '03.png'
										),
										array(
											'group' => 'interior',
											'img' => '04-mini.png',
											'href' => '04.png'
										),
										array(
											'group' => 'interior',
											'img' => '05-mini.png',
											'href' => '05.png'
										),
										array(
											'group' => 'interior',
											'img' => '10-mini.png',
											'href' => '10.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => '06-mini.png',
											'href' => '06.png'
										),
										array(
											'group' => 'exterior',
											'img' => '07-mini.png',
											'href' => '07.png'
										),
										array(
											'group' => 'exterior',
											'img' => '08-mini.png',
											'href' => '08.png'
										),
										array(
											'group' => 'exterior',
											'img' => '09-mini.png',
											'href' => '09.png'
										)
									),
									'special' => array(
										array(
											'group' => 'special',
											'img' => 'special-1-mini.png',
											'href' => 'special-1.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-2-mini.png',
											'href' => 'special-2.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-3-mini.png',
											'href' => 'special-3.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-4-mini.png',
											'href' => 'special-4.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-5-mini.png',
											'href' => 'special-5.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-6-mini.png',
											'href' => 'special-6.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-7-mini.png',
											'href' => 'special-7.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-8-mini.png',
											'href' => 'special-8.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-9-mini.png',
											'href' => 'special-9.png'
										),
										array(
											'group' => 'special',
											'img' => 'special-10-mini.png',
											'href' => 'special-10.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '3',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '1'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'first',
											'image' => 'grand-vitara-especial.png',
											'title' => 'Grand Vitara Special'
										),
										'second' => array(
											'class' => '',
											'image' => 'grand-vitara-gls.png',
											'title' => 'Grand Vitara Special'
										),
										'third' => array(
											'class' => 'last',
											'image' => 'grand-vitara-especial.png',
											'title' => 'Grand Vitara Special'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'titles' => array(
														array(
															'span' => '<p><span>TA 2017 $359,990.00</span></p>'
														),
														array(
															'span' => '<p><span>TA 2016 $340,990.00</span></p>'
														)
													),
													'height' => 'height: 100px;'
												),
												'second' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => '',
													'titles' => array(
														array(
															'span' => '<p><span>TA 2017 $369,990.00</span></p>'
														),
														array(
															'span' => '<p><span>TA 2016 $355,000.00</span></p>'
														)
													),
													'height' => 'height: 100px;'
												),
												'third' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'last',
													'title' => '<p><span>TA 2016 $355,000.00</span></p>',
													'height' => 'height: 100px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión automática de 4 velocidades.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Transmisión automática de 4 velocidades.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Transmisión automática de 4 velocidades.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Tracción trasera.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Tracción trasera.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Tracción: 4x4 con caja reductora.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 163 hp@6,000 rpm.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Potencia neta (hp@rpm): 163 hp@6,000 rpm.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Potencia neta (hp@rpm): 163 hp@6,000 rpm.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Capacidad de arrastre: 1,360 kg.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Capacidad de arrastre: 1,360 kg.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Capacidad de arrastre: 1,360 kg.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección hidráulica: Piñón y cremallera.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Dirección hidráulica: Piñón y cremallera.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Dirección hidráulica: Piñón y cremallera.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión: Delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Suspensión: Delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Suspensión: Delantera: McPherson.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión Trasera: Multilink.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Suspensión Trasera: Multilink.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Suspensión Trasera: Multilink.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Aluminio de 18 pulgadas.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Rines: Aluminio de 18 pulgadas.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Rines: Aluminio de 18 pulgadas.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Advertencia de camino resbaloso por hielo.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Advertencia de camino resbaloso por hielo.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Advertencia de camino resbaloso por hielo.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Advertencia de revisión de sistema ESP® (Programa Electrónico de Estabilidad).</p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Advertencia de revisión de sistema ESP® (Programa Electrónico de Estabilidad).</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Advertencia de revisión de sistema ESP® (Programa Electrónico de Estabilidad).</p>',
													'height' => 'height: 60px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Estimación de kilometraje con el combustible en tanque.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Estimación de kilometraje con el combustible en tanque.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Estimación de kilometraje con el combustible en tanque.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos asistidos.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Frenos asistidos.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Frenos asistidos.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos de disco en las 4 ruedas.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Frenos de disco en las 4 ruedas.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Frenos de disco en las 4 ruedas.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema Antibloqueo de frenos (ABS).</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema Antibloqueo de frenos (ABS).</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema Antibloqueo de frenos (ABS).</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Barras laterales de protección en puertas.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Barras laterales de protección en puertas.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Barras laterales de protección en puertas.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rieles de carga en el toldo.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Rieles de carga en el toldo en color plata</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Rieles de carga en el toldo.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado automático.</p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Aire acondicionado automático.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Aire acondicionado automático.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de apertura y arranque sin llave Keyless Start.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema de apertura y arranque sin llave Keyless Start.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de navegación.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema de navegación.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Pantalla touch de 6.1" WVGA.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Pantalla touch de 6.1" WVGA.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Reconocimiento de voz.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Reconocimiento de voz.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Quemacocos.</p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Quemacocos.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 60px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Espejos laterales con calefacción y luces direccionales integradas.</p>',
													'height' => 'height: 60px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Espejos laterales con calefacción y luces direccionales integradas.</p>',
													'height' => 'height: 60px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Aspersores para lavado de faros.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Proyector de Xenón con lupa.</p>',
													'height' => 'height: 40px;'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p></p>',
													'height' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Indicador 4x4 en funcionamiento.</p>',
													'height' => 'height: 40px;'
												)
											)
										)
									),
									'col' => array(
										'class' => '1'
									)
								),
								'event' => array(
									'ga' => 'ficha-grand-vitara',
									'href' => 'catalogo-grand-vitara-2017.pdf'
								)
							)
						)
					),
					'mantenimieto' => array(
						'main' => array(
							'image' => 'grand-vitara.png',
							'key' => 'grand-vitara',
							'name' => 'Grand Vitara',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '4',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => '',
														'title' => '4X2'
													),
													'fourth' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => '4X4'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,150.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,150.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,285.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,285.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,935.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,935.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,665.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,665.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,070.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,070.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,635.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,635.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$2,045.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,045.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,355.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,355.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,160.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,160.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,675.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,675.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$4,285.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$4,285.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$1,235.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,235.00'
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => '$3,080.00'
													),
													'fourth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,080.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '4'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'class' => 'accessories',
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => 'Seguridad, control y poder. El balance perfecto en una SUV.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png.jpeg',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png.jpeg',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png.jpeg',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png.jpeg',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png.jpeg',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png.jpeg',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png.jpeg',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png.jpeg',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png.jpeg',
											'title' => 'Loderas rígidas frontales',
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png.jpeg',
											'title' => 'Set de cubiertas de espejo'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png.jpeg',
											'title' => 'Ventilas de cofre'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png.jpeg',
											'title' => 'Cubierta de tapa de gasolina'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png.jpeg',
											'title' => 'Red de cajuela'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png.jpeg',
											'title' => 'Cenicero'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png.jpeg',
											'title' => 'Conector USB'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png.jpeg',
											'title' => 'Set de luces'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'accesorios-grand-vitara',
								'href' => 'grand-vitara.pdf'
							)
						)
					)
				),
				's-cross' => array(
					'key' => 's-cross',
					'name' => 'S-Cross',
					'id' => '6',
					'inicio' => array(
						'main' => array(
							'image' => 's-cross.png',
							'title' => 'S-CROSS 2017',
							'slogan' => 'Experimenta sin límite. Una nueva visión.',
							'price' => 'Fuerza, elegancia  y confort en cualquier condición.'
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => 's-cross-nuevo-diseño-frontal.jpg',
										'title' => 'Nuevo diseño frontal',
										'description' => 'Incluue una parrilla cromada para una línea más robusta.'
									),
									array(
										'image' => 's-cross-nuevo-diseño-frontal-de-led.jpg',
										'title' => 'Nuevo diseño de faros de LED',
										'description' => 'Gran cisibilidad a una mayor distancia.'
									),
									array(
										'image' => 's-cross-motor-booster-jet.jpg',
										'title' => 'Motor Booster Jet DIT (versión TURBO)',
										'description' => 'Nuevo motor turbo de inyección directa que otorga un gran desempeño dinámico, combinado con gran rendimiento de combustible y bajo nivel de emisiones contaminantes.'
									),
									array(
										'image' => 's-cross-pantalla-touch.jpg',
										'title' => 'Pantalla touch de 7" a color',
										'description' => 'Reproducción de música vía Bluetooth® e integración con Apple CarPlayTM y MirrorlinkTM, cámara trasera y sistema de navegación.'
									),
									array(
										'image' => 's-cross-rines-alumnio.jpg',
										'title' => 'Rines de 17" de aluminio',
										'description' => 'Nuevo y atractivo diseño con llantas de gran tracción y agarre.'
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta sin límite. Una nueva visión.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-01.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-02.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-03.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-4.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-05.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-06.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-07.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-08.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-09-mini.png',
											'href' => 'foto-09.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-10-mini.png',
											'href' => 'foto-10.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '3',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '3'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'first',
											'image' => 'scross_gl.png',
											'title' => 'S-CROSS GL'
										),
										'second' => array(
											'class' => '',
											'image' => 'scross_glx.png',
											'title' => 'S-CROSS GLX'
										),
										'third' => array(
											'class' => 'last',
											'image' => 'scross_turbo.png',
											'title' => 'S-CROSS TURBO'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'titles' => array(
														array(
															'span' => '<p><span>TM 2017 $279,990.00</span></p>'
														),
														array(
															'span' => '<p><span>TA 2017 $299,990.00</span></p>'
														)
													),
													'heigth' => 'height: 100px;'
												),
												'second' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => '',
													'title' => '<p><span>TA 2017 $329,990.00</span></p>',
													'heigth' => 'height: 100px;'
												),
												'third' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'last',
													'title' => '<p><span>2016 $374,500.00</span></p>',
													'heigth' => 'height: 100px;'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 1.6 litros DOHC / VVT y 16 válvulas.</p>',
													'heigth' => 'height: 40px;'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Motor: 4 cilindros, 1.6 litros DOHC / VVT y 16 válvulas.</p>',
													'heigth' => 'height: 40px;'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Motor: 4 cilindros, 1.4 litros DOHC Turbocargado.</p>',
													'heigth' => 'height: 40px;'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 118 HP @ 6,000 RPM.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Potencia neta (hp@rpm): 118 HP @ 6,000 RPM.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Potencia neta: 138 HP@5,500 RPM.</p>'
												),
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión manual de 5 velocidades o automática de 6 velocidades con paletas al volante.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Transmisión automática, 6 vel.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Transmisión: automática de 6 velocidades con paletas al volante.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Aluminio de 16”.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Rines: Aluminio de 17”</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Rines: Aluminio de 17"</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Programa de Estabilidad Electrónico (ESP®).</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Programa de Estabilidad Electrónico (ESP®).</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Programa de Estabilidad Electrónico (ESP®).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de frenos ABS con función EBD.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de frenos ABS con función EBD.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema de frenos ABS con función EBD.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Anclajes de montaje ISOFIX® para silla infantil (x2).</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Anclajes de montaje ISOFIX® para silla infantil (x2).</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Anclajes de montaje ISOFIX® para silla infantil (x2).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de audio: AM / FM / CD / MP3.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de audio: AM / FM / CD / MP3.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema de audio: AM / FM / CD / MP3.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Controles de audio en el volante.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Controles de audio en el volante.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Controles de audio en el volante.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Conexión Bluetooth®.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Conexión Bluetooth®.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Conexión Bluetooth®.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pantalla a color touch screen con sistema de audio y vínculo con Smartphone.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Pantalla a color touch screen con sistema de audio y vínculo con Smartphone.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Pantalla a color touch screen con sistema de audio y vínculo con Smartphone.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de tracción: 2WD.</p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Sistema de navegación con cámara de reversa.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Sistema de navegación con cámara de reversa.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Paletas de cambio en el volante.</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Controles de velocidad crucero en volante</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p></p>'
												),
												'second' => array(
													'class' => '',
													'title' => '<p>Botón de arranque (Keyless Push Start).</p>'
												),
												'third' => array(
													'class' => 'last',
													'title' => '<p>Botón de arranque (Keyless Push Start).</p>'
												)
											)
										)
									),
									'col' => array(
										'class' => '3'
									)
								),
								'event' => array(
									'ga' => 'ficha-s-cross',
									'href' => 'catalogo-s-cross-2017.pdf'
								)
							)
						)
					),
					'mantenimiento' => array(
						'main' => array(
							'image' => 'kizashi.png',
							'key' => 'kizashi',
							'name' => 'Kizashi',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '3',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses Sedán'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => '',
														'title' => 'T'
													),
													'fourth' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => '',
														'title' => 'CVT'
													),
													'fifth' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'CVT'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => ''
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => ''
													),
													'third' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fourth' => array(
														'col' => 'light',
														'class' => '',
														'title' => ''
													),
													'fifth' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => ''
													)
												)
											)
										),
										'col' => array(
											'class' => '5'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => '"Algo grande está por venir". Imponente diseño con finos acabados que roban miradas.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_kizashi',
								'href' => 'kizashi.pdf'
							)
						)
					)
				),
				'ciaz' => array(
					'key' => 'ciaz',
					'name' => 'Ciaz',
					'id' => '7',
					'inicio' => array(
						'main' => array(
							'image' => '',
							'title' => '',
							'slogan' => '',
							'price' => ''
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta evolución. Distinción a primera vista.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-07.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-06.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-04.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-10.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-05.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-02.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-08.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-09.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-09-mini.png',
											'href' => 'foto-09.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-10-mini.png',
											'href' => 'foto-10.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '1',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '1'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'last first',
											'image' => 'kizashi-special.png',
											'title' => 'Kizashi Edición Especial'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>2016 $374,500.00</span></p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión CVT.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 176 hp@6,500 rpm.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Nuevo diseño de 18".</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado automático de doble zona.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Botón de arranque (Keyless start).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Controles de audio y velocidad crucero iluminados en el volante.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección Eléctricamente Asistida, sensible a la velocidad (EPS).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema Antibloqueo de Frenos (ABS).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Distribución Electrónica de Fuerza de Frenado (EBD).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Programa Electrónico de Estabilidad (ESP® ).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Luces de circulación diurna (DRL).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pantalla touch de 6.1" WVGA.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Bolsas de aire frontales (x2), laterales delanteras y traseras (x4) y tipo cortina (x2).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros de niebla delanteros.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asistencia de frenado.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos de disco en las 4 ruedas con pastillas de freno Akebono®.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Palancas de cambio de velocidades en el volante (Paddle Shifter).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión delantera: McPherson.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión trasera: Multilink.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sensor de reversa con cámara integrada.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de manos libres Bluetooth®.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Quemacocos eléctrico con cubierta interna deslizable.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos cubiertos con piel.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos delanteros con ajusre eléctrico de conductor y pasajero.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de volante con insertos plateados y piel perforada.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Costuras claras en volante, cubierta de palanca de velocidades y cubierta de freno de estacionamiento.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de Fascia con parrilla doble (superior e inferior)</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Biseles cromados para faros de niebla.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Molduras cromadas en los costados y nuevo diseño de estribos.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Spoiler traser para tapa de la cajuela.</p>'
												)
											)
										)
									),
									'col' => array(
										'class' => '1'
									)
								),
								'event' => array(
									'ga' => 'ficha_grand-vitara',
									'href' => 'catalogo-kizashi-2016.pdf'
								)
							)
						)
					),
					'mantenimiento' => array(
						'main' => array(
							'image' => 'kizashi.png',
							'key' => 'kizashi',
							'name' => 'Kizashi',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '3',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'Kizashi'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,150.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,285.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,815.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,665.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,755.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,925.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,925.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,355.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,845.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,675.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '100,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,450.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,295.00'
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,675.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '3'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => '"Algo grande está por venir". Imponente diseño con finos acabados que roban miradas.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_kizashi',
								'href' => 'kizashi.pdf'
							)
						)
					)
				),
				'nueva-vitara' => array(
					'key' => 'nueva-vitara',
					'name' => 'Nueva Vitara',
					'id' => '8',
					'inicio' => array(
						'main' => array(
							'image' => '',
							'title' => '',
							'slogan' => '',
							'price' => ''
						)
					),
					'caracteristicas' => array(
						'main' => array(
							'section_features' => array(
								'title' => 'Características',
								'description' => ''
							),
							'specifications' => array(
								'banner' => array(
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									),
									array(
										'image' => '',
										'title' => '',
										'description' => ''
									)
								)
							)
						)
					),
					'galeria' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Galería',
								'description' => 'Experimenta evolución. Distinción a primera vista.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-07.png',
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-06.png',
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-04.png',
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-10.png',
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-05.png',
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-02.png',
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'class' => 'interior',
											'href' => 'foto-08.png',
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'class' => 'exterior',
											'href' => 'foto-09.png',
										)
									)
								),
								'fancybox' => array(
									'int' => array(
										array(
											'group' => 'interior',
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'group' => 'interior',
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										)
									),
									'ext' => array(
										array(
											'group' => 'exterior',
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-09-mini.png',
											'href' => 'foto-09.png'
										),
										array(
											'group' => 'exterior',
											'img' => 'foto-10-mini.png',
											'href' => 'foto-10.png'
										)
									)
								)
							)
						)
					),
					'precios' => array(
						'main' => array(
							'section_prices' => array(
								'title' => 'VERSIONES Y PRECIOS SUGERIDOS',
								'description' => 'Detalles que hacen de un auto una experiencia.'
							),
							'model_prices' => array(
								'columns' => '1',
								'head' => array(
									'row' => array(
										'class' => 'dark'
									),
									'col' => array(
										'class' => '1'
									),
									'cell' => array(
										'class' => 'light',
										'first' => array(
											'class' => 'last first',
											'image' => 'kizashi-special.png',
											'title' => 'Kizashi Edición Especial'
										)
									)
								),
								'body' => array(
									'row' => array(
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'price' => array(
														'class' => 'price'
													),
													'class' => 'first',
													'title' => '<p><span>2016 $374,500.00</span></p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Motor: 4 cilindros, 2.4 litros VVT, 16 válvulas.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Transmisión CVT.</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Potencia neta (hp@rpm): 176 hp@6,500 rpm.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Rines: Nuevo diseño de 18".</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Aire acondicionado automático de doble zona.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Botón de arranque (Keyless start).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Controles de audio y velocidad crucero iluminados en el volante.</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Dirección Eléctricamente Asistida, sensible a la velocidad (EPS).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema Antibloqueo de Frenos (ABS).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Distribución Electrónica de Fuerza de Frenado (EBD).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Programa Electrónico de Estabilidad (ESP® ).</p>'
												)
											)
										),
										array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Luces de circulación diurna (DRL).</p>'
												)
											)
										),
										array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Pantalla touch de 6.1" WVGA.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Bolsas de aire frontales (x2), laterales delanteras y traseras (x4) y tipo cortina (x2).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Faros de niebla delanteros.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asistencia de frenado.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Frenos de disco en las 4 ruedas con pastillas de freno Akebono®.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Palancas de cambio de velocidades en el volante (Paddle Shifter).</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión delantera: McPherson.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Suspensión trasera: Multilink.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sensor de reversa con cámara integrada.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Sistema de manos libres Bluetooth®.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Quemacocos eléctrico con cubierta interna deslizable.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos cubiertos con piel.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Asientos delanteros con ajusre eléctrico de conductor y pasajero.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de volante con insertos plateados y piel perforada.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Costuras claras en volante, cubierta de palanca de velocidades y cubierta de freno de estacionamiento.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Nuevo diseño de Fascia con parrilla doble (superior e inferior)</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Biseles cromados para faros de niebla.</p>'
												)
											)
										),
                                        array(
											'class' => 'dark',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Molduras cromadas en los costados y nuevo diseño de estribos.</p>'
												)
											)
										),
                                        array(
											'class' => 'light',
											'cell' => array(
												'class' => 'light',
												'first' => array(
													'class' => 'first',
													'title' => '<p>Spoiler traser para tapa de la cajuela.</p>'
												)
											)
										)
									),
									'col' => array(
										'class' => '1'
									)
								),
								'event' => array(
									'ga' => 'ficha_grand-vitara',
									'href' => 'catalogo-kizashi-2016.pdf'
								)
							)
						)
					),
					'mantenimiento' => array(
						'main' => array(
							'image' => 'kizashi.png',
							'key' => 'kizashi',
							'name' => 'Kizashi',
							'maintenance_prices' => array(
								'section_maintenance_prices' => array(
									'title' => 'PRECIOS DE MANTENIMIENTO'
								),
								'table' => array(
									'columns' => '3',
									'body' => array(
										'row' => array(
											array(
												'id' => '1',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'first',
														'title' => 'KM'
													),
													'second' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'dark',
														'class' => '',
														'title' => 'Meses'
													),
													'third' => array(
														'head_class' => 'maintenance-head title',
														'col' => 'light',
														'class' => 'last',
														'title' => 'Kizashi'
													)
												)
											),
											array(
												'id' => '2',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '5,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '3'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,150.00'
													)
												)
											),
											array(
												'id' => '3',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '10,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '6'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,285.00'
													)
												)
											),
											array(
												'id' => '4',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '20,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '12'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,815.00'
													)
												)
											),
											array(
												'id' => '5',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '30,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '18'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,665.00'
													)
												)
											),
											array(
												'id' => '6',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '40,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '24'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,755.00'
													)
												)
											),
											array(
												'id' => '7',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '50,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '30'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$2,925.00'
													)
												)
											),
											array(
												'id' => '8',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '60,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '36'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,925.00'
													)
												)
											),
											array(
												'id' => '9',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '70,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '42'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,355.00'
													)
												)
											),
											array(
												'id' => '10',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '80,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '48'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,845.00'
													)
												)
											),
											array(
												'id' => '11',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '90,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '54'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,675.00'
													)
												)
											),
											array(
												'id' => '12',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '100,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '60'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$3,450.00'
													)
												)
											),
											array(
												'id' => '13',
												'class' => 'dark',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '110,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '66'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,295.00'
													)
												)
											),
											array(
												'id' => '14',
												'class' => 'light',
												'cell' => array(
													'first' => array(
														'col' => 'light',
														'class' => 'first',
														'title' => '120,000'
													),
													'second' => array(
														'col' => 'dark',
														'class' => '',
														'title' => '72'
													),
													'third' => array(
														'col' => 'light',
														'class' => 'last',
														'title' => '$1,675.00'
													)
												)
											)
										),
										'col' => array(
											'class' => '3'
										)
									)
								)
							)
						)
					),
					'accesorios' => array(
						'main' => array(
							'section_gallery' => array(
								'title' => 'Accesorios',
								'description' => '"Algo grande está por venir". Imponente diseño con finos acabados que roban miradas.'
							),
							'grid' => array(
								'boxes' => array(
									array(
										'class' => 'box-1',
										'image' => 'box-1.png',
										'mask' => array(
											'href' => 'foto-01.png',
											'span' => '1'
										)
									),
									array(
										'class' => 'box-2',
										'image' => 'box-2.png',
										'mask' => array(
											'href' => 'foto-02.png',
											'span' => '2'
										)
									),
									array(
										'class' => 'box-3',
										'image' => 'box-3.png',
										'mask' => array(
											'href' => 'foto-03.png',
											'span' => '3'
										)
									),
									array(
										'class' => 'box-4',
										'image' => 'box-4.png',
										'mask' => array(
											'href' => 'foto-04.png',
											'span' => '4'
										)
									),
									array(
										'class' => 'box-5',
										'image' => 'box-5.png',
										'mask' => array(
											'href' => 'foto-05.png',
											'span' => '5'
										)
									),
									array(
										'class' => 'box-6',
										'image' => 'box-6.png',
										'mask' => array(
											'href' => 'foto-06.png',
											'span' => '6'
										)
									),
									array(
										'class' => 'box-7',
										'image' => 'box-7.png',
										'mask' => array(
											'href' => 'foto-07.png',
											'span' => '7'
										)
									),
									array(
										'class' => 'box-8',
										'image' => 'box-8.png',
										'mask' => array(
											'href' => 'foto-08.png',
											'span' => '8'
										)
									)
								),
								'fancybox' => array(
									'thumbs' => array(
										array(
											'img' => 'foto-01-mini.png',
											'href' => 'foto-01.png'
										),
										array(
											'img' => 'foto-02-mini.png',
											'href' => 'foto-02.png'
										),
										array(
											'img' => 'foto-03-mini.png',
											'href' => 'foto-03.png'
										),
										array(
											'img' => 'foto-04-mini.png',
											'href' => 'foto-04.png'
										),
										array(
											'img' => 'foto-05-mini.png',
											'href' => 'foto-05.png'
										),
										array(
											'img' => 'foto-06-mini.png',
											'href' => 'foto-06.png'
										),
										array(
											'img' => 'foto-07-mini.png',
											'href' => 'foto-07.png'
										),
										array(
											'img' => 'foto-08-mini.png',
											'href' => 'foto-08.png'
										)
									)
								)
							),
							'event' => array(
								'ga' => 'Accesorios_kizashi',
								'href' => 'kizashi.pdf'
							)
						)
					)
				)
			);
		}
		public function getGamma() {
			return $this->gamma_model;
		}
		public function getModelos($key) {
			$models = array();
			if (array_key_exists($key, $this->modelos)) {
				$models = $this->modelos[$key];
				//echo "<pre>", print_r($models), "</pre>";
			}
			return $models;
		}
	}
?>