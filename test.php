<?php

$url='https://api-blue-archive.vercel.app/api/characters/students';
$response=file_get_contents($url);
if ($response == false){
    die('ERROR KOCAK');
}


$data = json_decode($response,true);

?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karakter Blue Archive</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }
        .character-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .character-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 300px;
        }
        .character-card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .character-name {
            font-size: 1.5em;
            font-weight: bold;
            margin: 10px 0;
        }
        .character-details {
            font-size: 0.9em;
        }
        .character-hobbies {
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Karakter Blue Archive</h1>
    <div class="character-container">
        <!-- Karakter 1 -->
        <div class="character-card">
            <img src="https://static.miraheze.org/bluearchivewiki/thumb/9/96/Airi.png/266px-Airi.png" alt="Airi">
            <div class="character-name">Airi Kurimura</div>
            <div class="character-details">
                <p>Usia: 15 tahun</p>
                <p>Sekolah: Trinity</p>
                <p>Tanggal Lahir: January 30</p>
                <p>Latar Belakang: Enrolled at Trinity Integrated Academy, Airi is a member of the After School Sweets Club.</p>
                <p>Tinggi: 160 cm</p>
                <p>Peran: Support/Back</p>
                <p>Senjata: SMG (Fresh Choco-mint)</p>
                <p>Tipe Damage: Explosive</p>
                <p>Tipe Armor: Light</p>
            </div>
            <div class="character-hobbies">Hobi: Mencari makanan manis, pesta teh</div>
        </div>

        <!-- Karakter 2 -->
        <div class="character-card">
            <img src="https://static.miraheze.org/bluearchivewiki/thumb/a/aa/Akane.png/266px-Akane.png" alt="Akane">
            <div class="character-name">Akane Murokasa</div>
            <div class="character-details">
                <p>Usia: 16 tahun</p>
                <p>Sekolah: Millennium</p>
                <p>Tanggal Lahir: April 1</p>
                <p>Latar Belakang: An agent of Millennium's secret society "C&C".</p>
                <p>Tinggi: 164 cm</p>
                <p>Peran: Support/Middle</p>
                <p>Senjata: HG (Silent Solution)</p>
                <p>Tipe Damage: Penetration</p>
                <p>Tipe Armor: Light</p>
            </div>
            <div class="character-hobbies">Hobi: Membersihkan</div>
        </div>

        <!-- Karakter 3 -->
        <div class="character-card">
            <img src="https://static.miraheze.org/bluearchivewiki/thumb/7/7d/Akari.png/266px-Akari.png" alt="Akari">
            <div class="character-name">Akari Wanibuchi</div>
            <div class="character-details">
                <p>Usia: 17 tahun</p>
                <p>Sekolah: Gehenna</p>
                <p>Tanggal Lahir: December 9</p>
                <p>Latar Belakang: Enrolled in Gehenna Academy, Akari is a member of the Gourmet Research Society.</p>
                <p>Tinggi: 167 cm</p>
                <p>Peran: Attacker/Middle</p>
                <p>Senjata: AR (Bottomless)</p>
                <p>Tipe Damage: Explosive</p>
                <p>Tipe Armor: Heavy</p>
            </div>
            <div class="character-hobbies">Hobi: Makan banyak</div>
        </div>

        <!-- Karakter 4 -->
        <div class="character-card">
            <img src="https://static.miraheze.org/bluearchivewiki/thumb/7/72/Ako.png/266px-Ako.png" alt="Ako">
            <div class="character-name">Ako Amau</div>
            <div class="character-details">
                <p>Usia: 17 tahun</p>
                <p>Sekolah: Gehenna</p>
                <p>Tanggal Lahir: December 22</p>
                <p>Latar Belakang: A student of Gehenna Academy, Ako is the executive officer of the Disciplinary Committee.</p>
                <p>Tinggi: 165 cm</p>
                <p>Peran: Support/Back</p>
                <p>Senjata: HG (Hotshot)</p>
                <p>Tipe Damage: Mystic</p>
                <p>Tipe Armor: Heavy</p>
            </div>
            <div class="character-hobbies">Hobi: Presiden Hina</div>
        </div>

        <!-- Karakter 5 -->
        <div class="character-card">
            <img src="https://static.miraheze.org/bluearchivewiki/thumb/0/0f/Arisu.png/266px-Arisu.png" alt="Arisu">
            <div class="character-name">Arisu Tendou</div>
            <div class="character-details">
                <p>Usia: ??</p>
                <p>Sekolah: Millennium</p>
                <p>Tanggal Lahir: March 25</p>
                <p>Latar Belakang: Student of Millennium and member of the Game development club.</p>
                <p>Tinggi: 152 cm</p>
                <p>Peran: ??</p>
                <p>Senjata: ??</p>
                <p>Tipe Damage: ??</p>
                <p>Tipe Armor: ??</p>
            </div>
            <div class="character-hobbies">Hobi: Bermain video game</div>
        </div>
    </div>

</body>
</html>
