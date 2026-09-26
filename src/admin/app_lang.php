<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponen';
$lang['admin_content'] = 'Konten';
$lang['admin_database_backup'] = 'Cadangan Basis Data';
$lang['admin_extensions'] = 'Ekstensi';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Bantuan';
$lang['admin_languages'] = 'Bahasa';
$lang['admin_logs'] = 'Log Sistem';
$lang['admin_media'] = 'Perpustakaan Media';
$lang['admin_modules'] = 'Modul';
$lang['admin_plugins'] = 'Plugin';
$lang['admin_reports'] = 'Log Aktivitas';
$lang['admin_settings'] = 'Pengaturan Sistem';
$lang['admin_sysinfo'] = 'Informasi Sistem';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Firewall Sistem';
$lang['admin_themes'] = 'Tema';
$lang['admin_updates'] = 'Pembaruan Sistem';
$lang['admin_users'] = 'Pengguna';
$lang['admin_view_site'] = 'Lihat Situs';
$lang['per_page'] = 'Per Halaman';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Terima kasih telah membuat dengan <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Tidak ada item aktif.} other{<b>#</b> dari <b>%s</b> item aktif.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Instalasi gagal: %s';
$lang['admin_install_location_app'] = 'Hanya aplikasi ini';
$lang['admin_install_location_core'] = 'Semua aplikasi';
$lang['admin_install_location_select'] = '&#151; Pilih lokasi &#151;';
$lang['admin_install_update_confirm'] = 'Apakah Anda yakin ingin memperbarui paket ini?';
$lang['admin_install_update_error'] = 'Gagal memperbarui paket.';
$lang['admin_install_update_skip_confirm'] = 'Apakah Anda yakin ingin mengabaikan pembaruan ini?';
$lang['admin_install_update_skip_error'] = 'Gagal mengabaikan pembaruan ini.';
$lang['admin_install_update_skip_success'] = 'Pembaruan berhasil dilewati.';
$lang['admin_install_update_success'] = 'Paket berhasil diperbarui.';
$lang['admin_install_upload_tip'] = 'Instal paket dengan mengunggah file <b>.zip</b>-nya di sini.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Tidak dapat membersihkan file cadangan lama.';
$lang['admin_database_backup_clean_success'] = '%d file cadangan dihapus. %d ruang disk dibebaskan.';
$lang['admin_database_backup_create'] = 'Buat Cadangan';
$lang['admin_database_backup_create_confirm'] = 'Anda yakin ingin membuat cadangan sekarang?';
$lang['admin_database_backup_create_error'] = 'Tidak dapat membuat file cadangan. Pastikan folder <b>%s</b> dapat ditulis.';
$lang['admin_database_backup_create_success'] = 'File cadangan basis data <b>%s</b> berhasil dibuat.';
$lang['admin_database_backup_delete_confirm'] = 'Anda yakin ingin menghapus file cadangan ini?';
$lang['admin_database_backup_delete_error'] = 'Tidak dapat menghapus file cadangan yang dipilih.';
$lang['admin_database_backup_delete_success'] = 'File cadangan berhasil dihapus.';
$lang['admin_database_backup_download_error'] = 'Tidak dapat mengunduh file cadangan yang dipilih.';
$lang['admin_database_backup_download_success'] = 'File cadangan berhasil diunduh.';
$lang['admin_database_backup_lock_confirm'] = 'Anda yakin ingin mengunci file cadangan ini?';
$lang['admin_database_backup_lock_error'] = 'Tidak dapat mengunci file cadangan yang dipilih.';
$lang['admin_database_backup_lock_success'] = 'File cadangan berhasil dikunci.';
$lang['admin_database_backup_locked_error'] = 'Tidak dapat menghapus file cadangan yang terkunci.';
$lang['admin_database_backup_missing_error'] = 'File cadangan tidak dapat ditemukan.';
$lang['admin_database_backup_unlock_confirm'] = 'Apakah Anda yakin ingin membuka kunci file cadangan ini?';
$lang['admin_database_backup_unlock_error'] = 'Tidak dapat membuka kunci file cadangan yang dipilih.';
$lang['admin_database_backup_unlock_success'] = 'File cadangan berhasil dibuka kuncinya.';
$lang['admin_database_prune'] = 'Memangkas';
$lang['admin_database_prune_confirm'] = 'Anda yakin ingin membersihkan basis data? Cadangan akan dibuat sebelum eksekusi.';
$lang['admin_database_prune_error'] = 'Tidak dapat memangkas basis data.';
$lang['admin_database_prune_next'] = 'Prune berikutnya: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Database berhasil dibersihkan.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Hapus Log';
$lang['admin_logs_delete_confirm'] = 'Anda yakin ingin menghapus file log yang dipilih?';
$lang['admin_logs_delete_error'] = 'Tidak dapat menghapus file log.';
$lang['admin_logs_delete_success'] = 'File log berhasil dihapus.';
$lang['admin_logs_error_disabled'] = 'Logging saat ini tidak diaktifkan.';
$lang['admin_logs_error_empty'] = 'Tidak ada log yang ditemukan.';
$lang['admin_logs_error_missing'] = 'Baik file log tidak dapat ditemukan, atau file tersebut kosong.';
$lang['admin_logs_tip'] = 'Pencatatan dapat dengan cepat membuat file yang sangat besar. Untuk situs langsung, pertimbangkan untuk menghapus yang lama.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Apakah Anda yakin ingin menghapus email yang dipilih?';
$lang['admin_emails_delete_error'] = 'Tidak dapat menghapus email yang dipilih.';
$lang['admin_emails_delete_success'] = 'Email yang dipilih berhasil dihapus.';
$lang['admin_emails_email_from'] = 'Dikirim dari';
$lang['admin_emails_mail_queue'] = 'Antrian Email';
$lang['admin_emails_mailer'] = 'Surat Massal';
$lang['admin_emails_search'] = 'Cari email berdasarkan subjek atau konten...';
$lang['admin_emails_send_error'] = 'Gagal memasukkan email ke antrean. Silakan coba lagi.';
$lang['admin_emails_send_none'] = 'Tidak ada pengguna yang sesuai dengan kriteria yang dipilih.';
$lang['admin_emails_send_success'] = 'Email telah dimasukkan ke antrean dan akan segera dikirim.';
$lang['admin_emails_send_to_banned'] = 'Kirim kepada pengguna yang dibanned.';
$lang['admin_emails_send_to_deleted'] = 'Kirim kepada pengguna yang dihapus.';
$lang['admin_emails_send_to_disabled'] = 'Kirim kepada pengguna yang dinonaktifkan.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Tambah Pengguna';
$lang['admin_users_all_users'] = 'Semua Pengguna';
$lang['admin_users_ban_confirm'] = 'Apakah Anda yakin ingin memblokir pengguna yang dipilih?';
$lang['admin_users_ban_error'] = 'Tidak dapat memblokir pengguna yang dipilih.';
$lang['admin_users_ban_success'] = 'Pengguna yang dipilih berhasil diblokir.';
$lang['admin_users_delete_confirm'] = 'Apakah Anda yakin ingin menghapus pengguna yang dipilih?';
$lang['admin_users_delete_error'] = 'Tidak dapat menghapus pengguna yang dipilih.';
$lang['admin_users_delete_success'] = 'Pengguna yang dipilih berhasil dihapus.';
$lang['admin_users_disable_confirm'] = 'Apakah Anda yakin ingin menonaktifkan pengguna yang dipilih?';
$lang['admin_users_disable_error'] = 'Tidak dapat menonaktifkan pengguna yang dipilih.';
$lang['admin_users_disable_success'] = 'Pengguna yang dipilih berhasil dinonaktifkan.';
$lang['admin_users_edit'] = 'Edit Pengguna';
$lang['admin_users_edit_error'] = 'Tidak dapat memperbarui pengguna.';
$lang['admin_users_edit_success'] = 'Pengguna berhasil diperbarui.';
$lang['admin_users_enable_confirm'] = 'Apakah Anda yakin ingin mengaktifkan pengguna yang dipilih?';
$lang['admin_users_enable_error'] = 'Tidak dapat mengaktifkan pengguna yang dipilih.';
$lang['admin_users_enable_success'] = 'Pengguna yang dipilih berhasil diaktifkan.';
$lang['admin_users_groups'] = 'Grup';
$lang['admin_users_lock_confirm'] = 'Anda yakin ingin mengunci pengguna yang dipilih?';
$lang['admin_users_lock_error'] = 'Tidak dapat mengunci pengguna yang dipilih.';
$lang['admin_users_lock_success'] = 'Pengguna yang dipilih berhasil dikunci.';
$lang['admin_users_logged'] = 'Pengguna yang Masuk';
$lang['admin_users_manage'] = 'Kelola Pengguna';
$lang['admin_users_remove_confirm'] = 'Apakah Anda yakin ingin menghapus secara permanen pengguna yang dipilih dan semua data mereka?';
$lang['admin_users_remove_error'] = 'Tidak dapat menghapus secara permanen pengguna yang dipilih dan semua data mereka.';
$lang['admin_users_remove_success'] = 'Pengguna yang dipilih dan semua data mereka berhasil dihapus.';
$lang['admin_users_restore_confirm'] = 'Apakah Anda yakin ingin memulihkan pengguna yang dipilih?';
$lang['admin_users_restore_error'] = 'Tidak dapat memulihkan pengguna yang dipilih.';
$lang['admin_users_restore_success'] = 'Pengguna yang dipilih berhasil dipulihkan.';
$lang['admin_users_search'] = 'Cari nama atau email...';
$lang['admin_users_unban_confirm'] = 'Apakah Anda yakin ingin membuka blokir pengguna yang dipilih?';
$lang['admin_users_unban_error'] = 'Tidak dapat membuka blokir pengguna yang dipilih.';
$lang['admin_users_unban_success'] = 'Pengguna yang dipilih berhasil dibuka blokirnya.';
$lang['admin_users_unlock_confirm'] = 'Apakah Anda yakin ingin membuka kunci pengguna yang dipilih?';
$lang['admin_users_unlock_error'] = 'Tidak dapat membuka kunci pengguna yang dipilih.';
$lang['admin_users_unlock_success'] = 'Pengguna yang dipilih berhasil dibuka kuncinya.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Hapus Log';
$lang['admin_reports_clear_confirm'] = 'Apakah Anda yakin ingin menghapus log tindakan?';
$lang['admin_reports_clear_error'] = 'Tidak dapat menghapus log tindakan.';
$lang['admin_reports_clear_success'] = 'Log tindakan berhasil dihapus.';
$lang['admin_reports_latest_actions'] = 'Tindakan Terakhir';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Anda yakin ingin menghapus file yang dipilih?';
$lang['admin_media_delete_error'] = 'Tidak dapat menghapus file.';
$lang['admin_media_delete_success'] = 'File berhasil dihapus.';
$lang['admin_media_file_delete_error'] = 'Tidak dapat menghapus file.';
$lang['admin_media_file_delete_success'] = 'File berhasil dihapus.';
$lang['admin_media_file_update_error'] = 'Tidak dapat memperbarui file.';
$lang['admin_media_file_update_success'] = 'File berhasil diperbarui.';
$lang['admin_media_search'] = 'Cari berdasarkan nama, deskripsi, atau nama file...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Tidak ada modul aktif.} other{<b>#</b> dari <b>%s</b> modul aktif.}';
$lang['admin_modules_add'] = 'Tambah Modul';
$lang['admin_modules_delete_confirm'] = 'Apakah Anda yakin ingin menghapus modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Tidak dapat menghapus modul.';
$lang['admin_modules_delete_error_active'] = 'Modul yang aktif tidak dapat dihapus.';
$lang['admin_modules_delete_success'] = 'Modul berhasil dihapus.';
$lang['admin_modules_disable_all_confirm'] = 'Apakah Anda yakin ingin menonaktifkan semua modul?';
$lang['admin_modules_disable_all_error'] = 'Tidak dapat menonaktifkan semua modul.';
$lang['admin_modules_disable_all_success'] = 'Semua modul berhasil dinonaktifkan.';
$lang['admin_modules_disable_confirm'] = 'Apakah Anda yakin ingin menonaktifkan modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Tidak dapat menonaktifkan modul.';
$lang['admin_modules_disable_success'] = 'Modul berhasil dinonaktifkan.';
$lang['admin_modules_enable_all_confirm'] = 'Apakah Anda yakin ingin mengaktifkan semua modul?';
$lang['admin_modules_enable_all_error'] = 'Tidak dapat mengaktifkan semua modul.';
$lang['admin_modules_enable_all_success'] = 'Semua modul berhasil diaktifkan.';
$lang['admin_modules_enable_confirm'] = 'Apakah Anda yakin ingin mengaktifkan modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Tidak dapat mengaktifkan modul.';
$lang['admin_modules_enable_success'] = 'Modul berhasil diaktifkan.';
$lang['admin_modules_global'] = 'Modul global (bersama)';
$lang['admin_modules_install_confirm'] = 'Apakah Anda yakin ingin menginstal modul: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Gagal menginstal modul.';
$lang['admin_modules_install_success'] = 'Modul berhasil diinstal.';
$lang['admin_modules_install_tip'] = 'Modul menambahkan fitur dan fungsionalitas baru ke situs Anda. Jelajahi modul yang tersedia di <a href="%s" target="_blank" rel="noopener">direktori modul</a> atau unggah paket <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'Apakah Anda yakin ingin memperbarui modul ini?';
$lang['admin_modules_update_error'] = 'Gagal memperbarui modul.';
$lang['admin_modules_update_success'] = 'Modul berhasil diperbarui.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Tidak ada plugin aktif.} other{<b>#</b> dari <b>%s</b> plugin aktif.}';
$lang['admin_plugins_add'] = 'Tambah Plugin';
$lang['admin_plugins_delete_confirm'] = 'Yakin ingin menghapus plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Tidak dapat menghapus plugin.';
$lang['admin_plugins_delete_error_active'] = 'Plugin yang aktif tidak dapat dihapus.';
$lang['admin_plugins_delete_success'] = 'Plugin berhasil dihapus.';
$lang['admin_plugins_disable_all_confirm'] = 'Apakah Anda yakin ingin menonaktifkan semua plugin?';
$lang['admin_plugins_disable_all_error'] = 'Tidak dapat menonaktifkan semua plugin.';
$lang['admin_plugins_disable_all_success'] = 'Semua plugin berhasil dinonaktifkan.';
$lang['admin_plugins_disable_confirm'] = 'Yakin ingin menonaktifkan plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Tidak dapat menonaktifkan plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin berhasil dinonaktifkan.';
$lang['admin_plugins_enable_all_confirm'] = 'Apakah Anda yakin ingin mengaktifkan semua plugin?';
$lang['admin_plugins_enable_all_error'] = 'Tidak dapat mengaktifkan semua plugin.';
$lang['admin_plugins_enable_all_success'] = 'Semua plugin berhasil diaktifkan.';
$lang['admin_plugins_enable_confirm'] = 'Yakin ingin mengaktifkan plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Tidak dapat mengaktifkan plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin berhasil diaktifkan.';
$lang['admin_plugins_global'] = 'Plugin global (bersama)';
$lang['admin_plugins_install_confirm'] = 'Apakah Anda yakin ingin menginstal plugin: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Gagal menginstal plugin.';
$lang['admin_plugins_install_success'] = 'Plugin berhasil diinstal.';
$lang['admin_plugins_install_tip'] = 'Plugin memperluas fitur yang ada dengan opsi atau integrasi tambahan. Instal dari <a href="%s" target="_blank" rel="noopener">direktori plugin</a> atau unguah file <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'Apakah Anda yakin ingin memperbarui plugin ini?';
$lang['admin_plugins_update_error'] = 'Gagal memperbarui plugin.';
$lang['admin_plugins_update_success'] = 'Plugin berhasil diperbarui.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Tambah Tema';
$lang['admin_themes_delete_confirm'] = 'Apakah Anda yakin ingin menghapus tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Tidak dapat menghapus tema.';
$lang['admin_themes_delete_error_active'] = 'Anda tidak dapat menghapus tema yang sedang aktif.';
$lang['admin_themes_delete_success'] = 'Tema berhasil dihapus.';
$lang['admin_themes_disable_confirm'] = 'Apakah Anda yakin ingin menonaktifkan tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Tidak dapat menonaktifkan tema.';
$lang['admin_themes_disable_error_active'] = 'Tema yang aktif tidak dapat dinonaktifkan.';
$lang['admin_themes_disable_success'] = 'Tema berhasil dinonaktifkan.';
$lang['admin_themes_enable_confirm'] = 'Apakah Anda yakin ingin mengaktifkan tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Tidak dapat mengaktifkan tema.';
$lang['admin_themes_enable_success'] = 'Tema berhasil diaktifkan.';
$lang['admin_themes_install_confirm'] = 'Apakah Anda yakin ingin menginstal tema: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Gagal menginstal tema.';
$lang['admin_themes_install_success'] = 'Tema berhasil diinstal.';
$lang['admin_themes_install_tip'] = 'Tema mengubah tampilan dan tata letak situs Anda. Pilih dari <a href="%s" target="_blank" rel="noopener">perpustakaan tema</a> atau unguah file <b>.zip</b> untuk menginstal tema Anda sendiri.';
$lang['admin_themes_none_tip'] = 'Aplikasi ini berjalan tanpa tema. Instal salah satu tema untuk menyesuaikan antarmuka publik.';
$lang['admin_themes_update_confirm'] = 'Apakah Anda yakin ingin memperbarui tema ini?';
$lang['admin_themes_update_error'] = 'Gagal memperbarui tema.';
$lang['admin_themes_update_success'] = 'Tema berhasil diperbarui.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Tidak dapat memperbarui lokasi menu.';
$lang['admin_menus_assign_success'] = 'Lokasi menu berhasil diperbarui.';
$lang['admin_menus_header'] = 'Terdapat <b>%s</b> lokasi menu tersedia.';
$lang['admin_menus_location'] = 'Lokasi';
$lang['admin_menus_locations'] = 'Lokasi Menu';
$lang['admin_menus_manage'] = 'Kelola Menu';
$lang['admin_menus_menu'] = 'Menu yang Ditugaskan';
$lang['admin_menus_none'] = '&#151; Tidak Ada &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Tambah Bahasa';
$lang['admin_languages_default_confirm'] = 'Anda yakin ingin menjadikan bahasa ini sebagai bahasa default situs?';
$lang['admin_languages_default_error'] = 'Tidak dapat mengubah bahasa default.';
$lang['admin_languages_default_error_nochange'] = 'Bahasa ini sudah menjadi default.';
$lang['admin_languages_default_success'] = 'Bahasa default berhasil diubah.';
$lang['admin_languages_delete_confirm'] = 'Apakah Anda yakin ingin menghapus bahasa: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Gagal menghapus bahasa.';
$lang['admin_languages_delete_error_active'] = 'Bahasa yang aktif tidak dapat dihapus.';
$lang['admin_languages_delete_error_default'] = 'Bahasa default tidak dapat dihapus.';
$lang['admin_languages_delete_success'] = 'Bahasa berhasil dihapus.';
$lang['admin_languages_disable_all_confirm'] = 'Apakah Anda yakin ingin menonaktifkan semua bahasa?';
$lang['admin_languages_disable_all_error'] = 'Tidak dapat menonaktifkan semua bahasa.';
$lang['admin_languages_disable_all_success'] = 'Semua bahasa berhasil dinonaktifkan.';
$lang['admin_languages_disable_confirm'] = 'Apakah Anda yakin ingin menonaktifkan bahasa: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Tidak dapat menonaktifkan bahasa.';
$lang['admin_languages_disable_error_default'] = 'Bahasa bawaan tidak dapat dinonaktifkan.';
$lang['admin_languages_disable_error_nochange'] = 'Bahasa ini sudah dinonaktifkan.';
$lang['admin_languages_disable_success'] = 'Bahasa berhasil dinonaktifkan.';
$lang['admin_languages_enable_all_confirm'] = 'Apakah Anda yakin ingin mengaktifkan semua bahasa?';
$lang['admin_languages_enable_all_error'] = 'Tidak dapat mengaktifkan semua bahasa.';
$lang['admin_languages_enable_all_success'] = 'Semua bahasa berhasil diaktifkan.';
$lang['admin_languages_enable_confirm'] = 'Apakah Anda yakin ingin mengaktifkan bahasa: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Tidak dapat mengaktifkan bahasa.';
$lang['admin_languages_enable_error_nochange'] = 'Bahasa ini sudah diaktifkan.';
$lang['admin_languages_enable_success'] = 'Bahasa berhasil diaktifkan.';
$lang['admin_languages_install_confirm'] = 'Apakah Anda yakin ingin menginstal bahasa: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Gagal menginstal bahasa.';
$lang['admin_languages_install_success'] = 'Bahasa berhasil diinstal.';
$lang['admin_languages_install_tip'] = 'Bahasa menambahkan terjemahan untuk antarmuka dan konten situs Anda. Jelajahi bahasa yang tersedia di <a href="%s" target="_blank" rel="noopener">direktori bahasa</a> atau unggah paket <b>.zip</b> untuk menginstal bahasa Anda sendiri.';
$lang['admin_languages_tip'] = 'Aktifkan, nonaktifkan, dan atur bahasa default situs. Bahasa yang diaktifkan tersedia untuk pengunjung situs.';
$lang['admin_languages_update_confirm'] = 'Apakah Anda yakin ingin memperbarui bahasa ini?';
$lang['admin_languages_update_error'] = 'Gagal memperbarui bahasa.';
$lang['admin_languages_update_success'] = 'Bahasa berhasil diperbarui.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paket sudah ada.';
$lang['package_archive_download_failed'] = 'Gagal mengunduh arsip paket.';
$lang['package_backup_create_error'] = 'Gagal membuat cadangan paket.';
$lang['package_backup_dir_failed'] = 'Gagal membuat direktori cadangan %s';
$lang['package_backup_missing'] = 'File cadangan (backup) tidak ditemukan.';
$lang['package_backup_path_error'] = 'Jalur file cadangan tidak dapat diselesaikan.';
$lang['package_backup_request_invalid'] = 'Permintaan cadangan tidak valid.';
$lang['package_backup_restore_error'] = 'Gagal memulihkan cadangan paket.';
$lang['package_catalog_type_unknown'] = 'Jenis katalog tidak diketahui.';
$lang['package_checksum_error'] = 'Verifikasi checksum paket gagal.';
$lang['package_copy_files_error'] = 'Gagal menyalin file paket ke tujuan.';
$lang['package_copy_updates_error'] = 'Gagal menyalin file pembaruan ke tujuan.';
$lang['package_dest_dir_failed'] = 'Gagal membuat direktori tujuan %s';
$lang['package_destination_error'] = 'Tujuan paket tidak dapat diselesaikan.';
$lang['package_download_dir_failed'] = 'Gagal membuat direktori unduhan %s';
$lang['package_download_empty'] = 'Unduhan paket menghasilkan respons kosong.';
$lang['package_download_request_invalid'] = 'Permintaan unduh paket tidak valid.';
$lang['package_extract_failed'] = 'Gagal mengekstrak ZIP %s';
$lang['package_invalid_lang_files'] = 'Bahasa tidak valid — file bahasa aplikasi yang diperlukan tidak ditemukan.';
$lang['package_invalid_lang_structure'] = 'Bahasa tidak valid — direktori admin dan/atau ci3 tidak ditemukan.';
$lang['package_invalid_missing_info'] = '%s tidak valid: "info.php" tidak ditemukan.';
$lang['package_invalid_module_structure'] = 'Modul tidak valid — direktori config dan/atau controllers yang diperlukan tidak ditemukan.';
$lang['package_invalid_plugin_boot'] = 'Plugin tidak valid — "boot.php" tidak ditemukan.';
$lang['package_invalid_plugin_contents'] = 'Plugin tidak valid — plugin tidak boleh berisi controller atau view.';
$lang['package_invalid_theme_boot'] = 'Tema tidak valid — "boot.php" tidak ditemukan.';
$lang['package_invalid_theme_views'] = 'Tema tidak valid — direktori views tidak ditemukan.';
$lang['package_no_root_dir'] = 'Paket tidak memiliki direktori root.';
$lang['package_not_downloadable'] = 'Paket tidak dapat diunduh secara publik.';
$lang['package_not_in_registry'] = 'Paket tidak tersedia di registri publik.';
$lang['package_request_invalid'] = 'Permintaan paket tidak valid.';
$lang['package_rollback_request_invalid'] = 'Permintaan rollback tidak valid.';
$lang['package_root_mismatch'] = 'Root arsip paket tidak cocok dengan %s';
$lang['package_single_root_required'] = 'Paket harus berisi tepat satu direktori root.';
$lang['package_source_error'] = 'Sumber paket tidak dapat diselesaikan.';
$lang['package_system_core_restricted'] = 'Komponen sistem tidak dapat diinstal sebagai paket.';
$lang['package_temp_dir_failed'] = 'Gagal membuat direktori sementara %s';
$lang['package_type_unknown'] = 'Jenis paket tidak diketahui.';
$lang['package_update_request_invalid'] = 'Permintaan pembaruan paket tidak valid.';
$lang['package_update_root_mismatch'] = 'Root arsip pembaruan tidak cocok dengan %s.';
$lang['package_upload_dir_failed'] = 'Gagal membuat direktori unggahan %s';
$lang['package_url_invalid'] = 'URL distribusi paket tidak valid.';
$lang['package_write_failed'] = 'Gagal menulis paket ke %s';
$lang['package_zip_not_found'] = 'ZIP paket tidak ditemukan: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Pembaruan baru tersedia!';
$lang['update_backup_error'] = 'Tidak dapat membuat cadangan paket yang ada. Pembaruan dibatalkan.';
$lang['update_check_disabled'] = 'Pemeriksaan pembaruan otomatis dinonaktifkan. Aktifkan untuk melihat pembaruan.';
$lang['update_check_error'] = 'Tidak dapat menjalankan pemeriksaan pembaruan saat ini.';
$lang['update_check_success'] = 'Pemeriksaan pembaruan berhasil diselesaikan.';
$lang['update_install_error'] = 'Paket tidak dapat diinstal. Versi sebelumnya dipertahankan.';
$lang['update_install_success'] = 'Paket berhasil diperbarui ke versi terbaru.';
$lang['update_interval_3days'] = 'Setiap 3 hari';
$lang['update_interval_biweekly'] = 'Setiap 2 minggu';
$lang['update_interval_daily'] = 'Setiap hari';
$lang['update_interval_monthly'] = 'Sebulan sekali';
$lang['update_interval_weekly'] = 'Seminggu sekali';
$lang['update_not_available'] = 'Situs web Anda sudah terbaru.';
$lang['update_rollback_confirm'] = 'Apakah Anda yakin ingin memulihkan versi sebelumnya?';
$lang['update_rollback_error'] = 'Tidak dapat memulihkan versi sebelumnya. Intervensi manual mungkin diperlukan.';
$lang['update_rollback_success'] = 'Versi sebelumnya berhasil dipulihkan.';
$lang['updates_available'] = 'Pembaruan yang tersedia';
$lang['updates_check_now'] = 'Periksa sekarang';
$lang['updates_check_now_confirm'] = 'Apakah Anda yakin ingin memeriksa pembaruan sekarang?';
$lang['updates_current_version'] = 'Versi saat ini';
$lang['updates_enable'] = 'Aktifkan pembaruan';
$lang['updates_last_check'] = 'Pemeriksaan terakhir: %s';
$lang['updates_latest_version'] = 'Versi terbaru';
$lang['updates_next_check'] = 'Pemeriksaan terjadwal berikutnya: %s';
$lang['updates_previous_version'] = 'Versi sebelumnya';
$lang['updates_recent'] = 'Baru diperbarui';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Gagal memblokir alamat IP yang ditentukan.';
$lang['admin_firewall_ban_success'] = 'Alamat IP telah berhasil diblokir.';
$lang['admin_firewall_block_ip'] = 'Blokir alamat IP';
$lang['admin_firewall_delete_confirm'] = 'Apakah Anda yakin ingin membuka blokir alamat IP yang dipilih?';
$lang['admin_firewall_delete_error'] = 'Gagal membuka blokir alamat IP yang dipilih.';
$lang['admin_firewall_delete_success'] = 'Alamat IP yang dipilih telah berhasil dibuka blokirnya.';
$lang['admin_firewall_duration'] = 'Durasi pemblokiran';
$lang['admin_firewall_permanent'] = 'Permanen';
$lang['admin_firewall_reason'] = 'Alasan pemblokiran';
$lang['admin_firewall_tip'] = 'Lihat dan kelola alamat IP yang diblokir oleh firewall karena pelanggaran berulang atau aktivitas mencurigakan.';

// Settings
$lang['404_ban_duration'] = 'Durasi Blokir 404';
$lang['404_threshold'] = 'Batas Kesalahan 404';
$lang['uri_ban_duration'] = 'Durasi Blokir URI';
$lang['uri_strike_threshold'] = 'Batas Serangan URI';
