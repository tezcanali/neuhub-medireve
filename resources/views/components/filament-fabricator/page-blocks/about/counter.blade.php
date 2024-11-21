@aware(['page'])
<section class="bg-primary py-lg-5 py-4">
    <div class="container-xl py-lg-3">
        <div class="row g-md-4 g-3">
            @foreach($counters as $counter)
                <div class="col-lg-3 col-6">
                    <div class="d-flex flex-column gap-lg-5 gap-3">
                        <div class="fs-48 fw-semibold text-white">{{ $counter['count'] }}</div>
                        <span class="text-white">{{ $counter['title'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
