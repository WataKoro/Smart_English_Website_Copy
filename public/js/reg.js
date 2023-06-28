//EDU STAGE/LEVEL FUNCTION
// Map edu choices
var optEdu = {
   'no': ['-'],
   'elementary': ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6'],
   'junior': ['Kelas 1', 'Kelas 2', 'Kelas 3'],
   'senior': ['Kelas 1', 'Kelas 2', 'Kelas 3'],
   'college': ['Associate', 'Bachelor', 'Master', 'Doctorate'],
   'other': ['-'],
};

// When an option is changed, search the above for matching choices
$('#eduStages').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#eduGrades').empty();
   
   // For each choice in educational grade/level
   for (i = 0; i < optEdu[selectValue].length; i++) {
      // Output choice in the target field
      $('#eduGrades').append("<option value='" + optEdu[selectValue][i] + "'>" + optEdu[selectValue][i] + "</option>");
   }
});


//PROVINCE AND CITY FUNCTION
// Map locations choices
var optCity = {
    // JAKARTA
    'jakarta': ['Jakarta Barat', 
    'Jakarta Pusat', 
    'Jakarta Selatan', 
    'Jakarta Timur', 
    'Jakarta Utara', 
    'Kepulauan Seribu'],

   // JABAR
    'westJava': ['Kabupaten Bandung', 
    'Kabupaten Bandung Barat', 
    'Kabupaten Bekasi', 
    'Kabupaten Bogor', 
    'Kabupaten Ciamis', 
    'Kabupaten Cianjut', 
    'Kabupaten Cirebon', 
    'Kabupaten Garut', 
    'Kabupaten Indramayu', 
    'Kabupaten Karawang', 
    'Kabupaten Kuningan', 
    'Kabupaten Majalengka', 
    'Kabupaten Pangandaran', 
    'Kabupaten Purwakarta', 
    'Kabupaten Subang', 
    'Kabupaten Sukabumi', 
    'Kabupaten Sumedang', 
    'Kabupaten Tasikmalaya', 
    'Kota Bandung', 
    'Kota Banjar', 
    'Kota Bekasi', 
    'Kota Bogor', 
    'Kota Cimahi', 
    'Kota Cirebon', 
    'Kota Depok', 
    'Kota Sukabumi', 
    'Kota Tasikmalaya'],

    //JATENG
    'centralJava': ['Kabupaten Banjarnegara', 
    'Kabupaten Banyumas', 
    'Kabupaten Batang', 
    'Kabupaten Blora', 
    'Kabupaten Boyolali', 
    'Kabupaten Brebes', 
    'Kabupaten Cilacap', 
    'Kabupaten Demak', 
    'Kabupaten Grobogan', 
    'Kabupaten Jepara', 
    'Kabupaten Karanganyar', 
    'Kabupaten Kebumen', 
    'Kabupaten Kendal', 
    'Kabupaten Klaten', 
    'Kabupaten Kudus', 
    'Kabupaten Magelang', 
    'Kabupaten Pati', 
    'Kabupaten Pekalongan', 
    'Kabupaten Pemalang', 
    'Kabupaten Purbalingga', 
    'Kabupaten Purworejo', 
    'Kabupaten Rembang', 
    'Kabupaten Semarang', 
    'Kabupaten Sragen', 
    'Kabupaten Sukoharjo', 
    'Kabupaten Temanggung', 
    'Kabupaten Wonogiri', 
    'Kabupaten Wonosobo', 
    'Kabupaten Tegal', 
    'Kota Magelang', 
    'Kota Pekalongan', 
    'Kota Salatiga', 
    'Kota Semarang', 
    'Kota Surakarta', 
    'Kota Tegal'],


    //JATIM
    'eastJava': ['Kabupaten Bangkalan', 
    'Kabupaten Banyuwangi', 
    'Kabupaten Blitar', 
    'Kabupaten Bojonegoro', 
    'Kabupaten Bondowoso', 
    'Kabupaten Gresik', 
    'Kabupaten Jember', 
    'Kabupaten Jombang', 
    'Kabupaten Kediri', 
    'Kabupaten Lamongan', 
    'Kabupaten Lumajang', 
    'Kabupaten Madiun', 
    'Kabupaten Magetan', 
    'Kabupaten Malang', 
    'Kabupaten Mojokerto', 
    'Kabupaten Nganjuk', 
    'Kabupaten Ngawi', 
    'Kabupaten Pacitan', 
    'Kabupaten Pamekasan', 
    'Kabupaten Pasuruan', 
    'Kabupaten Ponorogo', 
    'Kabupaten Probolinggo', 
    'Kabupaten Sampang', 
    'Kabupaten Sidoarjo', 
    'Kabupaten Situbondo', 
    'Kabupaten Sumenep', 
    'Kabupaten Trenggalek', 
    'Kabupaten Tuban', 
    'Kabupaten Tulungagung', 
    'Kota Batu', 
    'Kota Blitar', 
    'Kota Kediri', 
    'Kota Madiun', 
    'Kota Malang', 
    'Kota Mojokerto', 
    'Kota Pasuruan', 
    'Kota Probolinggo', 
    'Kota Surabaya'],

    //YOGYA
    'yogya': ['Kabupaten Bantul', 
    'Kabupaten Gunungkidul', 
    'Kabupaten Kulon Progo', 
    'Kabupaten Sleman', 
    'Kabupaten Yogyakarta'],

    //ACEH
    'aceh': ['Kabupaten Aceh Barat', 
    'Kabupaten Aceh Barat Daya', 
    'Kabupaten Aceh Besar', 
    'Kabupaten Aceh Jaya', 
    'Kabupaten Aceh Selatan', 
    'Kabupaten Aceh Singkil', 
    'Kabupaten Aceh Tamiang', 
    'Kabupaten Aceh Tengah', 
    'Kabupaten Aceh Tenggara', 
    'Kabupaten Aceh Timur', 
    'Kabupaten Aceh Utara', 
    'Kabupaten Bener Meriah', 
    'Kabupaten Bireuen', 
    'Kabupaten Gayo Lues', 
    'Kabupaten Nagan Raya', 
    'Kabupaten Pidie', 
    'Kabupaten Pidie Jaya', 
    'Kabupaten Simeulue', 
    'Kota Banda Aceh', 
    'Kota Langsa', 
    'Kota Lhokseumawe', 
    'Kota Sabang', 
    'Kota Subulussalam'],

    //SUMATERA UTARA
    'northSumatera': ['Kabupaten Asahan', 
    'Kabupaten Batu Bara', 
    'Kabupaten Dairi', 
    'Kabupaten Deli Serdang', 
    'Kabupaten Humbang Hasundutan', 
    'Kabupaten Karo', 
    'Kabupaten Labuhanbatu', 
    'Kabupaten Labuhanbatu Selatan', 
    'Kabupaten Labuhanbatu Utara', 
    'Kabupaten Langkat', 
    'Kabupaten Mandailing Natal', 
    'Kabupaten Nias', 
    'Kabupaten Nias Barat', 
    'Kabupaten Nias Selatan', 
    'Kabupaten Nias Utara', 
    'Kabupaten Padang Lawas', 
    'Kabupaten Padang Lawas Utara', 
    'Kabupaten Pakpak Barat', 
    'Kabupaten Samosir', 
    'Kabupaten Serdang Bedagai', 
    'Kabupaten Simalungun', 
    'Kabupaten Tapanuli Selatan', 
    'Kabupaten Tapanuli Tengah', 
    'Kabupaten Tapanuli Utara', 
    'Kabupaten Toba', 
    'Kota Binjai', 
    'Kota Gunung Sitoli', 
    'Kota Medan', 
    'Kota Padang Sidempuan', 
    'Kota Pematangsiantar', 
    'Kota Sibolga', 
    'Kota Tanjungbalai', 
    'Kota Tebing Tinggi'],

    //SUMATERA BARAT
    'westSumatera': ['Kabupaten Agam', 
    'Kabupaten Dharmasraya', 
    'Kabupaten Kepulauan Mentawi', 
    'Kabupaten Lima Puluh Kota', 
    'Kabupaten Padang Pariaman', 
    'Kabupaten Pasaman', 
    'Kabupaten Pasaman Barat', 
    'Kabupaten Pesisir Selatan', 
    'Kabupaten Sijunjung', 
    'Kabupaten Solok', 
    'Kabupaten Solok Selatan', 
    'Kabupaten Tanah Datar', 
    'Kota Bukit Tinggi', 
    'Kota Padang', 
    'Kota Padang Panjnga', 
    'Kota Pariaman', 
    'Kota Payakumbuh', 
    'Kota Sawahlunto', 
    'Kota Solok'],

    //SUMATERA SELATAN
    'southSumatera': ['Kabupaten Banyuasin', 
    'Kabupaten Empat Lawang', 
    'Kabupaten Lahat', 
    'Kabupaten Muara Enim', 
    'Kabupaten Musi Banyuasin', 
    'Kabupaten Musi Rawas', 
    'Kabupaten Musi Rawas Utara', 
    'Kabupaten Ogan llir', 
    'Kabupaten Ogan Komering llir', 
    'Kabupaten Ogan Komering Ulu Selatan', 
    'Kabupaten Ogan Komering Ulu Timur', 
    'Kabupaten Ogan Komering Ulu', 
    'Kabupaten Penukal Abab Lematang llir', 
    'Kota Lubuklinggau', 
    'Kota Pagar Alam', 
    'Kota Palembang', 
    'Kota Prabumulih'],

    //RIAU
    'riau': ['Kabupaten Bengkalis', 
    'Kabupaten Indragiri Hilir', 
    'Kabupaten Indragiri Hulu', 
    'Kabupaten Kampar', 
    'Kabupaten Kepulauan Meranti', 
    'Kabupaten Kuantan Singingi', 
    'Kabupaten Pelalawan', 
    'Kabupaten Rokan Hilir', 
    'Kabupaten Rokan Hulu', 
    'Kabupaten Siak', 
    'Kota Dumai', 
    'Kota Pekanbaru'],

    //KEPULAUAN RIAU
    'kepulauanRiau': ['Kabupaten Bintan', 
    'Kabupaten Karimun', 
    'Kabupaten Kepulauan Anambas', 
    'Kabupaten Lingga', 
    'Kabupaten Natuna', 
    'Kota Batam', 
    'Kota Tanjungpinang'],

    //KEPULAUAN BANGKA BELITUNG
    'kepulauanBangkaBelitung':['Kabupaten Bangka', 
    'Kabupaten Bangka Barat', 
    'Kabupaten Bangka Selatan', 
    'Kabupaten Bangka Tengah', 
    'Kabupaten Belitung', 
    'Kabupaten Belitung Timur', 
    'Kota Pangkal Pinang'],

    //JAMBI
    'jambi': ['Kabupaten Batanghari', 
    'Kabupaten Bungo', 
    'Kabupaten Kerinci', 
    'Kabupaten Merangin', 
    'Kabupaten Muaro Jambi', 
    'Kabupaten Sarolangun', 
    'Kabupaten Tanjung Jabung Barat', 
    'Kabupaten Tanjung Jabung Timur', 
    'Kabupaten Tebo', 
    'Kota Jambi', 
    'Kota Sungai Penuh' ],

    //BENGKULU
    'bengkulu': ['Kabupaten Bengkulu Selatan', 
    'Kabupaten Bengkulu Tengah', 
    'Kabupaten Bengkulu Utara', 
    'Kabupaten Kaur', 
    'Kabupaten Kepahiang', 
    'Kabupaten Lebong', 
    'Kabupaten Mukomuko', 
    'Kabupaten Rejang Lebong', 
    'Kabupaten Seluma', 
    'Kota Bengkulu'],

    //LAMPUNG
    'lampung': ['Kabupaten Lampung Barat', 
    'Kabupaten Lampung Selatan', 
    'Kabupaten Lampung Tengah', 
    'Kabupaten Lampung Timur', 
    'Kabupaten Lampung Utara', 
    'Kabupaten Mesuji', 
    'Kabupaten Pesawaran', 
    'Kabupaten Pesisir Barat', 
    'Kabupaten Pringsewu', 
    'Kabupaten Tanggamus', 
    'Kabupaten Tulang Bawang', 
    'Kabupaten Tulang Bawang Barat', 
    'Kabupaten Way Kanan', 
    'Kota Bandar Lampung', 
    'Kota Metro'],

    //BANTEN
    'banten': ['Kabupaten Lebak', 
    'Kabupaten Pandeglang', 
    'Kabupaten Serang', 
    'Kabupaten Tangerang', 
    'Kota Cilegon', 
    'Kota Serang', 
    'Kota Tangerang', 
    'Kota Tangerang Selatan'],

    //BALI
    'bali': ['Kabupaten Badung', 
    'Kabupaten Bangli', 
    'Kabupaten Buleleng', 
    'Kabupaten Gianyar', 
    'Kabupaten Jembrana', 
    'Kabupaten Karangasem', 
    'Kabupaten Klungkung', 
    'Kabupaten Tabanan', 
    'Kota Denpasar'],

    //NUSA TENGGARA BARAT
    'ntb': ['Kabupaten Bima', 
    'Kabupaten Dompu', 
    'Kabupaten Lombok Barat', 
    'Kabupaten Lombok Tengah', 
    'Kabupaten Lombok Timur', 
    'Kabupaten Lombok Utara', 
    'Kabupaten Sumbawa', 
    'Kabupaten Sumbawa Barat', 
    'Kota Bima', 
    'Kota Mataram'],

    //NUSA TENGGARA TIMUR
    'ntt': ['Kabupaten Alor', 
    'Kabupaten Belu', 
    'Kabupaten Ende', 
    'Kabupaten Flores Timur', 
    'Kabupaten Kupang', 
    'Kabupaten Lembata', 
    'Kabupaten Malaka', 
    'Kabupaten Manggarai', 
    'Kabupaten Manggarai Barat', 
    'Kabupaten Manggarai Timur', 
    'Kabupaten Nagekeo', 
    'Kabupaten Ngada', 
    'Kabupaten Rote Ndao', 
    'Kabupaten Sabu Raijua', 
    'Kabupaten Sikka', 
    'Kabupaten Sumba Barat', 
    'Kabupaten Sumba Barat Daya', 
    'Kabupaten Sumba Tengah', 
    'Kabupaten Sumba Timur', 
    'Kabupaten Timor Tengah Selatan', 
    'Kabupaten Timor Tengah Utara', 
    'Kota Kupang'],

    //KALIMANTAN BARAT
    'westKalimantan': ['Kabupaten Bengkayang', 
    'Kabupaten Kapuas Hulu', 
    'Kabupaten Kayong Utara', 
    'Kabupaten Ketapang', 
    'Kabupaten Kubur Raya', 
    'Kabupaten Landak', 
    'Kabupaten Melawi', 
    'Kabupaten Mempawah', 
    'Kabupaten Sambas', 
    'Kabupaten Sanggau', 
    'Kabupaten Sekadau', 
    'Kabupaten Sintang', 
    'Kota Pontianak', 
    'Kota Singkawang'],

    //KALIMANTAN TENGAH
    'centralKalimantan': ['Kabupaten Barito Selatan', 
    'Kabupaten Barito Timur', 
    'Kabupaten Barito Utara', 
    'Kabupaten Gunung Mas', 
    'Kabupaten Kapuas', 
    'Kabupaten Katingan', 
    'Kabupaten Kotawaringin Barat', 
    'Kabupaten Kotawaringin Timur', 
    'Kabupaten Lamandau', 
    'Kabupaten Murung Raya', 
    'Kabupaten Pulang Pisau', 
    'Kabupaten Sukamara', 
    'Kabupaten Seruyan', 
    'Kota Palangka Raya'],

    //KALIMANTAN SELATAN
    'southKalimantan': ['Kabupaten Balangan', 
    'Kabupaten Banjar', 
    'Kabupaten Barito Kuala', 
    'Kabupaten Hulu Sungai Selatan', 
    'Kabupaten Hulu Sungai Tengah', 
    'Kabupaten Hulu Sungai Utara', 
    'Kabupaten Kotabaru', 
    'Kabupaten Tabalong', 
    'Kabupaten Tanah Bumbu', 
    'Kabupaten Tanah Laut', 
    'Kabupaten Tapin', 
    'Kota Banjarbaru', 
    'Kota Banjarmasin'],

    //KALIMANTAN TIMUR
    'eastKalimantan': ['Kabupaten Berau', 
    'Kabupaten Kutai Barat', 
    'Kabupaten Kutai Kartanegara', 
    'Kabupaten Kutai Timur', 
    'Kabupaten Mahakam Ulu', 
    'Kabupaten Paser', 
    'Kabupaten Penajam Paser Utara', 
    'Kota Balikpapan', 
    'Kota Bontang', 
    'Kota Samarinda'],

    //KALIMANTAN UTARA
    'northKalimantan': ['Kabupaten Bulungan', 
    'Kabupaten Malinau', 
    'Kabupaten Nunukan', 
    'Kabupaten Tana Tidung', 
    'Kota Tarakan'],

    //SULAWESI UTARA
    'northSulawesi': ['Kabupaten Bolaang Mongondow', 
    'Kabupaten Bolaang Mongondow Selatan', 
    'Kabupaten Bolaang Mongondow Timur', 
    'Kabupaten Bolaang Mongondow Utara', 
    'Kabupaten Kepulauan Sangihe', 
    'Kabupaten Kepulauan Siau Tagulandang Biaro', 
    'Kabupaten Kepulauan Talaud', 
    'Kabupaten Minahasa', 
    'Kabupaten Minahasa Selatan', 
    'Kabupaten Minahasa Tenggara', 
    'Kabupaten Minahasa Utara', 
    'Kota Bitung', 
    'Kota Kotamobagu', 
    'Kota Manado', 
    'Kota Tomohon'],

    //SULAWESI TENGAH
    'centralSulawesi': ['Kabupaten Bolaang Banggai', 
    'Kabupaten Bolaang Banggai Kepulauan', 
    'Kabupaten Bolaang Banggai Laut', 
    'Kabupaten Bolaang Buol', 
    'Kabupaten Donggala', 
    'Kabupaten Morowali', 
    'Kabupaten Morowali Utara', 
    'Kabupaten Parigi Moutong', 
    'Kabupaten Poso', 
    'Kabupaten Sigi', 
    'Kabupaten Tojo Una-Una', 
    'Kabupaten Tolitoli', 
    'Kota Palu'],

    //SULAWESI SELATAN
    'southSulawesi': ['Kabupaten Bantaeng', 
    'Kabupaten Barru', 
    'Kabupaten Bone', 
    'Kabupaten Bulukumba', 
    'Kabupaten Enrekang', 
    'Kabupaten Gowa', 
    'Kabupaten Jeneponto', 
    'Kabupaten Kepulauan Selayar', 
    'Kabupaten Luwu', 
    'Kabupaten Luwu Timur', 
    'Kabupaten Luwu Utara', 
    'Kabupaten Maros', 
    'Kabupaten Pangkajene dan Kepulauan', 
    'Kabupaten Pinrang', 
    'Kabupaten Sidenreng Rappang', 
    'Kabupaten Sinjai', 
    'Kabupaten Soppeng', 
    'Kabupaten Takalar', 
    'Kabupaten Tana Toraja', 
    'Kabupaten Toraja Utara', 
    'Kabupaten Wajo', 
    'Kota Makassar', 
    'Kota Palopo', 
    'Kota Parepare'],

    //SULAWESI TENGGARA
    'southEastSulawesi': ['Kabupaten Bombana', 
    'Kabupaten Buton', 
    'Kabupaten Buton Selatan', 
    'Kabupaten Buton Tengah', 
    'Kabupaten Buton Utara', 
    'Kabupaten Kolaka', 
    'Kabupaten Kolaka Timur', 
    'Kabupaten Kolaka Utara', 
    'Kabupaten Konawe', 
    'Kabupaten Konawe Kepulauan', 
    'Kabupaten Konawe Selatan', 
    'Kabupaten Konawe Utara', 
    'Kabupaten Muna', 
    'Kabupaten Muna Barat', 
    'Kabupaten Wakatobi', 
    'Kota Baubau', 
    'Kota Kendari'
    ],

    //SULAWESI BARAT
    'westSulawesi': ['Kabupaten Majene', 
    'Kabupaten Mamasa', 
    'Kabupaten Mamuju', 
    'Kabupaten Mamuju Tengah', 
    'Kabupaten Pasangkayu', 
    'Kabupaten Polewali Mandar'],

    //GORONTALO
    'gorontalo': ['Kabupaten Boalemo', 
    'Kabupaten Bone Bolango', 
    'Kabupaten Gorontalo', 
    'Kabupaten Gorontalo Utara', 
    'Kabupaten Pohuwato', 
    'Kota Gorontalo'],

    //MALUKU
    'maluku': ['Kabupaten Buru', 
    'Kabupaten Buru Selatan', 
    'Kabupaten Kepulauan Aru', 
    'Kabupaten Kepulauan Tanimbar', 
    'Kabupaten Maluku Barat Daya', 
    'Kabupaten Maluku Tengah', 
    'Kabupaten Maluku Tenggara', 
    'Kabupaten Seram Bagian Barat', 
    'Kabupaten Seram Bagian Timur', 
    'Kota Ambon', 
    'Kota Tual'],

    //MALUKU UTARA
    'northMaluku': ['Kabupaten Halmahera Barat', 
    'Kabupaten Halmahera Tengah', 
    'Kabupaten Halmahera Timur', 
    'Kabupaten Halmahera Selatan', 
    'Kabupaten Halmahera Utara', 
    'Kabupaten Kepulauan Sula', 
    'Kabupaten Pulau Morotai', 
    'Kabupaten Pulau Taliabu', 
    'Kota Ternate', 
    'Kota Tidore Kepulauan'],

    //PAPUA
    'papua': ['Kabupaten Asmat', 
    'Kabupaten Biak Numfor', 
    'Kabupaten Boven Digoel', 
    'Kabupaten Deiyai', 
    'Kabupaten Dogiyai', 
    'Kabupaten Intan Jaya', 
    'Kabupaten Jayapura', 
    'Kabupaten Jayawijaya', 
    'Kabupaten Keerom', 
    'Kabupaten Kepulauan Yapen', 
    'Kabupaten Lanny Jaya', 
    'Kabupaten Mamberamo Raya', 
    'Kabupaten Mamberamo Tengah', 
    'Kabupaten Mappi', 
    'Kabupaten Merauke', 
    'Kabupaten Mimika', 
    'Kabupaten Nabire', 
    'Kabupaten Nduga', 
    'Kabupaten Paniai', 
    'Kabupaten Pegunungan Bintang', 
    'Kabupaten Puncak', 
    'Kabupaten Puncak Jaya', 
    'Kabupaten Sarmi', 
    'Kabupaten Supiori', 
    'Kabupaten Tolikara', 
    'Kabupaten Waropen', 
    'Kabupaten Yahukimo', 
    'Kabupaten Yalimo', 
    'Kota Jayapura'],

    //PAPUA BARAT
    'westPapua': ['Kabupaten Fakfak', 
    'Kabupaten Kaimana', 
    'Kabupaten Manokwari', 
    'Kabupaten Manokwari Selatan', 
    'Kabupaten Maybrat', 
    'Kabupaten Pegunungan Arfak', 
    'Kabupaten Raja Ampat', 
    'Kabupaten Sorong', 
    'Kabupaten Sorong Selatan', 
    'Kabupaten Tambrauw', 
    'Kabupaten Teluk Bintuni', 
    'Kabupaten Teluk Wondama', 
    'Kota Sorong'],

    //LAINNYA/OTHER
    'Other': ['-'],
};

