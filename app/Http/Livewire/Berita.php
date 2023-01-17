<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Komentar;

class Berita extends Component
{
    public $textkomentar;
    public function render()
    {
        return view('livewire.berita', [
        'isi_komentar' => Komentar::orderBy('created_at', 'desc')->get()
        ]);
    }
    public function kirim(){
        $simpan = new Komentar();
        $simpan->isi_komentar = $this->textkomentar;
        $simpan->save();
        $this->reset();
    }
    public function hapus($idhapus){
        $hapus = Komentar::findOrFail($idhapus);
        $hapus->delete();
        $this->reset();
    }
}
