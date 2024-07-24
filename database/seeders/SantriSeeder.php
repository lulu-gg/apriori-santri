<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    public function run()
    {
        $santris = [
            ['nama' => 'Dewi Aulia Atika Ayu', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2008-04-28'],
            ['nama' => 'Garneta Bintang Prasasti', 'tempat_lahir' => 'Kediri', 'tanggal_lahir' => '2008-04-23'],
            ['nama' => 'Mohammad Farid Maulana Syafi\'i', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2008-03-17'],
            ['nama' => 'Riski Ihsanudin', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2008-12-08'],
            ['nama' => 'Asrul Aifa Aditiya', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2008-08-05'],
            ['nama' => 'Wahyu Putra Pratama', 'tempat_lahir' => 'Magetan', 'tanggal_lahir' => '2008-02-13'],
            ['nama' => 'Riyan Efendi', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2008-01-02'],
            ['nama' => 'Gita Nur Risma Febrianty', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2008-02-14'],
            ['nama' => 'Missa Adi Ratna S.', 'tempat_lahir' => 'Madiun', 'tanggal_lahir' => '2008-10-02'],
            ['nama' => 'Laila Vitri Atul Rohmah', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2008-08-21'],
            ['nama' => 'Adinda Tahlia Salsabila', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2008-07-16'],
            ['nama' => 'Isna Rofiatul Huda', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2008-05-12'],
            ['nama' => 'Dina Shafwatul Qolbi', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2007-08-30'],
            ['nama' => 'Yusnia Wahidanisa', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-05-12'],
            ['nama' => 'Galih Haiqal Putra Pratama', 'tempat_lahir' => 'Magetan', 'tanggal_lahir' => '2007-09-06'],
            ['nama' => 'Ega Yogi Febriyansah', 'tempat_lahir' => 'Magetan', 'tanggal_lahir' => '2007-02-22'],
            ['nama' => 'Amelda Claudy Kawichawati', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-04-06'],
            ['nama' => 'Levya Meylani Putri', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-05-16'],
            ['nama' => 'Afandi Ega Herdianto', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-08-22'],
            ['nama' => 'Muhammad Toha Mansyur', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-08-26'],
            ['nama' => 'Miftahur Ridwan', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-05-15'],
            ['nama' => 'Dina Izzul Aulia', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2007-08-06'],
            ['nama' => 'Julisa Seviana Sari', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-07-29'],
            ['nama' => 'Diwana Oktavi Septiayu', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2007-10-01'],
            ['nama' => 'Alfi Nuril Hidayah', 'tempat_lahir' => 'Madiun', 'tanggal_lahir' => '2007-10-31'],
            ['nama' => 'Dinda Hamdia Rizqina', 'tempat_lahir' => 'Madiun', 'tanggal_lahir' => '2007-05-02'],
            ['nama' => 'Naya Suci Azahrani', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2007-11-10'],
            ['nama' => 'Syifaaul Zahra Nafinsha', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2006-06-02'],
            ['nama' => 'Febria Az zahra', 'tempat_lahir' => 'Jakarta', 'tanggal_lahir' => '2006-02-06'],
            ['nama' => 'Alifah Presilia', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2006-02-15'],
            ['nama' => 'Lia Nurhayati Husna', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2006-10-24'],
            ['nama' => 'Izzah Muqoddimatul Husna', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2006-04-22'],
            ['nama' => 'Maysa Wafiq Saptarina', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2006-09-06'],
            ['nama' => 'Rizky Dwi Yahya', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2006-09-13'],
            ['nama' => 'Isma Aisyantin Nisaul Khoiriyah', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2006-12-23'],
            ['nama' => 'Dina Rosita', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-03-31'],
            ['nama' => 'Nafisatum Mardziyah', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2005-06-30'],
            ['nama' => 'Anjani Ainu Zifa', 'tempat_lahir' => 'Pacitan', 'tanggal_lahir' => '2005-06-20'],
            ['nama' => 'Salsa Rostika Hidayati', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-01-12'],
            ['nama' => 'Nia Kurniawati', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-02-07'],
            ['nama' => 'Ritra Ayu Permadani', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-08-01'],
            ['nama' => 'Desi Rahmawati', 'tempat_lahir' => 'Wonogiri', 'tanggal_lahir' => '2005-12-12'],
            ['nama' => 'Riyan Zakaria Zulkarnain', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-09-07'],
            ['nama' => 'Ahmad Chamim Alfadilah', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-06-19'],
            ['nama' => 'Muhamad Kowim Al-Ma\'nawi', 'tempat_lahir' => 'Ponorogo', 'tanggal_lahir' => '2005-08-22'],
        ];

        $nilai_opsi = [30, 40, 50, 60, 70, 80, 90, 100];

        foreach ($santris as $santri) {
            Santri::create([
                'nama' => $santri['nama'],
                'tempat_lahir' => $santri['tempat_lahir'],
                'tanggal_lahir' => $santri['tanggal_lahir'],
                'tes_tulis' => $nilai_opsi[array_rand($nilai_opsi)], // Nilai dummy Tes Tulis
                'surah_pilihan' => $nilai_opsi[array_rand($nilai_opsi)], // Nilai dummy Surah Pilihan
                'menulis_pegon' => $nilai_opsi[array_rand($nilai_opsi)], // Nilai dummy Menulis Pegon
            ]);
        }
    }
}
