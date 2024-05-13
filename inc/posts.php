<?php

/**
 * Devuelve todo el listado de posts
 */


function get_all_posts() {
	return [
		[
			'id' => 1,
			'title' => 'IA y Diseno Web Creatividad Automatizada',
			'excerpt' => 'Descubre cómo la inteligencia artificial está revolucionando el diseño web, generando contenido dinámico y recomendando diseños personalizados para cada usuario.',
			'content' => 'En un mundo digital en constante evolución, la IA está transformando la forma en que creamos y experimentamos sitios web. Gracias a algoritmos avanzados de generación de contenido, ahora podemos automatizar la creación de textos y diseños web, adaptándolos a las necesidades específicas de cada proyecto. Esta revolución en el diseño web no solo aumenta la eficiencia y la productividad, sino que también abre nuevas fronteras de creatividad y personalización. Con herramientas de diseño web asistido por IA, los desarrolladores pueden explorar un universo de posibilidades creativas, desde la generación automática de diseños hasta la optimización del rendimiento web. Al integrar la inteligencia artificial en el proceso de diseño web, estamos dando forma al futuro de la creatividad en línea, donde la innovación y la personalización son la norma.',
			'published_on' => '2024-05-11 10:15:00',
		],
		[
			'id' => 2,
			'title' => 'IA y Contenido Dinamico La Evolucion del Web Development',
			'excerpt' => 'Explora cómo la inteligencia artificial está impulsando la generación de contenido dinámico, desde descripciones de productos hasta artículos de blog, en el desarrollo web moderno.',
			'content' => 'En la era digital actual, la demanda de contenido web dinámico y personalizado está en aumento. La inteligencia artificial está desempeñando un papel fundamental en este cambio, permitiendo la creación automatizada de contenido en tiempo real. Desde la generación de descripciones de productos hasta la redacción de artículos de blog, los algoritmos de IA están capacitados para comprender el contexto y las preferencias del usuario, entregando contenido relevante y atractivo de manera instantánea. Esta evolución en el desarrollo web no solo mejora la eficiencia y la escalabilidad, sino que también enriquece la experiencia del usuario al ofrecer contenido personalizado y oportuno. Al adoptar herramientas de generación de contenido asistido por IA, los desarrolladores web pueden ofrecer experiencias más dinámicas y atractivas, impulsando la participación y la fidelidad del usuario en un mercado digital cada vez más competitivo.',
			'published_on' => '2024-05-05 12:15:00',
		],
	];
}

/**
 * Busca y devuelve un sólo post
 * Si no lo encuentra, devuelve false
 */
function get_post( $post_id ) {
	foreach ( get_all_posts() as $post ) {
		if ( $post['id'] == $post_id ) {
			return $post;
		}
	}
	return false;
}
