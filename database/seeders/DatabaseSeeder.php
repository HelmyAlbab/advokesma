<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Aspirasi;
use App\Models\topnew;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Aspirasi::factory(10)->create();

        User::create([
            'name' => 'Helmy fadlail',
            'username' => 'helmy',
            'email' => 'helmyfadlail.5@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Topnew::create([
            'judul' => 'Penyesuaian Jam Perkuliahan',
            'excerpt' => 'Setelah berakhirnya bulan Ramadhan, jam perkuliahan akan mengalami penyesuaian kembali seperti jadwal semula.',
            'body' => 'Perkuliahan yang dilaksanakan secara luring di kampus, tetap hanya diselenggarakan maksimum 1 jam di dalam kelas. (Gambar 1). Namun, untuk sesi tertentu yang tertera melebihi 1. untuk mata kuliah terjadwal dalam minggu luring, maka pelaksanaan kuliah menggunakan “jam luring”, serta ruangan yang dapat dilihat pada akun SIAM/SIADO (mohon selalu mengecek ruangan berkala, karena dimungkinkan ada penyesuaian ruangan jika terjadi bentrok) jam, maka jam mulai dan jam selesai dapat diatur sesuai kesepakatan kelas.',
            'pj' => 'Raihan Alfarisi'
        ]);
        Topnew::create([
            'judul' => 'Pojok Beasiswa',
            'excerpt' => 'POJOK BEASISWA | Beasiswa KAMI Foundation',
            'body' => 'Beasiswa KAMI Foundation merupakan bentuk kontribusi nyata KAMI Foundation sebagai NGO yang berfokus pada pengembangan pemuda/i Indonesia untuk mendukung pendidikan di Indonesia melalui tunjangan belajar dan pengembangan kompetensi diri, khususnya pengembangan softskill dan hardskill.',
            'pj' => 'Teguh'
        ]);
        Topnew::create([
            'judul' => 'Krisis Center UKT',
            'excerpt' => 'CRISIS CENTER UKT | Informasi UKT dan Bantuan Keuangan bagi Mahasiswa Baru Jalur SNMPTN',
            'body' => '<p>Pada tanggal 28 April 2022 yang lalu, mahasiswa baru jalur SNMPTN sudah dapat melihat pengumuman penetapan UKT jalur SNMPTN 2022/2023 pada tautan berikut ini: 🔗 https://selma.ub.ac.id/pengumuman-penetapan-uang-kuliah-tunggal-ukt-jalur-snmptn-2022-2023/.</p> <p>Mulai hari Senin, 9 Mei 2022 mahasiswa baru jalur SNMPTN dapat melakukan pengajuan permohonan perubahan kelompok dan pembayaran uang kuliah tunggal (UKT) secara mengangsur pada laman berikut ini : 🔗 https://bantuankeuangan.ub.ac.id </p>',
            'pj' => 'Fadlail Albab'
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
