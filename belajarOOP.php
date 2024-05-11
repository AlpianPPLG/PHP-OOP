<?php

    // Object In PHP OOP

    class makanan {
        public $jenisMakanan = "Gado-gado";
        public $harga = 15000;

        function hargaNaik() {
            $this->harga++;
        }
        function hargaTurun() {
            $this->harga--;
        }
    }

    $menu = new makanan();
    $menu->hargaNaik();
    echo $menu->jenisMakanan;

//  ---------------------------------------------- //  

//  Constructor In PHP OOP

    class Laptop {
        public $model;
        public $volume;

        function volumeUp() {
            $this->volume++;
        }

        function volumeDown() {
            $this->volume--;
        }

        function __construct($m, $v) {
            $this->model = $m;
            $this->volume = $v;
        }
    }

    $laptop = new Laptop('Asus', 25);
    echo $laptop->model;

// -------------------------------------------------------------- //

//  Inheritance In PHP OOP

    class Baju {
        public $model;
        public $harga;

        function hargaNaik() {
            $this->harga++;
        }

        function hargaTurun() {
            $this->harga--;
        }

        function __construct($m, $h) {
            $this->model = $m;
            $this->harga = $h;
        }
    }

    class Harga extends Baju {
        public $baju = true;
    }

    $pakaian = new Harga('kemeja', 300000);
    echo $pakaian->model;

// --------------------------------------------------------------- //

// Encapsulation In PHP OOP

    class Sepatu { 

	private $model; 
	public $ukuran; 

	function ukuranLebihBesar() { 
		$this->ukuran++; 
	} 

	function ukuranLebihKecil() { 
		$this->ukuran--; 
	} 

    function getModel() {
        return $this->model;
    }

	function __construct($m, $u) { 
		$this->model = $m; 
		$this->ukuran= $u; 
	} 
} 

$Merk = new Sepatu('Adiddas', 30); 

echo $Merk->getModel();

// ------------------------------------------------------------- //

// Protected In PHP OOP
// Mendefinisikan kelas Buku dengan properti yang dilindungi
class Buku {
    protected $judul; // Properti untuk menyimpan judul buku
    protected $waktuTerbit; // Properti untuk menyimpan tahun terbit buku

    // Fungsi untuk mendapatkan tahun terbit buku
    function TahunTerbit() {
        return "Tahun Terbit : " . $this->waktuTerbit; // Mengembalikan string tahun terbit
    }

    // Fungsi untuk mendapatkan judul buku
    function JudulBuku() {
        return "Judul buku: " . $this->judul; // Mengembalikan string judul buku
    }

    // Fungsi untuk mendapatkan judul buku (alternatif)
    function getJudul() {
        return $this->judul; // Mengembalikan judul buku
    }

    // Konstruktor untuk inisialisasi properti kelas Buku
    function __construct($j, $w) {
        $this->judul = $j; // Menetapkan judul buku
        $this->waktuTerbit = $w; // Menetapkan waktu terbit buku
    }
}

// Mendefinisikan kelas pengetahuan yang merupakan turunan dari kelas Buku
class pengetahuan extends Buku {
    // Fungsi untuk mendapatkan judul buku dari kelas turunan
    function getJudul() {
        return $this->judul; // Mengembalikan judul buku
    }
}

// Membuat objek dari kelas pengetahuan dengan judul dan tahun terbit
// $buku = new pengetahuan('Beyond Good and Evil: Prelude to a Philosophy of the Future', 1886);

// Menampilkan judul buku, tahun terbit, dan judul buku lagi menggunakan fungsi yang tersedia
echo "<br>" . $buku->JudulBuku() . "<br>"; // Menampilkan judul buku
echo $buku->TahunTerbit() . "<br>"; // Menampilkan tahun terbit
echo $buku->getJudul(); // Menampilkan judul buku

// ------------------------------------------------------------------------ //

// Abstract In PHP OOP

// 1.

abstract class Data {
    abstract function privasi();
}

class Manusia extends Data {
    function privasi() {
        echo "Nama Ku Alpian";
    }
}

$b1 = new Manusia;
$b1 -> privasi();

// ======================================== //

// 2.

abstract class Buku {
    protected $judul;
    
    abstract function JudulBuku();

    function judul() {
        echo "Judul Buku Saya Adalah <b>". $this->judul ."</b><br>";
    }
}

class NamaBuku extends Buku {
    function JudulBuku() {
        $this->judul = "Madilog";
    }
}

$buku = new NamaBuku;
$buku->judul();
$buku->JudulBuku();

// ========================================= //

// 3.

abstract class Contoh {
    function __construct() {}

    abstract function Umur();
}

class Terserah extends Contoh {
    function __construct() {
        echo "Nama Ku Alpian";
    }
    function  Umur(){
        echo " Umurku 16 Tahun";
    }
}

$b1 = new Terserah();
$b1->Umur();

