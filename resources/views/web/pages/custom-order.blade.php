<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Abaya custom sized borkha</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body>
    <form action="{{ route('order.store') }}" method="post">
        <div class="card card-body border-0" style="height: 100vh;">
            <div class="row justify-content-start" style="margin-top: -16px;">
                <a class="col-auto btn btn-lg btn-link shadow-none link-primary p-0 border-0" href="">
                    <i class="bi bi-arrow-left-square-fill"></i>
                </a>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/web/img/abaya.jpeg') }}" alt="abaya-custom-size"
                        class="img-fluid h-100" />
                </div>
                <div class="col-md-7">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name ( اسم )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Enter your name"
                                id="name" name="name" />
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mobile" class="form-label">Mobile ( متحرك )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Enter your mobile no."
                                id="mobile" name="mobile" />
                            @error('mobile')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="address" class="form-label">Address ( عنوان )</label>
                            <textarea name="address" class="form-control shadow-none" placeholder="Address..." rows="2"></textarea>
                            @error('address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 mb-3">
                            <label class="form-label me-3">Measurement Unit ( وحدة القياس ) <i
                                    class="bi bi-arrow-right"></i></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input shadow-none" type="radio" name="unit" id="in"
                                    value="in" />
                                <label class="form-check-label" for="in">Inch ( بوصة )</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input shadow-none" type="radio" name="unit" id="cm"
                                    value="cm" checked />
                                <label class="form-check-label" for="cm">Centimeter ( سنتيمتر )</label>
                            </div>
                        </div>
                        @error('unit')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row gx-5">
                        <div class="col-md-6 mb-3">
                            <label for="sleeves-from-sholder" class="form-label">Sleeves from shoulder ( الأكمام من
                                الكتف )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Sleeves from shoulder"
                                id="sleeves-from-sholder" name="sleeves_from_shoulder" />
                            @error('sleeves_from_shoulder')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sleeves-from-neck" class="form-label">Sleeves from neck ( الأكمام من الرقبة
                                )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Sleeves from neck"
                                id="sleeves-from-neck" name="sleeves_from_neck" />
                            @error('sleeves_from_neck')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-md-6 mb-3">
                            <label for="sleeves-width" class="form-label">Sleeves width ( عرض الأكمام )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Sleeves width"
                                id="sleeves-width" name="sleeves_width" />
                            @error('sleeves_width')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="arms" class="form-label">Arms ( الأسلحة )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Arms" id="arms"
                                name="arms" />
                            @error('arms')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-md-6 mb-3">
                            <label for="bust" class="form-label">Bust ( اعتقال ) </label>
                            <input type="text" class="form-control shadow-none" placeholder="Bust" id="bust"
                                name="bust" />
                            @error('bust')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="waist" class="form-label">Waist ( وَسَط )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Waist"
                                id="waist" name="waist" />
                            @error('waist')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-md-6 mb-3">
                            <label for="hip" class="form-label">Hip ( خاصرة )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Hip" id="hip"
                                name="hip" />
                            @error('hip')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="item-length" class="form-label">Abaya length ( طول العباية )</label>
                            <input type="text" class="form-control shadow-none" placeholder="Abaya length"
                                id="item-length" name="item_length" />
                            @error('item_length')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-sm btn-primary shadow-none col-md-5">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    setTimeout(function() {
        var alert = document.getElementById('successAlert');
        if (alert) {
            var bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }
    }, 3000);
</script>

</html>
