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
            <img src="{{ $meetImage }}" class="meet-img h-300px flex-shrink-0 position-relative z-3"/>
            <div class="fs-72 lh-sm text-blue-3 text-balance">{{ $title }}</div>
        </div>
        <div class="pt-4 text-blue-3">
            <div class="fs-3 fw-semibold mb-md-3 mb-2">{{ $ratingText }}</div>
            <div class="row g-4">
                <div class="col-lg-2 col-md-3">
                    <img src="{{ $trustpilotLogo }}" class="img-fluid my-4 pe-xl-4 d-md-block d-none"/>
                    <img src="{{ $trustpilotLogo }}" class="h-60px d-md-none d-block"/>
                    <div class="pt-4">Based on <span class="text-decoration-underline fw-normal">{{ $reviewCount }} reviews</span>
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
                                        <div class="fs-18 fw-semibold">Wonderful DHI hair transplant experience</div>
                                        <span class="fs-15">I opted for the DHI method and I am extremely pleased with the results. I didn’t feel any pain during the procedure and my doctor was very attentive. Highly recommend!</span>
                                        <div class="fs-15"><span class="fw-normal">James B.,</span> 2 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">FUE hair transplant was a great choice</div>
                                        <span class="fs-15">I had my hair transplant using the FUE technique and the results are incredibly natural. The healing process was faster than I expected, I definitely recommend it.</span>
                                        <div class="fs-15"><span class="fw-normal">Emily C.,</span>4 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Needle Free hair transplant was painless</div>
                                        <span class="fs-15">As someone who can't tolerate pain well, I chose the Needle Free hair transplant method. I didn’t feel any discomfort during the procedure and the outcome was fantastic.</span>
                                        <div class="fs-15"><span class="fw-normal">Mark T.,</span> 1 day ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Great results with Sapphire FUE technique</div>
                                        <span class="fs-15">I had a Sapphire FUE hair transplant, and the results are incredibly natural and impressive. My doctor answered all my questions, and the whole process was smooth.</span>
                                        <div class="fs-15"><span class="fw-normal">Sarah L.,</span> 3 days ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">DHI hair transplant exceeded my expectations
                                        </div>
                                        <span class="fs-15">I was a bit nervous about the DHI procedure, but the staff made me feel very comfortable. The results are amazing and look very natural.</span>
                                        <div class="fs-15"><span class="fw-normal">Tom H.,</span> 6 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">FUE method worked wonders for me</div>
                                        <span class="fs-15">The FUE hair transplant worked wonders for my receding hairline. The whole experience was seamless, and I couldn’t be happier with the results.</span>
                                        <div class="fs-15"><span class="fw-normal">Rachel M.,</span> 8 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Pain-free Needle Free hair transplant</div>
                                        <span class="fs-15">Needle Free hair transplant is the way to go if you fear needles like I do. I’m so happy with my decision, and the results speak for themselves.</span>
                                        <div class="fs-15"><span class="fw-normal">John K.,</span> 2 days ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Happy with my Sapphire FUE hair transplant</div>
                                        <span class="fs-15">I had my Sapphire FUE procedure done a few weeks ago, and the results are already noticeable. The team was fantastic, and I’m thrilled with how it turned out.</span>
                                        <div class="fs-15"><span class="fw-normal">Hannah P.,</span> 1 day ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">DHI hair transplant was worth it</div>
                                        <span class="fs-15">I went for the DHI method, and it was definitely worth it. The procedure was quick, and the staff were very professional. My hair looks fuller than ever.</span>
                                        <div class="fs-15"><span class="fw-normal">David S.,</span> 10 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">FUE transplant gave me back my confidence</div>
                                        <span class="fs-15">After having the FUE hair transplant, I feel like a new person. The process was smooth, and the results are better than I imagined.</span>
                                        <div class="fs-15"><span class="fw-normal">Sophie L.,</span> 5 hours ago</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-start gap-3">
                                        <img src="{{ asset('front/img/trustpilot-logo.png') }}" class="h-20px"/>
                                        <div class="fs-18 fw-semibold">Needle Free hair transplant is a game-changer
                                        </div>
                                        <span class="fs-15">I couldn’t believe how easy the Needle Free hair transplant was. No pain, no fuss, and the results are just incredible.</span>
                                        <div class="fs-15"><span class="fw-normal">Michael W.,</span> 4 days ago</div>
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

