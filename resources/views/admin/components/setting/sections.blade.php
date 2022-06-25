@extends('admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route' => ['sections.update'], 'id' => 'form-data', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    <h4 class="header-title">Sections Info</h4>
                    @csrf


                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        (Home Page) About Us Data
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="hp_about_title">(Home Page) About Us Title</label>
                                                <input type="text" class="form-control" id="hp_about_title"
                                                    name="hp_about_title" value="{{ $settings['hp_about_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(Home Page) About Us Description</label>
                                                <textarea class="form-control summernote" name="hp_about_description" rows="3">{{ $settings['hp_about_description'] }}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_email">(Home Page) About Us Image</label>
                                                <input type="file" class="form-control" id="hp_about_image"
                                                    name="hp_about_image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="{{ asset('heto/sections/' . $settings['hp_about_image']) }}"
                                                    width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        (Home Page) Career Data
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="hp_career_title">(Home Page) Career Title</label>
                                                <input type="text" class="form-control" id="hp_career_title"
                                                    name="hp_career_title" value="{{ $settings['hp_career_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(Home Page) Career Description</label>
                                                <textarea class="form-control summernote" name="hp_career_description" rows="3">{{ $settings['hp_career_description'] }}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_email">(Home Page) Career Image</label>
                                                <input type="file" class="form-control" id="hp_career_image"
                                                    name="hp_career_image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="{{ asset('heto/sections/' . $settings['hp_career_image']) }}"
                                                    width="200px" height="200px">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        About Page Data
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <!-- Who we are -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="who_we_are_title">(About Page) Who we are title</label>
                                                <input type="text" class="form-control" id="who_we_are_title"
                                                    name="who_we_are_title" value="{{ $settings['who_we_are_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(About Page) Who we are title
                                                    description</label>
                                                <textarea class="form-control summernote" name="who_we_are_desc" rows="3">{{ $settings['who_we_are_desc'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- what we do -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="what_we_do_title">(About Page) What we do title</label>
                                                <input type="text" class="form-control" id="what_we_do_title"
                                                    name="what_we_do_title" value="{{ $settings['what_we_do_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(About Page) What we do description</label>
                                                <textarea class="form-control summernote" name="what_we_do_desc" rows="3">{{ $settings['what_we_do_desc'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Contracting department -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contracting_department_title">(About Page) Contracting
                                                    department title</label>
                                                <input type="text" class="form-control"
                                                    id="contracting_department_title" name="contracting_department_title"
                                                    value="{{ $settings['contracting_department_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(About Page) Contracting
                                                    department
                                                    description</label>
                                                <textarea class="form-control summernote" name="contracting_department_desc" rows="3">{{ $settings['contracting_department_desc'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Services department -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="services_department_title">(About Page) The Services department
                                                    title</label>
                                                <input type="text" class="form-control" id="services_department_title"
                                                    name="services_department_title"
                                                    value="{{ $settings['services_department_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(About Page) The Services department
                                                    description</label>
                                                <textarea class="form-control summernote" name="services_department_desc" rows="3">{{ $settings['services_department_desc'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        CEO Info
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <!-- Ceo info -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ceo_name">(About Page) Ceo Name</label>
                                                <input type="text" class="form-control" id="ceo_name"
                                                    name="ceo_name" value="{{ $settings['ceo_name'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ceo_signature">(About Page) Ceo Signature</label>
                                                <input type="text" class="form-control" id="ceo_signature"
                                                    name="ceo_signature" value="{{ $settings['ceo_signature'] }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ceo_sec_title">(About Page) Ceo Section title</label>
                                                <input type="text" class="form-control" id="ceo_sec_title"
                                                    name="ceo_sec_title" value="{{ $settings['ceo_sec_title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(About Page) Ceo Section
                                                    description</label>
                                                <textarea class="form-control summernote" name="ceo_sec_description" rows="3">{{ $settings['ceo_sec_description'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ceo_image">(About Page) Ceo Image</label>
                                                <input type="file" class="form-control" id="ceo_image"
                                                    name="ceo_image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="{{ asset('heto/sections/' . $settings['ceo_image']) }}"
                                                    width="100px" height="100px">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                        Career Page Data
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <!-- career desc -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>(Career Page) Career description</label>
                                                <textarea class="form-control summernote" name="cr_desc" rows="3">{{ $settings['cr_desc'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {!! form::close() !!}
                    <button type="submit" class="btn btn-success float-right mt-3"
                        onclick="$('#form-data').submit()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



@push('scripts')
<script>
    $(document).ready(function (){
        $('.summernote').summernote({
            placeholder: 'Start writing...',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
            ]
        });
    });
</script>
@endpush
