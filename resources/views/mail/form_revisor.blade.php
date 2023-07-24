<x-layout>
<div class="my-5">
    <h2 class="text-center p-5 box shadow">Candidati come Revisore</h2>
</div>
<div class="container">
    <form method="POST" action="{{ route('become.revisor') }}">
        @csrf

        <div>
            <h3>
                Benvenuto <span class="text-success">{{$user->name}}</span>
            </h3>
        </div>

        <div>
            <p class="my-3">
                Inserisci un messaggio per chiedere di diventare revisore.
                
            </p>
            <p>
                Se sarà accettata, al tuo prossimo accesso troverai delle novità nel tuo profilo!
            </p>
        </div>
        <div class="form-group">
            <label for="message"></label>
            <textarea name="message" id="message" rows="4" class="form-control shadow" required></textarea>
        </div>

        <button type="submit" class="btn-cardz btn-one my-5">Invia</button>
    </form>
</div>

</x-layout>