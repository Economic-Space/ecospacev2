<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'subject_image' => 'ManagementAccounting.svg',
                'subject_title' => 'Management Accounting',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Managerial Accounting',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'Menganalisa keuangan perusahaan untuk menilai performa suatu objek dalam jangka waktu tertentu yang berlaku. Laporan keuangan yang dihasilkan spesifik hanya untuk objek tersebut, tidak sama dengan objek lain.',
                'subject_references' => json_encode(['Management Accounting The Cornerstone of Business Decision Making 7th Edition - Mowen, Hansen, and Heitger', 'Managerial Accounting 14th Edition - Garrison, Noreen, and Bower', 'Managerial accounting. 6th edition - Jerry J. Weygandt Paul D. Kimmel and  Donald E. Kieso']),
                'subject_univ' => json_encode(['unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'IntermediateAccountingI.svg',
                'subject_title' => 'Intermediate Accounting I',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan pemahaman tentang kerangka konseptual yang mendasari penyusunan laporan keuangan; pemahaman dan implementasi perlakuan akuntansi akun kas, piutang, persediaan, bangunan, tanah, peralatan, utang lancar, dan utang tidak lancar.',
                'subject_references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'IntermediateAccountingIII.svg',
                'subject_title' => 'Intermediate Accounting III',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'Memberikan pemahaman mengenai akuntansi keuangan secara mendalam, khususnya sewa, pengakuan pendapatan, pensiun & manfaat pasca pensiun, perubahan akuntansi, dan laporan arus kas.',
                'subject_references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'TaxationII.svg',
                'subject_title' => 'Taxation II',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Tax',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'Membahas perhitungan perpajakan seperti perhitungan harga perolehan harta, tarif pajak penghasilan, rekonsiliasi fiskal, PBB, PPnBM, dan PPN sesuai UU HPP yang berlaku.',
                'subject_references' => json_encode(['No references']),
                'subject_univ' => json_encode(['unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'FinancialManagement.svg',
                'subject_title' => 'Financial Management',
                'subject_majors' => json_encode(['Accounting', 'Management']),
                'subject_category' => 'Finance',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan pengetahuan tentang konsep-konsep dasar manajemen keuangan, metode pengelolaan keuangan di suatu perusahaan, terutama berkaitan dengan keputusan investasi & pembelanjaan, kebijakan pembagian dividen.',
                'subject_references' => json_encode(['Fundamentals of Financial Management 15th Edition - Brigham and Houston']),
                'subject_univ' => json_encode(['unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'StatisticsForAccounting.svg',
                'subject_title' => 'Statistics For Accounting',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Specialized Areas',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan gambar mengenai analisis data dan penggunaan perangkat lunak statistik, uji hipotesis, analisis varians, korelasi, regresi, serta asumsi klasik dan analisis regresi dengan aplikasi praktis.',
                'subject_references' => json_encode(['Basic econometrics - Gujarati', 'Statistical Techniques in Business & Economics - Lind, D. A., Marchal, W. G., & Wathen, S. A. ']),
                'subject_univ' => json_encode(['unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'EconomicsII.svg',
                'subject_title' => 'Economics II',
                'subject_majors' => json_encode(['Economic']),
                'subject_category' => 'Macroeconomics',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan gambaran awal mengenai teori dasar makroekonomi seperti ruang lingkup makroekonomi, ekonomi riil dalam jangka panjang, peran uang dan harga dalam jangka panjang, konsep makroekonomi dalam perekonomian terbuka dan fluktuasi perekonomian.',
                'subject_references' => json_encode(['Macroeconomics 9th Edition - N.Gregory Mankiw', 'Principles of Macroeconomics 9th Edition - N.Gregory Mankiw']),
                'subject_univ' => json_encode(['nouniv.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'AdvancedStatistics.svg',
                'subject_title' => 'Advanced Statistics',
                'subject_majors' => json_encode(['Economic']),
                'subject_category' => 'Statistics',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Membahas bahasan lanjutan mengenai statistik seperti berbagai metode inferensi, khususnya dalam pengujian hipotesis yang sering digunakan dalam ekonomi dan bisnis. Akan ada juga topik mengenai analisis deret waktu non-inferensi.',
                'subject_references' => json_encode(['Statistical Techniques in Business and Economics 15th Edition - Lind, Marchal, and Wathe', 'Business Statistics Communication With Numbers 2nd Edition - Jaggia and Kelly']),
                'subject_univ' => json_encode(['nouniv.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'AdvancedMathematics.svg',
                'subject_title' => 'Advanced Mathematics',
                'subject_majors' => json_encode(['Economic']),
                'subject_category' => 'Mathematics',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Menyajikan konsep dan teknik matematika tingkat lanjut untuk menganalisis situasi ekonomi, bisnis, dan keuangan. Materi melibatkan optimasi dengan kendala, kalkulus integral, persamaan diferensial, persamaan beda, serta Pengantar Analisis Real.',
                'subject_references' => json_encode(['No reference']),
                'subject_univ' => json_encode(['nouniv.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // old course
            [
                'subject_image' => 'IntroductionToAccounting.svg',
                'subject_title' => 'Introduction to Accounting',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan ilmu mengenai dasar-dasar penyusunan laporan keuangan, memahami konsep persamaan dasar akuntansi, dan menganalisis laporan keuangan.',
                'subject_references' => json_encode(['Financial Accounting with International Financial Reporting Standards 4th Edition - Weygandt, Kimmel, Kieso']),
                'subject_univ' => json_encode(['ubaya.svg', 'ugm.svg', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'BasicEconomics.svg',
                'subject_title' => 'Basic Economics',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan pengetahuan tentang konsep dasar yang mengatur produksi, distribusi, dan konsumsi barang dan jasa, serta memahami bagaimana suatu pihakmengambil keputusan mengenai alokasi sumber daya yang langka.',
                'subject_references' => json_encode(['Economics (2009) by Paul Samuelson and William Nordhaus (19th edition)', 'Principles of Microeconomics (2017) by N. Gregory Mankiw (8th edition)']),
                'subject_univ' => json_encode(['ubaya.svg','unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'CostAccounting.svg',
                'subject_title' => 'Cost Accounting',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'Memberikan pengetahuan tentang proses perhitungan biaya produk pada perusahaan manufaktur dan mempertimbang aspek perencanaan & pengendalian biaya produksi.',
                'subject_references' => json_encode(['Cost Accounting Edisi ke 14 - Charles T. Hongren, Srikant M. Datar, Madhav V.Rajan']),
                'subject_univ' => json_encode(['ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'IntermediateAccountingII.svg',
                'subject_title' => 'Intermediate Accounting II',
                'subject_majors' => json_encode(['Accounting']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'Memberikan pengetahuan tentang konsep pengukuran, penilaian, pelaporan, pengungkapan & analisis akun-akun Aset, Kewajiban Lancar, Kewajiban Jangka Panjang, Investasi, Ekuitas pada Laporan Keuangan.',
                'subject_references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['ugm.svg', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_image' => 'IntroductionToTaxation.svg',
                'subject_title' => 'Introduction to Taxation',
                'subject_majors' => json_encode(['Taxation']),
                'subject_category' => 'Taxation & Business Law',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'Memberikan gambaran menyeluruh tentang kebijakan fiskal, hukum pajak, serta prosedur perpajakan di Indonesia, serta mencakup prinsip-prinsip dasar & memberikan pemahaman mengenai kepatuhan pajak.',
                'subject_references' => json_encode(['Hukum Pajak Edisi ke-7 - Erly Suandy']),
                'subject_univ' => json_encode(['ugm.svg', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];

        // Insert data into the subjects table
        DB::table('subjects')->insert($subjects);
    }
}
