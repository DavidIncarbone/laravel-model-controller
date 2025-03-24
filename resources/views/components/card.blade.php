 <div class="col-md-4 mb-4">
                <div class="card movie-card shadow-sm">
                    
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $movie->title }}</h5>
                        <p class="card-text">Titolo originale: <strong>{{ $movie->original_title }}</strong></p>
                        <p class="card-text">Nazionalità: <strong>{{ $movie->nationality }}</strong></p>
                        <p class="card-text">Anno d'uscita: <strong>{{ $movie->date }}</strong></p>
                        <p class="card-text">Voto: <strong>{{ $movie->vote }}/10</strong></p>
                        
                        <div class="stars text-center">
                            @php
                                $vote = round($movie->vote / 2 * 2) / 2; 
                                $fullStars = floor($vote);
                                $halfStars = ($vote - $fullStars) >= 0.5 ? 1 : 0;
                                $emptyStars = 5 - ($fullStars + $halfStars);
                            @endphp

                            @for ($i = 0; $i < $fullStars; $i++)
                                <i class="fa-solid fa-star"></i> 
                            @endfor
                            @for ($i = 0; $i < $halfStars; $i++)
                                <i class="fa-solid fa-star-half-stroke"></i> 
                            @endfor
                            @for ($i = 0; $i < $emptyStars; $i++)
                                <i class="fa-regular fa-star"></i> 
                            @endfor
                        </div>
                    </div>
                </div>
            </div>