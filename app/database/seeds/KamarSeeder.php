<?php
/**
 * Created by PhpStorm.
 * User: danivongola
 * Date: 3/17/15
 * Time: 10:43 PM
 */
class KamarSeeder extends Seeder {

    public function run()
    {
        for( $x=0 ; $x<28; $x++ )
        {
            $kamar= new Kamar();
            $kamar ->no_kamar = $x+1;
            $kamar->lantai = 1;
            $kamar->harga_kamar = 235000;
            $kamar->save();

        }

        for( $x=0 ; $x<60; $x++ )
        {
            $kamar= new Kamar();
            $kamar ->no_kamar = $x+29;
            $kamar->lantai = 2;
            $kamar->harga_kamar = 215000;
            $kamar->save();

        }

        for( $x=0 ; $x<60; $x++ )
        {
            $kamar= new Kamar();
            $kamar ->no_kamar = $x+89;
            $kamar->lantai = 3;
            $kamar->harga_kamar = 195000;
            $kamar->save();

        }

        for( $x=0 ; $x<60; $x++ )
        {
            $kamar= new Kamar();
            $kamar ->no_kamar = $x+149;
            $kamar->lantai = 4;
            $kamar->harga_kamar = 175000;
            $kamar->save();

        }

        for( $x=0 ; $x<60; $x++ )
        {
            $kamar= new Kamar();
            $kamar ->no_kamar = $x+209;
            $kamar->lantai = 5;
            $kamar->harga_kamar = 156000;
            $kamar->save();

        }




        $this->command->info('Kamar Seeder create!');
    }


}