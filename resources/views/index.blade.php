@extends('layout.master')
@section('title')
@section('contents')
@include('sweetalert::alert')
<div class="section-body">
  <div class="row">
      <div class="col-md-12"></div>
      <a href={{route('tambah')}} class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
      <hr>
      <table class="table table-striped table-bordered table-md">
        <tr>
          <th>Nomor</th>
          <th>Nama Produk</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Action</th>
        </tr>
        @foreach ($produk as $no=> $data)
        <tr>
          {{-- mengatur paginate --}}
          <td>{{$produk->firstItem()+$no}}</td> 
          <td>{{$data->nama_produk}}</td>
          <td>{{$data->keterangan}}</td>
          <td>{{$data->jumlah}}</td>
          <td>{{$data->harga}}</td>
          <td>
          <a href="{{route('edit', $data->id)}}" class="btn btn-success">Edit</a>
            <a href="#" data-id={{$data->id}} class="btn btn-danger swal-confirm">
            <form action="{{route('delete',$data->id)}}" id="delete{{$data->id}}" method="POST">
              @csrf
              @method('delete')
            </form>
              Delete
            </a>
          </td>
        </tr>
         @endforeach
      </table>
      {!!$produk->links()!!}
  </div>
</div>

@endsection

@push('page-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
  id = e.target.dataset.id;

  swal({
      title: 'Yakin mau di hapus?',
      // text: 'Data yang dihapus tidak!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal('Data berhasil di Hapus', {
        icon: 'success',
      });
      $(`#delete${id}`).submit();
      }
      // } else {
      //   swal('Your imaginary file is safe!');
      // }
    });
});
</script>
@endpush