@component('mail::message')

# {{ $nomeSerie  }} criada

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episodios por temporada a série foi criada

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
    Ver série
@endcomponent

@endcomponent
