<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdsController extends Controller
{
		public function index() {
			$data = [
				'cds' => [
					[
						'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
						'album' => 'New Jersey',
						'artist' => 'Bon Jovi',
						'year' => '1988'
					],
					[
						'cover' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
						'album' => 'Live at Wembley 86',
						'artist' => 'Queen',
						'year' => '1992'
					]
				]
			];
			return view('cds', $data);
		}
}
