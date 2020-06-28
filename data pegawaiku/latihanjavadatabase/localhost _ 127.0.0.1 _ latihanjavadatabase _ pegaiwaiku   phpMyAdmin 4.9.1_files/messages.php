var PMA_messages = new Array();
PMA_messages['strConfirm'] = "Konfirmasi";
PMA_messages['strDoYouReally'] = "Anda yakin akan menjalankan \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "Anda akan MENGHANCURKAN sebuah database lengkap!";
PMA_messages['strDatabaseRenameToSameName'] = "Tidak bisa mengubah nama database ke nama yang sama. Gunakan nama lain dan coba lagi";
PMA_messages['strDropTableStrongWarning'] = "Anda akan MENGHANCURKAN sebuah tabel lengkap!";
PMA_messages['strTruncateTableStrongWarning'] = "Anda akan MENGOSONGKAN sebuah tabel lengkap!";
PMA_messages['strDeleteTrackingData'] = "Hapus data pelacakan tabel ini?";
PMA_messages['strDeleteTrackingDataMultiple'] = "Hapus data pelacakan tabel ini?";
PMA_messages['strDeleteTrackingVersion'] = "Hapus data pelacakan versi ini?";
PMA_messages['strDeleteTrackingVersionMultiple'] = "Hapus data pelacakan versi ini?";
PMA_messages['strDeletingTrackingEntry'] = "Hapus entri dari laporan pelacakan?";
PMA_messages['strDeletingTrackingData'] = "Menghapus data pelacakan";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Menghapus Kunci Primer/Indeks";
PMA_messages['strDroppingForeignKey'] = "Penghapusan Foreign Key.";
PMA_messages['strOperationTakesLongTime'] = "Operasi ini bisa makan waktu lama. Tetap lanjutkan?";
PMA_messages['strDropUserGroupWarning'] = "Anda yakin akan menghapus grup pengguna \"%s\"?";
PMA_messages['strConfirmDeleteQBESearch'] = "Anda yakin ingin menghapus pencarian \"%s\"?";
PMA_messages['strConfirmNavigation'] = "Anda punya perubahan yang belum disimpan; Anda yakin hendak meninggalkan halaman ini?";
PMA_messages['strConfirmRowChange'] = "Kamu mencoba mengurangi jumlah baris, tapi kamu telah memasukkan data di salah satu baris yang mau kamu hapus kalau lanjut nanti datanya hilang. Tetap lanjut?";
PMA_messages['strDropUserWarning'] = "Anda yakin akan menghapus pengguna yang dipilih?";
PMA_messages['strDeleteCentralColumnWarning'] = "Anda yakin hendak menghapus kolom utama ini?";
PMA_messages['strDropRTEitems'] = "Anda yakin ingin menghapus item terpilih?";
PMA_messages['strDropPartitionWarning'] = "Anda yakin akan melakukan DROP partisi terpilih? Ini juga akan melakukan fungsi DELETE data yang berelasi pada partisi terpilih!";
PMA_messages['strTruncatePartitionWarning'] = "Apakah anda yakin melakukan TRUNCATE pada partisi terpilih?";
PMA_messages['strRemovePartitioningWarning'] = "Anda yakin ingin menghapus partisi?";
PMA_messages['strResetSlaveWarning'] = "Apakah Anda yakin akan melakukan RESET SLAVE?";
PMA_messages['strChangeColumnCollation'] = "Operasi ini akan mencoba untuk mengkonversi data Anda pada collation baru. Dalam kasus yang jarang terjadi, terutama di mana karakter tidak ada dalam collation baru, proses ini bisa memunculkan data yang salah di collation yang baru; dalam hal ini kami sarankan anda untuk mengembalikannya ke collation yang baru dan mengikuti petunjuk pada <a href=\"%s\" target=\"garbled_data_wiki\">Data yang kacau</a>.<br/><br/>Apakah Anda yakin Anda ingin mengubah pemeriksaan dan mengkonversi data?";
PMA_messages['strChangeAllColumnCollationsWarning'] = "Melalui operasi ini, MySQL mencoba memetakan nilai data dengan teliti. Jika set karakter tidak kompatibel, mungkin ada kehilangan data dan kehilangan data ini mungkin <b>TIDAK</b> dapat dipulihkan hanya dengan mengubah kembali kolom pemeriksaan. <b>Untuk mengkonversi data yang ada, disarankan untuk menggunakan kolom fitur editing (\"Ubah\" Link) di halaman struktur tabel. </b><br/><br/>Apakah Anda yakin ingin mengubah semua kolom pengumpulan dan mengkonversi data?";
PMA_messages['strSaveAndClose'] = "Simpan & Tutup";
PMA_messages['strReset'] = "Reset";
PMA_messages['strResetAll'] = "Ulangi Semua";
PMA_messages['strFormEmpty'] = "Data dalam form kurang !";
PMA_messages['strRadioUnchecked'] = "Pilih salah satu dari opsi!";
PMA_messages['strEnterValidNumber'] = "Tolong masukkan angka yang valid!";
PMA_messages['strEnterValidLength'] = "Masukan nilai panjang yang valid!";
PMA_messages['strAddIndex'] = "Tambahkan indeks";
PMA_messages['strEditIndex'] = "ubah Indeks";
PMA_messages['strAddToIndex'] = "Tambahkan %s kolom ke index";
PMA_messages['strCreateSingleColumnIndex'] = "Buat index kolom-tunggal";
PMA_messages['strCreateCompositeIndex'] = "Buat index gabungan";
PMA_messages['strCompositeWith'] = "Gabung dengan:";
PMA_messages['strMissingColumn'] = "Pilih kolom untuk di index.";
PMA_messages['strPreviewSQL'] = "Pratinjau SQL";
PMA_messages['strSimulateDML'] = "Simulasikan query";
PMA_messages['strMatchedRows'] = "Baris yang cocok:";
PMA_messages['strSQLQuery'] = "Query SQL:";
PMA_messages['strYValues'] = "Nilai Y";
PMA_messages['strEmptyQuery'] = "Masukkan kueri SQL terlebih dahulu.";
PMA_messages['strHostEmpty'] = "Nama inang kosong!";
PMA_messages['strUserEmpty'] = "Nama pengguna kosong!";
PMA_messages['strPasswordEmpty'] = "Kata sandi kosong!";
PMA_messages['strPasswordNotSame'] = "Kata sandi tidak sama!";
PMA_messages['strRemovingSelectedUsers'] = "Hapus pengguna yang dipilih";
PMA_messages['strClose'] = "Tutup";
PMA_messages['strTemplateCreated'] = "Template telah dibuat.";
PMA_messages['strTemplateLoaded'] = "Template telah dimuat.";
PMA_messages['strTemplateUpdated'] = "Template telah diperbarui.";
PMA_messages['strTemplateDeleted'] = "Template telah dihapus.";
PMA_messages['strOther'] = "Lainnya";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Koneksi / Proses";
PMA_messages['strIncompatibleMonitorConfig'] = "Konfigurasi monitor lokal tidak kompatibel!";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "Konfigurasi pengaturan bagan dalam penyimpanan lokal peramban Anda tidak lagi kompatibel dengan versi baru dialog monitor. Sangat mungkin konfigurasi Anda saat ini tidak lagi bekerja. Harap reset konfigurasi menjadi bawaan pada menu <i>Pengaturan</i>.";
PMA_messages['strQueryCacheEfficiency'] = "Efisiensi singgahan kueri";
PMA_messages['strQueryCacheUsage'] = "Pemakaian singgahan kueri";
PMA_messages['strQueryCacheUsed'] = "Singgahan kueri terpakai";
PMA_messages['strSystemCPUUsage'] = "Penggunaan CPU sistem";
PMA_messages['strSystemMemory'] = "Memori sistem";
PMA_messages['strSystemSwap'] = "Menukar sistem";
PMA_messages['strAverageLoad'] = "Beban rata-rata";
PMA_messages['strTotalMemory'] = "Memori total";
PMA_messages['strCachedMemory'] = "Memori singgahan";
PMA_messages['strBufferedMemory'] = "Memori tersangga";
PMA_messages['strFreeMemory'] = "Memori bebas";
PMA_messages['strUsedMemory'] = "Memori terpakai";
PMA_messages['strTotalSwap'] = "Total swap";
PMA_messages['strCachedSwap'] = "Singgahan swap";
PMA_messages['strUsedSwap'] = "Swap terpakai";
PMA_messages['strFreeSwap'] = "Swap bebas";
PMA_messages['strBytesSent'] = "Bita dikirim";
PMA_messages['strBytesReceived'] = "Bita diterima";
PMA_messages['strConnections'] = "Koneksi";
PMA_messages['strProcesses'] = "Proses Aktif";
PMA_messages['strB'] = "B";
PMA_messages['strKiB'] = "KB";
PMA_messages['strMiB'] = "MB";
PMA_messages['strGiB'] = "GB";
PMA_messages['strTiB'] = "TB";
PMA_messages['strPiB'] = "PB";
PMA_messages['strEiB'] = "EB";
PMA_messages['strNTables'] = "%d tabel";
PMA_messages['strQuestions'] = "Perintah";
PMA_messages['strTraffic'] = "Lalu Lintas";
PMA_messages['strSettings'] = "Pengaturan";
PMA_messages['strAddChart'] = "Tambahkan bagan pada grid";
PMA_messages['strAddOneSeriesWarning'] = "Harap tambahkan paling tidak satu variabel ke dalam seri!";
PMA_messages['strNone'] = "Tidak ada";
PMA_messages['strResumeMonitor'] = "Lanjutkan pemantauan";
PMA_messages['strPauseMonitor'] = "Jeda pemantauan";
PMA_messages['strStartRefresh'] = "Mulai penyegaran otomatis";
PMA_messages['strStopRefresh'] = "Hentikan Penyegaran Otomatis";
PMA_messages['strBothLogOn'] = "general_log dan slow_query_log diaktifkan.";
PMA_messages['strGenLogOn'] = "general_log diaktifkan.";
PMA_messages['strSlowLogOn'] = "slow_query_log diaktifkan.";
PMA_messages['strBothLogOff'] = "slow_query_log dan general_log dinonaktifkan.";
PMA_messages['strLogOutNotTable'] = "log_output tidak disetel menjadi TABLE.";
PMA_messages['strLogOutIsTable'] = "log_output disetel menjadi TABLE.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log diaktifkan, tetapi server hanya mencatat kueri yang lebih lama dari %d detil. Disarankan untuk menyetel long_query_time 0-2 detik, tergantung sistem Anda.";
PMA_messages['strLongQueryTimeSet'] = "long_query_time disetel menjadi %d detik.";
PMA_messages['strSettingsAppliedGlobal'] = "Pengaturan berikut akan diterapkan secara global dan direset menjadi bawaan sewaktu server dijalankan ulang:";
PMA_messages['strSetLogOutput'] = "Tetapkan log_output ke %s";
PMA_messages['strEnableVar'] = "Aktifkan %s";
PMA_messages['strDisableVar'] = "Nonaktifkan %s";
PMA_messages['setSetLongQueryTime'] = "Setel long_query_time menjadi %d detik.";
PMA_messages['strNoSuperUser'] = "Anda tidak dapat mengubah variabel tersebut. Harap masuk sebagai root atau hubungi administrator basis data Anda.";
PMA_messages['strChangeSettings'] = "Ubah pengaturan";
PMA_messages['strCurrentSettings'] = "Pengaturan saat ini";
PMA_messages['strChartTitle'] = "Judul bagan";
PMA_messages['strDifferential'] = "Diferensial";
PMA_messages['strDividedBy'] = "Dibagi oleh %s";
PMA_messages['strUnit'] = "Unit";
PMA_messages['strFromSlowLog'] = "Dari log lambat";
PMA_messages['strFromGeneralLog'] = "Dari log umum";
PMA_messages['strServerLogError'] = "Nama database tidak diketahui untuk query ini dalam log server.";
PMA_messages['strAnalysingLogsTitle'] = "Menganalisis log";
PMA_messages['strAnalysingLogs'] = "Menganalisis & memuat log. Mungkin perlu waktu.";
PMA_messages['strCancelRequest'] = "Permintaan pembatalan";
PMA_messages['strCountColumnExplanation'] = "Kolom ini menunjukkan jumlah kueri identik yang dikelompokkan bersama. Namun, hanya kueri SQL yang digunakan sebagai kriteria pengelompokan. Atribut kueri lain, seperti waktu mulai, dapat berbeda.";
PMA_messages['strMoreCountColumnExplanation'] = "Sejak pengelompokan query INSERT telah dipilih, INSERT query ke dalam tabel yang sama juga sedang dikelompokkan bersama, mengabaikan data dimasukkan.";
PMA_messages['strLogDataLoaded'] = "Data log dimuat. Query dieksekusi dalam rentang waktu ini:";
PMA_messages['strJumpToTable'] = "Langsung ke tabel Log";
PMA_messages['strNoDataFoundTitle'] = "Data tidak ditemukan";
PMA_messages['strNoDataFound'] = "Log dianalisis, tetapi tidak ada data ditemukan dalam rentang waktu ini.";
PMA_messages['strAnalyzing'] = "Menganalisis…";
PMA_messages['strExplainOutput'] = "Jelaskan hasil";
PMA_messages['strStatus'] = "Status";
PMA_messages['strTime'] = "Waktu";
PMA_messages['strTotalTime'] = "Total waktu:";
PMA_messages['strProfilingResults'] = "Profil Hasil";
PMA_messages['strTable'] = "Tabel";
PMA_messages['strChart'] = "Bagan";
PMA_messages['strAliasDatabase'] = "Basis data";
PMA_messages['strAliasTable'] = "Tabel";
PMA_messages['strAliasColumn'] = "Kolom";
PMA_messages['strFiltersForLogTable'] = "Opsi filter tabel log";
PMA_messages['strFilter'] = "Filter";
PMA_messages['strFilterByWordRegexp'] = "Saring query berdasarkan kata/regexp:";
PMA_messages['strIgnoreWhereAndGroup'] = "Pengelompokan queri, abakan variabel data dalan klausa WHERE";
PMA_messages['strSumRows'] = "Jumlah baris kelompok:";
PMA_messages['strTotal'] = "Total:";
PMA_messages['strLoadingLogs'] = "Memuat log";
PMA_messages['strRefreshFailed'] = "Penyegaran layar gagal";
PMA_messages['strInvalidResponseExplanation'] = "Ketika meminta data grafik baru server melaporkan respon tidak sah. Hal ini kemungkinan besar karena sesi Anda berakhir. Muat ulang halaman dan masukkan ulang kredensial Anda akan membantu.";
PMA_messages['strReloadPage'] = "Muat ulang halaman";
PMA_messages['strAffectedRows'] = "Baris yang terpengaruh:";
PMA_messages['strFailedParsingConfig'] = "Gagal mengurai berkas config.Ini mungkin kesalahan kode JSON.";
PMA_messages['strFailedBuildingGrid'] = "Gagal membangun Grafik kisi dengan mengimport config. Mengembalikan ke Setelan baku…";
PMA_messages['strImport'] = "Impor";
PMA_messages['strImportDialogTitle'] = "Impor konfigurasi monitor";
PMA_messages['strImportDialogMessage'] = "Silahkan pilih berkas yang ingin anda impor.";
PMA_messages['strNoImportFile'] = "Tidak ada berkas tersedia untuk diimport!";
PMA_messages['strAnalyzeQuery'] = "Analisis Kueri";
PMA_messages['strAdvisorSystem'] = "Sistem penasihat";
PMA_messages['strPerformanceIssues'] = "Isu kinerja yang mungkin";
PMA_messages['strIssuse'] = "Isu";
PMA_messages['strRecommendation'] = "Rekomendasi";
PMA_messages['strRuleDetails'] = "Detail aturan";
PMA_messages['strJustification'] = "Justifikasi";
PMA_messages['strFormula'] = "Variabel / formula terpakai";
PMA_messages['strTest'] = "Uji";
PMA_messages['strFormatting'] = "Memformat SQL…";
PMA_messages['strNoParam'] = "Tidak ada parameter ditemukan!";
PMA_messages['strGo'] = "Kirim";
PMA_messages['strCancel'] = "Batal";
PMA_messages['strPageSettings'] = "Pengaturan Terkait dengan Halaman";
PMA_messages['strApply'] = "Terapkan";
PMA_messages['strLoading'] = "Memproses…";
PMA_messages['strAbortedRequest'] = "Permintaan Dibatalkan!";
PMA_messages['strProcessingRequest'] = "Memproses Permintaan";
PMA_messages['strRequestFailed'] = "Permintaan gagal!!";
PMA_messages['strErrorProcessingRequest'] = "Kesalahan dalam memproses permintaan";
PMA_messages['strErrorCode'] = "Code Kesalahan: %s";
PMA_messages['strErrorText'] = "Pesan Kesalahan: %s";
PMA_messages['strErrorConnection'] = "Tampaknya koneksi ke server telah terputus. Harap periksa koneksi jaringan dan status server Anda.";
PMA_messages['strNoDatabasesSelected'] = "Basis data belum dipilih.";
PMA_messages['strNoAccountSelected'] = "Tidak ada akun yang dipilih.";
PMA_messages['strDroppingColumn'] = "Membuang Kolom";
PMA_messages['strAddingPrimaryKey'] = "Menambahkan kunci primer";
PMA_messages['strOK'] = "Oke";
PMA_messages['strDismiss'] = "Klik untuk menyingkirkan pemberitahuan";
PMA_messages['strRenamingDatabases'] = "Mengubah nama database";
PMA_messages['strCopyingDatabase'] = "Menyalin database";
PMA_messages['strChangingCharset'] = "Mengganti Set Karakter";
PMA_messages['strNo'] = "Tidak";
PMA_messages['strForeignKeyCheck'] = "Perbolehkan cek forign key";
PMA_messages['strErrorRealRowCount'] = "Gagal mengambil jumlah baris sebenarnya.";
PMA_messages['strSearching'] = "Pencarian";
PMA_messages['strHideSearchResults'] = "Sembunyikan hasil pencarian";
PMA_messages['strShowSearchResults'] = "Tampilkan hasil pencarian";
PMA_messages['strBrowsing'] = "Menjelajahi";
PMA_messages['strDeleting'] = "Menghapus";
PMA_messages['strConfirmDeleteResults'] = "Hapus yang cocok untuk %s tabel?";
PMA_messages['MissingReturn'] = "Definisi fungsi disimpan harus mengandung pernyataan RETURN!";
PMA_messages['strExport'] = "Ekspor";
PMA_messages['NoExportable'] = "Tidak ada rutin yang dapat diekspor. Hak akses yang diperlukan mungkin kurang.";
PMA_messages['enum_editor'] = "Editor ENUM/SET";
PMA_messages['enum_columnVals'] = "Nilai untuk kolom %s";
PMA_messages['enum_newColumnVals'] = "Nilai untuk kolom baru";
PMA_messages['enum_hint'] = "Masukkan setiap nilai dalam kolom terpisah.";
PMA_messages['enum_addValue'] = "Tambahkan nilai %d";
PMA_messages['strImportCSV'] = "Catatan: Jika berkas mengandung banyak tabel, mereka akan di gabungkan menjadi satu.";
PMA_messages['strHideQueryBox'] = "Sembunyikan kotak kueri";
PMA_messages['strShowQueryBox'] = "Tampilkan kotak kueri";
PMA_messages['strEdit'] = "Ubah";
PMA_messages['strDelete'] = "Hapus";
PMA_messages['strNotValidRowNumber'] = "%d bukanlah nomor baris yang berlaku.";
PMA_messages['strBrowseForeignValues'] = "Menjelajahi nilai luar";
PMA_messages['strNoAutoSavedQuery'] = "jangan otomatis simpan kueri";
PMA_messages['strBookmarkVariable'] = "Variabel %d:";
PMA_messages['pickColumn'] = "Pilih";
PMA_messages['pickColumnTitle'] = "Pilih Kolom";
PMA_messages['searchList'] = "Cari daftar ini";
PMA_messages['strEmptyCentralList'] = "Tidak ditemukan kolom pada daftar. Pastikan daftar kolom untuk database %s memiliki beberapa kolom yang tidak tertampilkan pada tabel saat ini.";
PMA_messages['seeMore'] = "Lebih banyak";
PMA_messages['confirmTitle'] = "Anda yakin?";
PMA_messages['makeConsistentMessage'] = "Tindakan ini mungkin mengubah beberapa definisi kolom. <br/> Anda yakin ingin melanjutkan?";
PMA_messages['strContinue'] = "Lanjutkan";
PMA_messages['strAddPrimaryKey'] = "Tambahkan kunci primer";
PMA_messages['strPrimaryKeyAdded'] = "Kunci primer telah ditambahkan.";
PMA_messages['strToNextStep'] = "Tunggu sebentar yach…";
PMA_messages['strFinishMsg'] = "Langkah pertama normalisasi selesai untuk tabel \'%s\'.";
PMA_messages['strEndStep'] = "Langkah terakhir";
PMA_messages['str2NFNormalization'] = "Langkah kedua normalisasi (2NF)";
PMA_messages['strDone'] = "Selesai";
PMA_messages['strConfirmPd'] = "Konfirmasi dependensi parsial";
PMA_messages['strSelectedPd'] = "Dependensi yang dipilih adalah:";
PMA_messages['strPdHintNote'] = "Catatan: a, b -> d, f menyiratkan bahwa nilai gabungan antara kolom a dan b dapat menentukan nilai dari kolom d dan kolom f.";
PMA_messages['strNoPdSelected'] = "Tidak ada dependensi parsial yang dipilih!";
PMA_messages['strBack'] = "Kembali";
PMA_messages['strShowPossiblePd'] = "Tunjukkan dependensi parsial yang ada pada data di dalam tabel";
PMA_messages['strHidePd'] = "Sembunykan daftar dependensi parsial";
PMA_messages['strWaitForPd'] = "Santai! Mungkin diperlukan beberapa detik tergantung pada ukuran data dan jumlah kolom tabel.";
PMA_messages['strStep'] = "Langkah";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>Tindakan berikut akan dilakukan:</b><li>DROP kolom %s dari tabel %s</li><li>Buat tabel</li>";
PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
PMA_messages['str3NFNormalization'] = "Tahap ketiga normalisasi (3NF)";
PMA_messages['strConfirmTd'] = "Konfirmasi dependensi transitif";
PMA_messages['strSelectedTd'] = "Dependensi yang dipilih adalah sebagai berikut:";
PMA_messages['strNoTdSelected'] = "Dependensi belum dipilih!";
PMA_messages['strSave'] = "Simpan";
PMA_messages['strHideSearchCriteria'] = "Sembunyikan kriteria pencarian";
PMA_messages['strShowSearchCriteria'] = "Tampilkan kriteria pencarian";
PMA_messages['strRangeSearch'] = "Jarak pencarian";
PMA_messages['strColumnMax'] = "Jumlah kolom maksimal:";
PMA_messages['strColumnMin'] = "Jumlah kolom minimal:";
PMA_messages['strMinValue'] = "Nilai minimal:";
PMA_messages['strMaxValue'] = "Nilai maksimum:";
PMA_messages['strHideFindNReplaceCriteria'] = "Sembunyikan kriteria pencarian dan penggantian";
PMA_messages['strShowFindNReplaceCriteria'] = "Tampilkan kriteria pencarian dan penggantian";
PMA_messages['strDisplayHelp'] = "<ul><li>Setiap titik mewakili sebaris data.</li><li>Melayang di atas titik akan menunjukkan labelnya.</li><li>Untuk memperbesar, pilih bagian dari plot dengan mouse.</li><li>Klik link reset Zoom untuk kembali ke keadaan semula.</li><li>Klik titik data untuk melihat dan mungkin mengedit baris data.</li><li>Plot dapat diubah ukurannya dengan menyeretnya di sepanjang sudut kanan bawah.</li></ul>";
PMA_messages['strHelpTitle'] = "Zoom search instructions";
PMA_messages['strInputNull'] = "<strong>Pilih dua kolom</strong>";
PMA_messages['strSameInputs'] = "<strong>Pilih dua kolom yang berbeda</strong>";
PMA_messages['strDataPointContent'] = "Isi titk data";
PMA_messages['strIgnore'] = "Abaikan";
PMA_messages['strCopy'] = "Salin";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Titik";
PMA_messages['strPointN'] = "Poin %d";
PMA_messages['strLineString'] = "Segmen garis";
PMA_messages['strPolygon'] = "Poligon";
PMA_messages['strGeometry'] = "Geometri";
PMA_messages['strInnerRing'] = "Lingkar dalam";
PMA_messages['strOuterRing'] = "Lingkar luar";
PMA_messages['strAddPoint'] = "Tambahkan poin";
PMA_messages['strAddInnerRing'] = "Tambahkan lingkar dalam";
PMA_messages['strYes'] = "Ya";
PMA_messages['strCopyEncryptionKey'] = "Apakah anda yakin untuk menyalin kunci enskripsi?";
PMA_messages['strEncryptionKey'] = "Kunci Enskripsi";
PMA_messages['strMysqlAllowedValuesTipTime'] = "MySQL menerima nilai tambahan yang tidak dapat terpilih oleh slider; masukkan nilai-nilai tersebut secara langsung jika diinginkan";
PMA_messages['strMysqlAllowedValuesTipDate'] = "MySQL menerima nilai tambahan yang tidak dapat terpilih oleh pemilih tanggal; masukkan nilai-nilai ini secara langsung jika diinginkan";
PMA_messages['strLockToolTip'] = "Sebagai indikasi telah ada perubaha di halaman ini; konfirmasi akan ditampilkan untuk mengabaikan perubahan";
PMA_messages['strSelectReferencedKey'] = "Pilih kunci rujukan";
PMA_messages['strSelectForeignKey'] = "Pilih Foreign Key";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Harap pilih kunci primer(primary key) atau kunci unik(unique key)!";
PMA_messages['strChangeDisplay'] = "Pilih kolom untuk ditampilkan";
PMA_messages['strLeavingDesigner'] = "Anda belum menyimpan perubahan pada susunan. Mereka akan hilang jika Anda tidak menyimpannya. Apakah Anda ingin melanjutkan?";
PMA_messages['strQueryEmpty'] = "nilai/subKueri kosong";
PMA_messages['strAddTables'] = "Tambahkan tabel dari database lainya";
PMA_messages['strPageName'] = "Nama halaman";
PMA_messages['strSavePage'] = "Simpan halaman";
PMA_messages['strSavePageAs'] = "Simpan halaman sebagai";
PMA_messages['strOpenPage'] = "Buka halaman";
PMA_messages['strDeletePage'] = "Hapus halaman";
PMA_messages['strUntitled'] = "Belum ada nama";
PMA_messages['strSelectPage'] = "Pilih halaman untuk lanjut";
PMA_messages['strEnterValidPageName'] = "Masukan halaman yang benar";
PMA_messages['strLeavingPage'] = "Apakah Anda ingin menyimpan perubahan ke halaman ini?";
PMA_messages['strSuccessfulPageDelete'] = "Halaman berhasil dihapus";
PMA_messages['strExportRelationalSchema'] = "Ekspor skema relasi";
PMA_messages['strModificationSaved'] = "Modifikasi telah disimpan";
PMA_messages['strAddOption'] = "Tambahkan opsi untuk kolom \"%s\".";
PMA_messages['strObjectsCreated'] = "%d objek dibuat.";
PMA_messages['strSubmit'] = "Kirim";
PMA_messages['strCellEditHint'] = "Tekan escape untuk membatalkan perubahan.";
PMA_messages['strSaveCellWarning'] = "Anda telah mengedit beberapa data dan belum di simpan. Apakah anda yakin akan meninggalkan halaman ini sebelum menyimpan data?";
PMA_messages['strColOrderHint'] = "Seret untuk menyusun ulang.";
PMA_messages['strSortHint'] = "KIik untuk menyortir hasil dari kolom ini.";
PMA_messages['strMultiSortHint'] = "Shift+Klik untuk menambahkan kolom ini ke ORDER BY clause atau pindah ke ASC/DESC.<br />- Kontrol+Klik atau Alt+Click (Mac: Shift+Option+Click) untuk menghapus kolom dari ORDER BY clause";
PMA_messages['strColMarkHint'] = "Klik untuk menambahkan/menghapus tanda.";
PMA_messages['strColNameCopyHint'] = "Klik dua kali untuk menyalin nama kolom.";
PMA_messages['strColVisibHint'] = "Klik tanda panah ke bawah<br />untuk beralih visibilitas kolom.";
PMA_messages['strShowAllCol'] = "Tampilkan semua";
PMA_messages['strAlertNonUnique'] = "Tabel ini tidak berisi kolom yang unik. Fitur yang berhubungan dengan edit grid, kotak centang, Edit, Copy dan Delete link mungkin tidak bekerja setelah disimpan.";
PMA_messages['strEnterValidHex'] = "Masukkan string yang benar. Karakter yang benar adalah 0-9, A-F.";
PMA_messages['strShowAllRowsWarning'] = "Apakah anda ingin melihat semua baris? Tabel ukuran besar bisa membuat peramban lambat.";
PMA_messages['strOriginalLength'] = "Panjang asli";
PMA_messages['dropImportMessageCancel'] = "Batal";
PMA_messages['dropImportMessageAborted'] = "Batalkan";
PMA_messages['dropImportMessageFailed'] = "Gagal";
PMA_messages['dropImportMessageSuccess'] = "Sukses";
PMA_messages['dropImportImportResultHeader'] = "Impor status";
PMA_messages['dropImportDropFiles'] = "Letakkan berkas disini";
PMA_messages['dropImportSelectDB'] = "Pilih database dulu";
PMA_messages['print'] = "Cetak";
PMA_messages['back'] = "Kembali";
PMA_messages['strGridEditFeatureHint'] = "Anda juga dapat mengedit sebagian nilai<br />dengan mengeklik langsung konten.";
PMA_messages['strGoToLink'] = "Pergi ke tautan:";
PMA_messages['strColNameCopyTitle'] = "Salin nama kolom.";
PMA_messages['strColNameCopyText'] = "Klik-kanan nama kolom untuk menyalinnya ke clipboard.";
PMA_messages['strGeneratePassword'] = "Buatkan kata sandi";
PMA_messages['strGenerate'] = "Buatkan";
PMA_messages['strChangePassword'] = "Ubah kata sandi";
PMA_messages['strMore'] = "Lainnya";
PMA_messages['strShowPanel'] = "Tampilkan panel";
PMA_messages['strHidePanel'] = "Sembunyikan panel";
PMA_messages['strUnhideNavItem'] = "Tampilkan navigasi pohon item tersembunyi.";
PMA_messages['linkWithMain'] = "Link ke panel utama";
PMA_messages['unlinkWithMain'] = "Unlink dari panel utama";
PMA_messages['strInvalidPage'] = "Halaman yang diminta tidak ditemukan di riwayat, mungkin sudah kadaluarsa.";
PMA_messages['strNewerVersion'] = "phpMyAdmin dengan versi yang lebih baru telah tersedia dan Anda disarankan untuk meng-upgrade. Versi terbaru adalah %s, dirilis pada %s.";
PMA_messages['strLatestAvailable'] = ", versi stabil terakhir:";
PMA_messages['strUpToDate'] = "Mutakhir";
PMA_messages['strCreateView'] = "Buat tampilan";
PMA_messages['strSendErrorReport'] = "Kirim laporan kesalahan";
PMA_messages['strSubmitErrorReport'] = "Kirim laporan kesalahan";
PMA_messages['strErrorOccurred'] = "Kesalhaan fatal JavaScript telah terdeteksi. Anda ingin mengirimkan laporan kesalahan?";
PMA_messages['strChangeReportSettings'] = "Ubah pengaturan pelaporan";
PMA_messages['strShowReportDetails'] = "Tampilkan detail laporan";
PMA_messages['strTimeOutError'] = "Ekspor anda tidak lengkap, karena batas waktu yang rendah di tingkat PHP!";
PMA_messages['strTooManyInputs'] = "Peringatan: formulir pada halaman ini memiliki %d bidang. Sesuai arahan, beberapa bidang mungkin dibatalkan, karena konfigurasi max_input_vars dari PHP.";
PMA_messages['phpErrorsFound'] = "<div class=\"error\">Kesalahan terdeteksi di server!<br/>Silahkan lihat di bagian bawah jendela ini.<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"Abaikan\" class=\"floatright message_errors_found\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"Abaikan\" class=\"floatright message_errors_found\"></div></div>";
PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">Kesalahan terdeteksi di server!<br/>Sesuai pengaturan Anda, mereka sedang diajukan saat ini, harap bersabar.<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
PMA_messages['strConsoleRequeryConfirm'] = "Jalankan kueri ini lagi?";
PMA_messages['strConsoleDeleteBookmarkConfirm'] = "Anda yakin akan menghapus penanda ini?";
PMA_messages['strConsoleDebugError'] = "Terjadi beberapa kesalahan saat mendapatkan info debug SQL.";
PMA_messages['strConsoleDebugSummary'] = "%s kueri tereksekusi %s kali dalam waktu %s detik.";
PMA_messages['strConsoleDebugArgsSummary'] = "%s argumen diberikan";
PMA_messages['strConsoleDebugShowArgs'] = "Perlihatkan argumen";
PMA_messages['strConsoleDebugHideArgs'] = "Sembunyikan argumen";
PMA_messages['strConsoleDebugTimeTaken'] = "Waktu yang dipakai:";
PMA_messages['strNoLocalStorage'] = "Ada masalah saat mengakses penyimpanan browser Anda, beberapa fitur mungkin tidak bekerja dengan baik. Kemungkinan besar browser Anda tidak mendukung penyimpanan, atau batas kuota telah tercapai. Pada Firefox, penyimpanan rusak juga dapat menyebabkan masalah seperti ini, membersihkan \"Data Situs Offline\" Anda mungkin bisa membantu. Dalam Safari, masalah tersebut umumnya disebabkan oleh \"Mode Browsing Privat\".";
PMA_messages['strCopyTablesTo'] = "Salin tabel ke";
PMA_messages['strAddPrefix'] = "Tambahkan prefiks tabel";
PMA_messages['strReplacePrefix'] = "Ganti tabel dengan prefiks";
PMA_messages['strCopyPrefix'] = "Salin tabel dengan prefiks";
PMA_messages['strExtrWeak'] = "Sangat sangat lemah";
PMA_messages['strVeryWeak'] = "Sangat lemah";
PMA_messages['strWeak'] = "Lemah";
PMA_messages['strGood'] = "Bagus";
PMA_messages['strStrong'] = "Kuat";
PMA_messages['strU2FTimeout'] = "Timed out waiting for security key activation.";
PMA_messages['strU2FError'] = "Gagal mengaktivasi kunci keamanan (%s).";
PMA_messages['strTableAlreadyExists'] = "Table %s already exists!";
PMA_messages['strHide'] = "Sembunyikan";
PMA_messages['strStructure'] = "Struktur";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var mysql_doc_template = './url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
var maxInputVars = 1000;
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Selesai";
$.datepicker.regional['']['prevText'] = "Sebelum";
$.datepicker.regional['']['nextText'] = "Berikutnya";
$.datepicker.regional['']['currentText'] = "Hari ini";
$.datepicker.regional['']['monthNames'] = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember",];
$.datepicker.regional['']['monthNamesShort'] = ["Jan","Feb","Mar","Apr","Bulan Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des",];
$.datepicker.regional['']['dayNames'] = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",];
$.datepicker.regional['']['dayNamesShort'] = ["Min","Sen","Sel","Rab","Kam","Jum","Sab",];
$.datepicker.regional['']['dayNamesMin'] = ["Min","Sn","Sl","Rb","Km","Jm","Sb",];
$.datepicker.regional['']['weekHeader'] = "Mingguan";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "Kosong";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Waktu";
$.timepicker.regional['']['hourText'] = "Jam";
$.timepicker.regional['']['minuteText'] = "Menit";
$.timepicker.regional['']['secondText'] = "Detik";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */

