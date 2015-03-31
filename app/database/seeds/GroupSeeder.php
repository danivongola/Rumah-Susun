<?php
/**
 * Created by PhpStorm.
 * User: danivongola
 * Date: 2/18/15
 * Time: 10:47 AM
 */
class GroupSeeder extends Seeder {

public function run()
{

    $data = [
    [
         'name'               =>'admin',
         'permissions'         =>[
             'admin' => 1,
             'penghuni'=>1,
             'calonpenghuni'=>1
         ],

    ],
    [
        'name'               =>'penghuni',
          'permissions'         =>[
              'admin' => 0,
              'penghuni'=>1,
              'calonpenghuni'=>0
          ],
],
       [
        'name'               =>'calonpenghuni',
        'permissions'         =>[
            'admin' => 0,
            'penghuni'=>0,
            'calonpenghuni'=>1
        ],
           ]
];
    foreach ($data as $id)
    {
        Sentry::getGroupProvider()->create($id);
    }
    $this->command->info('Group create');
 }
}