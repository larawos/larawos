<?php

use Illuminate\Database\Seeder;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
            $id = DB::table('users')->insertGetId([
                'nickname' => 'Larawos',
                'created_at' => carbon(),
                'updated_at' => carbon()
            ]);

            return DB::table('user_accounts')->insert([
                    'user_id' => $id,
                    'login_type' => 0,
                    'username' => 'admin',
                    'password' => bcrypt('123456'),
                    'api_token' => str_random(40),
                    'logined_ip' => 0,
                    'logined_at' => carbon(),
                    'created_at' => carbon(),
                    'updated_at' => carbon()
                ]);

            return DB::table('admin_accounts')->insert([
                    'user_id' => $id,
                    'login_type' => 0,
                    'username' => 'admin',
                    'password' => bcrypt('123456'),
                    'api_token' => str_random(40),
                    'logined_ip' => 0,
                    'logined_at' => carbon(),
                    'created_at' => carbon(),
                    'updated_at' => carbon()
                ]);
        });

    }
}
