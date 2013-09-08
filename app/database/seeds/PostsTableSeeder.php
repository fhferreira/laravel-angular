<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();

		$posts = array(
			[
				'title'	=>	'Portfolio 1',
			 	'image'	=>	'<img src="http://placehold.it/400x400">',
			 	'detail'=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, odio error beatae architecto quas 
			 					inventore tempora in rerum tempore nisi at impedit corporis temporibus'
			 ],
			 [
				'title'	=>	'Portfolio 2',
			 	'image'	=>	'<img src="http://placehold.it/400x400">',
			 	'detail'=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, odio error beatae architecto quas 
			 					inventore tempora in rerum tempore nisi at impedit corporis temporibus'
			 ],
			 [
				'title'	=>	'Portfolio 3',
			 	'image'	=>	'<img src="http://placehold.it/400x400">',
			 	'detail'=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, odio error beatae architecto quas 
			 					inventore tempora in rerum tempore nisi at impedit corporis temporibus'
			 ],
		);

		// Uncomment the below to run the seeder
		DB::table('posts')->insert($posts);
	}

}