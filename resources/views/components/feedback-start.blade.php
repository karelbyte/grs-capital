<div id="email" class="section-block" style="background-image: url({{asset('img/dudas_i.png')}});  background-repeat: no-repeat;
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
            <div  class="col-md-6 col-sm-6 col-12">
                <div class="feedback-box">
                    <h5>{!!trans('messages.feedback-send-caption')!!}</h5>
                    <form method="post" action="/email-to-client" class="feedback-form" autocomplete="off">
                        @csrf
                        <div class="row mt-10">
                            <div class="col-md-6 col-12">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="{!!trans('messages.feedback-send-name')!!}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" name="email" value="{{old('email')}}" placeholder="{!!trans('messages.feedback-send-email')!!}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea name="message"  value="{{old('message')}}" placeholder="{!!trans('messages.feedback-send-msj')!!}"></textarea>
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="text" name="url" value="/" hidden>
                        </div>
                        <button type="submit">{!!trans('messages.feedback-send-emit')!!}</button>
                    </form>
                </div>
                @if (session('msj'))
                    <div class="alert alert-success">
                        {!!trans('messages.send-msj-success')!!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
