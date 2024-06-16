@extends('layouts.app')
@section('title', 'LOGIN')

@section('content')
    <div class="container-fluid bg-danger">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-lg-6">
                <img src="{{ asset('img/user3.png') }}" width="500" alt="">
            </div>
            <div class="col-lg-4">
                <div class="card shadow border-0" style="border-radius: 15px;">
                    <span class="mb-3 mt-5 text-center">
                        <p class="h2 fw-semibold">Register</p>
                    </span>
                    <div class="card-body p-5">

                        <form id="formLogin">
                            @csrf
                            <div class="form-group mb-3">
                                <label for=""><span style="font-size: 16px;">Badge ID</span></label>
                                <input type="text" name="employee_no" id="employee_no" class="form-control"
                                    placeholder="Type Your Badge ID">
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><span style="font-size: 16px;">Name</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Type Your Name">
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><span style="font-size: 16px;">Password</span></label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Type Your Password">
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><span style="font-size: 16px;">Re-Password</span></label>
                                <input type="password" name="repassword" id="repassword" class="form-control"
                                    placeholder="Type Your Re-Password">
                            </div>

                            <div class="mb-3 d-grid">
                                <button type="submit" id="btnSubmit" class="btn btn-primary">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).on('submit', '#formLogin', function (e) {
        e.preventDefault();

        const employee_no = $("#employee_no").val();
        const password = $("#password").val();
        const repassword = $("#repassword").val();
        const name = $("#name").val();

        if (password == "" || repassword == "" || employee_no == "" | name == "") {
            showMessage("error", "Semua input wajib diisi!")
        } else{
            if (password == repassword) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('registerInsert') }}",
                    data: {
                        employee_no,
                        password,
                        name,
                    },
                    dataType: "JSON",
                    success: function (RES) {
                        if (RES == "SUCCESS") {
                            window.location.href = "/login";
                        } else {
                            showMessage('error', 'Akun sudah terdaftar!');
                        }
                    }
                });
            } else {
                showMessage("error", "Password dan Re-password harus sama !")    
            }
        }
    })
</script>
@endsection