<div class="container mt-5">
    <div class="row">
        @foreach ($movies as $movie)

        <x-card :movie="$movie"/>
           
        @endforeach
    </div>
</div>