<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         #Les Administrateurs
         User::create(
            [
                'nom' => 'NIONGRE',
                'prenom' => 'Dieudonné',
                'email' => 'admi@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '72980689',
                'remember_token' => Str::random(10),
                'role' => 'admin',
                'photo' => 'assets_private/img/admin-2.png',
            ]
        );

        User::create(
            [
                'nom' => 'Ouedraogo ',
                'prenom' => 'Alice',
                'email' => 'admin1@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '75987689',
                'remember_token' => Str::random(10),
                'photo' => 'assets_private/img/adminw.png',
            ]
        );

        User::create(
            [
                'nom' => 'Kafando ',
                'prenom' => 'Jean',
                'email' => 'admin2@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '70987689',
                'remember_token' => Str::random(10),
                'photo' => 'assets_private/img/admin.png',
                'role' => 'admin',
            ]
        );

        User::create(
            [
                'nom' => 'SSS',
                'prenom' => 'Sukuna',
                'email' => 'admin3@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '70987689',
                'remember_token' => Str::random(10),
                'role' => 'admin',
                'photo' => 'assets_private/img/admin.png',

            ]
        );
        #Fin Administrateurs



        #Les Promoteurs
        User::create(
            [
                'nomcomplet' => 'FasoCiné ',
                'email' => 'promteur1@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '71997689',
                'remember_token' => Str::random(10),
                'siege' => 'Ouagadougou',
                'activites' => 'Concert, Cinema',
                'role' => 'promoteur',
                'status' => 'accepter',
                'photo' => 'assets_private/img/promot-1.jpg',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'KdgConcert ',
                'email' => 'promoteur2@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '73987689',
                'remember_token' => Str::random(10),
                'siege' => 'Koudougou',
                'activites' => 'Concert',
                'role' => 'promoteur',
                'status' => 'accepter',
                'photo' => 'assets_private/img/promot-2.jpg',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'ZouloCiné ',
                'email' => 'promoteur3@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '61987689',
                'remember_token' => Str::random(10),
                'siege' => 'Bobo',
                'activites' => 'Cinema, Foire, Danse',
                'role' => 'promoteur',
                'status' => 'accepter',
                'photo' => 'assets_private/img/promot-3.png',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'WendSoCinema ',
                'email' => 'promoteur4@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '77987689',
                'remember_token' => Str::random(10),
                'siege' => 'Bobo',
                'activites' => 'Cinema, Concert, Danse',
                'role' => 'promoteur',
                'status' => 'accepter',
                'photo' => 'assets_private/img/promot-4.jpg',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'DanzoCiné ',
                'email' => 'promoteur5@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '60987689',
                'remember_token' => Str::random(10),
                'siege' => 'Koudougou',
                'activites' => 'Danse',
                'role' => 'promoteur',
                'status' => 'en_attente',
                'photo' => 'assets_private/img/promot-5.jpg',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'SuperSho',
                'email' => 'promoteur6@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '61987689',
                'remember_token' => Str::random(10),
                'siege' => 'Bobo',
                'activites' => 'Danse, Fête',
                'role' => 'promoteur',
                'status' => 'en_attente',
                'photo' => 'assets_private/img/promot-6.jpg',

            ]
        );

        User::create(
            [
                'nomcomplet' => 'ODGSocity',
                'email' => 'promoteur7@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '51907689',
                'remember_token' => Str::random(10),
                'siege' => 'Banfora',
                'activites' => 'Concert, Danse, Shop, Fete',
                'role' => 'promoteur',
                'status' => 'rejeter',
                'photo' => 'assets_private/img/promot-7.jpg',

            ]
        );
        #Fin promoteurs



        #Les abonnés
        User::create(
            [
                'nom' => 'M.D',
                'prenom' => 'Luffy',
                'email' => 'abonne@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '63907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne.jpg',

            ]
        );

        User::create(
            [
                'nom' => 'Soré',
                'prenom' => 'Adama',
                'email' => 'abonne1@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '50907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Shop, Fete',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-1.png',

            ]
        );

        User::create(
            [
                'nom' => 'Sankara',
                'prenom' => 'Daouda',
                'email' => 'abonne2@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '51907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Shop',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-2.jpeg',

            ]
        );

        User::create(
            [
                'nom' => 'Sawadogo',
                'prenom' => 'Alassane',
                'email' => 'abonne3@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '52907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Shop, Fete',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-3.jpg',

            ]
        );

        User::create(
            [
                'nom' => 'Somda',
                'prenom' => 'Aziz',
                'email' => 'abonne4@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '54907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-4.png',

            ]
        );

        User::create(
            [
                'nom' => 'Tassanbedo',
                'prenom' => 'Bintou',
                'email' => 'abonne5@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '55907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'photo' => 'assets_private/img/abonne-5.jpg',
                'role' => 'abonne',
            ]
        );

        User::create(
            [
                'nom' => 'Ouedrago',
                'prenom' => 'Alimata',
                'email' => 'abonne6@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '56907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Shop, Fete',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-6.png',

            ]
        );

        User::create(
            [
                'nom' => 'Siré',
                'prenom' => 'Emmanuel',
                'email' => 'abonne7@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '57907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Shop, Fete',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-7.png',

            ]
        );

        User::create(
            [
                'nom' => 'Tiendrebeogo',
                'prenom' => 'Karim',
                'email' => 'abonne8@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '58907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Foire',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-8.png',

            ]
        );

        User::create(
            [
                'nom' => 'Kaboré',
                'prenom' => 'Seidou',
                'email' => 'abonne9@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '61907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse, Foire',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-9.png',

            ]
        );

        User::create(
            [
                'nom' => 'Bamogo',
                'prenom' => 'Judite',
                'email' => 'abonne10@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '77907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-10.png',

            ]
        );

        User::create(
            [
                'nom' => 'Uzumaki',
                'prenom' => 'Naruto',
                'email' => 'abonne11@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '67907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-11.png',

            ]
        );

        User::create(
            [
                'nom' => 'Yuji',
                'prenom' => 'Hitadori',
                'email' => 'abonne12@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '69907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-12.jpg',

            ]
        );

        User::create(
            [
                'nom' => 'Kamado',
                'prenom' => 'Tanjiro',
                'email' => 'abonne13@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '72907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-13.jpg',

            ]
        );

        User::create(
            [
                'nom' => 'Utchiwa',
                'prenom' => 'Hitachi',
                'email' => 'abonne14@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '72907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-14.jpg',

            ]
        );

        User::create(
            [
                'nom' => 'Tsunadé',
                'prenom' => 'Tsunadé',
                'email' => 'abonne15@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '72907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-15.png',

            ]
        );

        User::create(
            [
                'nom' => 'Sung',
                'prenom' => 'Jun Woo',
                'email' => 'abonne16@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
                'telephone' => '72907689',
                'remember_token' => Str::random(10),
                'preferences' => 'Concert, Danse',
                'role' => 'abonne',
                'photo' => 'assets_private/img/abonne-16.jpg',

            ]
        );
    }
}
