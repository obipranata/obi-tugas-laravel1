<div class="col-lg-4 mb-4">
  <div class="card" >
    <img src="{{$user['foto']}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$user['nama']}}</h5>
      <p class="card-text">{{$user['bio']}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$user['alamat']}}</li>
      <li class="list-group-item">{{$user['role']}}</li>
      <li class="list-group-item {{$user['active'] == true ? 'text-success' : ''}}">{{$user['active'] == true ? 'AKTIF' : 'NONAKTIF'}}</li>
    </ul>
  </div>
</div>
