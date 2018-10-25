var weburi = $("#weburi").val();
ambil_data();

// global variable
var manageMemberTable;
 
function ambil_data(){
      manageMemberTable = $("#example").DataTable({
        'ajax': window.weburi+'kategori/get_data',
        'orders': []
      }); 
      // $.ajax({
      //   type:'POST',
      //   url: window.weburi+"kategori/ambil_data",
      //   dataType: 'json',
      //   success: function(data){
      //     // alert(data.length);
      //     var baris = '';
      //     var no = 1;
      //     for (var i = 0;i<data.length;i++) {
      //       baris += '<tr>'+
      //       '<td>'+no+'</td>'+
      //       '<td>'+data[i].id_kategori+'</td>'+
      //       '<td>'+data[i].nama_kategori+'</td>'+
      //       '<td><a href ="" class = "btn btn-danger ">Hapus</a></td>'+  
      //       '</tr>';
      //       no++;
      //       }
      //   $('#target').html(baris);
      //   // console.log(baris);   
      //   }
      // });
}

function tambah_data(){
	var id_kategori = $("[name='id_kategori']").val();
	var nama_kategori = $("[name='nama_kategori']").val();
	$.ajax({
		type: 'POST',
		data: 'id_kategori='+id_kategori+'&nama_kategori='+nama_kategori,
		url:window.weburi+"kategori/post",
		dataType: 'json',
		success: function(hasil){
			$('#pesan').html(hasil.pesan);
      if(hasil.pesan == ''){
        $('.input').val('');
        manageMemberTable.ajax.reload(null, false);         
      }

		}
	});
}

function reset(){
    $('.input').val('');
}

function deletekategori(){
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: 'btn-danger',
      confirmButtonText: 'Yes, delete it!',
      closeOnConfirm: false,
      //closeOnCancel: false
    },
    function(){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    });
}
