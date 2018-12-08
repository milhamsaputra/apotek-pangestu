<?php
$tanggal=date('md');
$waktu=date("His");
$id_transaksi=$tanggal.$waktu;
?>
<link rel="stylesheet" href="<?php echo base_url() ?>/css/autocomplete.css" />
<script type="text/javascript" src="<?php echo base_url() ?>/js/script.js"></script>
   <div id="admin-kotak-utama">
    <div id="admin-konten">
<form method="POST" action="<?php echo base_url()."Admin/transaksiJual/set_cart"?>">
    <h1>Penjualan Obat Apotek</h1>
    <hr>
      <div class="ribbed-green fg-white <?php echo $this->session->flashdata('Pad') ?> alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
     <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Data Pembeli</span>
          </div>
      </div>
       <div class="grid">
          <div class="row">
              <div class="span2 margin5">
                Id Transaksi
              </div>
              <div class="span4">
                  <h5><?php echo $id_transaksi; ?></h5> 
                  <input type="hidden" value="<?php echo $id_transaksi; ?>" name="id_transaksi">                   
              </div>
          </div>

          <div class="row">
              <div class="span2">
                Nama Pembeli
              </div>
              <div class="input-control text size4">
                    <input type="text" name="nama" placeholder="Nama Pembeli">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Email / No.Telp
              </div>
              <div class="input-control text size4">
                    <input type="text" name="kontak" placeholder="Email atau Nomor Telepon">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Data Produk Yang Dibeli</span>
          </div>
          </div>

          <div class="row">
            <div class="span6">
                
              <div class="grid">
                <div class="row">
                  <div class="span2">
                    Nama Produk
                  </div>
                  <div class="input-control text size4 input_container" id="cart">
                      <input type="text" placeholder="Nama Produk" id="country_id" onkeyup="autocomplet()">
                      <ul id="country_list_id" class="span4"></ul>
                  </div>
                </div>
                <div class="row">
                  <div class="span2">
                    Jumlah
                  </div>
                  <div class="input-control text size3 input_container" id="cart2" onkeypress="return isNumberKey(event)">
                    <input type="text" placeholder="Jumlah Produk">
                  </div>
                </div>
                <div class="row">
                  <div class="button warning bd-orange bg-hover-white fg-hover-orange bd-hover-orange" style="margin-left:30%;" id="button" >Tambahkan</div>
                </div>
              </div>
            </div>

            <div class="span6">
                

  <table width="100%">
    <tr>
      <td>
  <table id="demo2" width="100%" cellpadding="20" class="table bordered">
  <tr>
    <td>No</td>
    <td>Nama Produk</td>
    <td>Jumlah</td>
    <td>Harga</td>
  </tr>
</table>
        <center><div id="result11"></div></center>
      <div class="button danger span2 bd-red bg-hover-white fg-hover-red bd-hover-red" id="button2" onclick="duplicate2()">Kosongkan Daftar</div>

      </div>
      </td>
    </tr>

    <tr>
      <td>
        <hr>
      <button class="text-left success bg-hover-primary large bd-green bg-hover-white fg-hover-green bd-hover-green" style="width:100%;text-align:center;">Simpan Transaksi</button>
      </td>
    </tr>
  </table>

          </div>

         
        </div>
   
<input type="hidden" name="attharga_t" id="attharga_t" readonly>
<input type="hidden" name="attjumlah_a" id="attjumlah_a" readonly>
<input type="hidden" name="sqy" id="sqy" readonly>
<input type="hidden" name="sqy2" id="sqy2" readonly>
<input type="hidden" name="sqy3" id="sqy3" readonly value="''">


    </form>
</div>        
<script type="text/javascript">
                 
 $(document).ready(function(){
                 
var no = 0;
var i = 0;
var fruits;
var keyword = $('#sqy').val();
var attribut;
var cart3 = [];
var sql = "INSERT INTO tb_cart_transaksi (id_transaksi, kode_obat, nama_produk, jumlah_produk, harga_produk) VALUES ";
var attcart3;
var ori;
var ss;
var attharga;
var total=0;
var jumlah_stok;
var kodeObat;
                  $("#button").click(function(){
                    cart1=$('#cart input').val();
                    judul=$('#cart input').val();
                    cart2=$('#cart2 input').val();
                    var vsqy3=$('#sqy3').val();
                    if(judul!=""){

                      $.ajax({
                        type:"post",
                        url:"http://localhost/apotek/js/search2.php",
                        data:{judul: judul, vsqy3: vsqy3},
                        success:function(data){
                        var kodeobatdata =data;
                        var kode2 = kodeobatdata;
                        kodeObat = kodeobatdata;
                        if(kodeobatdata=="notfound"){
                          alert('Stok tidak tersedia!');
                        }else{
                            $('#sqy3').val(vsqy3+",'"+kodeobatdata+"'");
                            jumlah_stok=$('#attjumlah_a').val();
                            var selisih = jumlah_stok - cart2;
                             if(selisih>="0"){
                               search();
                             }else{
                               $('#sqy3').val(vsqy3);
                               alert('Jumlah Stok tidak Cukup! Persediaan stok hanya berjumlah = '+jumlah_stok);
                             }
                        }
                                              }
                      });

                    }
                  });

                  $("#button2").click(function(){
                    duplicate2();
                  });


function search(){
    if(judul!=""){
      $("#result11").html("<img src='http://localhost/apotek/img/ajax-loader.gif'/>");

        $.ajax({
          type:"post",
          url:"http://localhost/apotek/js/search.php",
          data:"judul="+judul,
          success:function(data){
            attribut= "('<?php echo $id_transaksi ?>', '"+kodeObat+"', '"+cart1+"', '"+cart2+"', '"+data+"')";
            keyword = sql+attribut;
  
            ori=$('#demo2').html();
            no = no + 1;
            attcart3=cart1+" ("+cart2+")";
            cart3.push(attcart3);
    
            $('#sqy2').val(cart3);
      
            $('#sqy').val(keyword);
    
             sql=sql+attribut+",";
    
            $('#cart input').val("");
            $('#cart2 input').val("");
            attharga = data;
            $("#result11").html("");
            var kali = data*cart2;
            total=total+kali;
            $('#attharga_t').val(total);
            ss = ori+"<tr><td>"+no+"</td><td>"+cart1+"</td><td>"+cart2+"</td><td>"+attharga+"</td></tr>";
            $('#demo2').html(ss);
            }
        });

    }

}  
function duplicate2() {
    sql = "INSERT INTO tb_cart_transaksi (id_transaksi, kode_obat, nama_produk, jumlah_produk, harga_produk) VALUES ";
    cart3 = [];
    ori=$('#demo2').html();
    total=0;
    no = 0;
    var ss = "<tr><td>No</td><td>Nama Produk</td><td>Jumlah</td><td>Harga</td></tr>";
    $('#demo2').html(ss);
    $('#sqy').val(sql);
    $('#sqy2').val(cart3);
    $('#sqy3').val("''");
    $('#cart input').val("");
    $('#cart2 input').val("");
}



                 // $('#search').keyup(function(e) {
                 //    if(e.keyCode == 13) {
                 //       search();
                 //     }
                 // });
            });
</script>
<script>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
//-->
</script>
</div>
</div>

