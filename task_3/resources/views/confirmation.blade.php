<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #212529; /* Dark background */
            color: #f8f9fa; /* Light text for body */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
        }
        .container {
            flex: 1;
            display: flex; /* Make container a flex item */
            align-items: center; /* Center card vertically within container */
            justify-content: center; /* Center card horizontally within container */
            padding: 20px 0;
            max-width: 600px; /* Constrain container width */
        }
        .card {
            background-color: #ffffff; /* White card background for contrast */
            color: #000000; /* Black text inside the card */
            border: 1px solid #dee2e6; /* Light grey border */
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Subtle shadow */

            /* Animation for fade-in */
            animation: fadeIn 1s ease-out forwards;
            opacity: 0; /* Start invisible for animation */
        }
        .card-header {
            background-color: #f8f9fa; /* Light header background */
            color: #212529; /* Dark text for header */
            border-bottom: 1px solid #dee2e6;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .alert-success {
            background-color: #28a745; /* Green for success */
            color: #fff;
            border-color: #28a745;
            animation: fadeIn 0.5s ease-out; /* Fade in alert */
        }
        .text-dark-contrast {
            color: #000000 !important; /* Explicitly black text */
        }
        .list-group-item {
            background-color: #f8f9fa; /* Light background for list items */
            color: #000000; /* Black text for list items */
            border-color: #e9ecef;
        }
        .btn-outline-dark {
            color: #212529; /* Dark text */
            border-color: #212529;
            transition: all 0.3s ease;
        }
        .btn-outline-dark:hover {
            background-color: #212529; /* Dark background on hover */
            color: #ffffff; /* White text on hover */
            transform: scale(1.02);
        }
        footer {
            padding: 20px 0;
            background-color: #212529;
            color: #adb5bd;
            border-top: 1px solid rgba(255, 255, 255, 0.125);
            width: 100%;
            margin-top: auto;
        }

        /* Keyframe for fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card w-100">
            <div class="card-header text-center">
                Submission Confirmation
            </div>
            <div class="card-body">
                @if(isset($successMessage))
                    <div class="alert alert-success fade show" role="alert">
                        {{ $successMessage }}
                    </div>
                @endif

                <h4 class="text-dark-contrast mb-3">Submitted Data:</h4>
                @if(isset($submittedData) && count($submittedData) > 0)
                    <ul class="list-group list-group-flush mb-4">
                        @foreach($submittedData as $key => $value)
                            <li class="list-group-item">
                                <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-secondary">No data found for this submission, or you accessed this page directly.</p>
                @endif

                <div class="mt-4 text-center">
                    <a href="{{ route('contact.form') }}" class="btn btn-outline-dark">Go back to the contact form</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <p class="mb-0">Developed by Mehedi Ahmed</p>
    </footer>

    <!-- Bootstrap JS CDN (Optional, for some components if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
