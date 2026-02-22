<div class="tab-pane fade show active" id="home_hero" role="tabpanel">
    {{-- About Us Section --}}
    <fieldset class="border p-3">
        <legend class="float-none w-auto legend-title">Home Hero Section</legend>
        <div class="row">

            <div class="mb-4">
                <label for="homepage_title" class="form-label">Home Hero Title</label>
                <textarea class="form-control" id="homepage_title" name="homepage_title" placeholder="Activities Description"
                    rows="4">{{ $settings['homepage_title'] }}</textarea>

                @error('homepage_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="homepage_description" class="form-label">Home Hero Description</label>
                <textarea class="form-control" id="homepage_description" name="homepage_description"
                    placeholder="Activities Description" rows="4">{{ $settings['homepage_description'] }}</textarea>

                @error('homepage_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="home"> Home</label>
                    <input type="text" name="home" value="{{ $settings['home'] ?? '' }}" class="form-control br-8"
                        placeholder=" Sat: 10 AM - 4 PM">
                </div>
            </div> --}}
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="home"> Home</label>
                    <input type="text" name="home" value="{{ $settings['home'] ?? '' }}" class="form-control br-8"
                        placeholder="Home">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="about"> About</label>
                    <input type="text" name="about" value="{{ $settings['about'] ?? '' }}"
                        class="form-control br-8" placeholder="About">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="message"> Message</label>
                    <input type="text" name="message" value="{{ $settings['message'] ?? '' }}"
                        class="form-control br-8" placeholder="Message">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="service"> Service</label>
                    <input type="text" name="service" value="{{ $settings['service'] ?? '' }}"
                        class="form-control br-8" placeholder="Service">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="journey"> Journey</label>
                    <input type="text" name="journey" value="{{ $settings['journey'] ?? '' }}"
                        class="form-control br-8" placeholder="Journey">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="review"> Review</label>
                    <input type="text" name="review" value="{{ $settings['review'] ?? '' }}"
                        class="form-control br-8" placeholder="Review">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="faq"> Faq</label>
                    <input type="text" name="faq" value="{{ $settings['faq'] ?? '' }}" class="form-control br-8"
                        placeholder="Faq">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="contact"> Contact</label>
                    <input type="text" name="contact" value="{{ $settings['contact'] ?? '' }}"
                        class="form-control br-8" placeholder="Contact">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="apply"> Apply</label>
                    <input type="text" name="apply" value="{{ $settings['apply'] ?? '' }}"
                        class="form-control br-8" placeholder="Apply">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="submit"> Submit</label>
                    <input type="text" name="submit" value="{{ $settings['submit'] ?? '' }}"
                        class="form-control br-8" placeholder="Submit">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="call"> Call</label>
                    <input type="text" name="call" value="{{ $settings['call'] ?? '' }}"
                        class="form-control br-8" placeholder="Call">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="phone"> Phone</label>
                    <input type="text" name="phone" value="{{ $settings['phone'] ?? '' }}"
                        class="form-control br-8" placeholder="Phone">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="address"> Address</label>
                    <input type="text" name="address" value="{{ $settings['address'] ?? '' }}"
                        class="form-control br-8" placeholder="Address">
                </div>
            </div>
             <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="email-title"> Email title</label>
                    <input type="text" name="email-title" value="{{ $settings['email-title'] ?? '' }}"
                        class="form-control br-8" placeholder="Email title">
                </div>
            </div>
             <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="get-in-touch"> Get in touch</label>
                    <input type="text" name="get-in-touch" value="{{ $settings['get-in-touch'] ?? '' }}"
                        class="form-control br-8" placeholder="Get in touch">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="home_cta_1_text" class="form-label">CTA 1 Text</label>
                    <input type="text" class="form-control" id="home_cta_1_text" name="home_cta_1_text"
                        value="{{ $settings['home_cta_1_text'] ?? '' }}" />
                </div>

                <div class="mb-2">
                    <label for="home_cta_1_link" class="form-label">CTA 1 Link</label>
                    <input type="text" id="home_cta_1_link" name="home_cta_1_link" class="form-control"
                        value="{{ $settings['home_cta_1_link'] ?? '' }}" />
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label for="home_cta_2_text" class="form-label">CTA 2 Text</label>
                    <input type="text" class="form-control" id="home_cta_2_text" name="home_cta_2_text"
                        value="{{ $settings['home_cta_2_text'] ?? '' }}" />
                </div>

                <div class="mb-2">
                    <label for="home_cta_2_link" class="form-label">CTA 2 Link</label>
                    <input type="text" id="home_cta_2_link" name="home_cta_2_link" class="form-control"
                        value="{{ $settings['home_cta_2_link'] ?? '' }}" />
                </div>
            </div>

        </div>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Home SEO Section</legend>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="mb-2">
                        <label for="homepage_seo_title" class="form-label">SEO Title</label>
                        <input type="text" class="form-control" id="homepage_seo_title" name="homepage_seo_title"
                            value="{{ $settings['homepage_seo_title'] ?? '' }}" />
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="mb-2">
                        <label for="homepage_seo_keywords" class="form-label">SEO Keywords</label>
                        <input type="text" class="form-control" id="homepage_seo_keywords"
                            name="homepage_seo_keywords" value="{{ $settings['homepage_seo_keywords'] ?? '' }}" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_meta_description">SEO Description</label>
                        <textarea name="homepage_meta_description" rows="4" class="form-control br-8" placeholder="SEO Description">{{ $settings['homepage_meta_description'] }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_schema">SEO Schema</label>
                        <textarea name="homepage_seo_schema" rows="4" class="form-control br-8" placeholder="SEO Schema">{{ $settings['homepage_seo_schema'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </fieldset>
</div>
