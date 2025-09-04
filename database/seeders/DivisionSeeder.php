<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            [
                'name' => 'Divisi Pendidikan',
                'description' => 'Divisi Pendidikan bertugas mengembangkan kualitas keilmuan dan keterampilan anggota melalui berbagai program pembelajaran. Fokus utama divisi ini adalah menyusun kurikulum, mengadakan kegiatan pelatihan, serta membangun suasana akademik yang kondusif demi meningkatkan kompetensi sumber daya manusia.',
                'jobs' => [
                    'Menyusun kurikulum pelatihan internal',
                    'Mengelola kegiatan belajar mengajar',
                    'Mengadakan seminar, workshop, dan pelatihan rutin',
                ],
            ],
            [
                'name' => 'Divisi Kominfo',
                'description' => 'Divisi Kominfo berperan dalam mengelola komunikasi internal maupun eksternal organisasi. Divisi ini bertanggung jawab menjaga citra organisasi dengan memanfaatkan media sosial, website, dan kanal publikasi lainnya. Selain itu, Kominfo juga menjadi penghubung utama dalam penyampaian informasi kepada anggota dan masyarakat.',
                'jobs' => [
                    'Mengelola media sosial organisasi',
                    'Membuat konten publikasi kreatif',
                    'Mengelola website dan sistem informasi',
                ],
            ],
            [
                'name' => 'Divisi RSDM',
                'description' => 'Divisi RSDM (Sumber Daya Manusia) berfokus pada pengelolaan, pembinaan, dan pengembangan anggota. Tugasnya meliputi pengaturan struktur keanggotaan, penempatan posisi, hingga penyediaan program pelatihan untuk mendukung peningkatan soft skill maupun hard skill para anggota.',
                'jobs' => [
                    'Mengelola data dan database anggota',
                    'Menyusun program pengembangan diri',
                    'Mengatur penempatan dan rotasi anggota',
                ],
            ],
            [
                'name' => 'Divisi Litbang',
                'description' => 'Divisi Litbang (Penelitian dan Pengembangan) berfungsi untuk melakukan riset, analisis, serta inovasi demi mendukung keberlanjutan program kerja organisasi. Divisi ini berfokus pada evaluasi kinerja, pencarian solusi kreatif, serta menciptakan terobosan baru yang bermanfaat bagi perkembangan organisasi.',
                'jobs' => [
                    'Melakukan riset dan analisis organisasi',
                    'Mengembangkan inovasi program kerja',
                    'Mengevaluasi efektivitas kegiatan organisasi',
                ],
            ],
        ];

        foreach ($divisions as $division) {
            DB::table('division')->insert([
                'name' => $division['name'],
                'logo' => 'default.png',
                'image' => 'default.png',
                'description' => $division['description'],
                'job_description' => json_encode($division['jobs']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
