<?php

namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getMahasiswa()
    {
        return [
            'nama' => 'Firda Khoirunisa',
            'nim' => '2310817220225',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Reading, Playing Games, Listening to music',
            'skill' => ['Paper Folding Craft', 'English (Reading & Listening)', 'Reading Comprehension'],
            'quote' => 'Start loving yourself, then you’ll realize how much you truly deserve.',
            'makanan_favorit' => 'Mie ayam, Es kelapa, Ice cream',
            'film_favorit' => 'The Prisonner of Beauty',
            'instagram' => '@firdakhrns.25',
            'gambar' => 'firda.jpg'
        ];
    }
}