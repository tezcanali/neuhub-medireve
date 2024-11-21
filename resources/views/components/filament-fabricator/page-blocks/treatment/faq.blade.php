@aware(['page'])
<section class="faq py-xl-5 py-4 position-relative">
    <img src="{{ $backgroundImage }}" class="h-400px position-absolute end-0 bottom-0 opacity-25"
         style="filter: blur(1px)"/>
    <div class="container-xl py-lg-4 position-relative z-3">
        <div
            class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-light">{{ $title }}</div>
        </div>
        <div class="accordion" id="accordionExample">
            @foreach($questions as $index => $item)
            <div class="accordion-item rounded border overflow-hidden mb-2">
                <h2 class="accordion-header">
                    <button class="accordion-button shadow-none fw-normal fs-5 {{ $index !== 0 ? 'collapsed' : '' }}" 
                            type="button" 
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $index }}" 
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                            aria-controls="collapse{{ $index }}">
                        {{ $item['question'] }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" 
                     class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body pt-0">
                        {{ $item['answer'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

