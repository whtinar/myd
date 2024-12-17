<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Contact US - MyD Group LLC">
    <meta name="description" content="To fulfill the cleaning, sanitation, disinfection, and maintenance needs of our clients using eco-friendly products. We aim for service excellence">
    <meta name="keywords" content="Multiple Services, Services Clean, Deep Clean, NJ, Deep Clean New Jersey">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="5 days">
    <meta name="author" content="Kelly Torres">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Futura+MD:wght@400;700&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
</head>
<body>

<?php
include_once 'include/head.php';
?>

<div class="container mission-section">
    <h4 class="text-center section-title">CONTACT US</h4>
</div>

<!-- Contact Form Section -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="service-title">BOOK A CLEANING APPOINTMENT</h2>
        </div>
    </div>
    <form action="submit_contact.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-10 col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control form-control-sm" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control form-control-sm" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="zonas" class="form-label">Service Area</label>
                        <select class="form-control form-control-sm" id="zonas" name="zonas" required>
                            <option value="">---Select One---</option>
                            <option value="1">New York - Manhattan</option>
                            <option value="2">New York - Queens</option>
                            <option value="3">New York - Bronx</option>
                            <option value="4">New York - Brooklyn</option>
                            <option value="5">New Jersey - Jersey City</option>
                            <option value="6">New Jersey - Hoboken</option>
                            <option value="7">New Jersey - Weehawken</option>
                            <option value="8">New Jersey - Union City</option>
                            <option value="9">New Jersey - West New York</option>
                            <option value="10">New Jersey - Guttenberg</option>
                            <option value="11">New Jersey - Woodcliff</option>
                            <option value="12">New Jersey - North Bergen</option>
                            <option value="13">New Jersey - Fairview</option>
                            <option value="14">New Jersey - Cliffside Park</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Additional Information</label>
                    <textarea class="form-control form-control-sm" id="message" name="message" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-7">
                <hr>
                <h4 class="service-title mt-5">TELL US ABOUT YOUR HOME</h4>
            </div>
            <div class="col-md-7">
                <div class="row g-3">
                    <div class="col-4 col-sm-4 col-lg-2">
                        <small>Bedrooms</small>
                        <input type="number" class="form-control form-control-sm" value="0" min="0">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-2">
                        <small>Bathrooms</small>
                        <input type="number" class="form-control form-control-sm" value="0" min="0">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-2">
                        <small>People</small>
                        <input type="number" class="form-control form-control-sm" value="0" min="0">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-2">
                        <small>Pets</small>
                        <input type="number" class="form-control form-control-sm" value="0" min="0">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-2">
                        <small>Square Footage</small>
                        <input type="number" class="form-control form-control-sm" value="0" min="0">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <hr>
                <h2 class="service-title mt-5">WHAT TYPE OF CLEANING WOULD YOU LIKE?</h2>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                One-Time
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Weekly
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Bi-weekly
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Monthly
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <hr>
                <h2 class="service-title mt-5">SELECT A CLEANING PACKAGE</h2>
            </div>
            <div class="col-md-7">
                <div class="row click1">
                    <ul class="nav nav-pills mb-3" id="onetime-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active py-1 px-2" id="onetime-home-tab" data-bs-toggle="pill" data-bs-target="#onetime-home" type="button" role="tab" aria-controls="onetime-home" aria-selected="true">Design with Time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-1 px-2" id="onetime-profile-tab" data-bs-toggle="pill" data-bs-target="#onetime-profile" type="button" role="tab" aria-controls="onetime-profile" aria-selected="false">Deep Clean</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-1 px-2" id="onetime-contact-tab" data-bs-toggle="pill" data-bs-target="#onetime-contact" type="button" role="tab" aria-controls="onetime-contact" aria-selected="false">Move In/Move Out</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="onetime-tabContent">
                        <div class="tab-pane fade show active" id="onetime-home" role="tabpanel" aria-labelledby="onetime-home-tab">Our Design with Time Cleaning Package is ideal for the homeowner wanting a one-time clean or as-needed services. This cleaning package offers a fixed rate based on the amount of time you would like your cleaning team servicing your home. Our Design with Time Package ranges from 2 to 5 hours. The two maids assigned to your home will tackle your cleaning needs in order of importance, as prioritized by you. We will do our best to complete your list within the time you have purchased.</div>
                        <div class="tab-pane fade" id="onetime-profile" role="tabpanel" aria-labelledby="onetime-profile-tab">Our Deep Cleaning Package is the most thorough cleaning service. The most significant difference between the Deep Cleaning Package and our other cleaning packages is the amount of time and detail we spend cleaning what we refer to as your vertical surfaces. Vertical surfaces include baseboards, trim work, interior windows, blinds, exterior cabinets/drawers, light fixtures, and doors.</div>
                        <div class="tab-pane fade" id="onetime-contact" role="tabpanel" aria-labelledby="onetime-contact-tab">Our Empty Home Move In/Out Cleaning Package is perfect for the homeowner who needs a vacant home, apartment, or condo cleaned. This package will help ensure your home is move-in ready! To ensure the highest quality of service, personal belongings must be removed prior to your cleaning.</div>
                    </div>
                </div>
                <div class="row click2">
                    <ul class="nav nav-pills mb-3" id="weekly-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active py-1 px-2" id="weekly-home-tab" data-bs-toggle="pill" data-bs-target="#weekly-home" type="button" role="tab" aria-controls="weekly-home" aria-selected="true">Premium Weekly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-1 px-2" id="weekly-profile-tab" data-bs-toggle="pill" data-bs-target="#weekly-profile" type="button" role="tab" aria-controls="weekly-profile" aria-selected="false">Alternating Weekly</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="weekly-tabContent">
                        <div class="tab-pane fade show active" id="weekly-home" role="tabpanel" aria-labelledby="weekly-home-tab">The Premium Maintenance Cleaning package offers thorough cleaning service for customers that desire a home cleaning on a regular basis. To maintain the standard on cleanliness, Two Maids will clean vertical surfaces such as windows, doors, and baseboards in a rotation each cleaning throughout the life of the recurrence. It's best to start services with a Deep Clean to tackle any build-up and ensure all vertical surfaces are thoroughly cleaning on the first visit.</div>
                        <div class="tab-pane fade" id="weekly-profile" role="tabpanel" aria-labelledby="weekly-profile-tab">With the Alternating Cleaning Package we are able to alternate your cleaning services between our Premium and Touch-Up cleaning services. This specific cleaning package is best suited for the homeowner who does not require detailed cleaning on a regular basis, but still wishes to receive high quality house cleaning once a week, or every other week.</div>
                    </div>
                </div>
                <div class="row click3">
                    <ul class="nav nav-pills mb-3" id="b-weekly-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active py-1 px-2" id="b-weekly-home-tab" data-bs-toggle="pill" data-bs-target="#b-weekly-home" type="button" role="tab" aria-controls="b-weekly-home" aria-selected="true">Premium Biweekly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-1 px-2" id="b-weekly-profile-tab" data-bs-toggle="pill" data-bs-target="#b-weekly-profile" type="button" role="tab" aria-controls="b-weekly-profile" aria-selected="false">Alternating Biweekly</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="b-weekly-tabContent">
                        <div class="tab-pane fade show active" id="b-weekly-home" role="tabpanel" aria-labelledby="b-weekly-home-tab">The Premium Maintenance Cleaning package offers thorough cleaning service for customers that desire a home cleaning on a regular basis. To maintain the standard on cleanliness, Two Maids will clean vertical surfaces such as windows, doors, and baseboards in a rotation each cleaning throughout the life of the recurrence. It's best to start services with a Deep Clean to tackle any build-up and ensure all vertical surfaces are thoroughly cleaning on the first visit.</div>
                        <div class="tab-pane fade" id="b-weekly-profile" role="tabpanel" aria-labelledby="b-weekly-profile-tab">With the Alternating Cleaning Package we are able to alternate your cleaning services between our Premium and Touch-Up cleaning services. This specific cleaning package is best suited for the homeowner who does not require detailed cleaning on a regular basis, but still wishes to receive high quality house cleaning once a week, or every other week.</div>
                    </div>
                </div>
                <div class="row click4">
                    <ul class="nav nav-pills mb-3" id="monthly-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active py-1 px-2" id="monthly-home-tab" data-bs-toggle="pill" data-bs-target="#monthly-home" type="button" role="tab" aria-controls="monthly-home" aria-selected="true">Premium Monthly</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="monthly-tabContent">
                        <div class="tab-pane fade show active" id="monthly-home" role="tabpanel" aria-labelledby="monthly-home-tab">The Premium Maintenance Cleaning package offers thorough cleaning service for customers that desire a home cleaning on a regular basis. To maintain the standard on cleanliness, Two Maids will clean vertical surfaces such as windows, doors, and baseboards in a rotation each cleaning throughout the life of the recurrence. It's best to start services with a Deep Clean to tackle any build-up and ensure all vertical surfaces are thoroughly cleaning on the first visit.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <hr>
            </div>
            <div class="col-md-7">
                <div class="row align-items-center justify-content-start g-3">
                    <div class="col-auto">
                        <span class="fs-5">$.</span>
                    </div>
                    <div class="col-auto ms-auto">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
include_once 'include/footer.php';
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
    // Ocultar todos los botones al inicio
    $('.click1, .click2, .click3, .click4').hide();

    $(document).ready(function () {
        $('.click1, .click2, .click3, .click4').hide();

        $('input[name="flexRadioDefault"]').on('change', function() {
            $('.click1, .click2, .click3, .click4').hide();
            $(`.click${$(this).attr('id').slice(-1)}`).show();
        });
    });
</script>