<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = [
    		[
    			'id'				=>	1,
    			'usuario'			=>	'frank',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	1	
    		],
    		[
    			'id'				=>	2,
    			'usuario'			=>	'jorge',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	2	
    		],
    		[
    			'id'				=>	3,
    			'usuario'			=>	'edwin',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	3	
    		],
    		[
    			'id'				=>	4,
    			'usuario'			=>	'alonso',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	2	
    		],
    		[
    			'id'				=>	5,
    			'usuario'			=>	'casandra',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	2	
    		],
    		[
    			'id'				=>	6,
    			'usuario'			=>	'francisco',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	3	
    		],
    		[
    			'id'				=>	7,
    			'usuario'			=>	'cesar',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	2	
    		],
    		[
    			'id'				=>	8,
    			'usuario'			=>	'diana',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	2	
    		],
    		[
    			'id'				=>	9,
    			'usuario'			=>	'mercy',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	3	
    		],
    		[
    			'id'				=>	10,
    			'usuario'			=>	'fatima',
    			'password'			=>	'$2y$10$c/yBys1gkgCcwpY7qiyX4..6Q5Cd1J6FtKkr0Bl6FLk16A/0xmnY.',
    			'idrol'				=>	3	
    		],
    	];
        //
        User::insert($user);
    }
}
