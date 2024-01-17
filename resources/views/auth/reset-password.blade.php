@extends('auth')

@section('auth')

@if ($errors->any())
<div class="card bg-error w-96 shadow-xl absolute top-8 right-8 z-30" id="hide">
    <div class="card-body">
        <h2 class="card-title">Error!!!</h2>

        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        <div class="card-actions justify-end">
            <button class="btn btn-outlined" id="toggleButton">close</button>
        </div>
    </div>
</div>
@endif

<div class="flex items-center w-[100vw] h-[100vh] justify-center">
    <div class="card w-96 bg-base-100 shadow-xl h-[80vh]">
        <div class="card-body relative">
            <h2 class="card-title">Update Your Password</h2>

            <div class="flex items-center justify-center mt-8">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->token }}">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <label class="input-group">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                            <input type="text" value="{{ old('email', $request->email) }}" placeholder="info@site.com"
                                class="input input-bordered" name="email" />
                        </label>
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <label class="input-group">
                            <span class="material-symbols-outlined">
                                key
                            </span>
                            <input type="password" placeholder="******" class="input input-bordered" name="password" />
                        </label>
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <label class="input-group">
                            <span class="material-symbols-outlined">
                                key
                            </span>
                            <input type="password" placeholder="******" class="input input-bordered"
                                name="password_confirmation" />
                        </label>
                    </div>
                    <div class="card-actions absolute bottom-5 right-5">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<script>
    const items = document.querySelector('#hide');
    const toggleButton = document.querySelector('#toggleButton');

    toggleButton.addEventListener('click', () =>{
        items.classList.toggle('hidden');
    });
</script>

@endsection