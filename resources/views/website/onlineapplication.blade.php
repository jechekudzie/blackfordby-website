@extends('layouts.website')

@section('title', 'Online Application Wizard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        .wizard-steps {
            display: flex;
            justify-content: space-between;
            list-style: none;
            margin-bottom: 30px;
            padding: 0;
        }
        .wizard-steps li {
            flex: 1;
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #ddd;
            cursor: pointer;
        }
        .wizard-steps li.active {
            font-weight: bold;
            border-bottom: 2px solid #28a745;
            color: #28a745;
        }
        .wizard-step {
            display: none;
        }
        .wizard-step.active {
            display: block;
        }
    </style>
@endpush

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.png') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Online Application</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Online Application</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="application-form-layout space">
        <div class="container">
            <div class="title-area text-center mb-5">
                <h2 class="sec-title">Complete Your Application</h2>
                <p class="sec-subtitle">Follow the steps below to apply for your program.</p>
            </div>

            <!-- Wizard Steps -->
            <ul class="wizard-steps">
                <li data-step="1" class="active">Personal Information</li>
                <li data-step="2">Contact Details</li>
                <li data-step="3">Academic Background</li>
                <li data-step="4">Work Experience</li>
                <li data-step="5">Program Selection</li>
                <li data-step="6">Sponsorship</li>
                <li data-step="7">Attachments</li>
                <li data-step="8">Personal Statement</li>
                <li data-step="9">Review & Submit</li>
            </ul>

            <!-- Wizard Content -->
            <form id="applicationForm" action="{{ route('application.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Step 1: Personal Information -->
                <div class="wizard-step active" data-step="1">
                    <h3 class="form-section-title">Personal Information</h3>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Contact Details -->
                <div class="wizard-step" data-step="2">
                    <h3 class="form-section-title">Contact Details</h3>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="address" class="form-label">Residential Address</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Academic Background -->
                <div class="wizard-step" data-step="3">
                    <h3 class="form-section-title">Academic Background</h3>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <label for="o_levels" class="form-label">O-Level Results</label>
                            <input type="text" id="o_levels" name="o_levels" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="a_levels" class="form-label">A-Level Results</label>
                            <input type="text" id="a_levels" name="a_levels" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Steps 4 to 9 follow a similar structure -->
                <div class="wizard-step" data-step="4">
                    <h3 class="form-section-title">Work Experience</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="work_experience" class="form-label">Describe Your Farming or Agricultural Work Experience</label>
                            <textarea id="work_experience" name="work_experience" class="form-control" rows="5" placeholder="Provide details about your farming experience, if any."></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="employer_name" class="form-label">Previous Employer Name (if applicable)</label>
                            <input type="text" id="employer_name" name="employer_name" class="form-control" placeholder="Enter the name of your previous employer">
                        </div>
                        <div class="col-lg-6">
                            <label for="employment_duration" class="form-label">Employment Duration</label>
                            <input type="text" id="employment_duration" name="employment_duration" class="form-control" placeholder="e.g., 2 years">
                        </div>
                    </div>
                </div>
                <!-- Step 5: Program Selection -->
                <div class="wizard-step" data-step="5">
                    <h3 class="form-section-title">Program Selection</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="program_type" class="form-label">Select Program Type</label>
                            <select id="program_type" name="program_type" class="form-control" required>
                                <option value="">Select Program</option>
                                <option value="full-time">Full-Time Program</option>
                                <option value="part-time">Part-Time Program</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="preferred_intake" class="form-label">Preferred Intake</label>
                            <select id="preferred_intake" name="preferred_intake" class="form-control" required>
                                <option value="">Select Intake</option>
                                <option value="january">January</option>
                                <option value="may">May</option>
                                <option value="september">September</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Step 6: Sponsorship -->
                <div class="wizard-step" data-step="6">
                    <h3 class="form-section-title">Sponsorship Details</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="sponsor_name" class="form-label">Sponsor Name</label>
                            <input type="text" id="sponsor_name" name="sponsor_name" class="form-control" placeholder="Enter sponsor's full name" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="sponsor_relationship" class="form-label">Relationship to Sponsor</label>
                            <input type="text" id="sponsor_relationship" name="sponsor_relationship" class="form-control" placeholder="e.g., Parent, Employer" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="sponsor_contact" class="form-label">Sponsor Contact Number</label>
                            <input type="tel" id="sponsor_contact" name="sponsor_contact" class="form-control" placeholder="Enter sponsor's phone number" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="proof_of_funding" class="form-label">Proof of Funding</label>
                            <input type="file" id="proof_of_funding" name="proof_of_funding" class="form-control" required>
                        </div>
                    </div>
                </div>
                <!-- Step 7: Attachments -->
                <div class="wizard-step" data-step="7">
                    <h3 class="form-section-title">Required Attachments</h3>
                    <p>Please upload the following:</p>
                    <ul>
                        <li>Certified copies of academic certificates (O' and A' Levels)</li>
                        <li>Proof of funding</li>
                        <li>Passport-sized photo of applicant</li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="academic_certificates" class="form-label">Upload Academic Certificates</label>
                            <input type="file" id="academic_certificates" name="academic_certificates[]" class="form-control" multiple required>
                        </div>
                        <div class="col-lg-6">
                            <label for="passport_photo" class="form-label">Upload Passport Photo</label>
                            <input type="file" id="passport_photo" name="passport_photo" class="form-control" required>
                        </div>
                    </div>
                </div>
                <!-- Step 8: Personal Statement -->
                <div class="wizard-step" data-step="8">
                    <h3 class="form-section-title">Personal Statement</h3>
                    <div class="row">
                        <div class="col-12">
                            <label for="personal_statement" class="form-label">Why Do You Want to Join Blackfordby Agriculture College?</label>
                            <textarea id="personal_statement" name="personal_statement" class="form-control" rows="6" placeholder="Write your personal statement here..." required></textarea>
                        </div>
                    </div>
                </div>
                <!-- Step 9: Review & Submit -->
                <div class="wizard-step" data-step="9">
                    <h3 class="form-section-title">Review & Submit</h3>
                    <p>Please review all the information you have provided before submitting your application.</p>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="vs-btn btn-success">Submit Application</button>
                        </div>
                    </div>
                </div>






                <!-- Navigation Buttons -->
                <div class="wizard-navigation text-center mt-4">
                    <button type="button" class="btn btn-secondary" id="prevStep">Previous</button>
                    <button type="button" class="btn btn-primary" id="nextStep">Next</button>
                    <button type="submit" class="btn btn-success d-none" id="submitApplication">Submit</button>
                </div>

            </form>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // JavaScript to manage wizard functionality
        let currentStep = 1;
        const steps = document.querySelectorAll('.wizard-step');
        const stepTabs = document.querySelectorAll('.wizard-steps li');
        const prevBtn = document.getElementById('prevStep');
        const nextBtn = document.getElementById('nextStep');
        const submitBtn = document.getElementById('submitApplication');

        function showStep(step) {
            steps.forEach((s, index) => {
                s.classList.toggle('active', index + 1 === step);
            });
            stepTabs.forEach((tab, index) => {
                tab.classList.toggle('active', index + 1 === step);
            });
            prevBtn.disabled = step === 1;
            nextBtn.classList.toggle('d-none', step === steps.length); // Hide "Next" on the last step
            submitBtn.classList.toggle('d-none', step !== steps.length); // Show "Submit" on the last step
        }

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentStep < steps.length) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Initialize the wizard
        showStep(currentStep);

    </script>
@endpush
