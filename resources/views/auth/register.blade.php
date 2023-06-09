<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">    
                
                <form class="m_custom p-5 text-white bg-dark rounded-5 shadow" action="{{route('register')}}" method="POST">
                    <h1 class="text-center">Registrati </h1>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-secondary">Registrati</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>