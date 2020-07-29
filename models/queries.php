<?php
	class queries extends CI_Model{
		public function getPosts(){
			$query = $this-> db-> get('elist');
			if ($query -> num_rows()>0) {
				
				return $query -> result();			
				}
			 }
			public function addPost($data){
			return $this-> db -> insert('elist',$data);
			}
			public function getsinglePosts($id){
			$query = $this-> db ->get_where('elist',array('id'=>$id));

			if ($query -> num_rows()>0) {
				
				return $query -> row();			
				}
			}

			public function updatePost($data,$id){
				return $this-> db ->where('id',$id)
						->update('elist',$data);
			}
			public function deletePosts($id){
				return $this-> db ->delete('elist',['id'=>$id]);
						//$this-> db 	->update('elist',$data);	
			}
			public function fetchUserDetails()
			{
				$query=$this->db->query('select * from elist');
				

			}

	}
?>