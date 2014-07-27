<?php
	class AglimaBadWords {
		private $badwords = array();
		
		public function add($word) {
			if(!$this->isBadWord($word)) {
				$this->badwords[] = $word;
			}
		}
		
		public function remove($word) {
			if($this->isBadWord($word)) {
				$word = array_search($word, $this->badwords);
				unset($this->badwords[$word]);
				return true;
			}
		}
		
		public function isBadWord($word) {
			if(in_array($word, $this->badwords)) {
				return true;
			}
		}
		
		public function getCount() {
			return count($this->badwords);
		}
		
		public function dump() {
			var_dump($this->badwords);
		}
	}
?>
