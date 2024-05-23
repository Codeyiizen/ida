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
                            <li class="breadcrumb-item active" aria-current="page">Foods to Avoid</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Foods to Avoid</h1>
                    <h4>Alcohol</h4>
                    <p>Alcohol can create adverse effects and worsen anemia symptoms in people who consume it
                        regularly and also seems to inhibit iron absorption.</p>
                    <h4>Coffee</h4>
                    <p>Coffee can also keep you from absorbing iron into your system. Avoid it within an hour
                        either way of an iron supplement or iron rich meal.</p>
                    <h4>Calcium rich Foods</h4>
                    <p> Calcium interferes with the absorption of iron in the body thereby worsening
                        the condition. Avoid eating dairy products two hours before and after you consume iron-rich
                        foods.</p>
                    <h4> Gluten-containing foods</h4>
                    <p> Gluten, in some people, damages the intestinal wall preventing absorption
                        of iron and folic acid, both of which are required for the production of red blood cells (RBCs).
                        Gluten is mainly found in pasta, wheat products, barley, rye and oats.</p>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li> Avoid eating dairy products two hours before and after you consume iron-rich foods.
                        <li> Reduce sugar consumption.</li>
                    </ul>
                </div>
            </section>
        </div>
         <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>