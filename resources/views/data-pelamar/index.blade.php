@extends('layouts.main')
@section('container')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<div class="col-5 text-end">
    <button class="btn btn-primary" onclick="tes()" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
 
</div>

    <table class="table table-striped table-bordered" id="table-display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tekanan Darah</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>    
                <th>Suhu Tubuh</th>   
                <th>Buta Warna</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelamar as $pl )

            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$pl->nama}}</td>
                <td>{{$pl->umur}}</td>
                <td>{{$pl->jenis_kelamin }}</td>
                <td>{{$pl->alamat}}</td>
                <td>{{$pl->tekanan_darah}}/{{$pl->per_tekanan_darah}} mmHg</td>
                <td>{{$pl->berat_badan}} KG</td>
                <td>{{$pl->tinggi_badan}} CM</td>
                <td>{{$pl->suhu_tubuh}} °C</td>
                <td>{{$pl->buta_warna}}</td>


                <td>
                    {{-- edit --}}
                    <button type="button" class="badge bg-success border-0" data-id="{{$pl->id}}" onclick="edit({{ $pl->id}})">
                        <i class="fa-solid fa-pen-to-square"></i> E<span class="text-lowercase">dit</span></button>

                    {{-- hapus --}}
                    <form action="/data/{{ $pl->id }}" method="post" class=" d-inline">
                        @method('delete')
                        @csrf
                        <button class="delete badge bg-danger border-0" data-id="{{$pl->id}}" ><i class="fa-solid fa-trash"></i> H<span class="text-lowercase">apus</span></button>
                    </form>

                    {{-- Detail --}}
                    <button type="button"  data-id="{{$pl->id}}" onclick="detail({{ $pl->id}})"
                        class="badge bg-info border-0"><i class="fa-solid fa-file-pen"></i> D<span class="text-lowercase">etail</span></button>
                   
                </td>
            </tr>


            @endforeach

        </tbody>
    </table>
</section>







