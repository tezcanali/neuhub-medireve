@aware(['page'])
<section class="cost py-xl-5 py-4 position-relative">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($backgroundImage) }}" class="h-100 object-fit-cover position-absolute end-0 bottom-0 d-block"
         style="filter: blur(1px) opacity(0.5)"/>
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
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
        <div class="table-responsive mb-5">
            <table class="table align-middle table-bordered mb-0">
                <thead class="align-middle">
                <tr class="bg-white">
                    <th class="py-4 bg-white">Country</th>
                    <th class="py-4 bg-white">
                        Total cost for <br/> 2.000 Graft

                    </th>
                    <th class="py-4 bg-white">Inclusions</th>
                </tr>
                </thead>
                <tbody class="fw-light">
                @foreach($costs as $cost)
                <tr>
                    <td>{{ $cost['country'] }}</td>
                    <td class="fw-normal">{{ $cost['price'] }}</td>
                    <td>{{ $cost['inclusions'] }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <p class="fs-18 fw-normal">{{ $description }}</p>
    </div>
</section>
