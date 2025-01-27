@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4 overflow-hidden">
    <div class="container-xl py-lg-4">
        <div
            class="d-flex align-items-center gap-md-5 gap-3 flex-md-row flex-column border-bottom mb-lg-5 mb-4 border-primary position-relative pb-md-0 pb-4">
            <div class="meet-shape position-absolute start-0 bottom-0 ms-5 ps-4">
                <svg class="ms-5" width="305" height="300" viewBox="0 0 305 412" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M169.143 410.171C177.978 321.269 156.719 114.972 1.00206 0.999829" stroke="#ABABAB"/>
                    <path d="M169.143 410.171C177.978 321.269 156.719 114.972 1.00206 0.999829" stroke="#ABABAB"/>
                    <path d="M204.113 411C198.857 358.091 211.505 235.314 304.152 167.485" stroke="#ABABAB"/>
                    <path d="M204.113 411C198.857 358.091 211.505 235.314 304.152 167.485" stroke="#ABABAB"/>
                </svg>
            </div>
            <img src="{{ \Illuminate\Support\Facades\Storage::url($meetImage) }}" class="meet-img h-300px flex-shrink-0 position-relative z-3"/>
            <div class="fs-72 lh-sm text-blue-3 text-balance">{{ $title }}</div>
        </div>
        <div class="pt-4 text-blue-3">
            <div class="fs-3 fw-semibold mb-md-3 mb-2">{{ $ratingText }}</div>
            <div class="row g-4">
                <div class="col-lg-2 col-md-3">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($trustpilotLogo) }}" class="img-fluid my-4 pe-xl-4 d-md-block d-none"/>
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($trustpilotLogo) }}" class="h-60px d-md-none d-block"/>
                    <div class="pt-4">Based on <span class="text-decoration-underline fw-normal">11 reviews</span>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="d-flex align-items-center gap-md-4 gap-2">
                        <button type="button" class="review-button-prev text-blue-3 fs-4 px-0">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_29_1941" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                      width="33" height="32">
                                    <rect width="31.9336" height="31.9336"
                                          transform="matrix(4.37114e-08 1 1 -4.37114e-08 0.269531 0.00488281)"
                                          fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_29_1941)">
                                    <path
                                        d="M24.2193 14.6411L11.978 14.6411L16.7681 9.85108L14.9053 7.98828L6.92188 15.9717L14.9053 23.9551L16.7681 22.0923L11.978 17.3023L24.2193 17.3023L24.2193 14.6411Z"
                                        fill="currentcolor"/>
                                </g>
                            </svg>
                        </button>
                        <div class="review-list swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">I traveled to Istanbul from Manchester…</div>
                                        <span class="fs-15">I traveled to Istanbul from Manchester for my hair transplant with Medireve, and I’m beyond happy with my choice. Everything was arranged perfectly—the airport pick-up, the hotel, and even the clinic transfers. The only minor thing was that my hotel room didn’t have a city view as promised, but they resolved it the next day without any hassle. The procedure was smooth, and Dr. Tuba Su is truly a gem! She explained everything in detail and made me feel at ease. I received 4,600 grafts in one session, and the results are already starting to show. The PRP session they included also helped my scalp heal quickly. Thank you, Medireve, for such a seamless experience. I’ll be recommending you to everyone I know!</span>
                                        <div class="fs-15"><span class="fw-normal">Zaid Masri,</span> December 01, 2024</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">I did a BBL with Dr</div>
                                        <span class="fs-15">I did a BBL with Dr. Gökhan at Medireve, and I am amazed by the results! I was a little scared because I heard stories of other clinics rushing procedures, but here, everything was done with such care. They took time to answer my questions and ensure I was comfortable. The clinic was spotless, and the staff were so friendly. The hotel was decent, but the breakfast wasn’t really my taste. Still, the hospitality made up for it. Post-op, I received daily follow-ups from the team. I feel confident and so much happier now. Totally recommend this place for cosmetic surgeries.</span>
                                        <div class="fs-15"><span class="fw-normal">Alaa Sharbaji,</span> December 10, 2024</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Coming all the way from Sydney to…</div>
                                        <span class="fs-15">Coming all the way from Sydney to Istanbul for my Sapphire hair transplant was a big decision, but Medireve made it all worthwhile. From the moment I arrived, their team made sure everything went smoothly. The clinic itself was spotless and very modern. The doctor took the time to design a natural-looking hairline that suited me perfectly. During the procedure, I was nervous, but the staff kept checking in to ensure I was okay. The hotel was nice overall, but I had some minor issues with the Wi-Fi. The Medireve team was quick to address it and even offered to switch my room. It’s been 7 months now, and the results are amazing—my hair looks full and natural. I’m so glad I chose Medireve.</span>
                                        <div class="fs-15"><span class="fw-normal">Kiya Ky,</span> December 12, 2024</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Choosing Medireve for my Sapphire hair…</div>
                                        <span class="fs-15">Choosing Medireve for my Sapphire hair transplant was a decision I’ll never regret. The entire team was professional and welcoming, and Dr. Tuba Su’s expertise was evident from the start. There was a small delay in my pre-op consultation, but the staff kept me informed and apologized for the wait. The procedure itself was painless, and I’m already seeing amazing results just four months in. The aftercare package was comprehensive, and the Istanbul tour was a nice touch. Despite the minor inconvenience, Medireve provided an outstanding experience overall.</span>
                                        <div class="fs-15"><span class="fw-normal">Lucas,</span> December 14, 2024</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">I found Medireve through Facebook when…</div>
                                        <span class="fs-15">I found Medireve through Facebook when a friend of mine posted about her experience there. After reading her glowing review, I decided to book my own breast augmentation with them. I’m so glad I did! Dr. Gökhan was incredibly professional and made sure I was comfortable throughout the entire procedure. The clinic was modern and clean, and the hotel they booked for me, Wandavista Hotel, was excellent—close to the clinic and very comfortable. There was a slight hiccup with the shuttle transfer, but it was resolved quickly. The procedure went smoothly, and I’m absolutely thrilled with my results!</span>
                                        <div class="fs-15"><span class="fw-normal">Lilia Halli,</span> January 01, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="review-button-next text-blue-3 fs-4 px-0">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_29_1946" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                      width="32" height="33">
                                    <rect width="31.9336" height="31.9336"
                                          transform="matrix(1.31134e-07 -1 -1 -1.31134e-07 31.957 32.499)"
                                          fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_29_1946)">
                                    <path
                                        d="M8.0073 17.8628L20.2485 17.8628L15.4585 22.6528L17.3213 24.5156L25.3047 16.5322L17.3213 8.5488L15.4585 10.4116L20.2485 15.2016L8.0073 15.2016L8.0073 17.8628Z"
                                        fill="currentcolor"/>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