<!-- Modal detail -->
 <!-- Modal detail -->
 <div class="modal fade detaildataModal"  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title-detail fs-5" >Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-lg-10">
                <form id="form-detail-detail" class="mb-5" >

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="nama" name="nama" >
                       </div>

                       <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="jenis_kelamin" name="jenis_kelamin" >
                       </div>

                       <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="alamat" name="alamat" >
                       </div>


                       <div class="row g-3 mb-3">
                        <div class="col-9">
                          <label class="col-form-label">Tekanan Darah</label>
                        </div>

                        <div class="col-auto">
                          <input type="text" id="tekanan_darah" class="form-control border-0 bg-white disable"  name="tekanan_darah">
                            
                        </div>

                        <div class="col-auto">
                            <label class="col-form-label fw-bold">/</label>
                          </div>

                        
                            <div class="col-auto">
                                <input type="text" id="per_tekanan_darah" class="form-control border-0 bg-white disable">
                               
                          
                        </div>
                      </div>


                       <div class="mb-3">
                        <label for="berat_badan" class="form-label">Berat Badan</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="berat_badan" name="berat_badan" >
                       </div>

                       <div class="mb-3">
                        <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="tinggi_badan" name="tinggi_badan" >
                       </div>

                       <div class="mb-3">
                        <label for="suhu_tubuh" class="form-label">Suhu Tubuh</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="suhu_tubuh" name="suhu_tubuh" >
                       </div>

                       <div class="mb-3">
                        <label for="buta_warna" class="form-label">Buta Warna</label>
                        <input type="text" class="form-control border-0 bg-white disable" id="buta_warna" name="buta_warna" >
                       </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
    </div>
      </div>
    </div>
  </div>






    <!-- Modal edit data -->
    <div class="modal fade" id="editModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title-edit fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <form method="POST" action="/edit-data" id="form-update" class="mb-5" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid
                                @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="text" class="form-control @error('umur') is-invalid
                                @enderror" id="umur" name="umur" value="{{ old('umur') }}">
                                @error('umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('jenis_kelamin') is-invalid
                                @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid
                                @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-9">
                                  <label for="inputPassword6" class="col-form-label">Tekanan Darah</label>
                                </div>

                                <div class="col-auto">
                                  <input type="text" id="tekanan_darah" class="form-control @error('tekanan_darah') is-invalid
                                  @enderror" name="tekanan_darah" value="{{ old('tekanan_darah') }}">
                                  @error('tekanan_darah')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="col-auto">
                                    <label class="col-form-label fw-bold">/</label>
                                  </div>

                                <div class="col-auto">
                                    <div class="col-auto">
                                        <input type="text" id="per_tekanan_darah" class="form-control @error('per_tekanan_darah') is-invalid
                                        @enderror" name="per_tekanan_darah" value="{{ old('per_tekanan_darah') }}">
                                        @error('per_tekanan_darah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                </div>
                              </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control @error('berat_badan') is-invalid
                                @enderror" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') }}">
                                @error('berat_badan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                <input type="text" class="form-control @error('tinggi_badan') is-invalid
                                @enderror" id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                @error('tinggi_badan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="suhu_tubuh" class="form-label">Suhu Tubuh</label>
                                <input type="text" class="form-control @error('suhu_tubuh') is-invalid
                                @enderror" id="suhu_tubuh" name="suhu_tubuh" value="{{ old('suhu_tubuh') }}">
                                @error('suhu_tubuh')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="buta_warna" class="form-label">Buta Warna</label>
                                <input type="text" class="form-control @error('buta_warna') is-invalid
                                @enderror" id="buta_warna" name="buta_warna" value="{{ old('buta_warna') }}">
                                @error('buta_warna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Modal input data -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <form method="POST" id="input-data" action="/data" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid
                                @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="text" class="form-control @error('umur') is-invalid
                                @enderror" id="umur" name="umur" value="{{ old('umur') }}">
                                @error('umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('jenis_kelamin') is-invalid
                                @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid
                                @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-9">
                                  <label for="inputPassword6" class="col-form-label">Tekanan Darah</label>
                                </div>

                                <div class="col-auto">
                                  <input type="text" id="tekanan_darah" class="form-control @error('tekanan_darah') is-invalid
                                  @enderror" id="tekanan_darah" name="tekanan_darah" value="{{ old('tekanan_darah') }}">
                                  @error('tekanan_darah')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="col-auto">
                                    <label class="col-form-label fw-bold">/</label>
                                  </div>

                                <div class="col-auto">
                                    <div class="col-auto">
                                        <input type="text" id="per_tekanan_darah" class="form-control @error('per_tekanan_darah') is-invalid
                                        @enderror" id="per_tekanan_darah" name="per_tekanan_darah" value="{{ old('per_tekanan_darah') }}">
                                        @error('per_tekanan_darah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                </div>
                              </div>

                            <div class="mb-3">
                                <label for="berat_badan" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control @error('berat_badan') is-invalid
                                @enderror" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') }}">
                                @error('berat_badan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                <input type="text" class="form-control @error('tinggi_badan') is-invalid
                                @enderror" id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                @error('tinggi_badan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="mb-3">
                                <label for="suhu_tubuh" class="form-label">Suhu Tubuh</label>
                                <input type="text" class="form-control @error('suhu_tubuh') is-invalid
                                @enderror" id="suhu_tubuh" name="suhu_tubuh" value="{{ old('suhu_tubuh') }}">
                                @error('suhu_tubuh')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="buta_warna" class="form-label">Buta Warna</label>
                                <input type="text" class="form-control @error('buta_warna') is-invalid
                                @enderror" id="buta_warna" name="buta_warna" value="{{ old('buta_warna') }}">
                                @error('buta_warna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    @endsection


    @section('script')

<script>
    function tes(){
        $('#input-data')[0].reset(); // reset form on modals
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty();

    }
</script>

    <script>
        $('.delete').click(function(e){
            e.preventDefault();
            var dataid = $(this).attr('data-id')
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Yakin Hapus?',
  text: "Setelah di hapus data tidak bisa kembali!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Hapus!',
  cancelButtonText: 'cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
   window.location = "/delete/"+dataid+""
    swalWithBootstrapButtons.fire(
      'Terhapus!',
      'Data Berhasil di Hapus.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancel',
      'Data tidak jadi di hapus :)',
      'error'
    )
  }
})
        })
      
        
    </script>

<script>
$(document).ready(function () {
    $('#table-display').DataTable();
});

                     function edit(id) {
                         save_method = 'update';
                         $('#form-update')[0].reset(); // reset form on modals
                         $('.form-group').removeClass('has-error'); // clear error class
                         $('.help-block').empty(); // clear error string

                         //Ajax Load data from ajax
                         $.ajax({
                             url: "/edit/"+id,
                             type: "GET",
                             dataType: "JSON",
                             contentType: false,
                             processData: false,
                             success: function(data) {
                                 $('[id="id"]').val(data.id);
                                 $('[id="nama"]').val(data.nama);
                                 $('[id="umur"]').val(data.umur);
                                 $('[id="jenis_kelamin"]').val(data.jenis_kelamin);
                                 $('[id="alamat"]').val(data.alamat);
                                 $('[id="tekanan_darah"]').val(data.tekanan_darah);
                                 $('[id="per_tekanan_darah"]').val(data.per_tekanan_darah);
                                 $('[id="berat_badan"]').val(data.berat_badan);
                                 $('[id="tinggi_badan"]').val(data.tinggi_badan);
                                 $('[id="suhu_tubuh"]').val(data.suhu_tubuh);
                                 $('[id="buta_warna"]').val(data.buta_warna);


                                 $('#editModal').modal('show'); // show bootstrap modal when complete loaded
                                 $('.modal-title-edit').text('Edit Pengguna'); // Set title to Bootstrap modal title

                             },
                             error: function(jqXHR, textStatus, errorThrown) {
                                 alert('Error get data from ajax');
                             }
                         });
                    }
                 </script>

<script>
     function detail(id) {
          $('#form-detail-detail')[0].reset(); // reset form on modals
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string

          //Ajax Load data from ajax
          $.ajax({
            url: "/detail/"+id,
            type: "GET",
            dataType: "JSON",
            contentType: false,
            processData: false,
            success: function(data) {
                $('[id="id"]').val(data.id);
                                 $('[id="nama"]').val(data.nama);
                                 $('[id="umur"]').val(data.umur);
                                 $('[id="jenis_kelamin"]').val(data.jenis_kelamin);
                                 $('[id="alamat"]').val(data.alamat);
                                 $('[id="tekanan_darah"]').val(data.tekanan_darah);
                                 $('[id="per_tekanan_darah"]').val(data.per_tekanan_darah);
                                 $('[id="berat_badan"]').val(data.berat_badan);
                                 $('[id="tinggi_badan"]').val(data.tinggi_badan);
                                 $('[id="suhu_tubuh"]').val(data.suhu_tubuh);
                                 $('[id="buta_warna"]').val(data.buta_warna);

            //   $('#edit-img-wa-detail').attr('src', 'storage/'+data.gambar_undangan_wa);

              $('.detaildataModal').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title-detail').text('Detail Bantuan'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
              alert('Error get data from ajax');
            }
          });
        }
</script>
        
               
@endsection