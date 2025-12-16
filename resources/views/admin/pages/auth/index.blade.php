<x-admin.index title="Auth Info">
    <div class="card card-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('update.auth.info') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 my-2">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control shadow-none" value="{{ $user->name }}" name="name"
                        id="name" />
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-4 my-2">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control shadow-none" value="{{ $user->mobile }}" name="mobile"
                        id="mobile" />
                    @error('mobile')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-4 my-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control shadow-none" value="{{ $user->email }}" name="email"
                        id="email" />
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 my-2">
                    <label for="current-password" class="form-label">Current Password</label>
                    <input type="password" class="form-control shadow-none" name="current_password" />
                    @error('current_password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 my-2">
                    <label for="new-password" class="form-label">New Password</label>
                    <input type="password" class="form-control shadow-none" name="new_password" />
                    @error('new_password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-sm btn-primary shadow-none col-md-4" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        setTimeout(function() {
            var alert = document.getElementById('successAlert');
            if (alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000);
    </script>
</x-admin.index>
