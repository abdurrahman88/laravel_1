<a href="{{url('santri/create')}}">Create</a><br>
@foreach($santri as $row)

- Nama : {{$row->nama}}
- Alamat : {{$row->alamat}} 
- Tanggal lahir : {{$row->tgl_lahir}}
- Jenis kelamin : {{$row->jenis_kelamin}} 
<a href=" {{url('santri/hapus/'.$row->id)}} ">Hapus</a>
<a href=" {{url('santri/edit/'.$row->id)}} ">Update</a>
<br>

@endforeach