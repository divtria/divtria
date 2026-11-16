<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman Menu 1: Welcome
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Menampilkan halaman Menu 2: Data Diri
     * Berisi array data diri yang nantinya akan di-looping di view.
     */
    public function biodata()
    {
        // Menyiapkan data array untuk fungsi looping (@foreach)
        $dataDiri = [
            ['label' => 'Nama Lengkap', 'value' => 'Budi Santoso'],
            ['label' => 'Tempat, Tanggal Lahir', 'value' => 'Denpasar, 15 Agustus 2002'],
            ['label' => 'Pekerjaan / Status', 'value' => 'Mahasiswa & Web Developer'],
            ['label' => 'Domisili', 'value' => 'Bali, Indonesia'],
            ['label' => 'Hobi', 'value' => 'Coding, Fotografi, Traveling'],
            ['label' => 'Email', 'value' => 'budi.santoso@example.com'],
        ];

        // Mengirim data ke view 'biodata.blade.php' menggunakan compact()
        return view('biodata', compact('dataDiri'));
    }

    /**
     * Menampilkan halaman Menu 3: Galeri
     * Berisi array data galeri foto untuk di-looping sederhana.
     */
    public function galeri()
    {
        // Menyiapkan data array untuk galeri
        $galeri = [
            [
                'judul' => 'Pantai Kuta',
                'gambar' => 'https://placehold.co/400x250/2563eb/white?text=Pantai+Kuta',
                'deskripsi' => 'Menikmati matahari terbenam di sore hari.'
            ],
            [
                'judul' => 'Setup Kerja',
                'gambar' => 'https://placehold.co/400x250/16a34a/white?text=Setup+Kerja',
                'deskripsi' => 'Ruang kerja sederhana untuk ngoding Laravel.'
            ],
            [
                'judul' => 'Gunung Batur',
                'gambar' => 'https://placehold.co/400x250/ea580c/white?text=Gunung+Batur',
                'deskripsi' => 'Pendakian pagi hari melihat pemandangan danau.'
            ],
            [
                'judul' => 'Kopi Pagi',
                'gambar' => 'https://placehold.co/400x250/4f46e5/white?text=Kopi+Pagi',
                'deskripsi' => 'Secangkir kopi sebelum memulai aktivitas.'
            ],
        ];

        // Mengirim data ke view 'galeri.blade.php'
        return view('galeri', compact('galeri'));
    }
}