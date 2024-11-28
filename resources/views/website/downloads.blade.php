@extends('layouts.website')

@section('title', 'Downloads')

@push('styles')
    <!-- Additional page-specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <!--==============================
    Breadcumb
    ===============================-->
    <div class="breadcumb-wrapper" {{--data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.png') }}"--}}>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Downloads <i style="color: #FFD800FF" class="far fa-file-pdf fa-2x"></i></h1>
            </div>
            <div class="breadcumb-menu-wrap">
                {{--<ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Downloads</li>
                </ul>--}}
            </div>
        </div>
    </div>

    <!--==============================
    Downloads Section
    ===============================-->
    <section class="downloads-section space">
        <div class="container">
            <div class="title-area text-center mb-5">
                <h2 class="sec-title">Downloadable Resources</h2>
                <p class="sec-subtitle">Access important documents and resources directly from this page.</p>
            </div>
            <div class="row gy-4">
                @php
                    $documents = [
                        ['title' => 'Academic Calendar GAD27 Trimester 01', 'filename' => 'Academic Calendar GAD27 Trimester 01.pdf'],
                        ['title' => 'Application Form GAD27', 'filename' => 'Application Form GAD27.pdf'],
                        ['title' => 'Application Form GADPT03 September 2023', 'filename' => 'Application Form GADPT03 September 2023.pdf'],
                        ['title' => 'Attachment Assessment Form 2024', 'filename' => 'Attachment Assessment Form 2024.pdf'],
                        ['title' => 'Drug and Substance Abuse Policy 2024 - 2026', 'filename' => 'Blackfordby College Drug and Substance Abuse Policy 2024 - 2026.pdf'],
                        ['title' => 'Blackfordby Flyer 2024', 'filename' => 'Blackfordby Flyer 2024.pdf'],
                        ['title' => 'Student Code of Conduct 2024 - 2026', 'filename' => 'Blackfordby Student Code of Conduct 2024 - 2026.pdf'],
                        ['title' => 'College Indemnity Form 2024', 'filename' => 'College Indemnity Form 2024.pdf'],
                        ['title' => 'College Licence 2024', 'filename' => 'College Licence 2024.pdf'],
                        ['title' => 'GADPT03 Semester 02 Calendar', 'filename' => 'GADPT03 Semester 02 Calendar.pdf']
                    ];
                @endphp

                @foreach($documents as $document)
                    <div class="col-lg-6">
                        <div class="download-item d-flex align-items-center bg-light p-3 rounded">
                            <div class="icon me-3">
                                <i class="far fa-file-pdf text-danger fa-2x"></i>
                            </div>
                            <div class="content">
                                <h4 class="doc-title">
                                    <a style="color: #065d40;" href="{{ asset('documents/' . $document['filename']) }}" target="_blank">{{ $document['title'] }}</a>
                                </h4>
                                <p  class="doc-desc">Download the {{ $document['title'] }} document.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush
