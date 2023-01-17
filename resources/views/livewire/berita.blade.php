<div>
    <div class="container">
        
                <div class="row mt-5">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header text-white bg-info">
                                <i>Silahkan Komentar</i>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control" wire:model="textkomentar">
                                <br>
                                <input type="submit" class="btn btn-warning form-control" value="Kirim" wire:click="kirim">
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <i>Komentar Anda</i>
                            </div>
                            <div class="card-body">
                                    @foreach($isi_komentar as $isi)  
                                        <div class="col-5 mb-1">
                                            {{ $isi->isi_komentar }}
                                        </div>
                                        <div class="col ">
                                            <i>Di buat pada {{ Carbon\Carbon::parse($isi->created_at)->isoFormat('dddd, D MMMM Y') }}</i>
                                        </div>
                                            <button class="float-end btn btn-danger" wire:click="hapus (' {{ $isi->id }} ')">Hapus</button><br><br>
                                        <hr/>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
