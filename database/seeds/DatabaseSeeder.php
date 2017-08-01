<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$vader = DB::table('users')->insert([
                'first_name' => 'Darth',
				'last_name'  => 'Vader',
				'email'      => 'darthv@deathstar.com',
				'password'   => Hash::make('thedarkside'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

		DB::table('users')->insert([
                'first_name' => 'Luke',
				'last_name'  => 'Skywalker',
				'email'      => 'lightwalker@rebels.com',
				'password'   => Hash::make('hesnotmydad'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

		DB::table('users')->insert([
                'first_name' => 'Yoda',
				'last_name'  => 'Unknown',
				'email'      => 'dancingsmallman@rebels.com',
				'password'   => Hash::make('yodaIam'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);
	}

}
