<h3>Kategori Barang</h3>
<hr>	
<div class="row">
	<div class="col-md-4">
		<center><p id="pesan" style="color:red"></p></center>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-12 col-form-label">Data Kategori</label>
		    <div class="col-sm-12">
		      <input type="text" class="form-control input" name="id_kategori" placeholder="Id Kategori">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-12 col-form-label">Kategori</label>
		    <div class="col-sm-12">
		      <input type="text" class="form-control input" name="nama_kategori" placeholder="Kategori">
		    </div>
		  </div>
		  <div class="form-group row">
		  		<div class="col-sm-8"> 
		  			<button class="btn btn-default" onclick="reset()">Reset</button>		  	
		  			<button class="btn btn-success" onclick="tambah_data();">Simpan</button>		  			</div>
	 		 </div>
	</div>
	<div class="col-sm-8">
		<table class="table table-bordered table-hover" id="example" >
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Id Kategori</th>
		      <th scope="col">Nama Kategori</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody id="target">
		  </tbody>
		</table>
	</div>
</div>
 