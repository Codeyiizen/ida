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
                            <li class="breadcrumb-item active" aria-current="page">Drug Instructions</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Drug Instructions</h1>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Do not consume iron supplements along with calcium supplements and antibiotics. It can be
                            consumed along with multivitamins such as, vitamin B and C. </li>
                        <li>It is good to consume iron tablets with fruit juices such as orange juice, lime juice etc.
                            for the better absorption.</li>
                    </ul>
                </div>
            </section>
        </div>
       <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>