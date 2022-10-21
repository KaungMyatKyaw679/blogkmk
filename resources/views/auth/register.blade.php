<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary my-2 text-center">Register form</h3>
                <div class="card p-4 my-3 shadow-sm">
                <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input required value="{{ old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <x-error name="name"/>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input required value="{{ old('username')}}"  name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <x-error name="username"/>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input required value="{{ old('email')}}"  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <x-error name="email"/>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                    <x-error name="password"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>