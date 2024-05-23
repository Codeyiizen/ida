<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('disease-management-through-diet') }}">Disease management through diet</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Diet Tips for anaemia patient</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Diet Tips for anaemia patient</h1>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>First thing in the morning on an empty stomach-drink one or two glass of warm water with the
                            juice of lemon and two teaspoon honey (Honey is ideal for anaemia condition because of its
                            high % of iron, manganese and copper.)</li>
                        <li>Try to consume beet root juice, spinach juice or carrot juice on regular basis.</li>
                        <li>Fruits rich in Iron and Vit C -dates, apple, orange, papaya, black grapes, pomegranate,
                            melon, musk melon, guava, musambi. Please try to include 2 fresh fruits daily in diet.</li>
                        <li>Avoid-Fried, fast-foods, spices, starchy & refined sugar containing food.</li>
                        <li>Consume black sesame seeds (soaked for a few hours in warm water) and mixed with 1 cup of
                            warm milk with honey or Jaggery.</li>
                        <li>The anaemic patient must have 8 hours of undisturbed sleep and relaxation every day.</li>
                        <li>Avoid excessive worry and tension. Try to smile and be cheerful.</li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>