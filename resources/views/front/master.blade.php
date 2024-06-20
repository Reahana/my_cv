<!doctype html>
<html lang="en">
<head>
    @include('front.includes.meta')
    @include('front.includes.style')
    <title>CV</title>
</head>
<body class="p-2">

    <div class="wrapper bg-white p-5">

        <section>AMANDA REAHANA GOMES</section>
        <section>
            @include('front.sections.objectives')
        </section>
        <section>
            @include('front.sections.projects')
        </section>
        <section>
            @include('front.sections.special-qualification')
        </section>
       <section class="py-3">
           @include('front.sections.employment-history')
       </section>
        <section>
            @include('front.sections.academic-qualification')
        </section>
        <section>
            @include('front.sections.awards')
        </section>
        <section>
            @include('front.sections.training-summary')
        </section>
        <section>
            @include('front.sections.languages')
        </section>
        <section>
            @include('front.sections.volunteer-experiences')
        </section>
        <section>Personal Details:</section>
        <section>
            @include('front.sections.reference')
        </section>

    </div>

    @include('front.includes.script')
</body>
</html>