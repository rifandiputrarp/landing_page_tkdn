<?php

return [
    "netWorth" => [
        ["key" => "Mikro", "value" => "Usaha Mikro(<= Rp. 1 Miliar)"],
        ["key" => "Kecil", "value" => "Usaha Kecil(> 1 Miliar - 5 Miliar)"],
        ["key" => "Menengah", "value" => "Usaha Menengah(> Rp.5 Miliar - Rp.10 Miliar)"],
        ["key" => "Besar", "value" => "Industri Besar ( > Rp.10 Miliar )"]
    ],

    "companyStatus" => [
        ["key" => "new", "value" => "NEW"],
        ["key" => "review", "value" => "REVIEW"],
        ["key" => "complete", "value" => "COMPLETE"]
    ],

    "legalBasis" => [
        ["key" => "Perindustrian", "value" => "Undang-undang Nomor 3 Tahun 2014", "file_path" => "legal-basis/UU_No.3_2014.pdf"],
        ["key" => "Pengadaan Barang/Jasa Pemerintah", "value" => "Peraturan Presiden Nomor 16 Tahun 2018", "file_path" => "legal-basis/Perpres_No.16_2018.pdf"],
        ["key" => "Penunjukkan surveyor sebagai pelaksana verifikasi capaian Tingkat Komponen Dalam Negeri (TKDN) atas barang/jasa produksi dalam negeri", "value" => "Peraturan Menteri Perindustrian Nomor 57 Tahun 2006", "file_path" => "legal-basis/Permen.Perind_No_57_2006.pdf"],
    ],

    "typeOfOrder" => [
        ["key" => "commercial", "value" => "Komersial"],
        ["key" => "non_commercial", "value" => "Non-Komersial(Penugasan)"]
    ],

];