// When an option is changed, search the above for matching choices
$('#province').on('change', function() {
   // Set selected option as variable
   var provValue = $(this).val();

   // Empty the target field
   $('#city').empty();
   
   // For each choice in city
   for (i = 0; i < optCity[provValue].length; i++) {
      // Output choice in the target field
      $('#city').append("<option value='" + optCity[provValue][i] + "'>" + optCity[provValue][i] + "</option>");
   }
});

//PROGRAMS AND SCHEDULE FUNCTION
// Map schedule choices
var optSchedule = {
   'English Only': ['Monday and Wednesday, 09.00-10.30', 'Monday and Wednesday, 19.00-20.30'],
   'English and Mathematics': ['Tuesday and Thursday, 09.00-10.30', 'Monday and Thursday, 19.00-20.30'],
   'Cram School': ['Friday and Saturday, 09.00-10.30', 'Friday and Saturday, 19.00-20.30'],
   'TOEFL Preparation': ['Monday and Wednesday, 13.00-14.30', 'Monday and Wednesday, 17.30-19.00'],
   'TOEIC Preparation': ['Tuesday and Thursday, 13.00-14.30', 'Tuesday and Thursday, 17.30-19.00'],
   'IELTS Preparation': ['Friday and Saturday, 13.00-14.30', 'Friday and Saturday, 17.30-19.00'],
   'In-company Training': ['Monday and Wednesday, 14.30-16.00', 'Monday and Wednesday, 16.00-17.30'],
   'English Conversation Training': ['Tuesday and Thursday, 14.30-16.00', 'Tuesday and Thursday, 16.00-17.30'],
   'Private Class': ['Friday and Saturday, 14.30-16.00', 'Friday and Saturday, 16.00-17.30'],
};

