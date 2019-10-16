    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.1.0/dist/lazyload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script type="text/javascript">
        var slider = tns({
            container: '.my-slider',
            items: 4,
            slideBy: 1,
            nav: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                680: {
                    items: 2
                },
                980: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    </script>
</body>
</html>