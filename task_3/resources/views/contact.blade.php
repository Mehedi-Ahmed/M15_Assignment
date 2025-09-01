<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        .form-label {
            color: #000000; /* Black font for labels */
            font-weight: 600; /* Make labels a bit bolder */
        }
        .form-control {
            background-color: #f8f9fa; /* Very light background for inputs */
            color: #000000; /* Black text in inputs */
            border-color: #ced4da; /* Default Bootstrap input border */
            transition: all 0.3s ease; /* Smooth transition for focus effect */
        }
        .form-control:focus {
            background-color: #ffffff;
            color: #000000;
            border-color: #000000; /* Black border on focus */
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.2); /* Black shadow on focus */
            transform: translateY(-2px); /* Subtle lift animation on focus */
        }
        .form-control::placeholder {
            color: #6c757d; /* Dark grey placeholder */
        }
        .btn-dark {
            background-color: #212529; /* Dark button */
            border-color: #212529;
            color: #f8f9fa; /* Light text */
            transition: all 0.3s ease; /* Smooth transition for hover effect */
        }
        .btn-dark:hover {
            background-color: #000000; /* Even darker on hover */
            border-color: #000000;
            color: #ffffff;
            transform: scale(1.02); /* Slight scale on hover */
        }
        footer {
            padding: 20px 0;
            background-color: #212529;
            color: #adb5bd;
            border-top: 1px solid rgba(255, 255, 255, 0.125);
            width: 100%; /* Ensure footer spans full width */
            margin-top: auto; /* Push footer to the bottom */
        }
        .alert-danger {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
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
                Contact Us
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message here..." required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Send Message</button>
                </form>
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
