<?php

namespace App\Controllers;

class Page extends BaseController
{
        public function index()
        {
            return view('welcome_message');
        }

        public function about()
        {
            echo " Tampilan Halaman pada fungsi about ";
        }

        public function contact()
        {
            echo " Tampilan Halaman pada fungsi contact ";
        }

        public function faqs()
        {
            echo " Tampilan Halaman pada fungsi faqs ";
        }

        public function tos()
        {
            echo " Halaman Terms of Service ";
        }

        public function news()
        {
            return view('news');
        }

        public function gallery()
        {
            return view('gallery');
        }

}
?>