<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            //Customer
            [
                'name' => 'Reza Indra Maulana',
                'email' => 'rezaindramaulana@gmail.com',
                'role' => 'Customer',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Rizqie Ahmad Zakaria Hende',
                'email' => 'rizqiehende@gmail.com',
                'role' => 'Customer',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Admin
            [
                'name' => 'Rahma Aisyah',
                'email' => 'rahmasangketua@gmail.com',
                'role' => 'Admin',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Kipas Angin
            [
                'name' => 'Abdul',
                'email' => 'abdulazizsaepurohmat1@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kipas Angin',
                'deskripsi' => 'saya abdul aziz sang tukang service kipas yang hebat dan keren',
                'pengalaman' => 'Pengalaman < 1 tahun',
                'rating' => '2',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Abdul Aziz',
                'email' => 'abdulazizsaepurohmat2@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kipas Angin',
                'deskripsi' => 'saya abdul aziz sang tukang service kipas yang hebat dan keren',
                'pengalaman' => 'Pengalaman 5+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Abdul Aziz Saepurohat',
                'email' => 'abdulazizsaepurohmat3@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kipas Angin',
                'deskripsi' => 'saya abdul aziz sang tukang service kipas yang hebat dan keren',
                'pengalaman' => 'Pengalaman 3+ tahun',
                'rating' => '3',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi AC
            [
                'name' => 'Aryoseto',
                'email' => 'aryosetowahyatma1@gmail.com',
                'role' => 'Teknisi',
                'service' => 'AC',
                'deskripsi' => 'saya aryoseto sang tukang service AC yang hebat dan keren',
                'pengalaman' => 'Pengalaman < 1 tahun',
                'rating' => '1',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma',
                'email' => 'aryosetowahyatma2@gmail.com',
                'role' => 'Teknisi',
                'service' => 'AC',
                'deskripsi' => 'saya aryoseto sang tukang service AC yang hebat dan keren',
                'pengalaman' => 'Pengalaman 3+ tahun',
                'rating' => '3',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala',
                'email' => 'aryosetowahyatma3@gmail.com',
                'role' => 'Teknisi',
                'service' => 'AC',
                'deskripsi' => 'saya aryoseto sang tukang service AC yang hebat dan keren',
                'pengalaman' => 'Pengalaman 4+ tahun',
                'rating' => '3',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'aryosetowahyatma4@gmail.com',
                'role' => 'Teknisi',
                'service' => 'AC',
                'deskripsi' => 'saya aryoseto sang tukang service AC yang hebat dan keren',
                'pengalaman' => 'Pengalaman 5+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Mesin Cuci
            [
                'name' => 'Sidqi',
                'email' => 'sidqiatallah1@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Mesin Cuci',
                'deskripsi' => 'saya sidqi sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 3+ tahun',
                'rating' => '3',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah2@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Mesin Cuci',
                'deskripsi' => 'saya sidqi sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 6+ tahun',
                'rating' => '4',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah3@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Mesin Cuci',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Microwave
            [
                'name' => 'Sidqi',
                'email' => 'sidqiatallah4@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Microwave',
                'deskripsi' => 'saya sidqi sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 3+ tahun',
                'rating' => '3',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah5@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Microwave',
                'deskripsi' => 'saya sidqi sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 6+ tahun',
                'rating' => '4',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah6@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Microwave',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Kulkas
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah7@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kulkas',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '1',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah8@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kulkas',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '4',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah9@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kulkas',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '2',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah10@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kulkas',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Kompor
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah11@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kompor',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah12@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kompor',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah13@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kompor',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah14@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kompor',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah15@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Kompor',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '5',
                'password' => bcrypt('TelkomUniversity'),
            ],

            //Teknisi Oven
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah16@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Oven',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '2',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah17@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Oven',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '1',
                'password' => bcrypt('TelkomUniversity'),
            ],
            [
                'name' => 'Aryoseto Wahyatma Manggala Nititioso',
                'email' => 'sidqiatallah18@gmail.com',
                'role' => 'Teknisi',
                'service' => 'Oven',
                'deskripsi' => 'saya arysidqioseto sang tukang service mesin cuci yang hebat dan keren',
                'pengalaman' => 'Pengalaman 9+ tahun',
                'rating' => '4',
                'password' => bcrypt('TelkomUniversity'),
            ],

        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}