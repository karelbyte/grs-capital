<div class="section-block" style="background-image: url({{asset('img/dudas_i.png')}});  background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pr-30-md">
                    <div class="section-heading">
                        <h4 style="color: rgb(52,50,45);">{!!trans('messages.feedback-question')!!}</h4>
                        <div class="section-heading-line-left"></div>
                    </div>
                    <div class="text-content-big mt-25">
                        <p style="color:black; text-align: justify;">{!!trans('messages.feedback-p1')!!}</p>
                        <p style="color:black; text-align: justify;">{!!trans('messages.feedback-p2')!!}</p>
                        <p style="color:black;">{!!trans('messages.feedback-p3')!!}</p>
                        <p style="color:#312511">{!!trans('messages.feedback-p4')!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="feedback-box">
                    <h5>{!!trans('messages.feedback-send-caption')!!}</h5>
                    <form method="post" action="#" class="feedback-form" autocomplete="off">
                        <div class="row mt-10">
                            <div class="col-md-6 col-12">
                                <input type="text" name="name" placeholder="{!!trans('messages.feedback-send-name')!!}">
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" name="email" placeholder="{!!trans('messages.feedback-send-email')!!}">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="{!!trans('messages.feedback-send-msj')!!}"></textarea>
                            </div>
                        </div>
                        <button type="submit">{!!trans('messages.feedback-send-emit')!!}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
