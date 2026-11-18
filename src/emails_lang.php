<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Pembaruan sistem tersedia';
$lang['emails_updates_available_message'] = <<<EOT
Halo,

Pembaruan sistem baru telah terdeteksi untuk {site_anchor}.

Pembaruan ini mungkin mencakup perbaikan keamanan, peningkatan kinerja, atau fitur baru.
Kami merekomendasikan untuk meninjau pembaruan ini sesegera mungkin.

Anda dapat memeriksa dan mengelola pembaruan yang tersedia melalui dashboard admin:
{link}

Jika Anda telah memeriksa atau menerapkan pembaruan tersebut, tidak diperlukan tindakan lebih lanjut.

Ini adalah pesan sistem otomatis yang dikirim oleh {site_name}.
Jangan balas email ini.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktivasi akun';
$lang['emails_account_activation_request_message'] = <<<EOT
Halo {name},

Terima kasih telah mendaftar di {site_anchor}. Akun Anda telah dibuat dan harus diaktifkan sebelum Anda dapat menggunakannya.

Untuk mengaktifkan akun Anda, klik tautan berikut atau salin-tempel ke peramban Anda:
{link}

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Tautan aktivasi baru';
$lang['emails_account_activation_resend_message'] = <<<EOT
Halo {name},

Anda baru-baru ini meminta tautan aktivasi baru di {site_anchor} karena akun Anda belum aktif.
Untuk mengaktifkan akun Anda, klik tautan berikut atau salin-tempel ke peramban Anda:
{link}

Jika Anda tidak meminta ini, tidak perlu tindakan lebih lanjut.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Akun diaktifkan';
$lang['emails_account_activation_success_message'] = <<<EOT
Halo {name},

Akun Anda di {site_anchor} telah berhasil diaktifkan. Anda sekarang dapat <a href="{login_url}" target="_blank" rel="noopener">masuk</a> kapan saja Anda mau.

Semoga Anda menikmati kunjungan Anda, terimalah salam hormat kami.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Akun menunggu persetujuan';
$lang['emails_account_approval_pending_message'] = <<<EOT
Halo {name},

Terima kasih telah bergabung dengan kami di {site_anchor}. Akun Anda telah dibuat tetapi perlu disetujui oleh admin situs sebelum aktif.
Kami mohon maaf atas langkah penting ini, tetapi ini hanya untuk tujuan keamanan.

Anda akan menerima email konfirmasi segera setelah akun Anda disetujui.

Kami berharap Anda menikmati waktu Anda, mohon terima salam hormat kami.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Akun disetujui';
$lang['emails_account_approval_success_message'] = <<<EOT
Halo {name},

Kabar baik! Akun Anda di {site_anchor} telah disetujui.

Anda sekarang bisa masuk dan langsung mulai menggunakan akun Anda:
{link}

Kami senang Anda bergabung bersama kami.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Akun dipulihkan';
$lang['emails_account_restored_message'] = <<<EOT
Halo {name},

Email ini mengonfirmasi bahwa akun Anda di {site_anchor} telah berhasil dipulihkan.

Selamat datang kembali, dan kami harap kali ini Anda akan menikmati masa tinggal Anda.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Selamat datang di {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Halo {name},

Kebanyakan orang memiliki urutan email sambutan yang sangat panjang setelah Anda mendaftar di situs mereka.

Kabar baik: kami bukan kebanyakan orang.
Namun, kami tetap ingin menyambut Anda dan mengucapkan terima kasih telah bergabung dengan kami di {site_anchor}.

Semoga Anda menikmati kunjungan Anda, terimalah salam hormat kami.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Permintaan perubahan email';
$lang['emails_email_change_request_message'] = <<<EOT
Halo {name},

Anda menerima email ini karena kami menerima permintaan perubahan email untuk akun Anda di {site_anchor}.

Klik tautan berikut atau salin dan tempel di browser Anda jika Anda ingin melanjutkan:
{link}

Jika Anda tidak meminta perubahan email, tidak ada tindakan lebih lanjut yang diperlukan.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Alamat email diubah';
$lang['emails_email_change_success_message'] = <<<EOT
Halo {name},

Email ini mengonfirmasi bahwa alamat email Anda yang digunakan di {site_anchor} telah berhasil diubah.

Jika Anda tidak melakukan tindakan ini, silakan hubungi kami secepat mungkin untuk menyelesaikan masalah ini.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Peringatan login gagal';
$lang['emails_login_alert_failure_message'] = <<<EOT
Halo {name},

Seseorang baru-baru ini mencoba menggunakan kata sandi yang salah untuk masuk ke akun {site_name} Anda.

Tanggal Server: {date}
Perangkat: {browser}, {platform}
Alamat IP: {ip_link}

Jika ini bukan Anda, jangan khawatir, percobaan login tidak berhasil.

Jika ini memang Anda dan Anda lupa kata sandi, klik tautan di bawah ini untuk meresetnya:
{reset_link}

Jika Anda mengalami kesulitan masuk ke akun Anda, hubungi tim kami atau minta tautan login sekali klik.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notifikasi login berhasil';
$lang['emails_login_alert_success_message'] = <<<EOT
Halo {name},

Kami mengirimkan email ini setelah berhasil masuk ke akun {site_name} Anda.

Tanggal Server: {date}
Perangkat: {browser}, {platform}
Alamat IP: {ip_link}

Jika ini adalah Anda, abaikan email ini dengan aman.

Jika ini bukan Anda, segera ganti kata sandi Anda untuk mengamankan akun Anda.

Untuk bantuan, hubungi tim dukungan kami.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Tautan login cepat';
$lang['emails_login_magic_link_message'] = <<<EOT
Halo {name},

Anda meminta login satu klik ke akun Anda di {site_anchor}.

Klik tautan di bawah ini, atau salin dan tempel ke browser Anda untuk langsung masuk:
{link}

Tautan ini akan kedaluwarsa dalam 15 menit. Jika Anda tidak meminta ini, abaikan email ini.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autentikasi dua faktor';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Halo {name},

Kode autentikasi dua faktor Anda adalah: <strong>{code}</strong>

Anda selalu dapat menonaktifkan autentikasi dua faktor di pengaturan akun Anda.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Permintaan reset kata sandi';
$lang['emails_password_change_request_message'] = <<<EOT
Halo {name},

Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda di {site_anchor}.

Klik tautan berikut atau salin-tempel ke peramban Anda jika Anda ingin melanjutkan:
{link}

Jika Anda tidak meminta pengaturan ulang kata sandi, tidak perlu tindakan lebih lanjut.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Kata sandi berhasil diubah';
$lang['emails_password_change_success_message'] = <<<EOT
Halo {name},

Email ini mengonfirmasi bahwa kata sandi Anda di {site_anchor} telah berhasil diubah. Anda sekarang dapat <a href="{login_url}" target="_blank" rel="noopener">masuk</a> menggunakan yang baru.

Jika Anda tidak melakukan tindakan ini, harap hubungi kami secepatnya untuk menyelesaikan masalah ini.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Tim {site_name}.
EOT;
