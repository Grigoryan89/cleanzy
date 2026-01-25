
<br>
<section class="contact_section" style="padding-bottom: 15px; padding-top: 15px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                <h2 class="custom_heading">{{__('app.contact')}}</h2>
                <form action="{{route('contact.store')}}" method="POST">
                    @method('POST') @csrf

{{--                    <div>--}}
{{--                        <label for="title">Title</label>--}}
{{--                        <input type="text" id="title" name="title" value="{{ old('title') }}">--}}
{{--                        @error('title')--}}
{{--                        --}}{{-- Loop through and display error messages for the 'title' field --}}
{{--                        <span style="color: red;">{{ $message }}</span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}


                    <div>
                        <input type="text" class="{{ $errors->has('cont_name') ? 'is-invalid' : '' }}" name="cont_name"
                               value="{{ old('cont_name') }}" placeholder="{{__('app.about_contact.name')}}" required  oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" >
                    </div>
                    <div>
                        <input type="email" class="{{ $errors->has('cont_email') ? 'is-invalid' : '' }}" name="cont_email"
                               value="{{ old('cont_email') }}" placeholder="{{__('app.about_contact.email')}}"  required oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" />
                    </div>
                    <div>
                        <input type="text" class="{{ $errors->has('cont_phone') ? 'is-invalid' : '' }}" name="cont_phone"
                               value="{{ old('cont_phone') }}" placeholder="{{__('app.about_contact.phone')}} 033-00-00-00"
                               oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')"  onchange="try{setCustomValidity('')}catch(e){};"  required/>
                    </div>
                    <div>
                        <input type="text" name="cont_message" value="{{ old('cont_message') }}" class="message-box"
                               placeholder="{{__('app.about_contact.message')}}"   oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" required/>
                    </div>
                    <div class="d-flex  mt-4 ">
                        <button type="submit">
                            {{__('app.about_contact.send')}}
                        </button>
                    </div>
                </form>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</section>
<br>
