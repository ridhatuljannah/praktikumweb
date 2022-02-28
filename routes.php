<?php

    if(isset($_GET['page'])) {
        $page = $_GET['page'];

        switch($page){
            case '': 
            
            case 'home': 
                file_exists('pages/home.php') ? include 'pages/home.php' : include 'pages/404.php';
                break;
            
            // routing lokasi
            case 'lokasiread':
                file_exists('pages/admin/lokasi/lokasiread.php') ? include 'pages/admin/lokasi/lokasiread.php' : include 'pages/404.php';  
                break;

            case 'lokasicreate':
                file_exists('pages/admin/lokasi/lokasicreate.php') ? include 'pages/admin/lokasi/lokasicreate.php' : include 'pages/404.php';  
                break;

            case 'lokasiupdate':
                file_exists('pages/admin/lokasi/lokasiupdate.php') ? include 'pages/admin/lokasi/lokasiupdate.php' : include 'pages/404.php';  
                break;

            case 'lokasidelete':
                file_exists('pages/admin/lokasi/lokasidelete.php') ? include 'pages/admin/lokasi/lokasidelete.php' : include 'pages/404.php';  
                break;

            // routing jabatan
            case 'jabatanread':
                file_exists('pages/admin/jabatan/jabatanread.php') ? include 'pages/admin/jabatan/jabatanread.php' : include 'pages/404.php';  
                break;

            case 'jabatancreate':
                file_exists('pages/admin/jabatan/jabatancreate.php') ? include 'pages/admin/jabatan/jabatancreate.php' : include 'pages/404.php';  
                break;

            case 'jabatanupdate':
                file_exists('pages/admin/jabatan/jabatanupdate.php') ? include 'pages/admin/jabatan/jabatanupdate.php' : include 'pages/404.php';  
                break;

            case 'jabatandelete':
                file_exists('pages/admin/jabatan/jabatandelete.php') ? include 'pages/admin/jabatan/jabatandelete.php' : include 'pages/404.php';  
                break;

             // routing bagian
            case 'bagianread':
                file_exists('pages/admin/bagian/bagianread.php') ? include 'pages/admin/bagian/bagianread.php' : include 'pages/404.php';  
                break;

            case 'bagiancreate':
                file_exists('pages/admin/bagian/bagiancreate.php') ? include 'pages/admin/bagian/bagiancreate.php' : include 'pages/404.php';  
                break;

            case 'bagianupdate':
                file_exists('pages/admin/bagian/bagianupdate.php') ? include 'pages/admin/bagian/bagianupdate.php' : include 'pages/404.php';  
                break;

            case 'bagiandelete':
                file_exists('pages/admin/bagian/bagiandelete.php') ? include 'pages/admin/bagian/bagiandelete.php' : include 'pages/404.php';  
                break;

            // routing karyawan
            case 'karyawanread':
                file_exists('pages/admin/karyawan/karyawanread.php') ? include 'pages/admin/karyawan/karyawanread.php' : include 'pages/404.php';  
                break;
            case 'karyawancreate':
                file_exists('pages/admin/karyawan/karyawancreate.php') ? include 'pages/admin/karyawan/karyawancreate.php' : include 'pages/404.php';  
                break;

            case 'karyawanupdate':
                file_exists('pages/admin/karyawan/karyawanupdate.php') ? include 'pages/admin/karyawan/karyawanupdate.php' : include 'pages/404.php';  
                break;

            case 'karyawandelete':
                file_exists('pages/admin/karyawan/karyawandelete.php') ? include 'pages/admin/karyawan/karyawandelete.php' : include 'pages/404.php';  
                break;

            case 'karyawanbagian':
            file_exists('pages/admin/karyawan/karyawanbagian.php') ? include 'pages/admin/karyawan/karyawanbagian.php' : include 'pages/404.php';  
            break;

            case 'karyawanjabatan':
            file_exists('pages/admin/karyawan/karyawanjabatan.php') ? include 'pages/admin/karyawan/karyawanjabatan.php' : include 'pages/404.php';  
            break;

            case 'penggajianrekap':
            file_exists('pages/admin/rekap/penggajianrekap.php') ? include 'pages/admin/rekap/penggajianrekap.php' : include 'pages/404.php';  
            break;

            case 'cetakgaji':
            file_exists('export/penggajianrekap-pdf.php') ? include 'export/penggajianrekap-pdf.php' : include 'pages/404.php';  
            break;

            default:
                include 'pages/404.php';    
        }
    }else{
        include "pages/home.php";
    }
?>