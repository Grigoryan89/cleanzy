@extends('layouts.app')
@section('content')

    <x-navbar/>
    <style>
        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .content {
            padding-right: 500px;
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
            max-width: 90%;
        }
        .image-container img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
        }
        .text-container {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            max-width: 200px;
        }
        .info-container {
            background-color: white;
            color: black;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
            text-align: left;
        }
        @media (min-width: 768px) {
            .section {
                flex-direction: row;
                justify-content: space-around;
                padding: 50px;
            }

            .content {
                flex-direction: row;
                text-align: left;
            }

            .text-container {
                margin-left: 20px;
            }
        }
    </style>
    <section class="do_section layout_padding  service-home">
        <div class="section">
            <div class="content">
                <div class="image-container">
                    <img src="images/service_1.png" alt="Cleaning Service">
                </div>
                <div class="text-container">
                    ՏԱՆ ԽՈՐԸ ՍԵԶՈՆԱՅԻՆ ՄԱՔՐՈՒԹՅՈՒՆ
                </div>
            </div>
        </div>

        <div class="info-container">
            <p>1. Մեր ծառայությունները ներառում են`</p>
            <ul>
                <li>Տան խոր մաքրություն</li>
                <li>Գորգերի և կահույքի խնամք</li>
                <li>Խոհանոցի և լոգասենյակի հատուկ մաքրում</li>
                <li>Ապակիների մաքրություն</li>
            </ul>
        </div>
        <div class="info-container">
            <p>2. Մեր նպատակն է ապահովել բարձրորակ մաքրություն ձեր տանը:</p>
            <ul>
                <li>Արագ և որակյալ սպասարկում</li>
                <li>Բնապահպանական մաքրման նյութերի կիրառում</li>
                <li>Հարմար գներ</li>
            </ul>
        </div>
    </section>

@endsection
