<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Page extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM page WHERE id=$id");
		 }
		
		public function getByRange($from, $to)
		 {
			return $this->findAll("SELECT * FROM page WHERE id>=$f
rom AND id<=$to");
		 }
	}
