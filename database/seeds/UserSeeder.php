<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        DB::table('users')->insert(
            [
            'name' => "Administrator2",
            'email' => 'admin2@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 'alou'    
            ]    
        );
*/                
        
        factory(\App\User::class, 40)->create();
    }
}
