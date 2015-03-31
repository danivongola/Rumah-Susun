<?php
/**
 * Created by PhpStorm.
 * User: danivongola
 * Date: 3/18/15
 * Time: 7:52 PM
 */
class PenghuniSeeder extends Seeder {

    public function run()
    {
        $user1 = Sentry::findUserById(4);
        $user2 = Sentry::findUserById(5);
        $user3 = Sentry::findUserById(6);
        $user4 = Sentry::findUserById(7);
        $user5 = Sentry::findUserById(8);
        $user6 = Sentry::findUserById(9);
        $user7 = Sentry::findUserById(10);
        $user8 = Sentry::findUserById(11);
        $user9 = Sentry::findUserById(12);
        $user10 = Sentry::findUserById(13);
        $user11 = Sentry::findUserById(14);
        $user12 = Sentry::findUserById(15);
        $user13 = Sentry::findUserById(16);
        $user14 = Sentry::findUserById(17);
        $user15 = Sentry::findUserById(18);
        $user16 = Sentry::findUserById(19);
        $user17 = Sentry::findUserById(20);
        $user18 = Sentry::findUserById(21);
        $user19 = Sentry::findUserById(22);
        $user20 = Sentry::findUserById(23);
        $user21 = Sentry::findUserById(24);
        $user22 = Sentry::findUserById(25);
        $user23 = Sentry::findUserById(26);
        $user24 = Sentry::findUserById(27);
        $user25 = Sentry::findUserById(28);
        $user26 = Sentry::findUserById(29);
        $user27 = Sentry::findUserById(30);
        $user28 = Sentry::findUserById(31);
        $user29 = Sentry::findUserById(32);
        $user30 = Sentry::findUserById(33);
        $user31 = Sentry::findUserById(34);
        $user32 = Sentry::findUserById(35);
        $user33 = Sentry::findUserById(36);
        $user34 = Sentry::findUserById(37);
        $user35 = Sentry::findUserById(38);
        $user36 = Sentry::findUserById(39);
        $user37 = Sentry::findUserById(40);
        $user38 = Sentry::findUserById(41);
        $user39 = Sentry::findUserById(42);
        $user40 = Sentry::findUserById(43);
        $user41 = Sentry::findUserById(44);
        $user42 = Sentry::findUserById(45);
        $user43 = Sentry::findUserById(46);
        $user44 = Sentry::findUserById(47);
        $user45 = Sentry::findUserById(48);
        $user46 = Sentry::findUserById(49);
        $user47 = Sentry::findUserById(50);



        $kamar1= Kamar::find(1);
        $kamar1->id_user= $user1->id;
        $kamar1->save();

        $kamar2=Kamar::find(2);
        $kamar2->id_user= $user2->id;
        $kamar2->save();

        $kamar3=Kamar::find(3);
        $kamar3->id_user= $user3->id;
        $kamar3->save();

        $kamar4=Kamar::find(4);
        $kamar4->id_user= $user4->id;
        $kamar4->save();

        $kamar5=Kamar::find(5);
        $kamar5->id_user= $user5->id;
        $kamar5->save();

        $kamar6=Kamar::find(6);
        $kamar6->id_user= $user6->id;
        $kamar6->save();

        $kamar7=Kamar::find(7);
        $kamar7->id_user= $user7->id;
        $kamar7->save();

        $kamar8=Kamar::find(8);
        $kamar8->id_user= $user8->id;
        $kamar8->save();

        $kamar9=Kamar::find(9);
        $kamar9->id_user= $user9->id;
        $kamar9->save();

        $kamar10=Kamar::find(10);
        $kamar10->id_user= $user10->id;
        $kamar10->save();

        $kamar29=Kamar::find(29);
        $kamar29->id_user= $user11->id;
        $kamar29->save();

        $kamar30=Kamar::find(30);
        $kamar30->id_user= $user12->id;
        $kamar30->save();

        $kamar31=Kamar::find(31);
        $kamar31->id_user= $user13->id;
        $kamar31->save();

        $kamar32=Kamar::find(32);
        $kamar32->id_user= $user14->id;
        $kamar32->save();

        $kamar33=Kamar::find(33);
        $kamar33->id_user= $user14->id;
        $kamar33->save();

        $kamar34=Kamar::find(34);
        $kamar34->id_user= $user15->id;
        $kamar34->save();

        $kamar35=Kamar::find(35);
        $kamar35->id_user= $user16->id;
        $kamar35->save();

        $kamar89=Kamar::find(89);
        $kamar89->id_user= $user17->id;
        $kamar89->save();

        $kamar90=Kamar::find(90);
        $kamar90->id_user= $user18->id;
        $kamar90->save();

        $kamar91=Kamar::find(91);
        $kamar91->id_user= $user18->id;
        $kamar91->save();

        $kamar92=Kamar::find(92);
        $kamar92->id_user= $user19->id;
        $kamar92->save();

        $kamar93=Kamar::find(93);
        $kamar93->id_user= $user20->id;
        $kamar93->save();

        $kamar94=Kamar::find(94);
        $kamar94->id_user= $user21->id;
        $kamar94->save();

        $kamar95=Kamar::find(95);
        $kamar95->id_user= $user22->id;
        $kamar95->save();

        $kamar96=Kamar::find(96);
        $kamar96->id_user= $user23->id;
        $kamar96->save();

        $kamar97=Kamar::find(97);
        $kamar97->id_user= $user24->id;
        $kamar97->save();

        $kamar98=Kamar::find(98);
        $kamar98->id_user= $user25->id;
        $kamar98->save();

        $kamar99=Kamar::find(99);
        $kamar99->id_user= $user26->id;
        $kamar99->save();

        $kamar100=Kamar::find(100);
        $kamar100->id_user= $user27->id;
        $kamar100->save();

        $kamar101=Kamar::find(101);
        $kamar101->id_user= $user28->id;
        $kamar101->save();

        $kamar102=Kamar::find(102);
        $kamar102->id_user= $user29->id;
        $kamar102->save();

        $kamar103=Kamar::find(103);
        $kamar103->id_user= $user30->id;
        $kamar103->save();

        $kamar149=Kamar::find(149);
        $kamar149->id_user= $user31->id;
        $kamar149->save();

        $kamar150=Kamar::find(150);
        $kamar150->id_user= $user32->id;
        $kamar150->save();

        $kamar151=Kamar::find(151);
        $kamar151->id_user= $user33->id;
        $kamar151->save();

        $kamar152=Kamar::find(152);
        $kamar152->id_user= $user34->id;
        $kamar152->save();

        $kamar153=Kamar::find(153);
        $kamar153->id_user= $user35->id;
        $kamar153->save();

        $kamar154=Kamar::find(154);
        $kamar154->id_user= $user36->id;
        $kamar154->save();

        $kamar155=Kamar::find(155);
        $kamar155->id_user= $user37->id;
        $kamar155->save();

        $kamar156=Kamar::find(156);
        $kamar156->id_user= $user38->id;
        $kamar156->save();

        $kamar157=Kamar::find(157);
        $kamar157->id_user= $user39->id;
        $kamar157->save();

        $kamar158=Kamar::find(158);
        $kamar158->id_user= $user40->id;
        $kamar158->save();

        $kamar209=Kamar::find(209);
        $kamar209->id_user= $user41->id;
        $kamar209->save();

        $kamar210=Kamar::find(210);
        $kamar210->id_user= $user41->id;
        $kamar210->save();

        $kamar211=Kamar::find(211);
        $kamar211->id_user= $user42->id;
        $kamar211->save();

        $kamar213=Kamar::find(213);
        $kamar213->id_user= $user43->id;
        $kamar213->save();

        $kamar214=Kamar::find(214);
        $kamar214->id_user= $user44->id;
        $kamar214->save();

        $kamar215=Kamar::find(215);
        $kamar215->id_user= $user45->id;
        $kamar215->save();

        $kamar216=Kamar::find(216);
        $kamar216->id_user= $user46->id;
        $kamar216->save();

        $kamar217=Kamar::find(217);
        $kamar217->id_user= $user47->id;
        $kamar217->save();




        $this->command->info('PenghuniSeeder create!');


    }
}