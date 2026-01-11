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
    @media (max-width: 992px) {
        .text-block-1 {
            padding: 22px;
        }
        .text-block p {
            font-size: 14px;
        }
    }


</style>

<x-navbar/>

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
</section>

