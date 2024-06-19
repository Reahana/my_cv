<!doctype html>
<html lang="en">
<head>
    @include('front.includes.meta')
    @include('front.includes.style')
    <title>CV</title>
</head>
<body class="">

    <div class="wrapper bg-white ">

        <section>AMANDA REAHANA GOMES</section>
        <section>Objectives:  </section>
        <section>Projects</section>
        <section>Soecial Qualification</section>
       <section>
           @include('front.sections.employment-history')
       </section>
        <section>
            @include('front.sections.academic-qualification')
        </section>
        <section>Awards/Achievements: </section>
        <section>Training Summary:  </section>
        <section>Languages:</section>
        <section>Volunteer Experiences:  </section>
        <section>Personal Details:</section>
        <section>Reference:</section>

    </div>

    @include('front.includes.script')
</body>
</html>