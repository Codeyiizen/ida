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
                            <li class="breadcrumb-item active" aria-current="page">Locally available iron and vitamin C
                                rich food</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Locally available iron and vitamin C rich food</h1>
                    <p>The following food items are included in diet meal plan for people suffering from iron
                        deficiency anemia:</p>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Dark green, leafy vegetables such as broccoli, spinach, fenugreek (methi), amaranth
                            leaves and lettuce have high iron content. </li>
                        <li>Dried fruits such as raisins, almond, etc. </li>
                        <li>Meat: Red meat, lamb, pork. </li>
                        <li>Eggs </li>
                        <li>Foods rich in Vitamin C help in absorption of iron such as cauliflower, tomatoes, apple,
                            and oranges.</li>
                    </ul>
                    <h4>Cereals</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Whole Wheat </li>
                        <li>Rice </li>
                        <li>Bajra </li>
                    </ul>
                    <h4>Pulses and Legumes</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Moong Dal</li>
                        <li>Masoor dal</li>
                        <li>Urad dal</li>
                        <li>Rajma</li>
                        <li>Soya been</li>
                        <li>Kabuli chana</li>
                        <li>Moth been</li>
                    </ul>
                    <h4>Green Leafy Vegetable</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Coriander Leaves</li>
                        <li>Fenugreek Leaves</li>
                        <li>Radish Leaves</li>
                        <li>Mint Leaves</li>
                        <li>Spinach</li>
                        <li>Mustard Leaves</li>
                        <li>Onion Stalk</li>
                    </ul>
                    <h4>Other Vegetables</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Cucumber</li>
                        <li>Drumstick</li>
                        <li>Karonda</li>
                        <li>Broccoli</li>
                        <li>Beans</li>
                    </ul>
                    <h4>Roots and Tubers</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Beet root</li>
                        <li>Carrot</li>
                    </ul>
                    <h4>Fruits</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Guava</li>
                        <li>Amla</li>
                        <li>Lemon</li>
                        <li>Orange</li>
                        <li>Papaya</li>
                        <li>Tomato</li>
                        <li>kinnow</li>
                        <li>Mango</li>
                        <li>Watermelon</li>
                        <li>Pomegranate</li>
                        <li>Pear</li>
                    </ul>
                    <h4>Oil seeds</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Sesame seeds</li>
                    </ul>
                    <h4>Dry fruits</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Dates
                        <li>Coconut
                        <li>Cashew nut</li>
                        <li>Almond</li>
                        <li>Groundnut</li>
                        <li>Resins</li>
                        <li>Water melon seeds</li>
                    </ul>
                    <h4>Jaggery</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Jaggery</li>
                        <li>Honey</li>
                    </ul>
                    <h4>Non-vegetarian</h4>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>Egg</li>
                        <li>Meat</li>
                        <li> Fish</li>
                    </ul>

                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>