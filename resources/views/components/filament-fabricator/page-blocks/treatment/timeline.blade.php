@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4 overflow-hidden">
    <div class="container-fluid">
        <div class="bg-gray-100 py-lg-6 py-4 rounded-3 position-relative overflow-hidden">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($backgroundImage) }}" class="h-400px position-absolute end-0 bottom-0 opacity-25"/>
            <div class="container-xl py-xl-5 position-relative z-2">
                <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-xl-5 pb-4 position-relative z-3">
                    <div class="icon">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
                    <div class="title fs-1 fw-light">{{ $title }}</div>
                </div>
                <p class="text-black">{{ $description }}</p>
                <div class="row py-3 g-3">
                    @foreach($timelineItems as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                            <div class="bg-white rounded-1 p-md-4 p-3 h-100 d-flex flex-column gap-3 text-yellow">
                                <div class="fs-4 fw-normal lh-sm">
                                    {{ $item['periodTitle'] }}<br/>
                                    {{ $item['periodRange'] }}
                                </div>
                                <div class="fs-14">{{ $item['content'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-4 text-black">
                    <p>{{ $note }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
