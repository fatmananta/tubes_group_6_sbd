<?php
require 'function.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="base.css">
    <link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/rnz2bks.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row shadow-lg p-3 mb-5 bg-body rounded mx-auto mt-4 pl-5">
          <div class="form-data">
          <div class="row align-items-start">
              <h3>Edit Profil</h3>
            </div>
          
            <hr>
            <form class="px-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <h6>Identitas Akun</h6></label>
                <select required class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="1">Warga Indonesia</option>
                <option value="2">Warga Negara Asing</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><h6>Nama Lengkap</h6></label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <h6>NIK</h6></label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <h6>Nomor Ponsel</h6></label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <h6>Email</h6></label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <h6>Tanggal Lahir</h6></label>
                <input required type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mt-4">
              <a href="profile.php">
            <button class="button button--bestia mx-2 mr-auto">
						<div class="button__bg"></div><span>Batal</span>
					</button></a>
          <button class="button button--bestia mr-auto">
						<div class="button__bg"></div><span>Simpan</span>
					</button></div>
          <div>
            
          </div>
            
              
            </form>
        </div>
        </div>
      </div>
    </div>
    
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://tympanus.net/codrops/adpacks/cda.js"></script>
  </body>
</html>