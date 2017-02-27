<?php
//se uas para ingresar datos con el comando php arisan migration --seed
class PostTableSeeder extends Seeder{
	public function run(){
		Post::create(array(
			'title'=> 'Creador de las saladitas llamo a Obama',
			'content' => 'Se realizo la encuesta de calidad al ex-presidente de EE.UU, con la finalidad de mejorar las mismas'
			));
		Post::create(array(
			'title'=> 'Reviven disco duro dañado',
			'content' => 'Anterior mente habian confirmado la muerte de dicho disco, el dueño se impacto al ver que seguia funcionando'
			));
		Post::create(array(
			'title'=> 'Las ofertas de la seman',
			'content' => 'Personas encuentran ofertas que fueron publicadas con precios elevados con descuentos de 75% para hacer creer que en realidad es una buena oferta'
			));
		Post::create(array(
			'title'=> 'Se encuentra animal extraño',
			'content' => 'expertos confirman videos y fotos de un animal que tiene una gran parecido con un murcielago, rata y un chihuahua'
			));
	}
}