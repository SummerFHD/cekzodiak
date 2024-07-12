<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiacController extends Controller
{
    private $zodiacDescriptions = [
        'Aries' => [
            'description' => 'Aries adalah individu yang berani dan penuh semangat. Mereka dikenal karena keberanian dan sikap optimis mereka.',
            'love' => 'Dalam cinta, Aries penuh gairah dan sering memulai hubungan dengan antusiasme tinggi. Mereka membutuhkan pasangan yang bisa mengikuti energi mereka.',
            'life' => 'Dalam kehidupan, Aries suka tantangan dan selalu mencari petualangan baru. Mereka tidak takut untuk mengambil risiko.',
            'career' => 'Dalam karier, Aries cocok dalam peran yang memerlukan kepemimpinan dan keberanian. Mereka sering berhasil dalam bidang seperti militer, olahraga, dan kewirausahaan.',
            'good' => 'Sisi baik Aries adalah keberanian dan ketegasan mereka dalam mencapai tujuan. Mereka juga dikenal sebagai pemimpin yang inspiratif.',
            'bad' => 'Sisi buruk Aries adalah kemungkinan mereka menjadi terlalu impulsif dan mudah marah, serta cenderung kurang sabar.',
        ],
        'Taurus' => [
            'description' => 'Taurus adalah individu yang stabil dan dapat diandalkan. Mereka menghargai keamanan dan kenyamanan dalam hidup mereka.',
            'love' => 'Dalam cinta, Taurus setia dan mencari hubungan jangka panjang yang stabil. Mereka adalah pasangan yang penyayang dan protektif.',
            'life' => 'Dalam kehidupan, Taurus menikmati hal-hal baik dan cenderung menikmati kemewahan dan kenyamanan.',
            'career' => 'Dalam karier, Taurus sering berhasil dalam bidang yang menawarkan stabilitas dan keamanan, seperti perbankan, real estate, dan pertanian.',
            'good' => 'Sisi baik Taurus adalah kesetiaan dan kehandalan mereka. Mereka juga sangat terorganisir dan praktis.',
            'bad' => 'Sisi buruk Taurus adalah sifat keras kepala mereka dan ketidakmampuan untuk berubah, serta kecenderungan mereka menjadi terlalu materialistis.',
        ],
        'Gemini' => [
            'description' => 'Gemini adalah individu yang cerdas dan serba bisa. Mereka dikenal karena kemampuan komunikasi dan keingintahuan mereka.',
            'love' => 'Dalam cinta, Gemini memerlukan pasangan yang bisa merangsang pikiran mereka. Mereka mencari hubungan yang dinamis dan penuh percakapan.',
            'life' => 'Dalam kehidupan, Gemini selalu mencari pengetahuan baru dan suka berinteraksi dengan orang lain.',
            'career' => 'Dalam karier, Gemini cocok dalam bidang yang membutuhkan komunikasi dan adaptabilitas, seperti jurnalisme, pemasaran, dan pendidikan.',
            'good' => 'Sisi baik Gemini adalah kecerdasan dan kemampuan mereka untuk beradaptasi dengan cepat. Mereka juga sangat sosial dan mudah bergaul.',
            'bad' => 'Sisi buruk Gemini adalah ketidakkonsistenan mereka dan kecenderungan untuk menjadi tidak serius atau tidak bertanggung jawab dalam keputusan.',
        ],
        'Cancer' => [
            'description' => 'Cancer adalah individu yang emosional dan penyayang. Mereka sangat peduli dengan keluarga dan rumah mereka.',
            'love' => 'Dalam cinta, Cancer mencari keamanan emosional dan membutuhkan pasangan yang pengertian dan penyayang.',
            'life' => 'Dalam kehidupan, Cancer sangat terhubung dengan perasaan mereka dan sering melibatkan diri dalam kegiatan yang memberikan kenyamanan emosional.',
            'career' => 'Dalam karier, Cancer sering berhasil dalam bidang yang memungkinkan mereka merawat orang lain, seperti keperawatan, terapi, dan pekerjaan sosial.',
            'good' => 'Sisi baik Cancer adalah empati dan perasaan mereka yang mendalam terhadap orang lain. Mereka juga sangat setia dan peduli terhadap keluarga dan teman-teman.',
            'bad' => 'Sisi buruk Cancer adalah kemungkinan mereka menjadi terlalu emosional dan mudah terluka, serta cenderung untuk bersikap terlalu protektif terhadap orang-orang yang mereka cintai.',
        ],
        'Leo' => [
            'description' => 'Leo adalah individu yang percaya diri dan karismatik. Mereka dikenal karena kepemimpinan dan sifat dramatis mereka.',
            'love' => 'Dalam cinta, Leo penuh gairah dan mencari pasangan yang bisa menghargai dan memuja mereka.',
            'life' => 'Dalam kehidupan, Leo suka menjadi pusat perhatian dan sering mengambil peran utama dalam kelompok mereka.',
            'career' => 'Dalam karier, Leo sering berhasil dalam bidang yang memungkinkan mereka untuk bersinar, seperti seni, hiburan, dan manajemen.',
            'good' => 'Sisi baik Leo adalah keberanian dan ketegasan mereka dalam menghadapi tantangan. Mereka juga sangat kreatif dan setia.',
            'bad' => 'Sisi buruk Leo adalah kecenderungan mereka menjadi terlalu dominan atau mencari perhatian berlebihan, serta kesulitan dalam menerima kritik.',
        ],
        'Virgo' => [
            'description' => 'Virgo adalah individu yang analitis dan teliti. Mereka dikenal karena perhatian mereka terhadap detail dan sifat perfeksionis mereka.',
            'love' => 'Dalam cinta, Virgo mencari hubungan yang stabil dan berdasarkan kepercayaan. Mereka adalah pasangan yang setia dan mendukung.',
            'life' => 'Dalam kehidupan, Virgo selalu mencari cara untuk meningkatkan diri dan lingkungan mereka.',
            'career' => 'Dalam karier, Virgo sering berhasil dalam bidang yang memerlukan ketelitian dan analisis, seperti akuntansi, kesehatan, dan penelitian.',
            'good' => 'Sisi baik Virgo adalah ketelitian dan keteraturan mereka dalam melakukan pekerjaan. Mereka juga sangat praktis dan dapat diandalkan.',
            'bad' => 'Sisi buruk Virgo adalah sifat kritis dan terlalu perfeksionis, serta kecenderungan untuk menjadi terlalu keras pada diri sendiri dan orang lain.',
        ],
        'Libra' => [
            'description' => 'Libra adalah individu yang seimbang dan adil. Mereka dikenal karena kemampuan mereka untuk melihat kedua sisi dari setiap situasi.',
            'love' => 'Dalam cinta, Libra mencari harmoni dan keseimbangan. Mereka adalah pasangan yang romantis dan diplomatis.',
            'life' => 'Dalam kehidupan, Libra selalu mencari keadilan dan keseimbangan dalam semua hal.',
            'career' => 'Dalam karier, Libra sering berhasil dalam bidang yang memerlukan negosiasi dan kerjasama, seperti hukum, hubungan masyarakat, dan desain.',
            'good' => 'Sisi baik Libra adalah keadilan dan kemampuan mereka untuk berkomunikasi dengan baik. Mereka juga sangat sosial dan berpenampilan baik.',
            'bad' => 'Sisi buruk Libra adalah ketidakmampuan untuk membuat keputusan atau kecenderungan untuk menghindari konfrontasi, serta kesulitan untuk bertindak tegas.',
        ],
        'Scorpio' => [
            'description' => 'Scorpio adalah individu yang intens dan bersemangat. Mereka dikenal karena kedalaman emosional dan sifat misterius mereka.',
            'love' => 'Dalam cinta, Scorpio penuh gairah dan membutuhkan hubungan yang mendalam dan penuh komitmen.',
            'life' => 'Dalam kehidupan, Scorpio selalu mencari kebenaran dan tidak takut menghadapi kegelapan.',
            'career' => 'Dalam karier, Scorpio sering berhasil dalam bidang yang memerlukan intensitas dan dedikasi, seperti investigasi, psikologi, dan kedokteran.',
            'good' => 'Sisi baik Scorpio adalah keberanian dan keteguhan hati mereka. Mereka juga sangat setia dan dapat diandalkan.',
            'bad' => 'Sisi buruk Scorpio adalah sifat posesif dan kecenderungan untuk menjadi terlalu memaksa, serta kemungkinan untuk bersikap terlalu gelap atau memendam dendam.',
        ],
        'Sagittarius' => [
            'description' => 'Sagitarius adalah individu yang bebas dan petualang. Mereka dikenal karena optimisme dan kecintaan mereka terhadap perjalanan dan pengetahuan.',
            'love' => 'Dalam cinta, Sagitarius mencari hubungan yang memberi mereka kebebasan dan ruang untuk tumbuh.',
            'life' => 'Dalam kehidupan, Sagitarius selalu mencari petualangan baru dan ingin memperluas wawasan mereka.',
            'career' => 'Dalam karier, Sagitarius sering berhasil dalam bidang yang memungkinkan mereka untuk menjelajah dan belajar, seperti pendidikan, perjalanan, dan penjualan.',
            'good' => 'Sisi baik Sagitarius adalah optimisme dan semangat mereka yang menular. Mereka juga sangat jujur ​​dan pandai berbicara.',
            'bad' => 'Sisi buruk Sagitarius adalah ketidakpedulian dan kecenderungan untuk menjadi tidak sabar atau terlalu ceroboh, serta kesulitan untuk bertahan pada satu hal.',
        ],
        'Capricorn' => [
            'description' => 'Capricorn adalah individu yang ambisius dan disiplin. Mereka dikenal karena ketekunan dan fokus mereka pada tujuan jangka panjang.',
            'love' => 'Dalam cinta, Capricorn mencari hubungan yang stabil dan mendukung ambisi mereka.',
            'life' => 'Dalam kehidupan, Capricorn selalu bekerja keras untuk mencapai tujuan mereka dan sering menempatkan karier di atas segalanya.',
            'career' => 'Dalam karier, Capricorn sering berhasil dalam bidang yang memerlukan disiplin dan tanggung jawab, seperti bisnis, keuangan, dan administrasi.',
            'good' => 'Sisi baik Capricorn adalah keuletan dan keandalan mereka. Mereka juga sangat bertanggung jawab dan dapat diandalkan.',
            'bad' => 'Sisi buruk Capricorn adalah kecenderungan untuk menjadi terlalu serius atau kaku, serta kesulitan untuk menemukan keseimbangan antara pekerjaan dan hidup pribadi.',
        ],
        'Aquarius' => [
            'description' => 'Aquarius adalah individu yang inovatif dan penuh dengan ide-ide baru. Mereka dikenal karena sifat humanis dan pandangan progresif mereka.',
            'love' => 'Dalam cinta, Aquarius mencari hubungan yang mendalam dan intelektual. Mereka menghargai kebebasan dalam hubungan.',
            'life' => 'Dalam kehidupan, Aquarius suka tantangan dan selalu berusaha untuk memperbaiki diri dan masyarakat.',
            'career' => 'Dalam karier, Aquarius sering berhasil dalam bidang teknologi dan ilmu pengetahuan, serta pekerjaan yang memerlukan kreativitas dan inovasi.',
            'good' => 'Sisi baik Aquarius adalah kreativitas dan kebijaksanaan mereka. Mereka juga sangat humanis dan peduli terhadap keadilan sosial.',
            'bad' => 'Sisi buruk Aquarius adalah kecenderungan untuk menjadi terlalu eksentrik atau terlalu memikirkan masa depan, serta kesulitan untuk terhubung emosional dengan orang lain.',
        ],
        'Pisces' => [
            'description' => 'Pisces adalah individu yang intuitif dan penuh dengan imajinasi. Mereka dikenal karena sifat empati dan kemampuan mereka untuk bermimpi besar.',
            'love' => 'Dalam cinta, Pisces sangat romantis dan selalu berusaha membuat pasangannya bahagia. Mereka mencari hubungan yang emosional dan penuh kasih.',
            'life' => 'Dalam kehidupan, Pisces sering terlihat tenang dan penuh empati. Mereka suka membantu orang lain dan memiliki sifat pengertian yang tinggi.',
            'career' => 'Dalam karier, Pisces cocok dalam bidang seni dan pelayanan, serta pekerjaan yang memungkinkan mereka mengekspresikan kreativitas dan empati mereka.',
            'good' => 'Sisi baik Pisces adalah keprihatinan dan empati mereka terhadap orang lain. Mereka juga sangat artistik dan dapat mengekspresikan diri dengan baik.',
            'bad' => 'Sisi buruk Pisces adalah kecenderungan untuk menjadi terlalu idealis atau terlalu mudah dipengaruhi, serta kesulitan untuk membuat keputusan yang tegas.',
        ],
    ];

    public function index()
    {
        return view('index');
    }

    public function cekZodiak(Request $request)
    {
        $request->validate([
            'birthdate' => 'required|date_format:d/m/Y',
        ], [
            'birthdate.required' => 'Tanggal lahir harus diisi.',
            'birthdate.date_format' => 'Format tanggal lahir tidak valid. Gunakan format hari/bulan/tahun.',
        ]);

        $birthdate = \DateTime::createFromFormat('d/m/Y', $request->input('birthdate'));
        $zodiac = $this->getZodiacSign($birthdate);
        $description = $this->zodiacDescriptions[$zodiac];

        return view('result', ['zodiac' => $zodiac, 'description' => $description]);
    }

    private function getZodiacSign($date)
    {
        $month = $date->format('m');
        $day = $date->format('d');

        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            return 'Aquarius';
        } else if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            return 'Pisces';
        } else if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            return 'Aries';
        } else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            return 'Taurus';
        } else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            return 'Gemini';
        } else if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            return 'Cancer';
        } else if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            return 'Leo';
        } else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            return 'Virgo';
        } else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            return 'Libra';
        } else if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            return 'Scorpio';
        } else if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            return 'Sagittarius';
        } else if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
            return 'Capricorn';
        }
    }
}



