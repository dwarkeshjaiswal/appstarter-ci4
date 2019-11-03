<?php
namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
	public function index()
	{
		$newsModel = new NewsModel();
		$allNews = $newsModel->getNews();
		$data['news'] = $allNews;
		echo view("news", $data);
	}

	public function addNews()
	{
		echo "Adding News Here";
	}
}