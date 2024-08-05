<div class="col-md-6 col-lg-3">
    <p class="section-title text-white h5 mb-4">Address<span></span></p>
    <p><i class="fa fa-map-marker-alt me-3"></i>{{ $settings->address }}</p>
    <p><i class="fa fa-phone-alt me-3"></i>{{ $settings->phone }}</p>
    <p><i class="fa fa-envelope me-3"></i>{{ $settings->email }}</p>
    <div class="d-flex pt-2">
        <a class="btn btn-outline-light btn-social" href="{{ $settings->twitter ?? '#' }}"><i
                class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-social" href="{{ $settings->facebook ?? '#' }}"><i
                class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social" href="{{ $settings->instagram ?? '#' }}"><i
                class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-light btn-social" href="{{ $settings->linkedin ?? '#' }}"><i
                class="fab fa-linkedin-in"></i></a>
    </div>
</div>
