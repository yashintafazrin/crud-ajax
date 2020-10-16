<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js'?>"></script>
</head>
<body>
<div class="container">
    <h2>DATA MASYARAKAT</h2>
    

    <table class="table">
  <thead>
    <tr>
      <th>NIK</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
      <th>Telepon</th>
      <th>Status login</th>
      
      
    </tr>
  </thead>
  <tbody id="targetData">
    
  </tbody>
</table>
</div>

<script type="text/javascript">

    ambilData
    function ambilData(){
        $.ajax({
            type:'GET',
            url:'<?php echo base_url()."index.php/page/ambildata"?>',
            dataType: 'json',
            success: function(data){
                var baris='';
                for(var i=0;i<data.length;i++){
                    baris += '<tr>'+
                                    '<td>'+data[i].nik +' </td>'+
                                    '<td>'+data[i].nama +' </td>'+
                                    '<td>'+data[i].username +' </td>'+
                                    '<td>'+data[i].password +' </td>'+
                                    '<td>'+data[i].telp +' </td>'+
                                    '<td>'+data[i].status_login +' </td>'+
                                    
                             '</tr>'
                }
                $('#targetData').html(baris);
            }
        });
    }
</script>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
</body>
</html>