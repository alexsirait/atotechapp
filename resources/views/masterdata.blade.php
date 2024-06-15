@extends('layouts.app')

@section('title', 'Master Data')

@section('content')
<style>
    .dataTables_filter {
        display: none;
    }
</style>
<div class="wrappers" style="background-color: hsl(252, 29%, 97%);">
    <div class="wrapper_content">
        <div class="modal fade" id="modalBarang" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-l modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-size: 15px;">
                        <div class="mb-3">
                            <label for="image">Image (URL)</label>
                            <input class="form-control" placeholder="Insert Image (URL)" type="text" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input class="form-control" placeholder="Insert Name" type="text" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="masuk">Masuk</label>
                            <input class="form-control" placeholder="Insert Masuk" type="number" name="masuk" id="masuk">
                        </div>
                        <div class="mb-3">
                            <label for="keluar">Keluar</label>
                            <input class="form-control" placeholder="Insert Keluar" type="number" name="keluar" id="keluar">
                        </div>
                        <div class="mb-3">
                            <label for="total">Total</label>
                            <input class="form-control" placeholder="Insert Total" type="number" name="total" id="total">
                        </div>
                        <div class="">
                            <button class="btn btn-danger" type="button" id="btnTambahInsert">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEditBarang" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-l modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-size: 15px;">
                        <div class="mb-3">
                            <label for="uuid">UUID Barang</label>
                            <input class="form-control" placeholder="Insert Image (URL)" type="text" name="uuid" id="uuid">
                        </div>
                        <div class="mb-3">
                            <label for="image">Image (URL)</label>
                            <input class="form-control" placeholder="Insert Image (URL)" type="text" name="image" id="editimage">
                        </div>
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input class="form-control" placeholder="Insert Name" type="text" name="name" id="editname">
                        </div>
                        <div class="mb-3">
                            <label for="masuk">Masuk</label>
                            <input class="form-control" placeholder="Insert Masuk" type="number" name="masuk" id="editmasuk">
                        </div>
                        <div class="mb-3">
                            <label for="keluar">Keluar</label>
                            <input class="form-control" placeholder="Insert Keluar" type="number" name="keluar" id="editkeluar">
                        </div>
                        <div class="mb-3">
                            <label for="total">Total</label>
                            <input class="form-control" placeholder="Insert Total" type="number" name="total" id="edittotal">
                        </div>
                        <div class="">
                            <button class="btn btn-danger" type="button" id="btnEditTambahInsert">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="me-1">
            <div class="col-sm-12">
                <div>
                    <h3 class=" mt-2 fw-bold">Master Data</h3>
                </div>
                <button id="btnTambah" class="btn btn-primary">Tambah</button>
            </div>

            <div id="showBarang"></div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    const showBarang = () => {
        const loadSpin =
        `<div class="d-flex justify-content-center align-items-center mt-5">
            <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
        </div> `;
        $.ajax({
            url: `{{ route("showBarang") }}`,
            method: 'GET',
            beforeSend:function(){
                $('#showBarang').html(loadSpin);
            }
        }).done(res => {
            $('#showBarang').html(res);
            $('#tableBarang').DataTable({
                "ordering": true,
                "bSort": true,
                "aaSorting": [],
                pageLength: 10,
                "lengthChange": false,
                responsive: true,
                language: { search: "" },
            });
        })
    }

    showBarang();
</script>
<script>
    $("#btnTambah").on('click', function (e) {
        e.preventDefault();

        $("#image").val("");
        $("#name").val("");
        $("#masuk").val("");
        $("#keluar").val("");
        $("#total").val("");

        $("#modalBarang").modal('show');
    })

    $("#btnTambahInsert").on('click', function (e) {
        e.preventDefault();

        const image = $("#image").val();
        const name = $("#name").val();
        const masuk = $("#masuk").val();
        const keluar = $("#keluar").val();
        const total = $("#total").val();

        $.ajax({
            type: "GET",
            url: "{{ route('insertBarang') }}",
            data: {
                image,
                name,
                masuk,
                keluar,
                total,
            },
            dataType: "JSON",
            success: function (RES) {
                if (RES == "SUCCESS") {
                    showMessage("success", "SUCCESS!");
                    showBarang();
                    $("#modalBarang").modal('hide');
                } else {
                    showMessage('error', 'ERROR!');
                    showBarang();
                }
            }
        });
    })

    $(document).on('click', ".btnEdit", function (e) {
        e.preventDefault();

        const uuid = $(this).data('uuid');

        $.ajax({
            type: "GET",
            url: "{{ route('dataBarang') }}",
            data: {uuid},
            dataType: "JSON",
            success: function (RES) {
                $("#uuid").val(uuid).prop('disabled', true);
                $("#editimage").val(RES.image);
                $("#editname").val(RES.name);
                $("#editmasuk").val(RES.masuk);
                $("#editkeluar").val(RES.keluar);
                $("#edittotal").val(RES.total);     

                $("#modalEditBarang").modal('show');
            }
        });
    })

    $("#btnEditTambahInsert").on('click', function (e) {
        e.preventDefault();

        const uuid = $("#uuid").val();
        const image = $("#editimage").val();
        const name = $("#editname").val();
        const masuk = $("#editmasuk").val();
        const keluar = $("#editkeluar").val();
        const total = $("#edittotal").val();

        $.ajax({
            type: "GET",
            url: "{{ route('updateBarang') }}",
            data: {
                uuid,
                image,
                name,
                masuk,
                keluar,
                total,
            },
            dataType: "JSON",
            success: function (RES) {
                if (RES == "SUCCESS") {
                    showMessage("success", "SUCCESS!");
                    showBarang();
                    $("#modalEditBarang").modal('HIDE');
                } else {
                    showMessage('error', 'ERROR!');
                    showBarang();
                }
            }
        });
    })

    $(document).on('click', ".btnDelete", function (e) {
        e.preventDefault();

        const uuid = $(this).data('uuid');
        
        Swal.fire({
            title: "Do you want to Save Changes?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('deleteBarang') }}",
                    data: {
                        uuid,
                    },
                    dataType: "JSON",
                    success: function (RES) {
                        if (RES == "SUCCESS") {
                            showMessage("success", "SUCCESS!");
                            showBarang();
                        } else {
                            showMessage('error', 'ERROR!');
                            showBarang();
                        }
                    }
                });
            }
        });
    })
    
</script>
@endsection