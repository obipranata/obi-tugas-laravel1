@extends('templates')

@section('content')

@php
$users = [
  [
    "nama" => "Endji",
    "foto" => "images/1.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => false,
    "alamat" => "Jepara",
    "role" => "Admin"
  ],
  [
    "nama" => "Farid",
    "foto" => "images/2.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => false,
    "alamat" => "Bandung",
    "role" => "User"
  ],
  [
    "nama" => "Isman",
    "foto" => "images/3.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => false,
    "alamat" => "Lamongan",
    "role" => "Admin"
  ],
  [
    "nama" => "Obi",
    "foto" => "images/4.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Jayapura",
    "role" => "User"
  ],
  [
    "nama" => "Tegar",
    "foto" => "images/1.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => false,
    "alamat" => "Medan",
    "role" => "Admin"
  ],
  [
    "nama" => "Agung",
    "foto" => "images/2.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Cimahi",
    "role" => "User"
  ],
  [
    "nama" => "Rendi",
    "foto" => "images/3.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Cimahi",
    "role" => "User"
  ],
  [
    "nama" => "Dafa",
    "foto" => "images/4.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Cimahi",
    "role" => "Admin"
  ],
  [
    "nama" => "Mahir",
    "foto" => "images/1.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Cimahi",
    "role" => "Admin"
  ],
  [
    "nama" => "Adnan",
    "foto" => "images/2.jpg",
    "bio" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima omnis incidunt, eveniet perspiciatis cupiditate odio nobis? Est mollitia saepe quibusdam exercitationem ipsam necessitatibus perspiciatis incidunt quis quas laudantium. Vel, blanditiis!",
    "active" => true,
    "alamat" => "Cimahi",
    "role" => "Admin"
  ],
];

$active = true;
$role = 'Admin';

if($_GET){
  if ($_GET['active'] == 'nonactive'){
    $active = false;
  }else{
    $active = true;
  }
  if ($_GET['role']){
    $role = $_GET['role'];
  }
}

$filter = [
  "active" => $active,
  "role" => $role
];

@endphp




<div class="container mt-5">
  <div class="filter" style="width: 60%">
    <form >
      <div class="row mb-5">
        <div class="col">
          <select class="form-select" name="active">
            <option value="active">Active</option>
            <option value="nonactive">Nonactive</option>
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="role">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Filter</button>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
    @foreach ($users as $user) 
        @includeWhen($filter['active'] == $user['active'] && $filter['role'] == $user['role'], 'card', ['user' => $user])

    @endforeach
  </div>
</div>
@endsection