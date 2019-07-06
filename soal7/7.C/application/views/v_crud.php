<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy TES</title>
    <link rel="stylesheet" href="<?=base_url('asset/bs4/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/style.css')?>">
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow p-3 mb-4 bg-white rounded">
        <a href="" class="navbar-brand bold">
            <img src="<?=base_url('images/logo.png')?>" width="85" height="50" alt="">
            ARKADEMY BOOTCAMP
        </a>
    </nav>
    <div class="container mt-3">
        <button type="button" class="btn btn-warning btn-md float-right shadow text-white" data-toggle="modal"
            data-target="#modal">ADD</button>
        <br>
        <br>
        <table class="table table-bordered text-center">
            <thead class="">
                <tr>
                    <th style="background-color: #e6e3dd; ">Name</th>
                    <th style="background-color: #e6e3dd;">Hobby</th>
                    <th style="background-color: #e6e3dd;">Category</th>
                    <th style="background-color: #e6e3dd;">Action</th>
                </tr>
            </thead>
            <tbody id="data">
                <?php
                    foreach($nama as $a){
                ?>
                <tr>
                    <td><?=$a->name?></td>
                    <td><?=$a->hobby?></td>
                    <td><?=$a->category?></td>
                    <td>
                        <a href="javascript:;" class="hapus" data="<?=$a->id?>" ><img
                                src="<?=base_url('images/icons8-waste-24.png')?>" alt=""></a>
                        &nbsp;
                        <a href="javascript:;" class="edit" data="<?=$a->id?>"><img
                                src="<?=base_url('images/icons8-create-24.png')?>" alt=""></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('Crud/simpan')?>" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name.."
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="0">Pilih Kategori</option>
                                <?php
                                foreach($kategori as $ktg){
                            ?>
                                <option value="<?=$ktg->id?>"><?=$ktg->name?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="hoby" id="hoby" class="form-control hobby">
                                <option value="0">Pilih Hobby</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning text-white">ADD</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Show Modal Edit -->
    <div class="modal" id="ModalEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('Crud/update')?>" method="post">
                        <div class="form-group">
                            <input type="text" name="namaEdit" id="name" class="form-control" placeholder="Name..">
                            <input type="hidden" name="id" id="id" class="form-control" placeholder="Name..">
                        </div>
                        <div class="form-group">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="0">Pilih Kategori</option>
                                <?php
                                foreach($kategori as $ktg){
                            ?>
                                <option value="<?=$ktg->id?>"><?=$ktg->name?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="hoby" id="hoby" class="form-control hobby">
                                <option value="0">Pilih Hobby</option>
                                <?php
                                foreach($hoby as $hby){
                            ?>
                                <option value="<?=$hby->id?>"><?=$hby->name?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning text-white">EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal" id="modalHapus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="images/icon-checklist.png" class="img-responsive" width="250" alt="">
                        <h3 style="font-size: 18px; font-weight: bold;">Berhasil menghapus data</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery-3.4.1 -->
    <script src="<?=base_url('asset/bs4/js/jquery-3.4.1.js')?>"></script>
    <!-- Popper Js-->
    <script src="<?=base_url('asset/bs4/js/popper.min.js')?>"></script>
    <!--Boostraap Js -->
    <script src="<?=base_url('asset/bs4/js/bootstrap.js')?>"></script>
    <!-- Proses Js -->
    <script>
        $(document).ready(function () {

            // Get Data Hobby
            $('#kategori').change(function () {
                var id = $(this).val();
                $.ajax({
                    url: '<?=base_url('Crud/get_hobi ')?>',
                    method: 'POST',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'JSON',
                    success: function (data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].id + '">' + data[i]
                                .name + '</option>';
                        }
                        $('.hobby').html(html);
                    }
                });
            });

            // Get Edit
            $('#data').on('click','.edit',function(){
                var id=$(this).attr('data');
                $.ajax({
                    type : "GET",
                    url  : "<?=base_url('Crud/get_data')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                        $.each(data,function(id, nama,  id_category, id_hobby){
                            $('#ModalEdit').modal('show');
                            $('[name="id"]').val(data.id);
                            $('[name="namaEdit"]').val(data.nama);
                            $('[name="kategori"]').val(data.id_category);
                            $('[name="hoby"]').val(data.id_hobby);
                        });
                    }
                });
                return false;
             });

            //  Delete Data
            $('#data').on('click','.hapus',function(){
                var id=$(this).attr('data');
                $.ajax({
                    type : 'POST',
                    url : '<?=base_url('Crud/delete_data')?>',
                    dataType : 'JSON',
                    data : {id:id},
                    success: function(data){
                        $('#modalHapus').modal('show');
                        // window.location.reload();
                    }
                });
             });

             $('#myModal').on('hidden.bs.modal', function () {
                location.reload();
                })
        });
    </script>
</body>

</html>