<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ce05f7db2.js" crossorigin="anonymous"></script>
</head>
<body>

<x-nav/>

<div class="d-flex">
    <x-navigation/>
    <div class="flex-grow-1 bg-light">
        <div class="form-group col-12">
            <form action="{{url('Manufacturers')}}" method="POST" class="border col-8 marginT10 subtForm needs-validation rounded mx-auto p-5">
                @csrf
                <h3 class="text-center">Manufacturer Register Form</h3>
                <div class="form-label col-12 d-flex justify-content-between">
                    <div class="col-5">
                        <label for="">Name</label>
                        <input type="text" name="ManufacturerName" class="form-control ">
                    </div>
                    <div class="col-5">
                        <label for="">Email</label>
                        <input type="email" name="ManufacturerEmail" class="form-control ">
                    </div>
                </div>

                <!---------------------------------------------->
                <div class="form-label col-12 d-flex justify-content-between">
                    <div class="col-5">
                        <label for="">Phone No</label>
                        <input type="text" name="ManufacturerPhoneNo" class="form-control ">
                    </div>
                    <div class="col-5">
                        <label for="">Address</label>
                        <input type="text" name="ManufacturerAddress" class="form-control ">
                    </div>
                </div>
                <button type="submit" class="btn bg-success p-2 rounded col-2 change">Submit</button>
            </form>
        </div>

        <!-------------------------- This is for manufacturer lists ------------->
        <div class="col-12 listsM">
            <table class="col-9 mx-auto border mt-2 rounded">
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Action</th>
                </tr>

                <tbody class="manuLists">

                </tbody>
            </table>
        </div>
    </div>

    <p>{{ $manuLists->ManufacturerName }}</p>
    <!-- This is for update form -->
     <!-- <div class="upManu col-12">
    
        <form action="" class="col-8 mx-auto border rounded p-3 mt-3">
            @csrf
            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <label for="">Name</label>
                    <input type="text" name="txtName" value='{{$manuLists->ManufacturerName}}'>
                </div>

                <div class="col-6">
                    <label for="">Email</label>
                    <input type="email" name="txtEmail" value='{{$manuLists->ManufacturerEmail}}'>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <label for="">Phone No</label>
                    <input type="text" name="txtPhoneNo" value='{{$manuLists->ManufacturerPhoneNo}}'>
                </div>

                <div class="col-6">
                    <label for="">Address</label>
                    <input type="text" name="txtAddress" value='{{$manuLists->ManufacturerAddress}}'>
                </div>
            </div>
        </form>
     </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('/JavaScript/script.js') }}"></script>
</body>
</html>