function extendingValidatorMessages() {
$.extend($.validator.messages, {
required: "Wajib diisi", remote: "Silakan perbaiki kolom ini", email: "Silakan masukkan alamat email yang valid", url: "Silakan masukkan URL yang valid", date: "Silakan masukkan tanggal yang valid", dateISO: "Silakan masukkan tanggal yang valid (ISO)", number: "Silakan masukkan angka yang valid", creditcard: "Silakan masukkan nomor kartu kredit yang valid", digits: "Silakan masukkan angka saja", equalTo: "Silakan masukkan lagi nilai yang sama", maxlength: $.validator.format("Silakan masukkan tidak lebih dari {0} karakter"), minlength: $.validator.format("Silakan masukkan setidaknya {0} karakter"), rangelength: $.validator.format("Silakan masukkan nilai panjang karakter antara {0} dan {1}"), range: $.validator.format("Silakan masukkan"), max: $.validator.format("Silakan masukkan nilai kurang dari atau sama dengan {0}"), min: $.validator.format("Silakan masukkan nilai lebih dari atau sama dengan {0}"), validationFunctionForDateTime: $.validator.format("Silakan masukkan tanggal dan jam yang valid"), validationFunctionForHex: $.validator.format("Silakan masukkan input HEX yang valid"), validationFunctionForFuns: $.validator.format("Galat")
});
} /* if ($.validator) */