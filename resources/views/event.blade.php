@extends('layout.main')
@section('content')
    <div class="main-event">
        <div class="container-100">
            <div class="event-wrap">
                <div id="countdown">
                    <div><span id="days"></span>Days</div>
                    <div><span id="hours"></span>Hours</div>
                    <div><span id="minutes"></span>Minutes</div>
                    <div><span id="seconds"></span>Seconds</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="event">
                                    <img src={{ asset('assets/images/culture-explore.png') }} alt="">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="event">
                                    <img src={{ asset('assets/images/language-explore.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="event-title">25<sup>th</sup> Igbo Language and Storytelling Workshop</div>
                        <div class="event-date">25 september, 2024 in new york</div>
                        <div class="event-btns">
                            <a href="" class="btn-100">Register Now</a>
                            <a href="" class="btn-200"><i class="bi bi-telephone-fill"></i> Enquiries</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script>
        // script.js
        function countdownTimer(targetDate) {
            const countdown = document.getElementById('countdown');
            const daysSpan = document.getElementById('days');
            const hoursSpan = document.getElementById('hours');
            const minutesSpan = document.getElementById('minutes');
            const secondsSpan = document.getElementById('seconds');

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                daysSpan.textContent = days;
                hoursSpan.textContent = hours;
                minutesSpan.textContent = minutes;
                secondsSpan.textContent = seconds;

                if (distance < 0) {
                    clearInterval(interval);
                    countdown.textContent = "EXPIRED";
                }
            }

            const interval = setInterval(updateCountdown, 1000);
            updateCountdown();
        }

        // Set the target date and time
        const targetDate = new Date('2024-12-31T23:59:59').getTime();
        countdownTimer(targetDate);
    </script>
@endsection
