<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            // untuk subject 1 MANAGEMENT ACCOUNTING
            [
                'topic_number' => 1,
                'topic_title' => 'Pengantar Akuntansi Manajerial dan Basic Managerial Accounting Concepts',
                'topic_content' => json_encode(['Arti Akuntansi Manajerial ', 'Akuntansi Keuangan dan Akuntansi Manajerial', 'Fokus Akuntansi Manajerial Saat Ini', 'Rantai Nilai dan TQM ', 'Arti dan Kegunaan Biaya', 'Biaya Produk dan Jasa', 'Menyusun Laporan Laba Rugi']),
                'topic_objective' => 'Memahami arti, perbedaan, fokus, dan hubungan dengan rantai nilai serta TQM dan memahami arti, kegunaan biaya, biaya produk, dan laporan laba rugi.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Perilaku Biaya',
                'topic_content' => json_encode(['Dasar-dasar Perilaku Biaya', 'Biaya Campuran dan Biaya Langkah', 'Metode Pemisahan Biaya Campuran menjadi Biaya Tetap dan Komponen Variabel', 'Keputusan Manajerial']),
                'topic_objective' => 'Memahami dasar-dasar, biaya campuran, metode pemisahan biaya, dan keputusan manajerial dalam konteks biaya tetap dan variabel.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Penyerapan & Penetapan Biaya Variabel & Manajemen Inventaris ',
                'topic_content' => json_encode(['Overview Biaya Variabel dan Penyerapan', 'Laporan Laba Rugi Tersegmentasi dan Kontribusinya Pendekatan', 'Penilaian Persediaan', 'Memahami kelebihan dan kekurangan biaya variabel dan biaya penyerapan']),
                'topic_objective' => 'Memahami biaya variabel, laporan laba rugi tersegmentasi, pendekatan penilaian persediaan, serta kelebihan dan kekurangan biaya variabel dan biaya penyerapan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Analisis Laba Volume Biaya dan Penetapan Biaya & Manajemen Berbasis Aktivitas ',
                'topic_content' => json_encode(['Titik Impas dalam Unit dan Dolar Penjualan',
                'Unit dan Dolar Penjualan yang Dibutuhkan untuk Mencapai Target Pendapatan',
                'Analisis Multi-Produk',
                'Analisis Biaya-Volume-Laba serta Risiko dan Ketidakpastian',
                'Keterbatasan Sistem Akuntansi Biaya Berbasis Fungsional',
                'Penetapan Biaya Produk Berbasis Aktivitas',
                'Penetapan Biaya Pelanggan Berbasis Aktivitas dan Penetapan Biaya Pemasok Berbasis Aktivitas',
                'Analisis Proses-Nilai']),
                'topic_objective' => 'Memahami konsep titik impas, target pendapatan, analisis multi-produk, dan risiko dan memahami konsep keterbatasan, penetapan biaya berbasis aktivitas, dan analisis proses-nilai.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 5,
                'topic_title' => 'Perencanaan Keuntungan dan Penetapan Biaya Standar: Alat Kontrol Manajerial',
                'topic_content' => json_encode(['Uraian Penganggaran',
                'Menyusun Anggaran Operasional',
                'Menyusun Anggaran Keuangan',
                'Standar Satuan dan Konsep Dasar Penetapan Biaya Standar',
                'Analisis Varians: Bahan dan Tenaga Kerja']),
                'topic_objective' => 'Menguraikan konsep dan metode penganggaran, serta menyusun anggaran operasional dan keuangan dan memahami penetapan biaya standar, termasuk analisis varian bahan dan tenaga kerja untuk evaluasi kinerja perusahaan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Anggaran Fleksibel dan Analisis Overhead',
                'topic_content' => json_encode(['Penggunaan Anggaran untuk Evaluasi Kinerja',
                'Analisis Overhead',
                'Akuntansi Varians']),
                'topic_objective' => 'Memahami penggunaan anggaran untuk evaluasi kinerja, analisis overhead, dan akuntansi varian.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Evaluasi Kinerja, Desentralisasi, dan Balanced Scorecard',
                'topic_content' => json_encode(['Pusat Desentralisasi dan Tanggung Jawab',
                'Mengukur Kinerja Pusat Investasi dengan Menggunakan Pengembalian Investasi',
                'Penetapan Harga Transfer',
                'Balanced Scorecard—Konsep Dasar',
                'Akuntansi Lingkungan']),
                'topic_objective' => 'Memahami konsep pusat desentralisasi, pengukuran kinerja pusat investasi, penetapan harga transfer, konsep dasar Balanced Scorecard, dan akuntansi lingkungan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Pengambilan Keputusan Jangka Pendek: Penetapan Biaya yang Relevan ',
                'topic_content' => json_encode(['Pengambilan Keputusan Jangka Pendek',
                'Beberapa Penerapan Biaya Umum yang Relevan',
                'Keputusan Bauran Produk',
                'Penggunaan Biaya dalam Keputusan Penetapan Harga']),
                'topic_objective' => 'Memahami cara pengambilan keputusan, penerapan biaya umum yang relevan, keputusan bauran produk, dan penggunaan biaya dalam penetapan harga.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],






            // subject 2 INTERMEDIATE ACCOUNTING 1
            [
                'topic_number' => 1,
                'topic_title' => 'Kerangka Konseptual dan Akuntansi dan Nilai Waktu Uang',
                'topic_content' => json_encode(['Tujuan Dasar', 'Konsep Dasar', 'Konsep Pengakuan, Pengukuran, dan Pengungkapan', 'Konsep Dasar Nilai Waktu', 'Masalah Jumlah Tunggal', 'Anuitas']),
                'topic_objective' => 'Mampu memahami conceptual framework secara keseluhan, Konsep Pengakuan, Pengukuran, dan Pengungkapan Serta Basic Time Value Concepts',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Kas dan Piutang',
                'topic_content' => json_encode(['Kas : Apa itu Kas?', 'Pelaporan Kas', 'Piutang : Piutang Usaha : Pengakuan, Penilaian, dan Penurunan Nilai', 'Piutang Wesel : Pengakuan dan Penilaian']),
                'topic_objective' => 'Mampu memahami kas dan setara kas, pengakuan dan penguruan piutang dagang dan piutang wesel ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Persediaan',
                'topic_content' => json_encode(['Pendekatan Biaya Barang Fisik yang Termasuk dalam Persediaan', 'Asumsi Aliran Biaya : Identifikasi Spesifik, Biaya Rata-Rata, dan FIFO', 'Isu Penilaian Tambahan LCNRV', 'Estimasi Persediaan : Laba Kotor dan Metode Ritel']),
                'topic_objective' => 'Mampu memahami dan menguasasi pencatatan Inventory dan konsep LCNRV, Gross Profit dan Retail Method ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Aset Tetap',
                'topic_content' => json_encode(['Perolehan', 'Penilaian', 'Pelepasan']),
                'topic_objective' => 'Mampu memahami akuisisi, valuasi dari property, plant, and equipment ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Aset Tetap',
                'topic_content' => json_encode(['Penyusutan', 'Penurunan Nilai', 'Pengurasan', 'Penilaian Kembali']),
                'topic_objective' => 'Mampu memahami depresiasi, impairment, deplesi, dan revaluasi dari aset',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Aset Tidak Berwujud',
                'topic_content' => json_encode(['Isu Aset Tidak Berwujud', 'Jenis Aset Tidak Berwujud', 'Penurunan Nilai Aset Tidak Berwujud', 'Biaya Penelitian dan Pengembangan']),
                'topic_objective' => 'Mampu memahami terkait intangible asset dan jenisnya',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Liabilitas Jangka Pendek',
                'topic_content' => json_encode(['Liabilitas Jangka Pendek', 'Provisi - Halaman 1010. Kontinjensi']),
                'topic_objective' => 'Mampu memahami konsep dari akun current liabilities, provision, dan contingencies ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Liabilitas Jangka Panjang',
                'topic_content' => json_encode(['Utang Obligasi', 'Utang Jangka Panjang', 'Akuntansi untuk Liabilitas Jangka Panjang']),
                'topic_objective' => 'Mampu memahami konsep dari bonds payable dan long term notes payable',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 3 INTERMEDIATE ACCOUNTING 3
            [
                'topic_number' => 1,
                'topic_title' => 'Pengakuan Pendapatan',
                'topic_content' => json_encode(['Ikhtisar Pengakuan Pendapatan', 'Proses Lima Langkah', 'Isu Lain dalam Pengakuan Pendapatan']),
                'topic_objective' => 'Memahami konsep dasar pengakuan dan pengukuran pendapatan serta menerapkan proses pengakuan pendapatan lima langkah.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Akuntansi Pajak Penghasilan',
                'topic_content' => json_encode(['Dasar-Dasar Akuntansi Pajak Penghasilan', 'Akuntansi Kerugian Operasi Bersih', 'Representasi Laporan Keuangan']),
                'topic_objective' => 'Memahami dasar akuntansi pajak penghasilan, mengidentifikasi masalah tambahan, menjelaskan carryforwards kerugian, dan mempresentasikannya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Akuntansi Pensiun dan Manfaat Purna Kerja',
                'topic_content' => json_encode(['Dasar-Dasar Akuntansi Rencana Pensiun', 'Menggunakan Lembar Kerja Pensiun', 'Akuntansi untuk Biaya Jasa Lampau', 'Akuntansi untuk Pengukuran Ulang', 'Pelaporan Rencana Pensiun dalam Laporan Keuangan']),
                'topic_objective' => 'Memahami dasar akuntansi rencana pensiun, menggunakan lembar kerja untuk entri rencana pensiun, menjelaskan akuntansi biaya layanan masa lalu, merinci pengukuran kembali, dan menerangkan akuntansi manfaat pasca pensiun lainnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Akuntansi Sewa',
                'topic_content' => json_encode(['Lingkungan Sewa', 'Akuntansi oleh Lessee', 'Akuntansi oleh Lessor', 'Masalah Khusus Akuntansi']),
                'topic_objective' => 'Memahami lingkungan transaksi sewa, akuntansi sewa untuk penyewa dan lessor, dan laporan fitur khusus perjanjian sewa.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Perubahan dan Analisis Kesalahan Akuntansi',
                'topic_content' => json_encode(['Perubahan dalam Kebijakan Akuntansi', 'Perubahan dalam Estimasi Akuntansi', 'Kesalahan Akuntansi', 'Analisis Kesalahan']),
                'topic_objective' => 'Memahami jenis perubahan akuntansi, akuntansi kebijakan akuntansi, perkiraan, dan perbaikan kesalahan.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Laporan Arus Kas',
                'topic_content' => json_encode(['Laporan Arus Kas', 'Menyusun Laporan Arus Kas', 'Metode Langsung & Tidak Langsung', 'Masalah Khusus dalam Persiapan Laporan']),
                'topic_objective' => 'Memahami kegunaan dan format laporan arus kas, menyusunnya, membandingkan metode langsung dan tidak langsung, dan mendiskusikan masalah khususnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Penyajian dan Pengungkapan dalam Pelaporan Keuangan',
                'topic_content' => json_encode(['Prinsip Pengungkapan Penuh', 'Isu Pengungkapan', 'Laporan Auditor dan Manajemen', 'Isu Pelaporan Saat Ini']),
                'topic_objective' => 'Memahami prinsip pengungkapan penuh dan cara implementasinya serta membahas persyaratan pengungkapan lainnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],




            // subject 4 TAXATION 2
            [
                'topic_number' => 1,
                'topic_title' => 'Subyek, Obyek, dan Pengecualian dalam UU HPP dan PP RI',
                'topic_content' => json_encode(['Pengertian PP', 'Subyek, Obyek, dan Pengecualian nya', 'Deductible / Non Deductible Expense', 'Perlakuan fiscal Natura & kenikmatan sesuai UU HPP dan PP RI No. 55/2022)', 'Faktor Pengurang (Zakat, kompensasi kerugian, dan PTKP)',
                'Harga perolehan/harga penjualan harta', 'Metode Penilaian persediaan', 'NPPN', 'Tarif PPh', 'Pelunasan PPh', 'Kasus PPh']
               ),
                'topic_objective' => 'Memahami UU HPP dan PP RI No. 55/2022, mencakup subyek, obyek, pengecualian, biaya yang dapat dibiayakan, dan faktor pengurang lainnya, serta perhitungan termasuk harga perolehan harta, metode penilaian persediaan, NPPN, tarif PPh, dan pelunasan PPh.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Analisis Implementasi Perjanjian Internasional dalam Perpajakan (UU HPP & PP No. 55/2022)',
                'topic_content' => json_encode(['Pengertian Hubungan Istimewa', 'Instrumen Pencegahan Penghindaran Pajak', 'Kesepakatan harga transfer (APA)', 'Penerapan Perjanjian Internasional di Bidang Perpajakan sesuai ketentuan UU HPP dan PP No. 55/2022', 'Kasus Hubungan Istimewa dan Penerapan Perjanjian Internasional di bidang perpajakan',
                'Metode Penyusutan & amortisasi', 'Penarikan Aset tetap', 'Penilaian Kembali AT', 'Kasus Perhitungan penyusutan &,amortisasi', 'Kasus penilaian Kembali AT']
               ),
                'topic_objective' => 'Memahami UU HPP dan PP RI No. 55/2022 mengenai hubungan istimewa, perjanjian internasional perpajakan, dan perhitungan penyusutan/amortisasi harta.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Perhitungan Withholding Tax sesuai UU HPP - Subjek, Objek, dan Tarif PPh Pasal 22, 23/26',
                'topic_content' => json_encode(['Subjek, Objek, dan Tarif PPh Pasal 22', 'Pemungut PPh Pasal 22', 'Saat Terhutang dan Tata Cara Pemungutan, Penyetoran, dan Pelaporan Psl 22', 'Subjek, Objek, Pemotong, dan Mekanisme Pemotongan PPh Pasal 23/26', 'Saat Terhutang Penyetoran dan Pelaporan PPh Pasal 23/26', 'Cara Perhitungan PPh Pasal 22, dan 23/26', 'PPh UMKM (PP No 23/2018 dan PP No.55/2022)', 'Kasus PPh Pasal 22, PPh Pasal 23/26, dan PPh UMKM',
                'Prinsip Pemotongan PPh Final', 'Objek dan Tarif PPh Final', 'Cara Perhitungan PPh Pasal 4(2) dan PPh Psl 15', 'Kasus PPh Pasal 4(2) dan PPh Psl 15']
               ),
                'topic_objective' => 'Memahami perhitungan withholding tax, mencakup subjek, objek, tarif, PPh pasal 22, 23/26, pemotongan, penyetoran, pelaporan, dan kasus. Juga, perhitungan PPh Final pasal 4(2) dan 15.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Optimalkan Pajak Penghasilan: Rinci PPh Pasal 24 dan Perhitungannya',
                'topic_content' => json_encode(['Prinsip Pemungutan PPh Pasal 24', 'Pengertian dan Mekanisme Pengkreditan PPh Pasal 24', 'Perhitungan Kredit Pajak Luar Negeri WP OP dan Badan', 'Penentuan PPh WP OPPT', 'Tata Cara Penyetoran dan Pelaporan PPh Pasal 25', 'Penentuan Besarnya Angsuran PPh Pasal 25', 'Insentif di Bidang PPh (Pasal 31A dan 31E)', 'Kasus PPh Pasal 24, PPh Pasal 25, PPh WP OPPT, PPh Pasal 31A dan 31E']
            ),
                'topic_objective' => 'Memahami PPh Pasal 24, mekanisme pengkreditan, perhitungan kredit pajak luar negeri, PPh WP OPPT, angsuran PPh pasal 25, dan insentif PPh.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Dasar Pajak Penghasilan: Pemahaman Mendalam tentang PPh Pasal 21/26 Menurut UU HPP dan PP No. 55/2022',
                'topic_content' => json_encode(['Pengertian PPh Pasal 21/26', 'Subyek dan Obyek PPh Pasal 21/26', 'Pemotong PPh Pasal 21/26', 'Hak dan Kewajiban WP dan Pemotong Pajak', 'Tata Cara Penyetoran dan Pelaporan PPh Pasal 21/26', 'Perlakuan Fiscal atas Natura / Kenikmatan dalam PPh Pasal 21/26']
            ),
                'topic_objective' => 'Memahami PPh pasal 21/26, mencakup pengertian, subyek, obyek, pemotong, hak dan kewajiban, tarif pajak, serta tata cara penyetoran dan pelaporan sesuai UU HPP dan PP No. 55/2022.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Perhitungan PPh Pasal 21/26: Panduan Lengkap untuk Pegawai Tetap sesuai UU HPP dan PP No. 55/2022',
                'topic_content' => json_encode(['Cara Menghitung PPh Pasal 21: Pegawai Tetap, Pegawai Tidak Tetap, Bukan Pegawai, Penerima Pensiun, Peserta Kegiatan, Penerima Pesangon, PNS / TNI Polri, WP Luar Negeri', 'Pelaporan PPh Pasal 21/26 Melalui Form SPT 1721', 'Kasus PPh Pasal 21/26']
            ),
                'topic_objective' => 'Memahami PPh pasal 21/26 sesuai UU HPP dan PP No. 55/2022 untuk berbagai kategori, termasuk pegawai, pensiunan, peserta kegiatan, dan WP luar negeri.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Kasus PPh WP OP dan WP Badan: Langkah-langkah Penghitungan dan Rekonsiliasi Fiskal',
                'topic_content' => json_encode(['PPh WP OP (Pembukuan dan/atau Norma Penghitungan Penghasilan Neto)', 'PPh WP Badan']
            ),
                'topic_objective' => 'Mampu menyelesaikan kasus PPh untuk WP OP dan WP badan, termasuk pembukuan, norma penghitungan penghasilan neto, dan rekonsiliasi fiskal.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Evolusi Perubahan PPn menjadi PPN: Latar Belakang dan Implikasinya Menurut UU HPP dan PP No. 44/2022',
                'topic_content' => json_encode(['Latar Belakang Penggantian PPn dengan PPN', 'Dasar Hukum dan Pengertian Umum PPN', 'Karakteristik dan Mekanisme Pemungutan PPN', 'Subjek, Objek, dan Pengecualian', 'Tarif PPN', 'Kewajiban PKP', 'Pembukuan yang Wajib Diselenggarakan PKP', 'Pengertian, Karakteristik, Tarif, dan Penghitungan PPnBM', 'Saat dan Tempat Pajak Terutang', 'Dasar Hukum Pembuatan FP', 'Jenis, Kewajiban, dan Saat Pembuatan Faktur Pajak serta Tata Cara Pembetulannya', 'Penyerahan BKP/JKP yang Pembayarannya Menggunakan Valuta Asing', 'Nota Retur, Pembatalan', 'Sanksi Administrasi']),
                'topic_objective' => 'Memahami latar belakang perubahan dari PPn ke PPN, termasuk pengertian, karakteristik, mekanisme pemungutan, subjek, objek, tarif, DPP, dan kewajiban PKP sesuai UU HPP dan PP No. 44/2022. Serta kewajiban pembukuan, PPnBM, saat dan tempat pajak terutang, faktur pajak, nota retur, pembatalan, dan sanksi administrasi.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 9,
                'topic_title' => 'Optimalkan Keuangan Bisnis: Penghitungan Pengkreditan Pajak Masukan Menurut UU HPP dan PP No. 44/2022',
                'topic_content' => json_encode(['Dasar Hukum dan Mekanisme Pengkreditan PM', 'Penghitungan Kembali PM yang Telah Dikreditkan', 'Perhitungan Pembagi WP yang Menggunakan Pedoman Penghitungan', 'Dasar Hukum, Pengertian Restitusi, dan Jangka Waktu Penyelesaiannya', 'Dasar Hukum dan Pengertian Pemungut PPN dan Penyerahan kepada Pemungut', 'Fasilitas Perpajakan di Bidang PPN/PPnBM', 'Pelaporan PPN/PPnBM pada Form SPT Masa PPN',
                'Dasar Hukum, Pengenaan Pajak Karbon', 'Subjek, Objek, dan Pengecualiannya', 'DPP, Tarif Pajak, dan Cara Perhitungannya', 'Saat Terutang Pajak Karbon', 'Ketentuan Perpajakan yang Dapat Diindikasikan untuk Penurunan Emisi Karbon (PPN dan PPnBM, Pajak Daerah Propinsi/Kabupaten/Kota)', 'Perpajakan atas Perdagangan Karbon']),
                'topic_objective' => 'Memahami perpajakan menurut UU HPP dan PP No. 44/2022, meliputi penghitungan PPN, restitusi, pemungut PPN, fasilitas, dan pajak karbon.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 5 FINANCIAL MANAGEMENT
            [
                'topic_number' => 1,
                'topic_title' => 'Ikhtisar Manajemen Keuangan dan Pasar dan Institusi Keuangan dan Analisis Laporan Keuangan',
                'topic_content' => json_encode(['Apa itu Keuangan?', 'Tujuan Utama Keuangan', 'Konflik Manajemen dan Pemegang Utang',
                'Proses Alokasi Modal', 'Pasar Keuangan', 'Bursa Saham', 'Pasar Saham Umum', 'Pasar Saham dan Pengembalian', 'Efisiensi Pasar Saham',
                'Analisis Rasio', 'Rasio Likuiditas', 'Rasio Manajemen Aset', 'Rasio Manajemen Utang', 'Rasio Profitabilitas', 'Rasio Nilai Pasar', 'Persamaan Du Pont']
            ),
                'topic_objective' => 'Mampu memahami financial management secara keseluhan, mengetahui jenis-jenis market, dan mampu melakukan analisa laporan keuangan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Nilai Waktu Uang dan Risiko dan Tingkat Pengembalian',
                'topic_content' => json_encode(['Garis Waktu', 'Nilai Masa Depan', 'Nilai Sekarang', 'Nilai Masa Depan Anuitas Biasa dan Anuitas Biasa', 'Nilai Sekarang Anuitas Biasa dan Anuitas Biasa', 'Perpetuitas', 'Arus Kas Tidak Teratur',
                'Keseimbangan Risiko-Pengembalian dan Perdagangan', 'Risiko Berdiri Sendiri', 'CAPM', 'Hubungan Antara Risiko dan Tingkat Pengembalian']
               ),
                'topic_objective' => 'Mampu memahami konsep nilai waktu uang dan risiko dari suatu project',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Biaya Modal',
                'topic_content' => json_encode(['Ikhtisar Biaya Modal Tertimbang Rata-Rata (WACC)', 'Definisi Dasar', 'Biaya Utang', 'Biaya Saham Preferen', 'Biaya Laba Ditahan', 'Biaya Saham Umum Baru', 'Komposit, atau WACC', 'Faktor yang Mempengaruhi WACC']
            ),
                'topic_objective' => 'Mampu memahami perhitungan biaya modal dengan baik',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Dasar-Dasar Anggaran Modal',
                'topic_content' => json_encode(['Ikhtisar Anggaran Modal', 'Nilai Saat Ini (NPV)', 'Tingkat Pengembalian Internal (IRR)', 'Tingkat Pengembalian Internal yang Dimodifikasi (MIRR)', 'Periode Pengembalian Modal', 'Kriteria Keputusan yang Digunakan dalam Praktek']
            ),
                'topic_objective' => 'Mampu memahami dasar dari alokasi modal',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Estimasi Arus Kas dan Analisis Risiko',
                'topic_content' => json_encode(['Isu Konseptual dalam Estimasi Arus Kas', 'Analisis Proyek Ekspansi', 'Analisis Penggantian', 'Analisis Risiko dalam Anggaran Modal', 'Pengukuran Risiko Berdiri Sendiri', 'Siklus Proyek yang Tidak Merata']
            ),
                'topic_objective' => 'Mampu menganalisis estimasi cash flow suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Struktur Modal dan Leverage',
                'topic_content' => json_encode(['Risiko Bisnis dan Risiko Keuangan', 'Menentukan Struktur Modal Optimal', 'Teori Struktur Modal', 'Checklist untuk Keputusan Struktur Modal']
            ),
                'topic_objective' => 'Mampu memahami struktur modal dan hutang suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Manajemen Modal Kerja',
                'topic_content' => json_encode(['Latar Belakang Modal Kerja', 'Kebijakan Investasi Aset Lancar', 'Kebijakan Pendanaan Aset Lancar', 'Siklus Pengonversian Kas', 'Anggaran Kas', 'Persediaan', 'Piutang']
            ),
                'topic_objective' => 'Mampu memahami kinerja model dari suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 6 STATISTICS
            [
                'topic_number' => 1,
                'topic_title' => 'What are Statistics and Descriptive Statistics',
                'topic_content' => json_encode(['Uji Validitas', 'Uji Reliabilitas (Konsistensi)', 'Uji Normalitas', 'Uji Beda Satu Kategori', 'Independent Sample t-Test', 'Wilcoxon Mann Whitney Test', 'Paired atau Dependent Sample t-Test', 'Wilcoxon Signed-Rank']
            ),
                'topic_objective' => 'Memahami dasar-dasar analisis data serta memperoleh keterampilan praktis dalam mengelola dan menyajikan data secara informatif.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Validitas dan Reliabilitas Instrumen: Aspek Kunci dalam Penelitian Statistik',
                'topic_content' => json_encode(['One-Way Anova', 'Kruskal-Wallis Test', 'Chi Square', 'Korelasi Pearson', 'Uji Korelasi Spearman', 'Uji Regresi']
            ),
                'topic_objective' => 'Mampu mengevaluasi dan memastikan keandalan, ketepatan, dan distribusi normalitas instrumen serta menguji perbedaan antara dua kelompok atau sampel data.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Analysis of Variance Nonparametric Methods: Goodness-of-Fit Tests dan Uji Korelasi dan Uji Regresi',
                'topic_content' => json_encode(['Uji Normalitas Residual', 'Multicollinearity', 'Heteroscedasticity', 'Autocorrelation']
            ),
                'topic_objective' => 'Mengeksplorasi perbedaan varian, kesesuaian distribusi, dan hubungan antar variabel dengan Uji Korelasi Pearson, Uji Korelasi Spearman, dan Uji Regresi.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Uji Asumsi Klasik',
                'topic_content' => json_encode(['Uji Normalitas', 'Uji Regresi', 'Konsep Dasar', 'Jenis-jenis', 'Interpretasi Koefisien', 'Evaluasi Model']
            ),
                'topic_objective' => 'Mampu mengevaluasi kepatuhan model regresi terhadap prasyarat dasar statistik.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Dummy Variable Regression Models dan Qualitative Response Regression Models',
                'topic_content' => json_encode(['Panel Data Introduction', 'Model Analisis Data Panel', 'Evaluasi Model Panel', 'Interpretasi Hasil', 'Perbedaan Reflective dan Formative', 'Pembentukan Faktor', 'Analisis dan Interpretasi']
            ),
                'topic_objective' => 'Mampu melakukan uji normalitas dan uji regresi pada model regresi respons kualitatif dengan berfokus pada konsep dasar, jenis-jenis, interpretasi koefisien, dan evaluasi model.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Panel Data Regression Models dan Factor Analysis (Reflective vs Formative)',
                'topic_content' => json_encode(['Perbedaan Reflective dan Formative', 'Pembentukan Faktor', 'Analisis dan Interpretasi']),
                'topic_objective' => 'Memahami model regresi data panel dengan tahap pengenalan, analisis model data panel, evaluasi model panel, dan interpretasi hasil, serta konsep perbedaan antara analisis reflective dan formative dalam analisis faktor, pembentukan faktor, dan analisis serta interpretasi hasilnya.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Path Analysis',
                'topic_content' => json_encode(['Path Analysis Overview', 'Direct and Indirect Effects', 'Mediation Analysis', 'Model Fit and Interpretation']
            ),
                'topic_objective' => 'Memahami path analysis dengan membahas pengantar path analysis, efek langsung dan tidak langsung, analisis mediasi, serta penilaian kesesuaian model dan interpretasi hasil.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Moderated Regression Analysis (MRA)',
                'topic_content' => json_encode(['Introduction to Moderated Regression', 'Interaction Effects', 'Interpretation of Interaction', 'Practical Applications']            ),
                'topic_objective' => 'Memahami analisis regresi yang dimoderasi (MRA) dengan pengantar moderated regression, efek interaksi, interpretasi interaksi, dan aplikasi praktisnya.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 7 INTRODUCTION TO ECONOMICS 2
            [
                'topic_number' => 1,
                'topic_title' => 'Ruang lingkup makroekonomi',
                'topic_content' => json_encode(['Pendekatan Historis Teori Makroekonomi', 'Diagram Lingkar Makroekonomi', 'Peran Pemerintah']
            ),
                'topic_objective' => 'Memahami ruang lingkup makroekonomi',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Data makroekonomi serta pengukurannya',
                'topic_content' => json_encode(['Pengukuran Pendapatan Nasional', 'Pengukuran Biaya Hidup', 'Pengukuran Pengangguran']
            ),
                'topic_objective' => 'Memahami data makroekonomi serta pengukurannya',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Ekonomi riil dalam jangka panjang',
                'topic_content' => json_encode(['Produksi dan Pertumbuhan', 'Tabungan, Investasi, dan Sistem Keuangan', 'Pengangguran dan Tingkat Alamiah Pengangguran']
            ),
                'topic_objective' => 'Memahami ekonomi riil dalam jangka panjang',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Peran uang dan tingkat harga dalam jangka panjang',
                'topic_content' => json_encode(['Sistem Moneter', 'Pertumbuhan Uang dan Inflasi']
            ),
                'topic_objective' => 'Memahami peran uang dan tingkat harga dalam jangka panjang',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Konsep makroekonomi dalam perekonomian terbuka',
                'topic_content' => json_encode(['Konsep Dasar', 'Teori Perekonomian Terbuka']
            ),
                'topic_objective' => 'Memahami konsep makroekonomi dalam perekonomian terbuka',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Fluktuasi perekonomian dalam jangka pendek',
                'topic_content' => json_encode(['Permintaan Agregat', 'Pengaruh Kebijakan Fiskal dan Kebijakan Moneter terhadap AD', 'Trade-off Jangka Pendek antara Inflasi dan Pengangguran']
            ),
                'topic_objective' => 'Memahami fluktuasi perekonomian dalam jangka pendek',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Debat terkait kebijakan makroekonomi dan ekonomi politik kebijakan makroekonomi',
                'topic_content' => json_encode(['Haruskah Pembuat Kebijakan Moneter dan Fiskal Mencoba untuk Menstabilkan Ekonomi?', 'Haruskah Kebijakan Moneter Dibuat Berdasarkan Aturan?', 'Haruskah Bank Sentral Menargetkan Inflasi Nol Persen?', 'Haruskah Pemerintah Menyeimbangkan Anggaran?', 'Haruskah Regulasi Pajak Dibentuk untuk Meningkatkan Tabungan?', 'Ekonomi Politik Kebijakan Makroekonomi']
            ),
                'topic_objective' => 'Mengetahui debat terkait kebijakan makroekonomi dan ekonomi politik kebijakan makroekonomi',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Kompleksitas makroekonomi dalam fluktuasi jangka pendek (krisis finansial)',
                'topic_content' => json_encode(['Kebangkrutan', 'Krisis dan Siklus Finansial', 'Ketidaksimetrisan Informasi', 'Ketidakpastian', 'Pertimbangan Institusi dan Sosial Politik', 'Instabilitas dan Krisis', 'Behavioral Macroeconomics']
            ),
                'topic_objective' => 'Mengetahui kompleksitas makroekonomi dalam fluktuasi jangka pendek (krisis finansial)',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // subject 8 ADVANCED STATISTICS
            [
                'topic_number' => 1,
                'topic_title' => 'Review untuk materi inference',
                'topic_content' => json_encode(['Rumus umum Interval Kepercayaan dan prosedur umum pengujian hipotesis menggunakan distribusi normal']),
                'topic_objective' => 'Memahami konsep dasar inference',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Inference berdasarkan 2 sampel',
                'topic_content' => json_encode(['Interval Kepercayaan untuk Perbedaan antara Dua Mean (Sampel Independen)', 'Interval Kepercayaan untuk Rata-rata Perbedaan (Pengambilan Sampel Berpasangan Tergantung atau Berpasangan)', 'Interval Kepercayaan untuk Proporsi Dua Populasi Independen', 'Pengujian Hipotesis untuk Perbedaan antara Dua Mean (Sampel Independen)', 'Pengujian Hipotesis untuk Mengetahui Rata-rata Perbedaan (Pengambilan Sampel Berpasangan Tergantung atau Berpasangan)', 'Pengujian Hipotesis untuk Proporsi Dua Populasi Independen', 'Menggunakan Excel untuk Menguji Dua Populasi']
            ),
                'topic_objective' => 'Memahami konsep-konsep inference berdasarkan 2 sampel dan uji hipotesisnya',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Inference untuk variance and Uji Chi-Square',
                'topic_content' => json_encode(['Pengujian Varian Tunggal', 'Pengujian Dua Varians', 'Menggunakan Excel untuk Pengujian Varians', 'Uji Kelayakan (untuk Multinomial dan Beberapa Distribusi Teoretis Lainnya)', 'Menggunakan Excel untuk Menguji Independensi']
            ),
                'topic_objective' => 'Memahami inference untuk variance dan uji Chi-Square serta memahami konsep-konsep  ANOVA',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'ANOVA',
                'topic_content' => json_encode(['Kegunaan Anova', 'Statistik Pengujian', 'Tabel Anova', 'Beberapa Perbandingan menggunakan LSD (Fisher)', 'Anova Dua Arah tanpa Replikasi', 'Anova Dua Arah dengan Replikasi', 'Menggunakan Excel untuk Anova']
            ),
                'topic_objective' => 'Memahami inference untuk variance dan uji Chi-Square serta memahami konsep-konsep  ANOVA',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Regresi Sederhana',
                'topic_content' => json_encode(['Pengertian Regresi dan Korelasi', 'Menduga Garis Regresi menggunakan Metode Ordinary', 'Menguji Parameter Garis Regresi', 'Interval Kepercayaan Prediksi', 'Menggunakan Excel untuk Garis Regresi']
            ),
                'topic_objective' => 'Memahami konsep-konsep dasar regresi linear sederhana',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'Regresi Berganda',
                'topic_content' => json_encode(['Arti Regresi Berganda', 'Pengujian pada Regresi Berganda', 'Penggunaan Variabel Dummy pada Variabel Independen Kualitatif', 'Pengenalan Bentuk Fungsional dalam Analisis Regresi', 'Menggunakan Excel untuk Regresi Berganda']
            ),
                'topic_objective' => 'Memahami konsep-konsep dasar regresi linear berganda',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Analisis Time Series',
                'topic_content' => json_encode(['Arti Analisis Time Series', 'Komponen Data Time Series', 'Berbagai Model Tren: Linier dan Eksponensial', 'Variasi Musiman', 'Peramalan dalam Time Series menggunakan Tren dan Indeks Musiman', 'Menggunakan Excel untuk Analisis Time Series']
            ),
                'topic_objective' => 'Mengetahui dan memahami konsep dasar analisis data time series',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'Non-Parametric Test',
                'topic_content' => json_encode(['Pengenalan Metode Nonparametrik', 'Wilcoxon Sign Rank Test', 'Wilcoxon Rank Sum Test', 'Tes Kruskal-Wallis', 'Spearman Rank Correlation Test']
            ),
                'topic_objective' => 'Memahami konsep-konsep dasar Non-Parametric Test',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 9 ADVANCED MATHEMATICS

            [
                'topic_number' => 1,
                'topic_title' => 'Komparatif Statis: Pendekatan Ekonomi',
                'topic_content' => json_encode(['Diferensial', 'Derivatif', 'Comparative Statics of General-Function Models']
            ),
                'topic_objective' => 'Mengetahui konsep dasar komparatif statis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Optimisasi tanpa kendala (1 variabel dan 2 variabel): Pendekatan Ekonomi',
                'topic_content' => json_encode(['Nilai Optimum dan Ekstrimum', 'Uji Turunan Pertama', 'Uji Turunan Kedua', 'Maclaurin and Taylor Series', 'Nth-Derivative Test for Relative Extremum of a Function of One Variable', 'The Differential Version of Optimization Conditions', 'Extreme Values of a Function of Two Variables', 'Quadratic Forms—An Excursion', 'Objective Functions with More than Two Variables', 'Second-Order Conditions in Relation to Concavity and Convexity', 'Economic Applications', 'Comparative-Static Aspects of Optimization']
            ),
                'topic_objective' => 'Memahami konsep optimisasi tanpa kendala untuk 1 dan 2 variabel',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Optimasi dengan kendala persamaan: Pendekatan Ekonomi ',
                'topic_content' => json_encode(['Effects of a Constraint', 'Finding the Stationary Values', 'Second-Order Conditions', 'Quasiconcavity and Quasiconvexity', 'Utility Maximization and Consumer Demand', 'Homogeneous Functions', 'Least-Cost Combination of Inputs']
            ),
                'topic_objective' => 'Memahami konsep optimisasi dengan kendala persamaan',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Optimisasi dengan kendala ketidaksamaan',
                'topic_content' => json_encode(['Pengenalan dan Konsep Dasar dan Pendekatan Grafis', 'Nonlinear Programming and Kuhn-Tucker Conditions', 'The Constraint Qualification', 'Economic Applications', 'Sufficiency Theorems in Nonlinear Programming', 'Maximum-Value Functions and the Envelope Theorem', 'Duality and the Envelope Theorem']
            ),
                'topic_objective' => 'Memahami konsep optimisasi dengan kendala ketidaksamaan',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'topic_number' => 5,
                'topic_title' => 'Economic Dynamics and Integral Calculus',
                'topic_content' => json_encode(['Dynamics and Integration', 'Indefinite Integrals', 'Definite Integrals', 'Improper Integrals', 'Some Economic Applications of Integrals', 'Domar Growth Model']
            ),
                'topic_objective' => 'Memahami dinamika ekonomi dan kalkulus integral',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 6,
                'topic_title' => 'First-Order Differential Equations ',
                'topic_content' => json_encode(['First-Order Linear Differential Equations with Constant Coefficient and Constant Term', 'Dynamics of Market Price', 'Variable Coefficient and Variable Term', 'Exact Differential Equations', 'Nonlinear Differential Equations of the First Order and First Degree', 'The Qualitative-Graphic Approach', 'Solow Growth Model']
            ),
                'topic_objective' => 'Memahami konsep dalam First-Order Differential Equations dan aplikasinya dalam ekonomi',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 7,
                'topic_title' => 'Second-Order Differential Equations',
                'topic_content' => json_encode(['Second-Order Linear Differential Equations with Constant Coefficients and Constant Term', 'Complex Numbers and Circular Functions', 'Analysis of the Complex-Root Case', 'A Market Model with Price Expectations', 'The Interaction of Inflation and Unemployment', 'Differential Equations with a Variable Term', 'Higher-Order Linear Differential Equations']
            ),
                'topic_objective' => 'Memahami konsep dalam Second-Order Differential Equations dan aplikasinya dalam ekonomi',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 8,
                'topic_title' => 'First-Order Difference Equations',
                'topic_content' => json_encode(['Discrete Time, Differences, and Difference Equations', 'Solving a First-Order Difference Equation', 'The Dynamic Stability of Equilibrium', 'The Cobweb Model', 'A Market Model with Inventory', 'Nonlinear Difference Equations— The Qualitative-Graphic Approach']
            ),
                'topic_objective' => 'Memahami konsep First-Order Difference Equation dan aplikasinya pada model ekonomi dinamis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 9,
                'topic_title' => 'Second-Order Difference Equations',
                'topic_content' => json_encode(['Second-Order Linear Difference Equations with Constant Coefficients and Constant Term', 'Samuelson Multiplier-Acceleration Interaction Model', 'Inflation and Unemployment in Discrete Time', 'Generalizations to Variable-Term and Higher-Order Equations']
            ),
                'topic_objective' => 'Memahami konsep Second-Order Difference Equation dan aplikasinya pada model dinamika ekonomi yang lebih kompleks',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 10,
                'topic_title' => 'Introduction to Real Analysis (1)',
                'topic_content' => json_encode(['Basic Concept of Set', 'Set Operation', 'Set Types (Open Balls, Open Sets, Closed Sets, Bounded Sets, Compact Sets, Convex Set)', 'Convergence Sequences', 'Divergence Sequences', 'Subsequences', 'Monotonic Sequences', 'Supremum & Infimum', 'Maximum & Minimum']
            ),
                'topic_objective' => 'Memahami dan menganalisis konsep-konsep dasar real analysis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 11,
                'topic_title' => 'Introduction to Real Analysis (2)',
                'topic_content' => json_encode(['Mapping and Functions', 'Limits', 'Continuous Function', 'Differentiable Functions', 'Convex Function', 'Concave Function', 'Hessian Matrices', 'Existence of Solutions: Bolzano Weierstrass Theorem and Applications']
            ),
                'topic_objective' => 'Memahami konsep-konsep real analysis seperti limit, dan kontinuitas untuk memahami model ekonomi ',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insert data into the topics table
        DB::table('topics')->insert($topics);
    }
}
