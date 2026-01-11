
<br>
<section class="contact_section" style="padding-bottom: 15px; padding-top: 15px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                <h2 class="custom_heading">{{__('app.contact')}}</h2>
                <form action="{{route('contact.store')}}" method="post">
                    @method('POST') @csrf
                    <div>
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                               value="{{ old('name') }}" placeholder="{{__('app.about_contact.name')}}" required  oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" >
                    </div>
                    <div>
                        <input type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="{{__('app.about_contact.email')}}"  required oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" />
                    </div>
                    <div>
                        <input type="text" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                               value="{{ old('phone') }}" placeholder="{{__('app.about_contact.phone')}} 033-00-00-00"
                               oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')"  onchange="try{setCustomValidity('')}catch(e){};"  required/>
                    </div>
                    <div>
                        <input type="text" name="message" value="{{ old('message') }}" class="message-box"
                               placeholder="{{__('app.about_contact.message')}}"   oninvalid="this.setCustomValidity( '{{__("app.required.contact")}} ')" onchange="try{setCustomValidity('')}catch(e){};" required/>
                    </div>
                    <div class="d-flex  mt-4 ">
                        <button type="submit">
                            {{__('app.about_contact.send')}}
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<br>
