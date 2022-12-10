@extends("layout.app_main")
@section("content")
    <div class="content">
        <div class="content_product">
            @include(".product.component.heder")
            <div class="container">
                <div class="title">
                    <h2>Корисні матеріали по Hator Hypergang EVO</h2>
                </div>
                <div class="cardList">
                    <div class="card card_useful">
                        <div class="useful">
                            <div class="question">
                                <p>Відгук корисний?</p>
                            </div>
                            <div class="hr">

                            </div>
                            <div class="or">
                                <p class="green">Так <span>0</span></p>
                                <p class="red">Ні<span>0</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="container">
                                <h3>Обзор на Hator Hypergang HTA-810</h3>
                            </div>
                            <p><span>огляди</span>https://www.overclockers.ua/peripheral/hator-hypergang/</p>
                            <em class="discuss"> + Обговорити</em>
                        </div>
                    </div>
                    <div class="button">
                        <button>Додати посилання</button>
                    </div>
                </div>
            </div>
        </div>
        @include("product.component.parameters")
    </div>
@stop
