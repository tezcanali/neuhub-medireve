@aware(['page'])
@php
    $galleries = \App\Models\Gallery::all();
@endphp
<section class="bg-gray-400 py-lg-5 py-4">
    <div class="container-xl py-xl-2">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-md-3 mb-4 pb-lg-2">
            @if($title)
                <div class="fs-3 fw-normal text-blue-3">{{ $title }}</div>
            @endif
        </div>
        <div class="ba-page-list">
            <div class="row g-4">
                @foreach($galleries as $gallery)
                    <div class="col-xl-4 col-lg-6">
                        <a href="{{ \Illuminate\Support\Facades\Storage::url($gallery->featured_image) }}" class="d-block bg-white" data-fancybox="gallery-a">
                            <div class="d-flex gap-2">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->featured_image) }}" class="w-100 h-300px object-fit-cover" />

                            </div>
                            <div class="p-4">
                                <ul class="list-unstyled text-gray-800 fs-15 d-flex flex-column gap-3">
                                    <li><span class="fw-normal">Name:</span> {{ $gallery->title }}</li>

                                    <li><span class="fw-normal">Operation Tech:</span> {{ $gallery['additionals']['operation'] }}</li>

                                    <li><span class="fw-normal">Graft:</span> {{ $gallery['additionals']['graft'] }}</li>

                                    <li><span class="fw-normal">Age:</span> {{ $gallery['additionals']['age'] }}</li>

                                    <li><span class="fw-normal">After Foto Date:</span> {{ $gallery['additionals']['date'] }}</li>

                                    <li><span class="fw-normal">Country:</span> {{ $gallery['additionals']['country'] }}</li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <span class="btn btn-blue-3 rounded-0"> Case Study</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
