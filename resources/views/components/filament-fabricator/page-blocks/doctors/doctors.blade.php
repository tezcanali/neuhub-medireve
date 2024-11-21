@aware(['page'])
<section class="bg-gray-400 position-relative z-3 pt-lg-5 pt-3">
    <div class="container-xl">
        <div class="doctor-page-list">
            <div class="row g-3">
                @foreach($doctors as $doctor)
                    <div class="col-lg-4">
                        <a href="{{ url('/doctors/' . $doctor->slug) }}" class="d-block border border-black border-opacity-10 p-lg-5 p-4 pt-lg-0 pt-4 text-gray-800">
                            <div class="image mb-4 mt-lg-n5">
                                <img src="{{ Storage::url($doctor->image) }}" class="doctor-list-img w-100 h-500px object-fit-cover mt-lg-n5" />
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <div class="fs-4 fw-light">{{ $doctor->name }}</div>
                                <span class="fw-light fs-15">{{ $doctor->job_title }}</span>
                            </div>
                            <hr class="my-4 border-black border-opacity-25 opacity-100" />
                            <div class="d-flex flex-column gap-1">
                                <div class="fs-15 fw-light">EDUCATION</div>
                                <span class="fs-14 fw-light">{{ $doctor->education }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
