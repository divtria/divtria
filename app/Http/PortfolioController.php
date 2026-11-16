<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function welcome()
    {
        $nama = "AYU DIVTRIA";
        $role = "Web Developer & UI/UX Enthusiast";
        return view('welcome', compact('nama', 'role'));
    }

    public function biodata()
    {
        $nama = "AYU DIVTRIA";
        $hobi = ['Coding', 'Fotografi', 'Membaca Buku', 'Desain Grafis'];
        $statusAktif = true;

        return view('biodata', compact('nama', 'hobi', 'statusAktif'));
    }

    public function gallery()
    {
        $photos = [
            ['judul' => 'Project Website', 'kategori' => 'Teknologi', 'file' => 'foto1.jpg'],
            ['judul' => 'Senja di Bali', 'kategori' => 'Alam', 'file' => 'foto2.jpg'],
            ['judul' => 'Setup Meja Kerja', 'kategori' => 'Workspace', 'file' => 'foto3.jpg'],
        ];

        return view('gallery', compact('photos'));
    }

    public function projects()
    {
        $projects = [
            ['nama' => 'Sistem Kasir Web', 'status' => 'Selesai', 'tahun' => 2025],
            ['nama' => 'Aplikasi Catatan Harian', 'status' => 'Proses', 'tahun' => 2026],
            ['nama' => 'Desain UI E-Commerce', 'status' => 'Selesai', 'tahun' => 2026],
        ];

        return view('projects', compact('projects'));
    }
}