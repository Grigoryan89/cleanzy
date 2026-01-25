<style>
    iframe {
        width: 100%;      /* Ensures it takes the full width of its container */
        height: 100%;     /* Works with aspect-ratio to set height */
        aspect-ratio: 16 / 9; /* Sets the proportional relationship (width / height) */
    }

    </style>
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
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <iframe width="640" height="360" frameborder="0"  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48778.24873935311!2d44.506698040039055!3d40.17255623903372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sam!4v1769346686450!5m2!1sen!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                </div>
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
