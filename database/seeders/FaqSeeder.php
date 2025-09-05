<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            [
                'question' => 'Bagaimana cara bergabung dengan HIMSI UBSI?',
                'answer'   => 'Mahasiswa Sistem Informasi UBSI dapat bergabung melalui open recruitment yang diumumkan di media sosial atau website HIMSI.',
                'active'   => true,
            ],
            [
                'question' => 'Siapa saja yang bisa menjadi anggota HIMSI?',
                'answer'   => 'Seluruh mahasiswa aktif Program Studi Sistem Informasi Universitas Bina Sarana Informatika.',
                'active'   => true,
            ],
            [
                'question' => 'Ada berapa divisi di HIMSI UBSI?',
                'answer'   => 'HIMSI memiliki 4 divisi utama: Pendidikan (pengembangan akademik & ilmu pengetahuan), Kominfo (komunikasi & informasi), RSDM (pengembangan sumber daya mahasiswa), dan Litbang (penelitian & pengembangan organisasi).',
                'active'   => true,
            ],
            [
                'question' => 'Apa keuntungan menjadi anggota HIMSI?',
                'answer'   => 'Anggota dapat menyalurkan aspirasi, mengembangkan diri, memperluas relasi, serta berpartisipasi dalam kegiatan akademik maupun non-akademik.',
                'active'   => true,
            ],
            [
                'question' => 'Apakah ada biaya untuk menjadi anggota HIMSI?',
                'answer'   => 'Tidak ada biaya pendaftaran, cukup mengikuti seleksi dan berkomitmen aktif dalam kegiatan HIMSI.',
                'active'   => true,
            ],
            [
                'question' => 'Kegiatan apa saja yang diadakan oleh HIMSI?',
                'answer'   => 'HIMSI rutin mengadakan seminar, workshop, lomba, bakti sosial, dan kegiatan kebersamaan untuk mempererat solidaritas anggota.',
                'active'   => true,
            ],
        ]);
    }
}
