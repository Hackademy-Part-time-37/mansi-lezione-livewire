<div class="container mt-5">
    <div class="align-middle gap-2 d-flex justify-content-between">
        <h3>Elenco Utenti inseriti</h3>
        <div class="d-flex" role="search">
            <input wire:model.live='search' class="form-control " name="search" type="search" placeholder="Cerca Articolo"
                aria-label="Search">
        </div>

    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">#{{ $user->id }}</th>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
</div>
