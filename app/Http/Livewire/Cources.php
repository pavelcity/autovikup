<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Cource;



class Cources extends Component
{

	use WithPagination;
	

	public $name = 'livewire курсы';
	// public $kursy;
	

	// public function mount () {
	// 	$this->kursy = Cource::latest()->paginate(5);
	// }

	public function render()
	{
			// $this->kursy = Cource::get();

			// $this->kursy = Cource::latest()->paginate(5);
			// return view('livewire.cources');
			return view('livewire.cources',[
				'kursy' => Cource::latest()->paginate(9)
			]);
	}
}