// When an option is changed, search the above for matching choices
$('#program').on('change', function() {
   // Set selected option as variable
   var scheduleValue = $(this).val();

   // Empty the target field
   $('#schedule').empty();
   
   // For each choice in city
   for (i = 0; i < optSchedule[scheduleValue].length; i++) {
      // Output choice in the target field
      $('#schedule').append("<option value='" + optSchedule[scheduleValue][i] + "'>" + optSchedule[scheduleValue][i] + "</option>");
   }
});

(function(){
    var clack = function(e){
        
        // IE is whack, apparently
        var e = e || window.event;
        if( e.srcElement ) {
            e.target = e.srcElement;
        };
        
        var divs = document.getElementById("formContainer").childNodes;
        for (var i = 0; i < divs.length; i++){
            if (divs[i].firstChild !== null) {
                divs[i].style.display = "none";
            }
        }
        document.getElementById(e.target.getAttribute("data-container")).style.display = "block";
        var links = document.getElementById("tab-nav").childNodes;
        for (var j = 0; j < links.length; j++) {
            if (links[j].firstChild !== null) {
                links[j].className = "col-6 py-3 nav-link link-dark";
            }
        }
        e.target.className = "selected col-6 py-3";
    };

    var links = document.getElementById("tab-nav").childNodes;
    for (var i = 0; i < links.length; i++) {
        if (links[i].firstChild !== null) {
            links[i].onclick = clack;
        }
    }
})();