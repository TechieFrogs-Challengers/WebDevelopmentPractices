<?php

	interface Lawnmower {
		public function cut_grass();
	}

	// does not implement 
	class CrappyMowersInc  {
		public function leak_oil() {
			return 'leaking oil';
		}
	}
	$mower = new CrappyMowersInc;

	var_dump($mower->leak_oil()); // leaking oil

	class Kubota implements Lawnmower {
		public function cut_grass(){
			return 'cutting major grass';
		}
	}
	$mower = new Kubota;
	var_dump($mower->cut_grass()); // cutting major grass

	class JohnDeere implements Lawnmower {
		public function cut_grass(){
			return 'cutting grass like a champion';
		}
	}
	$mower = new JohnDeere;
	var_dump($mower->cut_grass()); // cutting grass like a champion
?>