@extends('layouts.app')
@section('content')
    <x-navbar/>



    <!-- about section -->
    <style>
        /* Generic section styling */
        .section {
            width: 100%;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        /* Container for each section's content */
        .section-content {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
            align-items: center;
            justify-content: space-between;
        }

        /* Text and image blocks */
        .t-b,
        .image-block {
            flex: 1 1 400px; /* Grow/shrink with a minimum width of ~400px */
            margin: 10px;
        }

        .text-block-1 {
            height: 150px;
            background: white;
            padding: 40px;
        }
        .text-block-2 {
            height: 240px;
            background: white;
            padding: 37px;
        }
        .text-block-3 {
            height: 380px;
            background: white;
            padding: 26px;
        }
        .text-block-4 {
            height: 300px;
            background: white;
            padding: 26px;
        }

        .text-block h1,
        .text-block h2 {
            margin-bottom: 20px;
        }

        .text-block p {
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
            text-align: center;

        }

        .image-block {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-block img {
            max-width: 100%;
            height: auto;
        }


        /* Responsive adjustments (optional) */
        @media (max-width: 992px) {
            .text-block-1 {
                padding: 22px;
            }
            .text-block-2{
                height: 350px;
            }
            .text-block-3{
                height: 650px;
            }
            .text-block-4{
                height: 380px;
            }
            .section {
                padding: 20px 10px;
            }

            .text-block p {
                font-size: 14px;
            }
        }
        @media (max-width: 768px) {
            .section {
                padding: 20px 10px;
            }
            .text-block-3{
                height: 620px;
            }

            .text-block p {
                font-size: 14px;
            }
        }

    </style>
    <section class="about_section layout_padding ">

        <section class="section ">
            <div class="section-content">
                <div class="image-block">
                    <!-- Replace with your own image -->
                    {{--                <img src="" alt="Droplet Shape">--}}
                </div>
                <div class="t-b text-block-1">
                    <p>
                        Cleanzy Team-ը մատուցում է բնակելի և կոմերցիոն տարածքների մաքրության, ինչպես նաև քիմմաքրման
                        ծառայություններ:
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 2: Blue background, image + repeated ABOUT US text -->


        <!-- SECTION 3: White background, text left, image right -->
        <section class="section ">
            <div class="section-content">
                <div class="t-b text-block-2">
                    <p>
                        Cleanzy Team-ը ընկերությունը մատուցում է բնակելի և կոմերցիոն տարածքների մաքրման, ինչպես նաև
                        գորգերի և բազմոցների քիմմաքրման ծառայություններ:
                    </p>
                    <p>
                        Մեր առաքելությունն է դառնալ ձեր վստահելի և անփոխարինելի ընկերը մաքրման ծառայությունների
                        ոլորտում՝ ապահովելով գերազանց որակ և բացառիկ փորձառություն:
                    </p>
                </div>
                <div class="image-block">
                    <!-- Replace with your own image -->
                    <img src="{{asset('images/about.png')}}" alt="Droplet Shape">
                </div>
            </div>
        </section>

        <!-- SECTION 4: White background, image left, text right (VALUE) -->
        <section class="section ">
            <div class="section-content">
                <div class="image-block">
                    <!-- Replace with your own icon or image -->
                    <img src="{{asset('images/about-value.png')}}" alt="Icon or Swirl">
                </div>
                <div class="t-b text-block-3">
                    <h5>Մեր Սկզբունքները։</h5>
                    <p>
                        Թափանցիկ – Մենք գործում ենք բաց ու հստակ՝ առանց թաքնված պայմանների կամ անակնկալ վճարների։ Մեր
                        խոստումները համապատասխանում են իրականությանը։
                        <br>
                        Անհատական մոտեցում – Ամեն տարածք ունի իր յուրահատկությունները, և մենք հարմարեցնում ենք մեր
                        ծառայությունները՝ հաշվի առնելով ձեր պահանջներն ու նախընտրությունները։


                        Թիմային աշխատանք – Մեր մասնագետները համագործակցում են մեկ ընդհանուր նպատակի շուրջ՝ ապահովել անթերի
                        մաքրություն։ Մենք միասին աշխատում ենք, որպեսզի ձեր միջավայրը լինի կատարյալ մաքուր և հաճելի։


                        Արագ և ուղիղ կոմունիկացիա - Մենք պատասխանում ենք ձեր հարցերին արագ և ամբողջական՝ խնայելով ձեր
                        ժամանակը։
                    </p>
                </div>
            </div>
        </section>
        <!-- SECTION 5: White background, image left, text right (VALUE) -->
        <section class="section ">
            <div class="section-content">
                <div class="t-b text-block-4">
                    <h4>ԹԻՄ</h4>
                    <p>
                        Մեր մասնագետները ավելին են քան պարզապես ծառայություն մատուցողներ։ Նրանք մեր ընկերության դեմքն ու
                        սիրտն են: Թիմի յուրաքանչյուր անդամ անցնում է հատուկ ուսուցում՝ թե՛ տեխնիկական հմտությունների, թե՛
                        հաճախորդների հետ շփման համար:
                    </p>
                    <p>
                        Նրանք գործում են համախմբված թիմի պես՝ աջակցելով միմյանց՝ յուրաքանչյուր հաճախորդի համար ստեղծելով
                        անհատական լուծումներ:
                    </p>
                </div>
                <div class="image-block">
                    <!-- Replace with your own icon or image -->
                    <img src="{{asset('images/about-team.png')}}" alt="Icon or Swirl">
                </div>
            </div>
        </section>

    </section>

<!-- end about section -->

@endsection
