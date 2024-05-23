<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container clearfix">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route ('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Know about Iron Deficiency Anaemia
                    </li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">Know about Anaemia</h1>
            <ul class="list-unstyled list-unordered mb-3">
                <li>An (without) -aemia (blood).(Shortage of iron in the body)</li>
                <li>Anaemia can be defined as a reduction in the <a href="" data-toggle="modal"
                        data-target="#hemoglobinModal">hemoglobin</a> level, or <a href="" data-toggle="modal"
                        data-target="#rbcModal">red
                        blood cell counts</a>.</li>
                <li>A condition of the body caused due to the deficiency of essential nutrients like
                    iron, protein, vitamin B12, folic acid etc. Although there are various forms of
                    anemia, the most prevalent type is iron-deficiency anemia.
                </li>
            </ul>
            <h4>Iron Deficiency Anaemia</h4>
            <img class="img-fluid alignright" src="../assets/images/iron-deficiency-anaemia.gif"
                alt="Iron Deficiency Anaemia">
            <ul class="list-unstyled list-unordered mb-3">
                <li>Iron deficiency anemia occurs when the body does not have enough iron to produce
                    sufficient hemoglobin. </li>
                <li>This can happen due to a variety of reasons, including inadequate dietary
                    intake,
                    malabsorption of iron in the digestive tract, increased blood loss (due to
                    menstruation or gastrointestinal bleeding), or increased iron requirements
                    (during
                    pregnancy, breastfeeding or growth spurts).</li>
            </ul>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
<!-- Hemoglobin Modal -->
<div class="modal fade" id="hemoglobinModal" tabindex="-1" role="dialog" aria-labelledby="hemoglobinModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <p><strong>Hemoglobin</strong> is a protein found in RBC that gives blood its red colour also
                    responsible for
                    transporting oxygen throughout the body and its dysfunction can lead to iron deficiency anaemia.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Red blood cells Modal -->
<div class="modal fade" id="rbcModal" tabindex="-1" role="dialog" aria-labelledby="rbcModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <p><strong>RBCs</strong> play a critical role in iron deficiency anemia (IDA) because they are the
                    primary carriers
                    of oxygen in the body. Iron is an essential component of hemoglobin, a protein found in RBCs
                    that binds with oxygen to transport it throughout the body. When there is insufficient iron in
                    the body, the production of hemoglobin is reduced, and the RBCs become smaller and paler,
                    leading to anemia.
                </p>
                <img class="img-fluid" src="../assets/images/iron-deficiency-anaemia/know-iron-deficiency-anaemia.gif"
                    alt="RBCs">
            </div>
        </div>
    </div>
</div>
</body>

</html>