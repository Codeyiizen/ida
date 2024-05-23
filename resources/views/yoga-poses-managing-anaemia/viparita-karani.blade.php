<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('yoga-poses-managing-anaemia') }}">Yoga
                                    Poses for Managing Iron Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Viparita Karani Yoga</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Viparita Karani Yoga</h1>
                    <h4>Step 1</h4>
                    <p>Start with the supine position, lying on your back in a relaxed way. Let the hands rest on the
                        floor next to the body and breathe normally.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/viparita-karani/image1.png"
                            alt="Viparita Karani Yoga">
                    </figure>
                    <h4>Step 2</h4>
                    <p>Incline your legs slightly against the wall.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/viparita-karani/image2.png"
                            alt="Viparita Karani Yoga">
                    </figure>
                    <h4>Step 3</h4>
                    <p>Raise your legs slowly upward and bring it to 90° angle while inhaling.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/viparita-karani/image3.png"
                            alt="Viparita Karani Yoga">
                    </figure>
                    <h4>Step 4</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>Lift the bottom of your head away from the back of your neck and relax your throat. Keep
                            your legs somewhat firm to hold them straight up. Maintain a slight firmness in your legs to
                            keep them upright. </li>
                        <li>Release the heads of the thigh bones and allow the weight of your belly to sink deeply into
                            your torso, moving toward the back of the pelvis.</li>
                    </ul>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/viparita-karani/image4.png"
                            alt="Viparita Karani Yoga">
                    </figure>
                    <h4>Step 5</h4>
                    <p>Keep breathing deeply and remain in this position according to your comfort. Do for 30-60 seconds
                        in the beginning. For health benefits 3-5 minutes every day is good enough.</p>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>