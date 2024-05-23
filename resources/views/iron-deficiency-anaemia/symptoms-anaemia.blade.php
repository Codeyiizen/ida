<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('iron-deficiency-anaemia') }}">Iron
                                    Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Symptoms of Anaemia</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-5 pb-5">Sign and Symptoms of iron</h1>
                    <br />
                    <div class="sign-symptoms-container mx-auto mb-5">
                        <ul class="list-unstyled list-sign-symptoms py-5">
                            <li><a class="hover-styled" href="{{ route ('dizziness-tiredness') }}">Dizziness and Tiredness</a></li>
                            <li><a class="hover-styled" href="{{ route ('unusual-heartbeat') }}">Unusual Heartbeat</a></li>
                            <li><a class="hover-styled" href="{{ route ('shortness-breath') }}">Shortness of breath</a></li>
                            <li><a class="hover-styled" href="{{ route ('inability-concentrate') }}">Inability to concentrate</a></li>
                            <li><a class="hover-styled" href="{{ route ('lowered-resistance-infections') }}">Lowered resistance to infections</a></li>
                            <li><a class="hover-styled" href="{{ route ('loss-appetite') }}">Loss of appetite</a></li>
                            <li><a class="hover-styled" href="{{ route ('whiteness-inner-portion-eyelid') }}">Whiteness in the inner portion of the eyelid</a></li>
                            <li><a class="hover-styled" href="{{ route ('brittle-nail') }}">Brittle nail (spoon shaped nail) </a></li>
                            <li><a class="hover-styled" href="{{ route ('angular-stomatitis') }}">Angular stomatitis </a></li>
                            <li><a class="hover-styled" href="{{ route ('fatigue') }}">Fatigue </a></li>
                            <li><a class="hover-styled" href="{{ route ('whiteness-nails-palms') }}">Whiteness in nails and palms</a></li>
                            <li><a class="hover-styled" href="{{ route ('headaches') }}">Headaches</a></li>
                        </ul>
                    </div>                    
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>


    
        
            
                
                    
                      
                            
                                
                                    
                                        
                                            