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
        <section>Objectives:  </section>
        <section>Projects</section>
        <section>Soecial Qualification</section>
       <section class="py-3">
           @include('front.sections.employment-history')
       </section>
        <section>
            @include('front.sections.academic-qualification')
        </section>
        <section>Awards/Achievements: </section>
        <section>
            @include('front.sections.training-summary')
        </section>
        <section>
            @include('front.sections.languages')
        </section>
        <section>Volunteer Experiences:  </section>
        <section>Personal Details:</section>
        <section>Reference:</section>

    </div>

    @include('front.includes.script')
</body>
</html>