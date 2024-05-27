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
                    <h1 class="h2 mb-5 pb-5">@lang('symptoms-anaemia.sign')</h1>
                    <br />
                    <div class="sign-symptoms-container mx-auto mb-5">
                        <ul class="list-unstyled list-sign-symptoms py-5">
                            <li><a class="hover-styled" href="{{ route ('dizziness-tiredness') }}">@lang('symptoms-anaemia.Dizziness')</a></li>
                            <li><a class="hover-styled" href="{{ route ('unusual-heartbeat') }}">@lang('symptoms-anaemia.Unusual')</a></li>
                            <li><a class="hover-styled" href="{{ route ('shortness-breath') }}">@lang('symptoms-anaemia.Shortness')</a></li>
                            <li><a class="hover-styled" href="{{ route ('inability-concentrate') }}">@lang('symptoms-anaemia.Inability')</a></li>
                            <li><a class="hover-styled" href="{{ route ('lowered-resistance-infections') }}">@lang('symptoms-anaemia.lowered')</a></li>
                            <li><a class="hover-styled" href="{{ route ('loss-appetite') }}">@lang('symptoms-anaemia.loss')</a></li>
                            <li><a class="hover-styled" href="{{ route ('whiteness-inner-portion-eyelid') }}">@lang('symptoms-anaemia.whiteness')</a></li>
                            <li><a class="hover-styled" href="{{ route ('brittle-nail') }}">@lang('symptoms-anaemia.brittle')</a></li>
                            <li><a class="hover-styled" href="{{ route ('angular-stomatitis') }}">@lang('symptoms-anaemia.Angular') </a></li>
                            <li><a class="hover-styled" href="{{ route ('fatigue') }}">@lang('symptoms-anaemia.fatigue')</a></li>
                            <li><a class="hover-styled" href="{{ route ('whiteness-nails-palms') }}">@lang('symptoms-anaemia.white')</a></li>
                            <li><a class="hover-styled" href="{{ route ('headaches') }}">@lang('symptoms-anaemia.Headaches')</a></li>
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


    
        
            
                
                    
                      
                            
                                
                                    
                                        
                                            