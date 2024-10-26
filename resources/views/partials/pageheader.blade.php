<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{ $page }}</h1> <!-- Display the page variable -->
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">{{ $page }}</a></li> <!-- Use the page variable here -->
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
