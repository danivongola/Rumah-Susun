<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
       // $this->call('PostsTableSeeder');
       // $this->call('SentrySeeder'); // panggil SentrySeeder yang baru dibuat
        $this->call('GroupSeeder');
        $this->call('UserSeeder');
        $this->call('KamarSeeder');
        $this->call('PenghuniSeeder');
    }
    }