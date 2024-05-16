<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omenka App</title>
    <meta name="theme-color" content="#0c453f">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href={{ asset('assets/styles/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/styles/responsive.css') }}>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('section.navbar')
    @yield('content')
    @include('section.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}

    {{-- <script>
        AOS.init();
      </script> --}}
    <script>
        const swiperEl = document.querySelector('swiper-container')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>
    <script>
        const swiperEl = document.querySelector('.swiper-200')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>
    <script>
        // count up
        const counters = document.querySelectorAll(".counter");

        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.7,
        };

        const handleCounterAnimation = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const start = 0;
                    const end = parseInt(target.innerText);
                    let current = start;

                    const increment = Math.floor(end / 100);

                    const updateCounter = () => {
                        if (current < end) {
                            current += increment;
                            target.innerText = current;
                            requestAnimationFrame(updateCounter);
                        } else {
                            target.innerText = end;
                        }
                    };

                    updateCounter();
                    observer.unobserve(target);
                }
            });
        };

        const observer = new IntersectionObserver(handleCounterAnimation, options);

        counters.forEach((counter) => {
            observer.observe(counter);
        });
    </script>
</body>

</html>
