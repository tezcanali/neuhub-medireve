@aware(['page'])
<section class="bg-gray-400 py-lg-5 py-4">
    <div class="container-xl py-lg-3">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                 tabindex="0">
                <div class="row g-xl-5 g-4">
                    <div class="col-lg-6">
                        <img src="{{ Storage::url($missionImage) }}" class="img-fluid"/>
                    </div>
                    <div class="col-lg-6">
                        {!! $missionContent !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                 tabindex="0">
                <div class="row g-xl-5 g-4">
                    <div class="col-lg-6">
                        <img src="{{ Storage::url($visionImage) }}" class="img-fluid"/>
                    </div>
                    <div class="col-lg-6">
                        {!! $visionContent !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                 tabindex="0">
                <div class="row g-xl-5 g-4">
                    <div class="col-lg-6">
                        <img src="{{ Storage::url($valuesImage) }}" class="img-fluid"/>
                    </div>
                    <div class="col-lg-6">
                        {!! $valuesContent !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
