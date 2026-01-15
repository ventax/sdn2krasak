<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;
use App\Models\User;

class ProfilSekolahSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user if not exists
        $admin = User::firstOrCreate(
            ['email' => 'admin@sekolah.com'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('password'),
            ]
        );

        ProfilSekolah::create([
            'nama_sekolah' => 'SMA NEGERI GRATIS NUSANTARA',
            'npsn' => '12345678',
            'tentang' => 'SMA Negeri Gratis Nusantara adalah sekolah menengah atas yang memberikan pendidikan GRATIS 100% untuk semua siswa. Kami berkomitmen memberikan pendidikan berkualitas tinggi tanpa membebani orang tua dengan biaya SPP.',
            'visi' => 'Mewujudkan generasi cerdas, berkarakter, dan berprestasi tanpa hambatan biaya',
            'misi' => "1. Memberikan pendidikan berkualitas tinggi tanpa biaya (100% GRATIS)\n2. Mengembangkan potensi akademik dan non-akademik siswa secara optimal\n3. Membentuk karakter siswa yang berakhlak mulia dan bertanggung jawab\n4. Memfasilitasi pembelajaran dengan teknologi modern\n5. Menjalin kerjasama dengan berbagai pihak untuk mendukung pendidikan gratis",
            'sejarah' => 'SMA Negeri Gratis Nusantara didirikan pada tahun 2020 dengan visi mulia memberikan pendidikan berkualitas tanpa biaya. Sekolah ini didirikan atas kesadaran bahwa pendidikan adalah hak setiap anak bangsa, tanpa memandang latar belakang ekonomi keluarga. Dengan dukungan pemerintah dan berbagai donatur, sekolah ini mampu memberikan fasilitas lengkap dan tenaga pendidik berkualitas untuk semua siswa secara GRATIS 100%.',
            'alamat' => 'Jl. Pendidikan No. 123',
            'kelurahan' => 'Kebayoran Baru',
            'kecamatan' => 'Kebayoran Baru',
            'kota' => 'Jakarta Selatan',
            'provinsi' => 'DKI Jakarta',
            'kode_pos' => '12180',
            'telepon' => '021-12345678',
            'email' => 'info@smagratis.sch.id',
            'website' => 'https://smagratis.sch.id',
            'kepala_sekolah' => 'Drs. Ahmad Budiman, M.Pd',
            'akreditasi' => 'A',
        ]);
    }
}
