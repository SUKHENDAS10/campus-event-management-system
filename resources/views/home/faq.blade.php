<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Management System - FAQ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
             padding-top: 65px;
        }
        .faq-header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }
        .faq-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .faq-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        .accordion-button {
            font-weight: 600;
            color: #333;
        }
        .accordion-button:not(.collapsed) {
            background-color: #e7f1ff;
            color: #0056b3;
        }
        .accordion-body {
            background-color: #fff;
            border-left: 3px solid #007bff;
            padding-left: 2rem;
        }
        .container {
            max-width: 800px;
        }
        
    </style>
</head>
<body>
    @include('home.navbar');
    <!-- Header Section -->
    <header class="faq-header">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about our Campus Event Management System</p>
        </div>
    </header>

    <!-- FAQ Section -->
    <section class="faq-content">
        <div class="container">
            <div class="accordion" id="faqAccordion">
                <!-- Question 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I register for an event?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            To register for an event, log in to your account, navigate to the "Events" section, select the event you wish to attend, and click the "Register" button. Follow the prompts to complete your registration.
                        </div>
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can I cancel my event registration?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you can cancel your registration up to 24 hours before the event starts. Go to "My Events" in your account, select the event, and click "Cancel Registration." Refunds, if applicable, will be processed per the event's policy.
                        </div>
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I create an event as a student organization?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Student organizations can create events by logging into the system with their organization account. Navigate to "Create Event," fill out the event details, and submit for approval. Once approved by the campus administration, the event will be listed.
                        </div>
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What should I do if I encounter technical issues?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            If you experience technical issues, please contact our support team via the "Help" section or email support@campusevents.edu. Provide a detailed description of the issue, and we’ll assist you promptly.
                        </div>
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Are there any fees for attending events?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Most campus events are free for students. However, some events may have a small fee, which will be clearly indicated on the event page. Check the event details for specific information.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
         @include('home.footer');
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>