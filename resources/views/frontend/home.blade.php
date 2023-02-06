<x-frontend-layout>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($articles as $item)
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>{{ $item->title }}</h1>
                                <img src="{{ asset($item->featured) }}" class="img-fluid w-100" alt="">
                                {!! Str::words($item->description, 50, '...') !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