// --------------------------------------------------------- //

// Interfaces In PHP OOP

// 1.

    interface BelajarOOp {
        public function setNama($nama);
        public function getNama();
    }

   class Belajar implements BelajarOOP {

        public $nama;

        public function setNama($nama) {
            $this->nama = $nama;
        }
        public function getNama() {
            return $this->nama;
        }
   }

$identitas = new  Belajar();
$identitas->setNama("Alpian");
echo $identitas->getNama();

// ===================================================== //

// 2.

    interface Value {
        public function setNilai(int $Nilai);
        public function getNilai();
    }

    class HasilBelajar implements Value {
        public $Nilai;

        public function setNilai($Nilai) {
            $this->Nilai = $Nilai;
        }
        public function getNilai() {
            return $this->Nilai;
            return "Nilai Anda adalah : " . $this->Nilai;
        }
    }

    $hasil = new HasilBelajar();
    $hasil->setNilai(90);
    echo $hasil->getNilai();

// =============================== //

// 3.

// Mendefinisikan interface 'film' dengan dua metode yang harus diimplementasikan
interface film {
    public function Oppenheimer();
    public function Tetris();
}

// Kelas 'genre' mengimplementasikan interface 'film'
class genre implements film {
    // Mendeklarasikan dua properti private
    private $judulfilm1, $judulfilm2;

    // Konstruktor untuk kelas 'genre' dengan dua parameter
    function __construct($j1, $j2) {
        // Menginisialisasi properti dengan nilai dari parameter
        $this->judulfilm1 = $j1;
        $this->judulfilm2 = $j2;
    }

    // Implementasi metode 'Oppenheimer' dari interface 'film'
    public function Oppenheimer() {
        // Menampilkan teks
        echo "Oppenheimer method implementation<br>";
    }

    // Implementasi metode 'Tetris' dari interface 'film'
    public function Tetris() {
        // Menampilkan teks
        echo "Tetris method implementation<br>";
    }

    // Metode untuk menampilkan judul film pertama
    function judulfilm1() {
        // Menampilkan judul film pertama dengan format tertentu
        echo "Judul Film: <b>" . $this->judulfilm1 . "</b><br>";
    }

    // Metode untuk menampilkan judul film kedua
    function judulfilm2() {
        // Menampilkan judul film kedua dengan format ter\tentu
        echo "Judul Film: <b>" . $this->judulfilm2 . "</b><br>";
    }
}

// Membuat objek 'judulnya' dari kelas 'genre' dengan dua judul film sebagai parameter
$judulnya = new genre("Titanic", "Inception");

// Menampilkan judul untuk film pertama
echo "<h2>Film Pertama : </h2>";
// Memanggil metode 'judulfilm1' pada objek 'judulnya'
$judulnya->judulfilm1();
// Menampilkan judul untuk film kedua
echo "<h2>Film Kedua : </h2>";
// Memanggil metode 'judulfilm2' pada objek 'judulnya'
$judulnya->judulfilm2();
// Memanggil metode 'Oppenheimer' pada objek 'judulnya'
$judulnya->Oppenheimer();
// Memanggil metode 'Tetris' pada objek 'judulnya'
$judulnya->Tetris();

// ---------------------------------------------------------- //

// Polymorphism In PHP OOP

// 1.

interface bangun_ruang {
    public function hitung_area();
}
class lingkaran implements bangun_ruang {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function hitung_area() {
        return pi() * pow($this->radius, 2);
    }
}
class persegi_panjang implements bangun_ruang {
    private $lebar;
    private $tinggi;

    public function __construct($lebar, $tinggi) {
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }
    public function hitung_area() {
        return $this->lebar * $this->tinggi;
    }
}
$hitung_lingkaran = new lingkaran(5);
$hitung_persegi_panjang = new persegi_panjang(3,4);

echo "Area Lingkaran: " . $hitung_lingkaran->hitung_area() . "<br>";
echo "Area Persegi Panjang: " . $hitung_persegi_panjang->hitung_area()  . "\n";

// ==================================================================================== //

// 2.

abstract class komputer {
    abstract public function operating_system();
}
class laptopWindows extends komputer {
    public function operating_system() {
        return "Windows OS";
    }
}
class MacBook extends komputer {
    public function operating_system() {
        return "MacOS";
    }
}
class pc extends komputer {
    public function operating_system() {
        return "PC Windows / Linux";
    }
}
$new_laptop = new  laptopWindows();
$new_mac_laptop = new Macbook();
$new_pc = new  pc();

function operating_system_komputer($objek_komputer) {
    echo $objek_komputer ->operating_system()."<br>";
}
echo operating_system_komputer($new_laptop);
echo "<br />";
echo operating_system_komputer($new_mac_laptop);
echo "<br \>";
echo operating_system_komputer($new_pc);

// ---------------------------------------------------------- //

?>