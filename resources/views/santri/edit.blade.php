<form action=" {{url('santri/update')}}" method="post">
	<input type="hidden" name="id" value="{{$santri->id}}">
	Nama : <input type="text" name="nama" value=" {{$santri->nama}}">
	Alamat : <input type="text" name="alamat" value=" {{$santri->alamat}}">
	Tanggal Lahir : <input type="text" name="tgl_lahir" value=" {{$santri->tgl_lahir}}">
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($santri->jenis_kelamin == 'L') ? 'checked':''}}>Laki Laki |
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($santri->jenis_kelamin == 'L') ? 'checked':''}}>Laki Laki <br>
	 {{csrf_field()}}
	 <button type="submit">Update</button>
</form>