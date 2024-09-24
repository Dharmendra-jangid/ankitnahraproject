<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Multi Auth</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <section class=" p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <div class="card border border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h4 class="text-center"> Edit  Services</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('admins.autheditservices',$servicedit->id)}}" method="POST">
                                {{--  --}}

                                @csrf

                                <div class="row gy-3 overflow-hidden">

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" value="{{$servicedit->name}}" class="form-control"
                                                @error('name') is-invalid @enderror name="name" id="name"
                                                placeholder="name">
                                            <label for="name" class="form-label">Name</label>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label for="description" class="form-label" >Description</label>

                                        <div class="form-floating mb-3">
                                            <textarea name="description" id="editor">{{$servicedit->description}}</textarea>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="longdescription" class="form-label" >Long Description</label>
                                        <div class="form-floating mb-3">


                                            <textarea name="longdescription" id="editor1">{{$servicedit->longdescription}}</textarea>
                                            @error('longdescription')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label for="image" class="form-label">image</label>

                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" name="image" id="image">


                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Edit
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                        <a href="{{ route('admins.serviceEdit') }}"
                                            class="link-secondary text-decoration-none"> Exit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/ckeditor.js" integrity="sha512-W8e7jEDs+/0uEsfJql72tXHIzHbHX70/Tr2fpJlHXXpDsLjvGnB8ONU92NPREVlWLFGbOU32VITTWFuzH7ngYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>
